<x-backend.layout.master>
    @slot('title')
    Category
    @endslot
<div class="card mb-4">
    @slot('bottomheader')
   Book Category
    @endslot
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Book Category
       <a href="{{ route('categories.index') }}"> <button class="btn btn-info">Category List</button></a>
    </div>

    <div class="container">


            <form method="POST" action="{{ route('categories.store') }}" enctype="multipart/form-data">
                @csrf
                <x-backend.alertmessage.alertmessage type="success"/> <br><br>
            
                <x-frontend.form.input name="title" text="Category Title" type="text" :value="old('title')"/>
                <x-frontend.form.input name="description" text="Category Description" type="textarea" :value="old('description')"/>
                <x-frontend.form.input name="route" text="Route Link" type="text" :value="old('route')"/>
                
                <div class="form-check">
                    <input name="is_active" class="form-check-input" type="checkbox" value="1" id="isActiveInput" checked>
                    <label class="form-check-label" for="isActiveInput">
                        Is Active
                    </label>
                </div>
                <button type="submit" class="btn btn-success d-flex">Create</button>


                
            </form>
        </div>
    </div>
</x-backend.layout.master>
