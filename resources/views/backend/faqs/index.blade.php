<x-backend.layout.master>
    @slot('title')
    Faq backend
    @endslot
<div class="card mb-4">
    <div class="card-header" style="background-color: #defffe">
        <i class="fas fa-table me-1"></i>
        Users Questions
    </div>
   <x-backend.alertmessage.alertmessage type="success"/>
    <div class="card-body">
      <table id="datatablesSimple">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Comment</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($faqs as $faq)
          <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$faq->name}}</td>
            <td>{{$faq->email}}</td>
            <td>{{$faq->comment}}</td>
            <td>

              <a class="btn btn-primary" href="{{route('faqs.edit',['faq'=>$faq->id])}}"> Edit</a>
                
                <form class="d-inline" method="POST" action="{{route('faqs.destroy',['faq'=>$faq->id])}}">
                  @csrf
                  @method('delete')
                      <button class="btn btn-danger"> Delete</button>
                  </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
       
    </div>
</div>
 
</x-backend.layout.master>