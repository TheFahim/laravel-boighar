<x-frontend.layout.master>
    @slot('title')
    BookDetails
    @endslot
<div class="container">
<div class="row">
    <div class="col-md-6">
    <img src="{{ asset('storage/sellbooks/'.$bookdetail->bookimage) }}" alt="">

          
    </div>
<div class="col-md-6">
      <div class="row">
        <h2><b>Book Title: </b>{{ $bookdetail->booktitle }}</h2>
      </div>
      <div class="row">
        <h2> <b>Price: </b><i class="fa fa-inr" aria-hidden="true"></i>{{ $bookdetail->price }}</h2>
        <!--
        &nbsp; &nbsp;
        <h3>799</h3>
        &nbsp; &nbsp;
        <h2 class="text-success">30% off</h2>
          -->
        <h3> <b>Book Author: </b>{{ $bookdetail->bookauthor }}</h3>
        <h3><b>Book Edition: </b>{{ $bookdetail->bookedition }}</h3>
        <h3><label for="number"><b>Quantity:</b> {{ $bookdetail->bookquantity }}</label>
        </h3>
        <!--<h3><b>Book Condition: </b></h3> -->
        <h3><b>Mobile Number: </b>{{ $bookdetail->mobile }}</h3>
        <!--<h3><b>Seller: </b></h3> -->
      </div>
      <div class="row">
        <h3 class="text-warning"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-half-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></h3>
        &nbsp; &nbsp;
        <h5>1200 star rating  and 250 reviews</h5>
      </div>
      <div class="row">
        <p><i class="text-success fa fa-check-square-o" aria-hidden="true"></i> <strong>Bank Offer</strong> 20% Instant Discount on SBI Credit Cards</p>
        <p><i class="text-success fa fa-check-square-o" aria-hidden="true"></i> <strong>Bank Offer</strong> 5% Unlimited Cashback on Flipkart Axis Bank Credit Card </p>
        <p><i class="text-success fa fa-check-square-o" aria-hidden="true"></i> <strong>Bank Offer</strong> Extra 5% off* with Axis Bank Buzz Credit Card</p>
        <p><i class="text-success fa fa-check-square-o" aria-hidden="true"></i> <strong>Bank Offer</strong>20% Instant Discount on pay with <i class="fa fa-google-wallet" aria-hidden="true"></i> google wallet </p>
      </div>
      
        <p style="font-size: 20px"> &nbsp; <i class="fa fa-map-marker" aria-hidden="true"></i> Delivery by23 Jul, Tuesday | &nbsp; <span class="text-success">FREE</span> </p>
        <a class="btn btn-success text-light"> Buy Now</a> &nbsp; <a class="btn btn-danger text-light"><i class="fa fa-cart-plus" aria-hidden="true"></i>  Add To Cart</a> <br/><br/>
   	
      </div>
    </div>
      
  		 
    </div>
  </div>
</div>

<div class="container">
   <div class="row mt-5">
   	 <h2>Similar Products</h2>
   </div>
   
   <div class="row mt-5">
   	<div class="col-md-3">
   		<div class="card">
   			<img class="card-img-top img-fluid" src="{{ asset('storage/sellbooks/'.$bookdetail->bookimage) }}" alt="">
  
   			<div class="card-title">
   				<h4>GYM Tops</h4>
   			</div> 
   			<div class="card-text">
   				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae fugiat et voluptate sunt officia vero molestias.<br/><br/>
   				<a class="btn btn-success text-light"> Buy Now</a> &nbsp; <a class="btn btn-danger text-light"><i class="fa fa-cart-plus" aria-hidden="true"></i>  Add To Cart</a> <br/><br/>
   			</div>
   		</div>
   	</div>
     <div class="col-md-3">
   		<div class="card">
   			<img class="card-img-top img-fluid" src="{{ asset('storage/sellbooks/'.$bookdetail->bookimage) }}" alt="">
 
   			<div class="card-title">
   				<h4>GYM Tops</h4>
   			</div> 
   			<div class="card-text">
   				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae fugiat et voluptate sunt officia vero molestias.<br/><br/>
   				<a class="btn btn-success text-light"> Buy Now</a> &nbsp; <a class="btn btn-danger text-light"><i class="fa fa-cart-plus" aria-hidden="true"></i>  Add To Cart</a> <br/><br/>
   			</div>
   		</div>
   	</div>
     <div class="col-md-3">
   		<div class="card">
   			<img class="card-img-top img-fluid" src="{{ asset('storage/sellbooks/'.$bookdetail->bookimage) }}" alt="">
  
   			<div class="card-title">
   				<h4>GYM Tops</h4>
   			</div> 
   			<div class="card-text">
   				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae fugiat et voluptate sunt officia vero molestias.<br/><br/>
   				<a class="btn btn-success text-light"> Buy Now</a> &nbsp; <a class="btn btn-danger text-light"><i class="fa fa-cart-plus" aria-hidden="true"></i>  Add To Cart</a> <br/><br/>
   			</div>
   		</div>
   	</div>
     <div class="col-md-3">
   		<div class="card">
   			<img class="card-img-top img-fluid" src="{{ asset('storage/sellbooks/'.$bookdetail->bookimage) }}" alt="">
 
   			<div class="card-title">
   				<h4>GYM Tops</h4>
   			</div> 
   			<div class="card-text">
   				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae fugiat et voluptate sunt officia vero molestias.<br/><br/>
   				<a class="btn btn-success text-light"> Buy Now</a> &nbsp; <a class="btn btn-danger text-light"><i class="fa fa-cart-plus" aria-hidden="true"></i>  Add To Cart</a> <br/><br/>
   			</div>
   		</div>
   	</div>
</div>
<div class="container mt-5 mb-5">
	<div class="row">
		<h2>Ratings & Reviews</h2>
	</div>
	
	<div class="row mt-5 mb-5">
		<div class="media">
    <img src="{{ asset('storage/sellbooks/'.$bookdetail->bookimage) }}" width="250" height="150" alt="">
  <div class="media-body">
    <h5 class="mt-0">Very nice product. <span class="text-warning"><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-half-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span></h5>
    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
  </div>
</div>
	</div>
	
	
  <div class="row mb-5">
    <div class="media"> 
    <img src="{{ asset('storage/sellbooks/'.$bookdetail->bookimage) }}" width="250" height="150" alt="">

      <div class="media-body">
        <h5 class="mt-0"> Bad product.dont take this<span class="text-warning"><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span></h5>
        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. </div>
    </div>
  </div>
  
	
</x-frontend.layout.master>

