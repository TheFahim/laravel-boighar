 
    <x-backend.layout.master>
        @slot('title')
        Book Category
        @endslot
    <div class="card mb-4">
        @slot('bottomheader')
        Category Details
        @endslot
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Category Details
           <a href="{{ route('categories.index') }}"> <button class="btn btn-sm btn-info">Category List</button></a>
        </div>
      
        <div class="card w-50 mx-auto mt-4">
            <div class="card-header text-center">
              <b>  Category Details</b>
            </div>
            <table class="table table-bordered">
             
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
                
                
           
              
            </table>

            
          </div>
    </div>
     
    </x-backend.layout.master>
 
 
 