<x-backend.layout.master>
  @slot('title')
  About Us
  @endslot
  
    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Edit About</h2>
                <a class="btn btn_sm btn-primary" href="{{ route('abouts.index') }}">List</a>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                 @endif

                <form action="{{ route('abouts.update',['about'=>$about->id])}}" method="Post" class="tm-edit-product-form">
                    @csrf
                    @method('PATCH')
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title',$about->title) }}" id="title">
                        @error('title')
                        <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                        
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control validate @error('title') is-invalid @enderror" id="description" rows="3" name="description">
                            {{ old('description',$about->description) }}
                        </textarea>
                        @error('description')
                        <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                      <x-frontend.form.input name="image" text="About Image" type="file"/>
                    </div>
                    
                    
                  
                  
              </div>
              
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block text-uppercase">
                    Submit About
                </button>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</x-backend.layout.master>