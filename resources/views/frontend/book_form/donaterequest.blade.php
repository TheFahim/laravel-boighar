

 <x-frontend.layout.master>

    {{-- <x-slot :title>DonateBook_From</x-slot> --}}
    @slot('title')
    DonateBook_Request_Form
    @endslot
<!-- Slider Start -->
<div class="container card w-50">
<form class="form-horizontal" role="form" action="{{route('getdonates.store')}}" method="post" enctype="multipart/form-data">
    @csrf
   <div class="bg-info">
    <h2 class="text-center"> Request for Donate Book</h2>
   </div>
        <br> <br><br>
        <x-backend.alertmessage.alertmessage type="success"/>
        {{-- use components --}}
        <x-frontend.form.input name="fullname" text="Full Name" type="text" :value=" old('fullname')" />
        <x-frontend.form.input name="email" text="Email" type="text" :value="old('email')"/>
        <x-frontend.form.input name="address" text="Address" type="text" :value="old('address')"/>
        <x-frontend.form.input name="mobile" text="Mobile" type="tel" pattern="[0-9]{11}" :value="old('mobile')"/>
        {{-- <x-frontend.form.input name="Request_reason" text="Request_reason" type="text" :value=" old('Request_reason')" /> --}}
        <x-frontend.form.input name="booktitle" type="hidden" text="" value="{{$donet->booktitle}}"/>



          <div class="form-group" style="padding-left: 20px; color: gray;">
              <button type="submit" class="btn btn-primary" name="submit">Submit</button>
          </div>

    </form>  <!-- /form -->
</div>
</x-frontend.layout.master>