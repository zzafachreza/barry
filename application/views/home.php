

<style type="text/css">
	.carousel-inner{
		border-radius: 30px;
			  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
			  	   transition: box-shadow 1s;
	}

	.carousel-inner:hover {

	  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);

	  

	}

	body{
		background-color: grey;
	}

</style>

<div class="container" style="padding-left: 10%;padding-right: 10%;margin-top: 1%" >
		<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
 	 <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
     <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block w-100" src="./assets/images/back1.jpg" alt="First slide" style="height: 100%">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="./assets/images/back2.jpg" alt="Second slide" style="height: 100%">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="./assets/images/3.jpeg" alt="Third slide" style="height: 100%">
		    </div>
		     <div class="carousel-item">
		      <img class="d-block w-100" src="./assets/images/1.jpeg" alt="Fourd slide" style="height: 100%">
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
</div>

