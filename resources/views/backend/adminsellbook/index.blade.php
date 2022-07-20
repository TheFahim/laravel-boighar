<x-backend.layout.master>
    @slot('title')
    Sellbook
    @endslot
<div class="card mb-4">
    @slot('bottomheader')
   Sell Book
    @endslot
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Sell Book
       <a href="{{ route('sellbooks.create') }}"> <button class="btn btn-info">Add Product</button></a>
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
                    <th>Price</th>
                    <th>Mobile</th>
                    <th>Book Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            {{-- <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                    
                </tr>
            </tfoot> --}}
            <tbody>
                @foreach ($sellbooks as $sellbook)
                    
               
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $sellbook->booktitle }}</td>
                    <td>{{ $sellbook->bookauthor }}</td>
                    <td>{{ $sellbook->bookedition }}</td>
                    <td>{{ $sellbook->bookquantity }}</td>
                    <td>{{ $sellbook->price }}</td>
                    <td>{{ $sellbook->mobile }}</td>
                    <td class="text-center"><img src="{{asset('/storage/sellbooks/'.$sellbook->bookimage)}}" alt="" style="width:50px;height:50px"></td>
                    <td>
                        <div class="d-flex">
                            <x-backend.buttonlink.viewlink  href="{{ route('sellbooks.show',['sellbook'=>$sellbook->id ])}}"/>
                            <x-backend.buttonlink.editlink href="{{ route('sellbooks.edit',['sellbook'=>$sellbook->id ])}}"/>
                           
                                <x-backend.buttonlink.deletelink action="{{ route('sellbooks.destroy',['sellbook'=>$sellbook->id ])}}"/>
                        </div>
                        
                
                        

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
       
    </div>
</div>
 
</x-backend.layout.master>