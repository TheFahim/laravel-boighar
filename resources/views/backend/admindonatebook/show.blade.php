
    <x-backend.layout.master>
        @slot('title')
        Requested Book Details
        @endslot
    <div class="card mb-4 mt-4">
       
        <div class="card-header ">
            <i class="fas fa-table me-1"></i>
            Requested Book Details
           <a href="{{ route('donatebooks.index') }}"> <button class=" btn-sm btn btn-outline-primary"><i class="fa-solid fa-backward"></i></button></a>
        </div>
<<<<<<< HEAD
      
        <div class="card w-75 mx-auto mt-4 mb-4" style="background-color: #f3fcf2">
            <div class="card-header text-center shadow-sm" style="background-color: #58ed85">
             <h4> <b>  Requested Book Details</b></h4>
            </div>
            <td><img src="{{asset('/storage/donatebook/'.$donatebookshow->bookimage)}}" alt="No image submitted" style="width:400px;height:200px" class="mx-auto m-2"></td>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th> Doner Name </th>
                  <td>{{ $donatebookshow->fullname}}</td>
                 
                </tr>
                <tr>
                  <th> Book Title </th>
                  <td>{{ $donatebookshow->booktitle}}</td>
                 
                </tr>
                <tr>
                  <th> Book Author</th>
                  <td>{{ $donatebookshow->bookauthor }}</td>
                 
                </tr>
                <tr>
                  <th> Book Edition</th>
                  <td>{{ $donatebookshow->bookedition }}</td>
                 
                </tr>
                <tr>
                  <th> Book Edition</th>
                  <td>{{ $donatebookshow->bookquntity}}</td>
                 
                </tr>
                <tr>
                  <th> Mobile</th>
                  <td>{{ $donatebookshow->mobile }}</td>
                 
                </tr>
                <tr>
                  <th>Address</th>
                  <td>{{ $donatebookshow->address }}</td>
                 
                </tr>
                <tr>
                  <th>Created Date</th>
                  <td>{{ $donatebookshow->created_at }}</td>
                 
                </tr>
                
              </thead>
              <tbody>
              </tbody>
            </table>

          <div class="cart-footer bg-info">
          
          </div>
=======

        <div class="card w-50 mx-auto mt-4">
            <div class="card-header text-center">
              <b> Book Details</b>
            </div>
            <img src="{{asset('/storage/donatebook/'.$donatebookshow->bookimage)}}" alt="" style="width:200px;height:200px" class="mx-auto">
            <address class="m-5 mx-auto">
              Book Title :{{ $donatebookshow->booktitle }} <br>
              Book Author: {{ $donatebookshow->bookauthor }} <br>
              Book Edition: {{ $donatebookshow->bookedition }} <br>
              Donar Name: {{ $donatebookshow->fullname }} <br>
              Donar Mobile: {{ $donatebookshow->mobile }} <br>
            </address>
>>>>>>> e93ab5cd3b356cd01d483e22d97a530966ff2f22
          </div>
    </div>

    </x-backend.layout.master>


