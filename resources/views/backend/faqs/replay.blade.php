 
    <x-backend.layout.master>
        @slot('title')
        Faq Answer
        @endslot
    <div class="card mb-4 mt-4">
       
        <div class="card-header ">
            <i class="fas fa-table me-1"></i>
            Give FAQ Answer
           <a href="{{ route('faqs.index') }}"> <button class=" btn-sm btn btn-outline-primary"><i class="fa-solid fa-backward"></i></button></a>
        </div>
      
        <div class="card w-75 mx-auto mt-4 mb-4" style="background-color: #f3fcf2">
            <div class="card-header text-center shadow-sm" style="background-color: #58ed85">
             <h4> <b>Give FAQ Answer</b></h4>
            </div>
            
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>User Name</th>
                  <td>{{ $faq->name }}</td>
                 
                </tr>
                <tr>
                  <th>Question</th>
                  <td>{{ $faq->comment }}</td>
                 
                </tr>
             
              </thead>
              <tbody>
              </tbody>
            </table>

          <div class="cart-footer bg-info">
          
          </div>
          </div>
    </div>
     
    </x-backend.layout.master>
 
 
 