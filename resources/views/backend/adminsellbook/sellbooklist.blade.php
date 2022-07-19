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
                @foreach ($sellbooklist as $sellbooklist)
                    
               
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $sellbooklist->booktitle }}</td>
                    <td>{{ $sellbooklist->bookauthor }}</td>
                    <td>{{ $sellbooklist->bookedition }}</td>
                    <td>{{ $sellbooklist->bookquantity }}</td>
                    <td>{{ $sellbooklist->price }}</td>
                    <td>{{ $sellbooklist->mobile }}</td>
                    <td><img src="{{asset('/storage/sellbooks/'.$sellbooklist->bookimage)}}" alt="" style="width:50px;height:50px"></td>
                    <td>
                        <div class="d-flex">
                            <x-backend.buttonlink.viewlink  href="{{ route('sellbooks.show',['sellbook'=>$sellbooklist->id ])}}"/>
                            <x-backend.buttonlink.editlink href="{{ route('sellbooks.edit',['sellbook'=>$sellbooklist->id ])}}"/>
                           
                                <x-backend.buttonlink.deletelink action="{{ route('sellbooks.destroy',['sellbook'=>$sellbooklist->id ])}}"/>
                        </div>
                        
                
                        

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
       
    </div>
</div>
 
</x-backend.layout.master>