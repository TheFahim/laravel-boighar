<x-frontend.layout.master>
    @slot('title')
        BookDetails
    @endslot
    <section class="section gray-bg ">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('storage/sellbooks/' . $bookdetail->bookimage) }}" alt="" style="width:300px;height:300px" class="mx-auto">


            </div>
            <div class="col-md-6">
                <div class="row">
                    <h5><b>Book Title: </b>{{ $bookdetail->booktitle }}</h5>
                </div>
                <div class="row">
                    <h5> <b>Price: </b>{{ $bookdetail->price }}&#2547;</h5>
                    <h5> <b>Book Author: </b>{{ $bookdetail->bookauthor }}</h5>
                    <h5><b>Book Edition: </b>{{ $bookdetail->bookedition }}</h5>
                    <h5><label for="number"><b>Quantity: </b> {{ $bookdetail->bookquantity }}</label></h5>
                    <h3><b>Mobile Number: </b>{{ $bookdetail->mobile }}</h3>
                </div>
                {{-- <div class="row">
                    <h3 class="text-warning"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"
                            aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i> <i
                            class="fa fa-star-half-o" aria-hidden="true"></i><i class="fa fa-star-o"
                            aria-hidden="true"></i></h3>
                    &nbsp; &nbsp;
                    <h5>1200 star rating and 250 reviews</h5>
                </div> --}}
                {{-- <div class="row">
                    <p><i class="text-success fa fa-check-square-o" aria-hidden="true"></i> <strong>Bank Offer</strong>
                        20% Instant Discount on SBI Credit Cards</p>
                    <p><i class="text-success fa fa-check-square-o" aria-hidden="true"></i> <strong>Bank Offer</strong>
                        5% Unlimited Cashback on Flipkart Axis Bank Credit Card </p>
                    <p><i class="text-success fa fa-check-square-o" aria-hidden="true"></i> <strong>Bank Offer</strong>
                        Extra 5% off* with Axis Bank Buzz Credit Card</p>
                    <p><i class="text-success fa fa-check-square-o" aria-hidden="true"></i> <strong>Bank
                            Offer</strong>20% Instant Discount on pay with <i class="fa fa-google-wallet"
                            aria-hidden="true"></i> google wallet </p>
                </div> --}}

                {{-- <p style="font-size: 20px"> &nbsp; <i class="fa fa-map-marker" aria-hidden="true"></i> Delivery by23
                    Jul, Tuesday | &nbsp; <span class="text-success">FREE</span> </p> --}}
                <a class="btn btn-danger text-light"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add To Cart</a>
                <br /><br />
            </div>
        </div>
    </div>
    <div class="container mt-5 mb-5">
        <div class="row">
            <h2>Ratings & Reviews</h2>
        </div>

        <div class="row mt-5 mb-5">
            <div class="media">
                <img src="{{ asset('storage/sellbooks/' . $bookdetail->bookimage) }}" width="250" height="150"
                    alt="">
                <div class="media-body">
                    <h5 class="mt-0"> Very nice product. <span class="text-warning"><i class="fa fa-star"
                                aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i
                                class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-half-o"
                                aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span></h5>
                    Cras sit amet nibh libero, in gravida nulla.
                </div>
            </div>
        </div>
    </div>



    <div class="container">
        <div class="row mt-5">
            <h2>Similar Products</h2>
        </div>
        <div class="row mt-5">
            @foreach ($books as $sellbook)
                <div class="col-lg-3 col-md-6 col-sm-10 offset-md-0 offset-sm-1 mb-3">
                    <form method="post" action="{{ route('bookdetails', ['bookdetail' => $sellbook->id]) }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <a href="{{ route('bookdetails', ['bookdetail' => $sellbook->id]) }}"><img
                                    name="newbook_img" class="card-img-top img-fluid"
                                    src="{{ asset('storage/sellbooks/' . $sellbook->bookimage) }}" alt=""
                                    class="w-70 mx-auto p-3" style=" height:150px "></a>

                            <div class="card-body">
                                <h6 name="">Name : {{ $sellbook->booktitle }}</h6>
                                <div class="d-flex flex-row my-2">
                                    <div class="text-muted">Price : {{ $sellbook->price }} &#2547;</div>
                                    <div class="ml-auto"> <span class="text-muted">Stock:10</span> </div>
                                </div>
                                <input type="hidden" name="hidden_title" value="{{ $sellbook->booktitle }}" />
                                <input type="hidden" name="hidden_price" value="{{ $sellbook->price }}" />
                                <input type="hidden" name="hidden_author" value="{{ $sellbook->bookauthor }}" />
                                <input type="number" min="1" max="100" name="quantity" value="1"
                                    class="d-flex justify-content-start" />
                                <div class="d-flex justify-content-between mt-2">
                                    <a class="btn btn-danger text-light " href="#" role="button"><i
                                            class="fa fa-cart-plus"></i>CART</a>
                                    <a class="btn btn-success"
                                        href="{{ route('bookdetails', ['bookdetail' => $sellbook->id]) }}"
                                        role="button">View Detail</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
</section>
</x-frontend.layout.master>
