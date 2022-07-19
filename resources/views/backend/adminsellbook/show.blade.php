 
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
           <a href=""> <button class="btn btn-sm btn-info">ADD BOOK</button></a>
        </div>
      
        <div class="card w-50 mx-auto mt-4">
            <div class="card-header text-center">
              <b> Book Details</b>
            </div>
            <address class="m-5">
              Book Title :{{ $sellbookshow->booktitle }} <br>
              Book Author: {{ $sellbookshow->bookauthor }} <br>
              Book Edition: {{ $sellbookshow->bookedition }} <br>
              Book Price: {{ $sellbookshow->price }} <br>
              Mobile: {{ $sellbookshow->mobile }} <br>
            </address>
          </div>
    </div>
     
    </x-backend.layout.master>
 
 
 