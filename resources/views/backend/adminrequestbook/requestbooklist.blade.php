<x-backend.layout.master>
    @slot('title')
   Request Book
    @endslot
<div class="card mb-4">
    @slot('bottomheader')
  Request Book
    @endslot
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
       Request Book
       <a href="{{ route('requestbooks.create') }}"> <button class="btn btn-info">Add Product</button></a>
    </div>
   <x-backend.alertmessage.alertmessage type="success"/>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>SL No</th>
                    <th>Book Title</th>
                    <th>Book Author</th>
                    <th>Book Edition</th>
                    <th>Book Quantity</th>
                    <th>Address</th>
                    <th>Mobile</th>
                   
                </tr>
            </thead>
           
            <tbody>
                @foreach ($requestbooklist as $requestbooklist)
                    
               
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $requestbooklist->booktitle }}</td>
                    <td>{{ $requestbooklist->bookauthor }}</td>
                    <td>{{ $requestbooklist->bookedition }}</td>
                    <td>{{ $requestbooklist->bookquantity}}</td>
                    <td>{{ $requestbooklist->address }}</td>
                    <td>{{ $requestbooklist->mobile }}</td>
                     
                  
                     
                    <td>
                        <div class="d-flex">
                            {{-- <x-backend.buttonlink.viewlink root="donatebook.show" id="{{ $donatebooklist->id }}" idname="donatebook"/>
                            <x-backend.buttonlink.editlink root="donatebook.edit" id="{{ $donatebooklist->id }}" idname="donatebook"/>
                            <x-backend.buttonlink.deletelink root="donatebook.destroy" id="{{ $donatebooklist->id }}" idname="donatebook"/> --}}
                             
                            <x-backend.buttonlink.viewlink href="{{ route('requestbooks.show',['requestbook'=>$requestbooklist->id ])}}"/>
                            <x-backend.buttonlink.editlink href="{{ route('requestbooks.edit',['requestbook'=>$requestbooklist->id ])}}"/>
                            <x-backend.buttonlink.deletelink action="{{ route('requestbooks.destroy',['requestbook'=>$requestbooklist->id ])}}"/>
                        </div>
  
                         {{-- <a href="{{ route('sellbook.show',[
                            'sellbook'=>$sellbooklist->id
                         ]) }}">
                            <i class="fa-solid fa-pencil text-success"style="margin-left:20px"></i>
                        </a> --}}
                     {{-- <form action="{{ route('sellbook.destroy',['sellbook'=>$sellbooklist->id] )}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn text-danger d-inline" onclick="confirm('Are you Sure?')"><i class="fa-solid fa-trash-can"></i></button>
                       

                     </form> --}}
                        

                    </td>
                </tr>
                @endforeach
            </tbody>
            
        </table>
      
    </div>
</div>
b
</x-backend.layout.master>