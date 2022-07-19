<x-frontend.layout.master>
    @slot('title')
   Cart
    @endslot
<!-- Slider Start -->
 <div class="container">
     <div class="container bg-warning">
           <h1 class="text-white text-center">View Selected Product</h1>
     </div>
     <table class="table table-bordered">
        <thead>
          <tr>
            <th>Order No</th>
            <th>Book Title</th>
            <th>Book Author</th>
            <th>Total Price</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{1}}</td>
            <td>{{ $cart->booktitle }}</td>
            <td>{{ $cart->bookauthor }}</td>
            <td>{{ $cart->price }}</td>
          
          </tr>
         
           
        </tbody>
      </table>
      <a href="{{ route('payment',['pay'=>$cart->id])}}"> <button class="btn btn-warning text-white" style="margin-left:500px;margin-bottom:40px;">Go to Pay</button></a>
 </div>
</x-frontend.layout.master>