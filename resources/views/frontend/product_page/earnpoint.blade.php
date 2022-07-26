 
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
  <x-backend.alertmessage.alertmessage type="success"/>
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
                    {{-- <td><button type="button" class="btn btn-outline-success btn-sm">Accept</button></td> --}}
                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal{{ $requestbook->id }}">
                      Accept
                    </button></td>
                     
      </tr>
      <div class="modal" id="myModal{{ $requestbook->id }}">
        <div class="modal-dialog">
          <div class="modal-content">
      
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Order Accept </h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
      
            <!-- Modal body -->
            <div class="modal-body">
              <form class="row g-3" role="form" action="{{ route('earnpoints.store') }}" method="post" enctype="multipart/form-data">

                @csrf
                @method('post')
                    
                    <br>
                    <x-backend.alertmessage.alertmessage type="success"/>
                    
                
                    <div class="col-md-12">
                        <x-frontend.form.input name="delivery_date" text="Delivery Date" type="date" :value="old('delivery_date')"/>
                    </div>
                    <div class="col-12">
                      <x-frontend.forms.textarea name="message" type="Message" id="message" :value="old('message')"/>
                    </div>
                    
                    <x-frontend.form.input name="book_id" text="" type="hidden" value="{{ $requestbook->id }}"/>
                    <x-frontend.form.input name="user_id" text="" type="hidden" value="{{ auth()->user()->id}}"/>

                    <button type="submit" class="btn btn-primary w-50 mx-auto" name="submit">Submit</button>
                     
        
                    </div>
                </form>  
            </div>
      
            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
      
          </div>
        </div>
      </div>
      @endforeach
    </tbody>
  </table>
</div>
    </div>



    <div id="menu1" class="container tab-pane fade"><br>
      <h3>Menu 1</h3>
      <div class="container mt-3">
        <x-backend.alertmessage.alertmessage type="success"/>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>SL No</th>
                          <th>Book Title</th>
                          <th>Book Author</th>
                          <th>Book Edition</th>
                          <th>Book Quantity</th>
                          <th>Order Address</th>
                          <th>Mobile</th>
                          <th>Delivery Date</th>
                          <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($earn_orders as $earn_order)
            @if (auth()->user()->id==$earn_order->user_id)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $earn_order->requestbooks->booktitle }}</td>
              <td>{{ $earn_order->requestbooks->bookauthor }}</td>
              <td>{{ $earn_order->requestbooks->bookedition }}</td>
              <td>{{ $earn_order->requestbooks->bookquantity}}</td>
              <td>{{ $earn_order->requestbooks->address }}</td>
              <td>{{ $earn_order->requestbooks->mobile }}</td>
              <td>{{ $earn_order->delivery_date }}</td>
              
              <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal{{  $earn_order->id }}">
                Confirm
              </button></td>
               
</tr>
<div class="modal" id="myModal{{ $earn_order->id }}">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Order Accept </h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form class="row g-3" role="form" action="{{ route('earnpoints.store') }}" method="post" enctype="multipart/form-data">

          @csrf
          @method('post')
              
              <br>
              <x-backend.alertmessage.alertmessage type="success"/>
              
          
              <div class="col-md-12">
                  <x-frontend.form.input name="delivery_date" text="Delivery Date" type="date" :value="old('delivery_date')"/>
              </div>
              <div class="col-12">
                <x-frontend.forms.textarea name="message" type="Message" id="message" :value="old('message')"/>
              </div>
              
              <x-frontend.form.input name="book_id" text="" type="hidden" value="{{ $requestbook->id }}"/>
              <x-frontend.form.input name="user_id" text="" type="hidden" value="{{ auth()->user()->id}}"/>

              <button type="submit" class="btn btn-primary w-50 mx-auto" name="submit">Submit</button>
               
  
              </div>
          </form>  
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
            @endif


           
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <div id="menu2" class="container tab-pane fade"><br>
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
  </div>
</div>
 
</x-frontend.layout.master>			 
			 
			 
 
   
 

    
     
   