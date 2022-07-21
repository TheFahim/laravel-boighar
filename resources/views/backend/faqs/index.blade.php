<x-backend.layout.master>
    @slot('title')
    Faq backend
    @endslot
    @slot('bottomheader')
    Users Questions
    @endslot

    <x-backend.alertmessage.alertmessage type="success" :message="session('message')" />
    {{-- @dd($faqs) --}}
    <table class="table">
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

</x-backend.layout.master>