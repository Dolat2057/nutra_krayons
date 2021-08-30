<title>Carousel</title>
<style>
      @media only screen and (min-width: 767px) {
        #carouselExampleIndicators{
   padding-right:60px !important;
   padding-left:60px !important;
 }
 .carousel-control-next{
  margin-right:60px !important;
   margin-left:60px !important;
 }
 .carousel-control-prev{
  margin-right:60px !important;
   margin-left:60px !important;
 }
 }
 
</style>
<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel" data-interval="5000">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner"style="width:">
    
 

    
    <div class="carousel-item active">
     <a href=""><img src="<?= URL ?>assests/images/2.png" class="d-block w-100" alt="..."></a>
    </div>
<div class="carousel-item">
     <a href=""><img src="<?= URL ?>assests/images/3.png" class="d-block w-100" alt="..."></a>
    </div>
<div class="carousel-item">
     <a href=""><img src="<?= URL ?>assests/images/4.jpg" class="d-block w-100" alt="..."></a>
    </div>
   
   
    <div class="carousel-item">
   <a href=""><img src="<?= URL ?>assests/images/1234.png" class="d-block w-100" alt="..."></a>
    </div>
<div class="carousel-item">
     <a href=""><img src="<?= URL ?>assests/images/5.jpg" class="d-block w-100" alt="..."></a>
    </div>
    <div class="carousel-item">
    <a href=""><img src="<?= URL ?>assests/images/12345.png" class="d-block w-100" alt="..."></a>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>