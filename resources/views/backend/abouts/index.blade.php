<x-backend.layout.master>
  @slot('title')
  About Us
  @endslot
  <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 tm-block-col">
    <div class="tm-bg-primary-dark tm-block tm-block-product-abouts">
        <h2 class="tm-block-title">About Us</h2>
      <!-- <div>
        <i class="fas fa-table tm-bg-primary-dark my-5"></i>
        Categoty List
      </div> -->
         
      <div class="tm-product-table-container">

          <x-backend.alerts.message type="success" :message="session('message')"/> 

          <table class="table tm-table-small tm-product-table" id="datatablesSimple">
                
            <thead>
              <tr>
                  <th class="tm-product-name">SL</th>
                  <th class="tm-product-name">Title</th>
                  <th class="tm-product-name">Description</th>
                  <th class="tm-product-name">Image</th>
                  <th class="tm-product-name">Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach($abouts as $about)
              <tr>
                <td class="tm-product-name">{{$loop->iteration}}</td>
                <td class="tm-product-name">{{$about->title}}</td>
                <td class="tm-product-name">{{$about->description}}</td>
                <td><img src="{{asset('/storage/aboutus/'.$about->image)}}" alt="" style="width:50px;height:50px"></td>
                <td class="text-left">
                  <x-backend.utilities.showlink href="{{ route('abouts.show', ['about'=>$about->id]) }}" text="View"/>
                  <x-backend.utilities.editlink href="{{ route('abouts.edit', ['about'=>$about->id]) }}" text="Edit"/>
                  <form action="{{ route('abouts.destroy', ['about'=>$about->id]) }}" method="post" style="display:inline">
                  @csrf
                  @method('delete')  
                    <x-backend.forms.button color="danger" onclick="return confirm('Are You Sure')" href="{{ route('abouts.show', ['about'=>$about->id]) }}" text="Delete"/>
                  </form>
                </td>
                    
              </tr>
              @endforeach
            </tbody>
          </table>
        
            <!-- table container -->
        <button class="btn btn-primary btn-block text-uppercase mb-3">
          <a class="" style="color:white;" href="{{ route('abouts.create') }}">Add new about</a>
        </button>
      </div> 
  </div> 
     
</x-backend.layout.master>    