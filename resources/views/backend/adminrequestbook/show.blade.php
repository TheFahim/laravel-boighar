 
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
            
            <address class="m-5 mx-auto">
              Book Title :{{ $requestbookshow->booktitle}} <br>
              Book Author: {{ $requestbookshow->bookauthor }} <br>
              Book Edition: {{ $requestbookshow->bookedition }} <br>
              Mobile: {{ $requestbookshow->mobile }} <br>
            </address>
          </div>
    </div>
     
    </x-backend.layout.master>
 
 
 