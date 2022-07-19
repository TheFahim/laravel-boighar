<x-backend.layout.master>
    @slot('title')
    Carousel
    @endslot
<div class="card mb-4">
    @slot('bottomheader')
   Add Carousel 
    @endslot
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
       Add Carousel
       <a href="{{ route('carousels.index') }}"> <button class="btn btn-info">Back</button></a>
    </div>
 
    <div class="container card w-50 ">
        <form class="form-horizontal" role="form" action="{{ route('carousels.store') }}" method="post" enctype="multipart/form-data">
           @csrf
           
            <div class="card-header bg-info"> <h2 class="text-center mt-2"></h2>Sell Book</div>
            <br>
           <x-backend.alertmessage.alertmessage type="success"/> <br><br>
             
            <x-frontend.form.input name="carouseltitle" text="Carosel Title" type="text" :value="old('caroseltitle')" />
        
            <x-frontend.form.input name="carouselcaption" text="Carousel Caption" type="text" :value="old('carouselcaption')" />

            <x-frontend.form.input name="carouselimage" text="Carousel Image" type="file" />
           
            
                
                 
            <button type="submit" class="btn btn-success d-flex">Submit</button>
    
        </form>   
       
      </div>

</x-backend.layout.master>