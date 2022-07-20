<x-backend.layout.master>
    @slot('title')
    Banner
    @endslot
<div class="card mb-4">
    @slot('bottomheader')
   Add Banner
    @endslot
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
       Add Banner
       <a href="{{ route('banners.index') }}"> <button class="btn btn-info"> Banner List</button></a>
    </div>

    <div class="container card w-50 ">
        <form class="form-horizontal" role="form" action="{{ route('banners.store') }}" method="post" enctype="multipart/form-data">
           @csrf
            <br>
           <x-backend.alertmessage.alertmessage type="success"/> <br><br>

           <label for="cars">Choose a type:</label>

           <select name="option" id="option">
            <option >select on</option>
             <option value="sell book">sell book</option>
             <option value="Donate book">Donate book</option>
             <option value="Request book">Request book</option>
           </select>
<br><br>
            <x-frontend.form.input name="image" text="Banner Image" type="file" />
<br>
            <input type="checkbox" id="is_active" name="is_active" value="1">
            <label for="vehicle1"> Active Status</label><br>


            <button type="submit" class="btn btn-success d-flex">Submit</button>

        </form>

      </div>

</x-backend.layout.master>
