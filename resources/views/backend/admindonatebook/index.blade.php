<x-backend.layout.master>

    @slot('title')
    Donate Book
    @endslot
<div class="card mb-4">
   
    <div class="card-header" style="background-color: #defffe">
        <i class="fas fa-table me-1"></i>
        Donate Book
 
       <a href="{{ route('donatebooks.create') }}"> <button class="btn btn-outline-info btn-sm text-black">Add Product</button></a>
 
 
 
    </div>
   <x-backend.alertmessage.alertmessage type="success"/>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>SL No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Mobile</th>
                    <th>Book Title</th>
                    <th>Book Author</th>
                    <th>Book Edition</th>
                    <th>Quantity</th>bookquantity
                    <th>Book Image</th>
                    <th>ACTION</th>
                </tr>
            </thead>

            <tbody>
                
                @foreach ($donatebooks as $donatebook)


                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $donatebook->fullname }}</td>
                    <td>{{ $donatebook->email }}</td>
                    <td>{{ $donatebook->address }}</td>
                    <td>{{ $donatebook->mobile }}</td>
                    <td>{{ $donatebook->booktitle }}</td>
                    <td>{{ $donatebook->bookauthor }}</td>
                    <td>{{ $donatebook->bookedition }}</td>
                    <td>{{ $donatebook->bookquantity }}</td>
                    <td><img src="{{asset('/storage/donatebook/'.$donatebook->bookimage)}}" alt="" style="width:50px;height:50px"></td>

                    <td>
                        <div class="d-flex">
                            {{-- <x-backend.buttonlink.viewlink root="donatebook.show" id="{{ $donatebooklist->id }}" idname="donatebook"/>
                            <x-backend.buttonlink.editlink root="donatebook.edit" id="{{ $donatebooklist->id }}" idname="donatebook"/>
                            <x-backend.buttonlink.deletelink root="donatebook.destroy" id="{{ $donatebooklist->id }}" idname="donatebook"/> --}}

                            <x-backend.buttonlink.viewlink href="{{ route('donatebooks.show',['donatebook'=>$donatebook->id ])}}"/>
                            <x-backend.buttonlink.editlink href="{{ route('donatebooks.edit',['donatebook'=>$donatebook->id ])}}"/>
                            <x-backend.buttonlink.deletelink action="{{ route('donatebooks.destroy',['donatebook'=>$donatebook->id ])}}"/>
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

</x-backend.layout.master>
