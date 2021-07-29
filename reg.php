<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Register</title>
    <meta content="" name="description">
  <meta content="" name="keywords">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
 <link href="css/all.css" rel="stylesheet">
</head>
<body>
  <div class="navbar">
 <div class="nav">
 <img src="image/l1.jpg">

   <a href="form.php">Login</a>
  <div class="dropdown">
    <button class="dropbtn">Register
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="nretailer.php">Register as Retailer</a>
      <a href="ncsp.php">Register as CSP</a>
      <a href="nretailer.php">Register as distributor </a>
    </div>
</div> 
</div>
 </div>

<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade" >
    <!--div class="numbertext">1 / 3</div-->
    <img src="image/creditcard.jpg" style="width:100%">
    <!--div class="text">Caption Text</div-->
  </div>

  <div class="mySlides fade">
    <!--div class="numbertext">2 / 3</div-->
    <img src="image/Free-Agent-scheme.jpg" style="width:100%">
    <!--div class="text">Caption Two</div-->
  </div>

  <div class="mySlides fade">
    <!--div class="numbertext">3 / 3</div-->
    <img src="image/paytmdashboard.jpg" style="width:100%">
    <!--div class="text">Caption Three</div-->
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)"></a>
  <a class="next" onclick="plusSlides(1)"></a>
</div>
<br>


<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 4000); // Change image every 2 seconds
}
</script>
</body>
</html>