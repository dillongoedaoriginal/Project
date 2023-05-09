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
  background-color: #AA77FF;
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
.txt {
  width: 150px;
  padding: 5px;
  border: 1px solid gray;
  margin: 0;
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

<!-- Links (sit on top) -->


<!-- Header with image -->
<header >
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

</header>
<br><br><br><h1 style="text-align: center; background-color: #9370db;"><b>Exam Schedule</b></h1><br><br>
@foreach($user->exam as $exam)
<br><br><button type="button" class="collapsible"><h2> {{$exam->date}}  {{$exam->day}}</h2></button>
<div class="content">
<h4 >Subject: {{$exam->subject}} </h4><br>
<h4 >Time: {{$exam->time}}</h4><br>
<h4 >Location: {{$exam->location}}</h4><br>
</div>
@endforeach


<!-- Footer -->
<script>
  var coll = document.getElementsByClassName("collapsible");
  var i;
  
  for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var content = this.nextElementSibling;
      if (content.style.display === "block") {
        content.style.display = "none";
      } else {
        content.style.display = "block";
      }
    });
  }
  </script>
</body>
</html>
