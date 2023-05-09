
@extends('layouts.app')

@section('content')
<style>
    a.round3 {
  border: 10px solid red;
  border-color: 12px;
  padding: 5px;
}
    </style>
<div class="container">
    
    <div class="row justify-content-center">
       
                

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <br> <br>
                   <h2  style="text-align: center;">{{ __('You are logged in!') }}</h2>
                   <br> <br> <br> <br> <br> <br> 
                   <a href="/home"  ><h1 style="border: 2px  black; padding: 5px; border-radius: 12px; background-color:#AA77FF; color:white; text-align: center;">MAIN PAGE</h1></a> 
                   <a class="round3" href="/index" ><h1 style="border: 2px  black; padding: 5px; border-radius: 12px; background-color:#AA77FF; color:white; text-align: center;">HOME</h1></a>
                   <a href="/academics" ><h1 style="border: 2px  black; padding: 5px; border-radius: 12px; background-color:#AA77FF; color:white; text-align: center;">ACADEMICS</h1></a>
                   <a href="/profile" ><h1 style="border: 2px  black; padding: 5px; border-radius: 12px; background-color:#AA77FF; color:white; text-align: center;">PROFILE</h1></a>
 

   

    
      
   

     
       
    </div>
</div>
@endsection
