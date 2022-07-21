
    <x-backend.layout.master>
        @slot('title')
        Book Details
        @endslot
    <div class="card mb-4">
        @slot('bottomheader')
       Book Details
        @endslot
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Book Details
           <a href="{{ route('donatebooks.create') }}"> <button class="btn btn-sm btn-info">ADD BOOK</button></a>
        </div>

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
          </div>
    </div>

    </x-backend.layout.master>


