<x-frontend.layout.master>

    @slot('title')
        BookDetails
    @endslot
    <div class="container ">
        <div class="row">
            <div class="col-md-6 ">
                <img src="{{ asset('storage/donatebook/' . $bookdetail->bookimage) }}" alt="">
            </div>
            <div class="col-md-6 ">
                <div class="row">
                    <h3><b>Book Title: </b>{{ $bookdetail->booktitle }}</h3>
                </div>
                <div class="row">

                    <h4> <b>Book Author: </b>{{ $bookdetail->bookauthor }}</h4>
                    <h4><b>Book Edition: </b>{{ $bookdetail->bookedition }}</h4>
                    <h5><b>Donar Name: </b>{{ $bookdetail->fullname }}</h5>
                </div>
                <a class="btn btn-primary text-light" href="{{route('donets.create', $bookdetail->id)}}" role="button">Request book</a>

            </div>
        </div>
    </div>
</x-frontend.layout.master>
