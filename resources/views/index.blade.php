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

<!-- Header with image -->
<header >
  <img src="{{ asset('imag/weclom.png') }}" alt="welcome to UNITENLife" >
</header>

<!-- Add a background color and large text to the whole page -->


<!-- About Container -->
<button type="button" class="collapsible"><h2>Quick Access</h2></button>
<div class="content">
  <a  href="/timetable"><img src="{{ asset('imag/timetable.png') }}" alt="timetable"  class ="photo" ></a><h4 >Timetable</h4><br>
  <a  href="/examS"><img src="{{ asset('imag/examS.png') }}" alt="exam schedule"  class ="photo" ></a><h4 >Exam Schedule</h4><br>
</div>
<button type="button" class="collapsible"><h2>Links</h2></button>
<div class="content">
  <a target="_blank" href="https://info.uniten.edu.my/info/"><img src="{{ asset('imag/studentinfo.png') }}" alt="student info" class ="photo" ></a><h4 >Student Info</h4><br>
  <a target="_blank" href="https://brighten.uniten.edu.my/my/"><img src="{{ asset('imag/brighten.png') }}" alt="brighten"  class ="photo" ></a><h4 >Brighten</h4><br>
  <a target="_blank" href="https://info365.uniten.edu.my/info365"><img src="{{ asset('imag/info.png') }}" alt="info365"   class ="photo" ></a></a><h4 >Info 365</h4><br>
</div>


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
