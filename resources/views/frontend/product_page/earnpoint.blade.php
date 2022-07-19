 
 <x-frontend.layout.master>
<!-- Slider Start -->
@slot('title')
EarnPoint   
@endslot
<section class="">
	<img src="{{ asset('ui.frontend') }}/images/form_banner/earnmoney.jpg" alt="" style="width: 100%;">
</section>
<div class="container mt-2">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="section-title text-center">
                <h2>Earn Money</h2>
                <div class="divider mx-auto my-4"></div>
                <p>This is a short video, which helps beginners to sell their unused books via our online system. It will helps a seller to sell their unused books with a good price.
                     Sell easily set books ads and publish the ads in the system. On the other hand, Buyer can view and buy the books.</p>

                     <p>Sell needs to fill up some requirements as like:</p>
                     <p>1. Fill the below form with valid data</p>
                     <p>2. Give Clear Information</p>
                     

                     <div class="btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-secondary active">
                          <input type="checkbox" checked autocomplete="off"> Eran Money
                        </label>
                      </div>
            </div>
        </div>
    </div>
</div>

  
<div class="container mt-3">
  
  <br>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-bs-toggle="tab" href="#home">Request Book</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="tab" href="#menu1">Procesing Order</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="tab" href="#menu2">Confirm Order</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
      
<div class="container mt-3">
   
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>SL No</th>
                    <th>Book Title</th>
                    <th>Book Author</th>
                    <th>Book Edition</th>
                    <th>Book Quantity</th>
                    <th>Address</th>
                    <th>Mobile</th>
                    <th>Book Image</th>
                    <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($requestbooks as $requestbook)
      <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $requestbook->booktitle }}</td>
                    <td>{{ $requestbook->bookauthor }}</td>
                    <td>{{ $requestbook->bookedition }}</td>
                    <td>{{ $requestbook->bookquantity}}</td>
                    <td>{{ $requestbook->address }}</td>
                    <td>{{ $requestbook->mobile }}</td>
                    <td><img src="{{asset('/storage/requestbooks/'.$requestbook->bookimage)}}" alt="no image" style="width:50px;height:50px"></td>
                    <td><button type="button" class="btn btn-outline-success btn-sm">Accept</button></td>
                     
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
    </div>
    <div id="menu1" class="container tab-pane fade"><br>
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="menu2" class="container tab-pane fade"><br>
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
  </div>
</div>
 
</x-frontend.layout.master>			 
			 
			 
 
   
 

    
     
   