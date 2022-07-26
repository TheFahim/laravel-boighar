<x-frontend.layout.master>
    <x-slot name="title">SellBook_Form</x-slot>
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
                <h2>Unused Book Selling Processes</h2>
                <div class="divider mx-auto my-4"></div>
                <p>This is a short video, which helps beginners to sell their unused books via our online system. It will helps a seller to sell their unused books with a good price.
                     Sell easily set books ads and publish the ads in the system. On the other hand, Buyer can view and buy the books.</p>

                     <p>Sell needs to fill up some requirements as like:</p>
                     <p>1. Fill the below form with valid data</p>
                     <p>2. Give Clear Information</p>


                     <button type="button" class="btn btn-primary" data-bs-toggle="modal tooltip"  title="Here you can see video how to sell your book" data-bs-target="#myModal1">
                        See Video
                      </button>
                     
            </div>
        </div>
    </div>
</div>


<div class="mx-auto card w-75 rounded mb-5">
   <x-frontend.form.card_header text="Sell your book" class="text-white rounded"/>
   <div class="card-body">
    <form class="row g-3" role="form" action="{{ route('sellbooks.store') }}" method="post" enctype="multipart/form-data">

        @csrf
        @method('post')
            
            <br>
            <x-backend.alertmessage.alertmessage type="success"/>
            <div class="col-md-6">
                <x-frontend.form.input name="booktitle" text="Book Title" type="text" :value="old('booktitle')"/>
            </div>
            <div class="col-md-6">
                <x-frontend.form.input name="bookauthor" text="Book Author" type="text" :value="old('bookauthor')"/>
            </div>
            <div class="col-md-6">
                <x-frontend.form.input name="bookedition" text="Book Edition" type="text" :value="old('bookedition')"/>
            </div>
            <div class="col-md-6">
                <x-frontend.form.input name="bookquantity" text="Book Quantity" type="number" :value="old('bookquantity')"/>
            </div>
            <div class="col-md-6">
                <x-frontend.form.input name="mobile" text="Mobile" type="tel" pattern="[0-9]{11}" :value="old('mobile')"/>
            </div>
            <div class="col-md-6">
                <x-frontend.form.input name="price" text="Sell Price" type="text"  :value="old('price')"/>
            </div>
            <div class="col-md-12">
                <x-frontend.form.input name="bookimage" text="Book Image" type="file" />
            </div>

            <button type="submit" class="btn btn-primary w-50 mx-auto" name="submit">Submit</button>
             

            </div>
        </form>   
   </div>
    
</div>

<div class="modal" id="myModal1">
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