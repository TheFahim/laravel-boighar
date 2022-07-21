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
       <a href="{{ route('categories.create') }}"> <button class="btn btn-info">Add New Category</button></a>
    </div>
   <x-backend.alertmessage.alertmessage type="success"/>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>SL No</th>
                    <th>Category Title</th>
                    <th>Category description</th>
                    <th>Route link</th>
                    <th>Is_active</th>
                    <th>Action</th>
                </tr>
            </thead>
            {{-- <tfoot>
                
                <tr>
                    <th>SL No</th>
                    <th>Category Title</th>
                    <th>Category description</th>
                    <th>Route link</th>
                    <th>Is_active</th>
                    <th>Action</th>
                </tr>
           
            </tfoot> --}}
            <tbody>
                @foreach ($categories as $category)
                    
               
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $category->title}}</td>
                    <td>{{ $category->description }}</td>
                    <td>{{ $category->route }}</td>
                    <td>{{ $category->is_active ? 'Active' : 'In Active'  }}</td>
                    <td>
                        <div class="d-flex">
                            <x-backend.buttonlink.viewlink  href="{{ route('categories.show', ['category' => $category->id]) }}"/>
                            <x-backend.buttonlink.editlink href="{{ route('categories.edit', ['category' => $category->id]) }}"/>
                           
                            <form method="post" action="{{ route('categories.destroy', ['category' => $category->id]) }}" style="display:inline">
                                @csrf
                                @method('delete')
                                <x-backend.buttonlink.deletelink color="danger" onclick="return confirm('Are you sure want to delete?')" text="Delete" />
                            </form>

                        </div>
                        
                
                        

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
       
    </div>
</div>
 
</x-backend.layout.master>
