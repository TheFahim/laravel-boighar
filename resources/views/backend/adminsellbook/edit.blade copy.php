
<x-backend.layout.master title="Donatebook" bottomheader="Update Donate Book">
    
    <div class="container card w-50 ">
        <form class="form-horizontal" role="form" action="{{ route('donatebooks.update',['donatebook'=>$donatebookedit->id]) }}" method="post" enctype="multipart/form-data">
           @csrf
           @method('put')
            <div class="card-header bg-info"> <h2 class="text-center mt-2"></h2>Donate Book</div>
            <br>
           <x-backend.alertmessage.alertmessage type="success"/>
            <br>
            <br>
            <x-frontend.form.input name="fullname" text="Full Name" type="text" :value="old('fullname', $donatebookedit->fullname)" />

            <x-frontend.form.input name="email" text="Email" type="email" :value="old('email', $donatebookedit->email)" />

            <x-frontend.form.input name="address" text="Address" type="text" :value="old('address', $donatebookedit->address)" />

            <x-frontend.form.input name="mobile" text="Mobile" type="text" :value="old('mobile', $donatebookedit->mobile)" />

            <x-frontend.form.input name="booktitle" text="Book Tile" type="text" :value="old('booktitle', $donatebookedit->booktitle)" />

            <x-frontend.form.input name="bookauthor" text="Book Author" type="text" :value="old('bookauthor', $donatebookedit->bookauthor)" />

            <x-frontend.form.input name="bookedition" text="Book Edition" type="text" :value="old('bookauthor', $donatebookedit->bookedition)" />

            

            
                
                 
          <button type="submit" class="btn btn-success d-flex">Update</button>
               
      
      
      
      
      
            </div> 
            
                
        
        </form>   
       
      </div>
         


</x-backend.layout.master>








 