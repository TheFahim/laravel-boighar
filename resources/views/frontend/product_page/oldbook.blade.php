
<x-frontend.layout.master>
    @slot('title')
   OLd Book
    @endslot
 
<section class="gray-bg ">
	<section class="section service gray-bg ">
		<h1 class="text-center" style="margin-bottom: 100px;">OLd Book</h1>
        <div class="input-group w-100 justify-content-center container mb-5">
            <div class="form-outline">
              <input id="search-input"  type="search" id="form1" class="form-control" placeholder="Search here" />
              
            </div>
            <button id="search-button" type="button" class="btn btn-primary">
              <i class="fas fa-search text-white"></i>
            </button>
          </div>
        
		   <div class="row">
			@foreach ($sellbooks as $sellbook)
			   <div class="col-lg-4 col-md-6 col-sm-6 ">
				   <div class="service-item mb-4 card ">
					   <div class="icon d-flex card">
						  <img src="{{ asset('storage/sellbooks/'.$sellbook->bookimage) }}" alt="" class="w-75 mx-auto p-3" style="height:200px ">
					   </div>
   
						<div class="btn-group" role="group" aria-label="Basic example" style="margin-left:100px;">
							<a href="{{ route('bookdetails',['bookdetail'=>$sellbook->id]) }}"><button type="button" class="btn btn-success fa-solid fa-eye"><span class="ml-2">View Details</span></button></a> 
						</div>
				   </div>
			   </div>
			   @endforeach
	       </div>
   </section>
	 
</section>
 
 
				 
			 
			 
 
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

 	
 


	 </x-frontend.layout.master>
  
  
  
  
 
   