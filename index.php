<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
      .nav{
            background-color: steelblue;
            padding: 10px;
            display:flex;
            justify-content: space-between;

            transition-timing-function: ease-in ;
            transition: all 0.5s;
      }
      <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  </style>
</style>
</head>
<body>

<div class="nav">
      <h1 style="padding:8px;">HMS</h1>
      <div style="padding:10px;">
      <div style="padding: 10px;">
            <a href="./login.php" class="btn btn-primary" >Login</a>        
      </div>
</div>
</div>
<div style="background-color: #cd8ad4;">
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
      <img src="assets/slide-1.jpg" alt="Slide-1" class="d-block" style="width:100%">
      </div>
      <div class="carousel-item">
      <img src="assets/slide-2.jpg" alt="Slide-2" class="d-block" style="width:100%">
      </div>
      <div class="carousel-item">
      <img src="assets/slide-3.jpg" alt="Slide-3" class="d-block" style="width:100%">
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
