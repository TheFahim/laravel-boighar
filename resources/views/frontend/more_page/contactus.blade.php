<x-frontend.layout.master>
  <x-slot name="title">Conatect Us</x-slot>
  <div class="container d-flex justify-content-center">
      @if(isset($banner->image))
      <div class="card ">
          <img src="{{ asset('/storage/banner/' . $banner->image ) }}" alt="Banner"style="width:100%">
      </div>
      @endif
  </div>
<section class="gray-bg" style="">


<div class="container mt-2 ">
  <div class="row justify-content-center">
      <div class="col-lg-7">
          <div class="section-title text-center">
              <h2>Conatct Us</h2>

              <div class="divider mx-auto my-4"></div>
             
                   <button type="button" class="btn btn-primary" data-bs-toggle="modal tooltip"  title="Here you can see video how to sell your book" data-bs-target="#myModal">
                      See Video
                    </button>
                   
          </div>
      </div>
  </div>
</div>
<div class="card w-75 mx-auto mb-5">
  <x-frontend.form.card_header text="Our Location" class="text-white rounded"/>
  <div class="card-body row">
    <div class="col-md-6">
        <img src="{{ asset('ui/frontend/images/form_banner/office.JPG') }}" class="img-fluid "/>
  </div>
    <div class="col-md-6">
        <img src="{{ asset('ui/frontend/images/form_banner/location.JPG') }}" class="img-fluid"/>
        <address class="mx-auto">
         <strong>Address:</strong><p>Azampur,Uttara,Sector-7</p>
        <a href="http://surl.li/cmvje"> <button class="btn btn-primary">Go Location</button> </a> 
        </address>
        
  </div>
  </div>
</div>



<div class="mx-auto card w-75 rounded mb-5">
 <x-frontend.form.card_header text="Conatct Us" class="text-white rounded"/>
 <div class="card-body">
  <form class="row g-3" role="form" action="{{ route('sellbooks.store') }}" method="post" enctype="multipart/form-data">
         
    @csrf
    @method('post')
        
        <br>
        <x-backend.alertmessage.alertmessage type="success"/>
        <div class="col-md-6">
            <x-frontend.form.input name="name" text="Name" type="text" :value="old('name')"/>
        </div>
        <div class="col-md-6">
            <x-frontend.form.input name="email" text="Email" type="email" :value="old('email')"/>
        </div>
        <div class="col-md-6">
            <x-frontend.form.input name="mobile" text="Mobile" type="tel" :value="old('mobile')"/>
        </div>
        <div class="col-12">
         <x-frontend.forms.textarea name="message" type="text" id="message" :value="old('message')"/>
     </div>

        <button type="submit" class="btn btn-primary w-50 mx-auto" name="submit">Submit</button>
         

        </div>
    </form>   
 </div>
  
</div>

<div class="modal" id="myModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Request Book video</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
          <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item w-100 " src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
            </div>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>


</x-frontend.layout.master>
</section>