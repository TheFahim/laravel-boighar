@props(['data', 'title', 'imagefile'])
<section class="gray-bg ">
    <section class="section gray-bg ">
        <h1 class="text-center" style="margin-bottom: 100px;">{{ $title }}</h1>
        {{-- <div class="input-group w-100 justify-content-center container mb-5">
            <div class="form-outline">
              <input id="search-input"  type="search" id="form1" class="form-control" placeholder="Search here" />

            </div>
            <button id="search-button" type="button" class="btn btn-primary">
              <i class="fas fa-search text-white"></i>
            </button>
          </div> --}}
        <div class="row">
            @foreach ($data as $sellbook)
                <div class="col-lg-3 col-md-6 col-sm-10 offset-md-0 offset-sm-1 mb-3">
                    <form method="post" action="{{ route('donetbookdetails', ['donetbookdetails' => $sellbook->id]) }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <a href="{{ route('donetbookdetails', ['donetbookdetails' => $sellbook->id]) }}">

                                <img name="newbook_img" class="card-img-top img-fluid"
                                    src="{{ asset('storage/' . $imagefile . '/' . $sellbook->bookimage) }}"
                                    alt="" class="w-75 mx-auto p-3" style="height:200px ">
                            </a>
                            <div class="card-body">
                                <h5 name=""><b>{{ $sellbook->booktitle }}</b></h5>
                                <div class="d-flex flex-row my-2">
                                    <div class="text-muted">Doner Name</br>{{ $sellbook->fullname }}</div>
                                    <div class="ml-auto"> <span class="text-muted">Stock:10</span> </div>
                                </div>
                                <input type="hidden" name="hidden_title" value="{{ $sellbook->booktitle }}" />
                                <input type="hidden" name="hidden_price" value="{{ $sellbook->price }}" />
                                <input type="hidden" name="hidden_author" value="{{ $sellbook->bookauthor }}" />

                                <input type="submit" name="add_to_cart"
                                    style="margin-top:5px;background:#009933;color:#fff;"
                                    class="btn btn-success w-100 rounded" value="View Details" />
                                <!--  <button name="add_cart" class="btn w-100 rounded my-2">Add to cart</button>-->
                            </div>
                        </div>
                    </form>
                </div>
            @endforeach
        </div>
        </div>
    </section>
</section>
