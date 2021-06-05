<?php include_once ("/opt/lampp/htdocs/hospital/static/header.php") ?>

<body>
    <div class="container">
<!--carrusel de imagenes -->
<div id="carouselExampleIndicators" class="carousel slide mt-4 mb-3" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/hospital/Images/carusel/carusel1.jpg" class="d-block w-100" alt="..."width="100%" height="400px">
    </div>
    <div class="carousel-item">
      <img src="/hospital/Images/carusel/carusel2.jpg" class="d-block w-100" alt="..." width="100%" height="400px">
    </div>
    <div class="carousel-item">
      <img src="/hospital/Images/carusel/carusel3.jpg" class="d-block w-100" alt="..."width="100%" height="400px">
    </div>
    <div class="carousel-item">
      <img src="/hospital/Images/carusel/carusel4.jpg" class="d-block w-100" alt="..."width="100%" height="400px">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </div>
    
</body>

<?php include_once ("/opt/lampp/htdocs/hospital/static/footer.php") ?>