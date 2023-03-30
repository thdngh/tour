<!--  Carousel -->
<style>
.carousel-inner img {  
      width: 100%; /* Set width to 100% */
      margin: auto;
  }
  .carousel-caption h3 {
      color: #fff !important;
  }
</style>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox" style="width: 100%">
      <div class="item active">
        <img src="images/carousel/tour1.jpg" alt="#">
        <div class="carousel-caption">
          <h3></h3>
        </div>      
      </div>

      <div class="item">
        <img src="images/carousel/tour7.jpg" alt="">
        <div class="carousel-caption">
          <h3></h3>
        </div>      
      </div>

      <div class="item">
        <img src="images/carousel/tour3.jpg" alt="">
        <div class="carousel-caption">
          <h3></h3>
        </div>      
      </div>      
	  
	  <div class="item">
        <img src="images/carousel/tour6.jpg" alt="">
        <div class="carousel-caption">
          <h3> </h3>
        </div>      
      </div>
    
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Trước</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Tiếp</span>
    </a>
</div>