
<x-backend.layout.master title="Request Book" bottomheader="Request Book">
    
    <div class="container card w-50 ">
        <form class="form-horizontal" role="form" action="{{ route('requestbooks.update',['requestbook'=>$requestbookedit->id]) }}" method="post" enctype="multipart/form-data">
           @csrf
           @method('patch')
          
            <div class="card-header bg-info"> <h2 class="text-center mt-2"></h2>Request Book</div>
            <br>
            <x-backend.alertmessage.alertmessage type="success"/>
        
            <x-frontend.form.input name="booktitle" text="Book Title" type="text" :value="old('booktitle', $requestbookedit->booktitle)"/>
    
            <x-frontend.form.input name="bookauthor" text="Book Author" type="text" :value="old('bookauthor', $requestbookedit->bookauthor)"/>
            
            <x-frontend.form.input name="bookedition" text="Book Edition" type="text" :value="old('bookedition', $requestbookedit->bookedition)"/>
            <x-frontend.form.input name="bookquantity" text="Book Quantity" type="text" :value="old('bookquantity', $requestbookedit->bookquantity)"/>
           
           
            
            <x-frontend.form.input name="mobile" text="Mobile" type="tel" pattern="[0-9]{11}" :value="old('mobile', $requestbookedit->mobile)"/>
           
            <x-frontend.form.input name="address" text="Address" type="text" :value="old('address', $requestbookedit->address)"/>
       
          <button type="submit" class="btn btn-success d-flex">Update</button>
               
      
            </div> 
        
        </form>   
       
      </div>

</x-backend.layout.master>








 