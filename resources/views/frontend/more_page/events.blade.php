 <x-frontend.layout.master>
    @slot('title')
    Events
    @endslot
 <div class="container mt-5 ">
      <div class="d-flex">
        <div class="card col-6 bg-info rounded">
			<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-inner">
				  <div class="carousel-item active">
					<img src="{{ asset("ui/frontend") }}/images/events/image2.jpg" class="d-block w-100" alt="..." style="height:300px ;">
				  </div>
				  <div class="carousel-item">
					<img src="{{ asset("ui/frontend") }}/images/events/image1.jpg" class="d-block w-100" alt="..."style="height:300px ;">
				  </div>
				  <div class="carousel-item">
					<img src="{{ asset("ui/frontend") }}/images/events/image4.jpg" class="d-block w-100" alt="..."style="height:300px ;">
				  </div>
				</div>
			  </div>
			  <!-- /carsoyul -->
			   
		</div>
        <div class="card col-6 bg-warning" style="margin-left: 20px;">
			<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-inner">
				  <div class="carousel-item active">
					<img src="{{ asset("ui/frontend") }}/images/events/image2.jpg" class="d-block w-100" alt="..." style="height:300px ;">
				  </div>
				  <div class="carousel-item">
					<img src="{{ asset("ui/frontend") }}/images/events/image1.jpg" class="d-block w-100" alt="..."style="height:300px ;">
				  </div>
				  <div class="carousel-item">
					<img src="{{ asset("ui/frontend") }}/images/events/image4.jpg" class="d-block w-100" alt="..."style="height:300px ;">
				  </div>
				</div>
			  </div>
		</div>
	  </div>
 </div>
 
<div class="container mt-3">
	<div class="d-flex  flex-md-row flex-sm-column flex-xm-column" style="margin-left:120px ;">
         <div class="col-5 card">
			 <div class="card-header mt-2 rounded">
				<div class="bg-warning rounded " style="padding-top:5px ; padding-bottom: 5px;">
					<span class="date" >25</span>
					<span class="month">SEP, 2020 <span><i class="fa-solid fa-clock"></i>05:23 AM - 09:23 AM</span></span>
				</div>
				 <h4 style="text-align: center;">New year book fair 2022</h4>
				</div>
          <div class="card-body center">
			<img src="{{ asset('ui/frontend') }}/images/events/eventsthumb1.png" alt="" style="height: 200px;" class="img-fluid center">
		 
		  </div>
		  <div class="card-footer rounded mb-2">
			  hvhd
		  </div>
		 </div>
		 <div class="col-5 card ml-3">
			<div class="card-header mt-2 rounded">
			   <div class="bg-warning rounded " style="padding-top:5px ; padding-bottom: 5px;">
				   <span class="date" >25</span>
				   <span class="month">SEP, 2020 <span><i class="fa-solid fa-clock"></i>05:23 AM - 09:23 AM</span></span>
			   </div>
				<h4 style="text-align: center;">New year book fair 2022</h4>
			   </div>
		 <div class="card-body center">
		   <img src="{{ asset('ui/frontend') }}/images/events/eventsthumb1.png" alt="" style="height: 200px;" class="img-fluid center">
		
		 </div>
		 <div class="card-footer rounded mb-2">
			 hvhd
		 </div>
		</div>
	</div>
</div>
  
</x-frontend.layout.master>
   