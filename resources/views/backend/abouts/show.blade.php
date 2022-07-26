<x-backend.layout.master>
  @slot('title')
  About Us
  @endslot
  <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 tm-block-col">
    <div class="tm-bg-primary-dark tm-block tm-block-product-abouts">
        <h2 class="tm-block-title">About Details</h2>
      <!-- <div>
        <i class="fas fa-table tm-bg-primary-dark my-5"></i>
        Categoty List
      </div> -->
         
      <div class="tm-product-table-container">
          
          <table class="table tm-table-small tm-product-table" id="datatablesSimple">
              <tr>
                  <th class="tm-product-name">Title</th>
                  <th class="tm-product-name">{{$about->title}}</th>
              </tr>
              <tr>
                  <th class="tm-product-name">Description</th>
                  <th class="tm-product-name">{{$about->description}}</th>
              </tr>
              <tr>
                  <th class="tm-product-name">Image</th>
                  <th><img src="{{asset('/storage/donatebook/'.$about->image)}}" alt="No image submitted" style="width:400px;height:200px" class="mx-auto m-2"></th>
              </tr>
          </table>
        
            <!-- table container -->
        <button class="btn btn-primary btn-block text-uppercase mb-3">
          <a class="" href="{{ route('abouts.index') }}">List</a>
        </button>
      </div> 
  </div> 
     
</x-backend.layout.master>    