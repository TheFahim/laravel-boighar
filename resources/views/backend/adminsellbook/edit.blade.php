  
    <x-backend.layout.master>
        @slot('title')
        Sell Book Details
        @endslot
    <div class="card mb-4">
        @slot('bottomheader')
       Sell Book Details
        @endslot
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Sell Book Details
           <a href="{{ route('sellbooks.index') }}"> <button class="btn btn-sm btn-info">Back</button></a>
        </div>
      
        <div class="card w-50 mx-auto m-3">
            <form class="form-control mx-auto" role="form" action="{{ route('sellbooks.update',['sellbook'=>$sellbookedit->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                 <div class="card-header bg-info"> <h2 class="text-center mt-2"></h2>Sell Book</div>
                 <br>
                <x-backend.alertmessage.alertmessage type="success"/>
                 <br>
                 <br>
                 <x-frontend.form.input name="booktitle" text="Book Tile" type="text" :value="old('booktitle', $sellbookedit->booktitle)" />
             
                 <x-frontend.form.input name="bookauthor" text="Book Author" type="text" :value="old('bookauthor', $sellbookedit->bookauthor)" />
                 <x-frontend.form.input name="bookedition" text="Book Edition" type="text" :value="old('bookauthor', $sellbookedit->bookedition)" />
                 <x-frontend.form.input name="bookquantity" text="Book Quantity" type="text" :value="old('bookquantity', $sellbookedit->bookquantity)" />
                 <x-frontend.form.input name="price" text="Price" type="text" :value="old('price', $sellbookedit->price)" />
                 <x-frontend.form.input name="mobile" text="Mobile" type="text" :value="old('mobile', $sellbookedit->mobile)" />
               <img src="{{asset('/storage/sellbooks/'.$sellbookedit->bookimage)}}" alt="" style="width:200px;height:100px">
                 <x-frontend.form.input name="bookimage" text="Book Image" type="file"  />
         
                 
                     
                      
               <button type="submit" class="btn btn-success d-flex">Update</button>
                    
           
           
           
           
           
                 </div> 
                 
                     
             
             </form>   
        
        </div>   
     
       
    </x-backend.layout.master>
 
 
 