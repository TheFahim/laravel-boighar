 
 <x-frontend.layout.master>
    @slot('title')
    ContactUS
    @endslot
<!-- Slider Start -->
<section class="">
	<img src="{{ asset('ui.frontend') }}/images/form_banner/contact.png" alt="" style="width: 100%;">
</section>
<section class=""  >
<!-- /Slider end -->
 
  <div class="container ">
      <div class="row ">
          <div class="col-5 mt-5">
             <h3>Contact Info</h3>

              <address>
                <p>Phone:+0123456789</p>
                
                <p>Email:uboighar@gmail.com</p>
                
              </address>
              
          </div>
          <div class="col-5 mt-5 card">
         
            <div class="card-header"> <h3 class="ml-5 text-center">Contact Us</h3></div>
          <div class="form-floating mb-3 mt-3">
            <input type="text" class="form-control " id="email" placeholder="Enter Name" name="email">
            <label for="email">Name</label>
          </div>
          
          <div class="form-floating mt-3 mb-3">
            <input type="tel" class="form-control " id="pwd" placeholder="Enter Phone number" name="pswd">
            <label for="pwd">Mobile</label>
          </div>
          <div class="form-floating mt-3 mb-3">
            <input type="email" class="form-control " id="pwd" placeholder="Enter Phone number" name="pswd">
            <label for="pwd">Email</label>
          </div>
          <div class="form-floating mt-3 mb-3">
            <input type="text" class="form-control " id="pwd" placeholder="Enter Phone number" name="pswd">
            <label for="pwd">Subject</label>
          </div>
          <div class="form-floating mt-3 mb-3">
            
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            <label for="pwd">Message</label>
          </div>
          </div>
      </div>
  </div>
</x-frontend.layout.master>		 
   