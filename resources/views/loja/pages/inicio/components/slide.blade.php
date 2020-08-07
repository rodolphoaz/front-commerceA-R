
  

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <style>
  /* imagem responsiva */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  </style>
<!-- carousel slide carousel-fade z-depth-1-half-->


<div id="demo1" class="carousel slide" data-ride="carousel">

  <!-- carrosel ok  -->
  <ul class="carousel-indicators">
    <li data-target="#demo1" data-slide-to="0" class="active"></li>
    <li data-target="#demo1" data-slide-to="1"></li>
    <li data-target="#demo1" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('/img/banner/banner-bg1.png')}}" alt="aer1" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="{{asset('/img/banner/banner-bg1.png')}}" alt="aer2" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="{{asset('/img/banner/banner-bg1.png')}}" alt="aer3" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo1" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo1" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>






