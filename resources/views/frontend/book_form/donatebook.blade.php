
 
 <x-frontend.layout.master>
    {{-- <x-slot :title>DonateBook_From</x-slot> --}}
    @slot('title')
    DonateBook_Form
    @endslot
<!-- Slider Start -->
 
	<div class="container d-flex justify-content-center">
		 <div class="card ">
               <img src="{{ asset('ui/frontend') }}/images/form_banner/dbook1.jpg" alt=""style="width:400px">
         </div>
		 <div class="card ml-3">
               <img src="{{ asset('ui/frontend') }}/images/form_banner/donatebook1.jpg" alt=""style="width:400px;">
         </div>
	</div>
   
<div class="container mt-2 ">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="section-title text-center">
                <h2>Donate Book</h2>
                <div class="divider mx-auto my-4"></div>
                <p>This is a short video, which helps beginners to sell their unused books via our online system. It will helps a seller to sell their unused books with a good price.
                     Sell easily set books ads and publish the ads in the system. On the other hand, Buyer can view and buy the books.</p>

                     <p>Sell needs to fill up some requirements as like:</p>
                     <p>1. Fill the below form with valid data</p>
                     <p>2. Give Clear Information</p>
                     

                     <div class="btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-secondary active">
                          <input type="checkbox" checked autocomplete="off"> Donate Your Book
                        </label>
                      </div>
            </div>
        </div>
    </div>
</div>

 
<div class="container card w-50">
<form class="form-horizontal" role="form" action="{{ route('donatebooks.store') }}" method="post" enctype="multipart/form-data">
    @csrf 
   <div class="bg-info">
    <h2 class="text-center">Donate Book</h2>
   </div>
        <br> <br><br>
        <x-backend.alertmessage.alertmessage type="success"/>
        {{-- use components --}}
        <x-frontend.form.input name="fullname" text="Full Name" type="text" :value=" old('fullname')" />
        <x-frontend.form.input name="email" text="Email" type="text" :value="old('email')"/>
        <x-frontend.form.input name="address" text="Address" type="text" :value="old('address')"/>
        <x-frontend.form.input name="mobile" text="Mobile" type="tel" pattern="[0-9]{11}" :value="old('mobile')"/>
        <x-frontend.form.input name="booktitle" text="Book Title" type="text" :value="old('booktitle')"/>
        <x-frontend.form.input name="bookauthor" text="Book Author" type="text" :value="old('bookauthor')"/>
        <x-frontend.form.input name="bookedition" text="Book Edition" type="text" :value="old('bookedition')"/>
        <x-frontend.form.input name="bookquantity" text="Book Quantity" type="number" :value="old('bookquantity')"/>
        <x-frontend.form.input name="bookimage" text="Book Image" type="file"/>
        
          <div class="form-group" style="padding-left: 20px; color: gray;">
              <button type="submit" class="btn btn-primary" name="submit">Submit</button>
          </div>       
    
    </form>  <!-- /form -->
</div>
</x-frontend.layout.master>