<x-backend.layout.master>
    @slot('title')
    Banner
    @endslot
<div class="card mb-4">
    @slot('bottomheader')
   Edit Banner
    @endslot
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
    Banner list
       <a href="{{ route('banners.index') }}"> <button class="btn btn-info"> Banner List</button></a>
    </div>

    <div class="container card w-50 ">
        <form class="form-horizontal" role="form" action="{{ route('banners.update',['banner'=>$banner->id]) }}" method="post" enctype="multipart/form-data">
           @csrf
           @method('patch')
            <br>
           <x-backend.alertmessage.alertmessage type="success"/> <br><br>

           <label for="cars">Choose a type:</label>

           <select name="option" id="option">
            <option  >Select on</option>
             <option value="sell book"  >sell book</option>
             <option value="Donate book">Donate book</option>
             <option value="Request book">Request book</option>
           </select>
<br><br>
            <x-frontend.form.input name="image" text="Banner Image" type="file" />
<br>
            <input type="checkbox" id="is_active" name="is_active" value="1"{{ $banner->is_active ? 'checked' : '' }}>
            <label for="vehicle1"> Active Status</label><br>


            <button type="submit" class="btn btn-success d-flex">update</button>

        </form>

      </div>

</x-backend.layout.master>
