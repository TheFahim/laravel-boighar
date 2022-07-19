
<x-frontend.layout.master>
  @slot('title')
  AboutUs
  @endslot

<section class="">
	<img src="{{ asset('ui/frontend/images/form_banner/about.png') }}" alt="" style="width: 100%; height:400px">
</section>
<section class="" style="background-color: #f4f9fc;">
<!-- /Slider end -->
 
 <div class="container mt-5">
     <div class="row">
          <div class="col-6">
            <img src="images/about/we.png" alt="" class="img-fluid" style="height:300px ;">
            <h3 class="mt-5 text-primary">Who we are</h3>
            <p class="text-dark">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad miniveniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea consequatur? Quis autem vel eum iure reprehenderit.</p>
          </div>
          <div class="col-6">
                <img src="images/about/about_right.jpg" alt="" class="img-fluid" style="height: 300px;">
                <h3 class="mt-5 text-primary  ">Our Mission and Vission</h3>
                <p class="text-dark">Sed ut perspiciatis unde omnis iste natus error sit voluptat accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur adipisci velit.</p>
          </div>
     </div>
 </div>

 <section class="cta-section ">
	<div class="container">
		<div class="cta position-relative">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-doctor"></i>
						<span class="h3">58</span>k
						<p>Satisfy People</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-flag"></i>
						<span class="h3">700</span>+
						<p>Daily Sell Book</p>
					</div>
				</div>
				
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-badge"></i>
						<span class="h3">40</span>+
						<p>Daily Request Book</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-globe"></i>
						<span class="h3">20</span>
						<p>Daily Donate Book</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
 
		<div class="container text-center" style="margin-top: 120px;">
            <h2 class="text-">Our Experience Team</h2>
            <p>We are student of "Noakhali Scicence and Technology University"<br>Department of Software Engineering</p>
            <div class="row">
                  
                  <div class="col-3 card ">
                    <img src="{{ asset('ui/frontend/images/about/azad.jpg') }}" alt="" style="height:300px;" class="img-fluid">
                    <h4>Md Azad Hossain</h4> 
                    <p>Software Developer</p>
                  </div>
                  <div class="col-3 card ">
                    <img src="{{ asset('ui/frontend/images/about/shuvo.png') }}" alt="" style="height:300px;" class="img-fluid">
                    <h4>Shuvo Islam</h4> 
                    <p>Software Developer</p>
                  </div>
                  <div class="col-3 card ">
                    <img src="{{ asset('ui/frontend/images/about/nadimimage.png') }}" alt="" style="height:300px;" class="img-fluid">
                    <h4>Nadim Bhuiyan</h4>
                    <p>Software Developer</p>
                  </div>
                  <div class="col-3 card ">
                    <img src="{{ asset('ui/frontend/images/about/EmranWhite.png') }}" alt="" style="height:300px;" class="img-fluid">
                    <h4>Emran Hossain</h4>
                    <p>Software Developer</p>
                  </div>
            </div>
        </div>		 
			 
			 
      </x-frontend.layout.master>