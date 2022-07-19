
<x-backend.layout.master title="Sellbook" bottomheader="Update Sell Book">

    <div class="container card w-50 ">
        <form class="form-horizontal" role="form" action="{{ route('sellbook.update',['sellbook'=>$sellbookedit->id]) }}" method="post" enctype="multipart/form-data">
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

            
                
                 
          <button type="submit" class="btn btn-success d-flex">Update</button>
               
      
      
      
      
      
            </div> 
            
                
        
        </form>   
       
      </div>
         



 

</x-backend.layout.master>
