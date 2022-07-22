 
    <x-backend.layout.master>
        @slot('title')
        Category Update
        @endslot
    <div class="card mb-4 mt-4 ">
       
        <div class="card-header ">
            <i class="fas fa-table me-1"></i>
            Category Update
           <a href="{{ route('categories.index') }}"> <button class=" btn-sm btn btn-outline-primary"><i class="fa-solid fa-backward"></i></button></a>
        </div>
      
        <div class=" card w-75 mx-auto mt-4 mb-4" style="background-color: #f3fcf2">
            <div class="card-header text-center shadow-sm" style="background-color: #58ed85">
             <h4> <b> Category Update</b></h4>
            </div>
            <form class="form-control mx-auto" role="form" action="{{ route('categories.update',['category'=>$category->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                 
                 <br>
                 <x-backend.alertmessage.alertmessage type="success"/>
                <x-frontend.form.input name="title"  text="category title" type="text" :value="old('title', $category->title)"/>
                <x-frontend.form.input name="description" text="category description" :value="old('description', $category->description)"/>
                <x-frontend.form.input name="route" text="Route link" :value="old('route', $category->route)"/>

                <div class="form-check">
                    <input name="is_active" class="form-check-input" type="checkbox" value="1" id="isActiveInput" {{ $category->is_active ? 'checked' : '' }} >
                    <label class="form-check-label" for="isActiveInput">
                        Is Active
                    </label>
                </div>
                <div class="card-footer bg-white">
                <div class="d-grid gap-2 col-6 mx-auto d-flex">
                    <button type="submit" class="btn btn-success w-50" type="button"><strong>Update</strong></button>
                     <a href="{{ route('categories.index') }}"><button class="btn btn-danger " type="button"><i class="fa-solid fa-xmark"></i><strong>Cancel</strong></button></a>
                  </div>
                </div> 
    
                  
             
        </form> 
         
    </div>
</div>
    </x-backend.layout.master>
 
 
 