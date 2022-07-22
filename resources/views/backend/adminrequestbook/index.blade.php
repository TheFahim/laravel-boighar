<x-backend.layout.master>
    @slot('title')
   Request Book
    @endslot
<div class="card mb-4">
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
                             
                            <x-backend.buttonlink.viewlink action="{{ route('requestbooks.show',['requestbook'=>$requestbook->id ])}}"/>
                            <x-backend.buttonlink.editlink action="{{ route('requestbooks.edit',['requestbook'=>$requestbook->id ])}}"/>
                            <x-backend.buttonlink.deletelink action="{{ route('requestbooks.destroy',['requestbook'=>$requestbook->id ])}}"/>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
            
        </table>
      
    </div>
</div>
b
</x-backend.layout.master>