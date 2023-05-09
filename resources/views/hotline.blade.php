<!DOCTYPE html>
<html>
<head>
<title>FYP2</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<style>
    body, html {
      height: 100%;
      font-family: "Inconsolata", sans-serif;
    }
    
    .menu {
      display: none;
    }
    .collapsible {
      background-color: #9370db;
      color: black;
      cursor: pointer;
      padding: 18px;
      width: 100%;
      border: none;
      text-align: left;
      outline: none;
      font-size: 15px;
    }
    .content {
      padding: 0 18px;
      display: none;
      overflow: hidden;
      background-color: #e6e6fa;
    }
    .photo{
      background-color: white;
      margin-right: 100px;
      width:150px;
      height:150px;
    
    }
    .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
.txt {
  padding: 5px;
  border: 1px solid gray;
  margin: 0;
  background-color: #AA77FF;
}
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
img{
  width: 100%;
}
@media only screen and (max-width: 480px) {
  img {
    margin-top: 10%;
    width: 100%;
  }
}

    </style>
    </head>
    <body>
    <div class="w3-top">
  <div class="w3-row w3-padding w3-black">
  <div class="w3-col s3">
      <a href="/home" class="w3-button w3-block w3-black">MAIN PAGE</a>
    </div>
    <div class="w3-col s3">
      <a href="/index" class="w3-button w3-block w3-black">HOME</a>
    </div>
    <div class="w3-col s3">
      <a href="/academics" class="w3-button w3-block w3-black">ACADEMICS</a>
    </div>
    <div class="w3-col s3">
      <a href="/profile" class="w3-button w3-block w3-black">PROFILE</a>
    </div>
    
  </div>
</div>
<br> <br> 

<div class="row" style="background-color: #e6e6fa;">
<br><h1 style="text-align: center; background-color: #9370db;"><b>Hotline</b></h1><br><br>
@foreach($Hlist as $x)
  <div class="column">
<img src="{{ asset('imag/profile.png') }}" style="width:40%"> <br><b>Name:</b> {{$x['person_name']}}<br><b>Position: </b>{{$x['person_position']}}<br><b>Email:</b> {{$x['person_email']}}<br><b>Phone Number:</b> {{$x['person_phone']}}<br><b>Room Number:</b> {{$x['lect_room']}}
  </div>
@endforeach 
</div>
