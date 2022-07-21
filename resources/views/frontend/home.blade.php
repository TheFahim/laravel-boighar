 
 <x-frontend.layout.master>
	<x-slot name="title">HomePage</x-slot>
<marquee behavior="" direction="" style="background-color: yellow; width:100%;color: black;"> Welcome to our University Boighar</marquee>
<x-frontend.layout.partials.carousel :carousels="$carousels"/> 
<script>
	function showTime(){
    var date = new Date();
    var h = date.getHours(); // 0 - 23
    var m = date.getMinutes(); // 0 - 59
    var s = date.getSeconds(); // 0 - 59
    var session = "AM";
    
    if(h == 0){
        h = 12;
    }
    
    if(h > 12){
        h = h - 12;
        session = "PM";
    }
    
    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;
    
    var time = h + ":" + m + ":" + s + " " + session;
    document.getElementById("MyClockDisplay").innerText = time;
    document.getElementById("MyClockDisplay").textContent = time;
    
    setTimeout(showTime, 1000);
    
}

showTime();
</script>
 
 


 
<section class="gray-bg ">
	<section class="section service gray-bg ">
		<h1 class="text-center" style="margin-bottom: 100px;">Best Sell Book</h1>
   
		   <div class="row">
			   <div class="col-lg-4 col-md-6 col-sm-6">
				   <div class="service-item mb-4">
					   <div class="icon d-flex">
						  <img src="{{ asset('ui/frontend/images/1.png') }}" alt="">
					   </div>
   
					    
						<div class="btn-group" role="group" aria-label="Basic example" style="margin-left:100px;">
							<a href="bookdetails.php"><button type="button" class="btn btn-success fa-solid fa-eye"><span class="ml-2">View Details</span></button></a>
							 
						  </div>
					   
				   </div>
			   </div>
 




   
			   <div class="col-lg-4 col-md-6 col-sm-6">
				   <div class="service-item mb-4">
					   <div class="icon d-flex align-items-center">
						<img src="{{ asset('ui/frontend') }}/images/2.png" alt="">
					   </div>
					   <div class="content" >
						<div class="btn-group" role="group" aria-label="Basic example" style="margin-left:100px;">
							<a href="bookdetails.php"><button type="button" class="btn btn-success fa-solid fa-eye"><span class="ml-2">View Details</span></button></a>
							 
						  </div>
					   </div>
				   </div>
			   </div>
			   
			   <div class="col-lg-4 col-md-6 col-sm-6">
				   <div class="service-item mb-4">
					   <div class="icon d-flex align-items-center">
						<img src="{{ asset('ui/frontend') }}/images/3.png" alt="">
					   </div>
					   <div class="content" >
						<div class="btn-group" role="group" aria-label="Basic example" style="margin-left:100px;">
							<a href="bookdetails.php"><button type="button" class="btn btn-success fa-solid fa-eye"><span class="ml-2">View Details</span></button></a>
							 
						  </div>
					   </div>
				   </div>
			   </div>
   
   
			   <div class="col-lg-4 col-md-6 col-sm-6">
				   <div class="service-item mb-4">
					   <div class="icon d-flex align-items-center">
						<img src="{{ asset('ui/frontend/images/1.png') }}" alt="">
					   </div>
   
					   <div class="content" >
						<div class="btn-group" role="group" aria-label="Basic example" style="margin-left:100px;">
							<a href="bookdetails.php"><button type="button" class="btn btn-success fa-solid fa-eye"><span class="ml-2">View Details</span></button></a>
						  </div>
					   </div>
				   </div>
			   </div>
   
			   <div class="col-lg-4 col-md-6 col-sm-6">
				   <div class="service-item mb-4">
					   <div class="icon d-flex align-items-center">
						<img src="{{ asset('ui/frontend/images/1.png') }}" alt="">
					   </div>
					   <div class="content" >
						<div class="btn-group" role="group" aria-label="Basic example" style="margin-left:100px;">
							<a href="bookdetails.php"><button type="button" class="btn btn-success fa-solid fa-eye"><span class="ml-2">View Details</span></button></a>
							 
						  </div>
					   </div>
				   </div>
			   </div>
			   
			   <div class="col-lg-4 col-md-6 col-sm-6">
				   <div class="service-item mb-4">
					   <div class="icon d-flex align-items-center">
						<img src="{{ asset('ui/frontend/images/1.png') }}" alt="">
					   </div>
					   <div class="content" >
						<div class="btn-group" role="group" aria-label="Basic example" style="margin-left:100px;">
							<a href="bookdetails.php"><button type="button" class="btn btn-success fa-solid fa-eye"><span class="ml-2">View Details</span></button></a>
							 
						  </div>
					   </div>
				   </div>
			   </div>
		   </div>
	   </div>
   </section>
	 
</section>
</x-frontend.layout.master>
