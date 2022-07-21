<x-backend.layout.master>
    @slot('title')
   Request Book
    @endslot
<div class="card mb-4 mt-3">
    @slot('bottomheader')
  Request Book
    @endslot
    <div class="card-header" style="background-color: #defffe">
        <i class="fas fa-table me-1"></i>
       Request Book
       <a href="{{ route('requestbooks.create') }}"> <button class="btn btn-outline-info btn-sm text-black">Add Product</button></a>
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
                @foreach ($requestbooks as $requestbook)
                    
               
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $requestbook->booktitle }}</td>
                    <td>{{ $requestbook->bookauthor }}</td>
                    <td>{{ $requestbook->bookedition }}</td>
                    <td>{{ $requestbook->bookquantity}}</td>
                    <td>{{ $requestbook->address }}</td>
                    <td>{{ $requestbook->mobile }}</td>
                     
                  
                     
                    <td>
                        <div class="d-flex">
                            {{-- <x-backend.buttonlink.viewlink root="donatebook.show" id="{{ $donatebooklist->id }}" idname="donatebook"/>
                            <x-backend.buttonlink.editlink root="donatebook.edit" id="{{ $donatebooklist->id }}" idname="donatebook"/>
                            <x-backend.buttonlink.deletelink root="donatebook.destroy" id="{{ $donatebooklist->id }}" idname="donatebook"/> --}}
                             
                            <x-backend.buttonlink.viewlink href="{{ route('requestbooks.show',['requestbook'=>$requestbook->id ])}}"/>
                            <x-backend.buttonlink.editlink href="{{ route('requestbooks.edit',['requestbook'=>$requestbook->id ])}}"/>
                            <x-backend.buttonlink.deletelink action="{{ route('requestbooks.destroy',['requestbook'=>$requestbook->id ])}}"/>
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