 
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
        <form action="{{ route('contacts.store') }}" method="post" class="mb-5">
          @csrf
          <div class="col-5 mt-5 card">
            
            <div class="card-header"> <h3 class="ml-5 text-center">Contact Us</h3></div>
            {{-- use components --}}
            <x-backend.alertmessage.alertmessage type="success"/>
            <x-frontend.form.input name="fullname" text="Full Name" type="text" :value=" old('fullname')" />
            <x-frontend.form.input name="mobile" text="Mobile" type="tel" pattern="[0-9]{11}" :value="old('mobile')"/>
            <x-frontend.form.input name="email" text="Email" type="text" :value="old('email')"/>

            
            <div class="form-floating mt-3 mb-3">
              <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
              <label for="exampleFormControlTextarea1">Message</label>
            </div>
            <div class="form-group mb-3">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </form>
      </div>
  </div>
</x-frontend.layout.master>		 
   