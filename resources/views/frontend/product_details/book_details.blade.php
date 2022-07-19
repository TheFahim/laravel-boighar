
 <x-frontend.layout.master>
    @slot('title')
    BookDetails
    @endslot
<div class="container card " style="background-color: #c8f7f7;margin-bottom: 100px;">
    <h2 class="text-center m-3   card rounded-pill" style="background-color: hsl(128, 89%, 49%);"><b>Book Details</b></h2>
    <div class="row justify-content-center">
         <div class="col-3 card m-3  rounded " style="background-color:white">
          <img src="{{ asset('storage/sellbooks/'.$bookdetail->bookimage) }}" alt="">

         </div>
         <div class="col-5 m-3">
           <address class="">
               <p><b>Book Title: </b>{{ $bookdetail->booktitle }}</p>
               <p><b>Book Author: </b>{{ $bookdetail->bookauthor }}</p>
               <p><b>Book Edition: </b>{{ $bookdetail->bookedition }}</p>
               <p><b>Price: </b>{{ $bookdetail->price }}</p>
               <p><b>Mobile Number: </b>{{ $bookdetail->mobile }}</p>
			   <label for="number"><b>Quantity:</b></label>
			   <input type="number" placeholder="" value="1" style="width:80px ;" class="rounded"><br>
             <a href="{{ route('cart',['cart'=>$bookdetail->id]) }}"> <button class="btn   rounded-pill   m-2 fa-solid fa-cart-plus" style="background-color:#ed9dd1 ;"><span class="ml-2">Add to Cart</span></button></a>
			 
           </address>
         </div>
    </div>
</div>
</x-frontend.layout.master>