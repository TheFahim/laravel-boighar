
<x-backend.layout.master title="Donatebook" bottomheader="Update Donate Book">
    
<div class="container card w-50">
    <form class="form-horizontal" role="form" action="{{ route('donatebooks.update',['donatebook'=>$donatebookedit->id]) }}" method="post" enctype="multipart/form-data">
        @csrf 
        @method('patch')
        <h2 class="text-center">Donate Book</h2>
            <br> <br><br>
    
            {{-- use components --}}
                <x-frontend.form.input name="fullname" text="Full Name" type="text" :value="old('fullname', $donatebookedit->fullname)" />
                <x-frontend.form.input name="email" text="Email" type="text" :value="old('email', $donatebookedit->email)" />
                <x-frontend.form.input name="address" text="Address" type="text" :value="old('address', $donatebookedit->address)"/>
                <x-frontend.form.input name="mobile" text="Mobile" type="tel" pattern="[0-9]{11}" :value="old('mobile', $donatebookedit->mobile)"/>
                <x-frontend.form.input name="booktitle" text="Book Title" type="text" :value="old('booktitle', $donatebookedit->booktitle)"/>
                <x-frontend.form.input name="bookauthor" text="Book Author" type="text" :value="old('bookauthor', $donatebookedit->bookauthor)"/>
                <x-frontend.form.input name="bookedition" text="Book Edition" type="text" :value="old('bookedition', $donatebookedit->bookedition)"/>
            
              <div class="form-group" style="padding-left: 20px; color: gray;">
                  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
              </div>       
        
        </form>  <!-- /form -->
    </div>
 
</x-backend.layout.master>








 