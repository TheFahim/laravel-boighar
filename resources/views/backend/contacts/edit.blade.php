
<x-backend.layout.master title="Donatebook" bottomheader="Update Donate Book">
    
    <div class="container card w-50 ">
        <form class="form-horizontal" role="form" action="{{ route('contacts.update',['contacts'=>$contacts->id]) }}" method="post" enctype="multipart/form-data">
           @csrf
           @method('put')
            <div class="card-header bg-info"> <h2 class="text-center mt-2"></h2>Donate Book</div>
            <br>
           <x-backend.alertmessage.alertmessage type="success"/>
            <br>
            <br>
            <x-frontend.form.input name="fullname" text="Full Name" type="text" :value="old('fullname', $contacts->fullname)" />

            <x-frontend.form.input name="email" text="Email" type="email" :value="old('email', $donatebookedit->email)" />

            <x-frontend.form.input name="message" text="Message" type="text" :value="old('message', $contacts->message)" />

            <x-frontend.form.input name="mobile" text="Mobile" type="text" :value="old('mobile', $donatebookedit->mobile)" />

            

            

            
                
                 
          <button type="submit" class="btn btn-success d-flex">Update</button>
               
      
      
      
      
      
            </div> 
            
                
        
        </form>   
       
      </div>
         


</x-backend.layout.master>








 