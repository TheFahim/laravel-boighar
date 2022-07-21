 
    <x-backend.layout.master>
        @slot('title')
       Request Book Update
        @endslot
    <div class="card mb-4 mt-4 ">
       
        <div class="card-header ">
            <i class="fas fa-table me-1"></i>
            Donate Book Update
           <a href="{{ route('donatebooks.index') }}"> <button class=" btn-sm btn btn-outline-primary"><i class="fa-solid fa-backward"></i></button></a>
        </div>
      
        <div class=" card w-75 mx-auto mt-4 mb-4" style="background-color: #f3fcf2">
            <div class="card-header text-center shadow-sm" style="background-color: #58ed85">
             <h4> <b> Donate Book Update</b></h4>
            </div>
            <form class="form-control mx-auto" role="form" action="{{ route('donatebooks.update',['donatebook'=>$donatebookedit->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                 
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

            <x-frontend.form.input name="bookedition" text="Book Edition" type="text" :value="old('bookedition', $donatebookedit->bookedition)" />
            <x-frontend.form.input name="bookquantity" text="Book Quantity" type="text" :value="old('bookquantity', $donatebookedit->bookquantity)" />
 

            <img src="{{asset('/storage/donatebook/'.$donatebookedit->bookimage)}}" alt="" style="width:200px;height:100px">
            <x-frontend.form.input name="bookimage" text="Book Image" type="file"/>
       
             <div class="card-footer bg-white">
                <div class="d-grid gap-2 col-6 mx-auto d-flex">
                    <button type="submit" class="btn btn-success w-50" type="button"><strong>Update</strong></button>
                     <a href="{{ route('donatebooks.index') }}"><button class="btn btn-danger " type="button"><i class="fa-solid fa-xmark"></i><strong>Cancel</strong></button></a>
                </div>
            </div> 
        </form> 
         
    </div>
</div>
    </x-backend.layout.master>
 
 
 