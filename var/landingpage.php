<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
      <title>landingpg</title>
</head>
<body style="position: relative;
width:100%;

">
<div style="padding:25px;">
<div style="position: relative;
width: 100%;
height: 75px;
background: #0D6EFD;
border-radius: 15px;">
<style>
    .p {
    position: absolute;
   
    left: 20px;
    bottom:20px;
   

    font-family: 'Airbnb Cereal App';
    font-style: normal;
    font-size: 40px;
    line-height: 0px;

    color: #FFFFFF;
   
}
 .a {
    position: absolute;
width: 150px;
height: 83px;
left: 1200px;
top: 73px;
 }
 .box {
    box-sizing: border-box;
    position: absolute;
    width: 90px;
    height: 50px;
    top: 12px;
    left: 1200px;
    border: 1px ;
    border-color: #FFFFFF;
    border-radius: 15px;
    font-family: 'Airbnb Cereal App';
    font-style: normal;
    font-size: 17px;
    line-height: 0px;
 }
 .carousel-inner img {
    width: 100%;
    height: 100%;
  }
</style>
<div class="p">
    <p>HMS</p>
</div>
<div>
    <a href="login.php">
    <button class="box"><h4>Login</h4></button></a>
</div>
</div>
</div>
<div >
      <!-- Carousel -->
      <div id="demo" class="carousel slide" data-bs-ride="carousel">

      <!-- Indicators/dots -->
      <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
      </div>

      <!-- The slideshow/carousel -->
      <div class="carousel-inner" style="padding: 60px;
    /* padding-bottom: 180px; */
    padding-top: 0px;">
      <div class="carousel-item active">
      <img src="../assets/slide-1.jpg" alt="Slide-1" class="d-block" style="width:100%">
      </div>
      <div class="carousel-item">
      <img src="../assets/slide-2.jpg" alt="Slide-2" class="d-block" style="width:100%">
      </div>
      <div class="carousel-item">
      <img src="../assets/slide-3.jpg" alt="Slide-3" class="d-block" style="width:100%">
      </div>
      </div>

      <!-- Left and right controls/icons -->
      <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
      </button>
      </div>
</div>
</div>
</body>
</html>