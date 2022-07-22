 
    <x-backend.layout.master>
        @slot('title')
        Category Details
        @endslot
    <div class="card mb-4 mt-4">
       
        <div class="card-header ">
            <i class="fas fa-table me-1"></i>
            Category Details
           <a href="{{ route('categories.index') }}"> <button class=" btn-sm btn btn-outline-primary"><i class="fa-solid fa-backward"></i></button></a>
        </div>
      
        <div class="card w-75 mx-auto mt-4 mb-4" style="background-color: #f3fcf2">
            <div class="card-header text-center shadow-sm" style="background-color: #58ed85">
             <h4> <b> Category Details</b></h4>
            </div>
          
            <table class="table table-bordered">
              <thead>
              <tr>
                  <th> Category title  :</th>
                  <td>{{ $category->title}}</td>
                 
                </tr>
                <tr>
                <th>Description</th>
                  <td>{{$category->description}}</td>
                
                </tr>
                <tr>
                <th>Route Link</th>
                  <td>{{$category->route}}</td>
                
                </tr>
                <tr>
                <th>Is Active</th>
                <td>{{$category->is_active ? 'Active' : 'In Active'}}</td>
              
   
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>

          <div class="cart-footer bg-info">
          
          </div>
          </div>
    </div>
     
    </x-backend.layout.master>
 
 
 