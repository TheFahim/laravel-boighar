<x-backend.layout.master>
    @slot('title')
    Faq
    @endslot
    @slot('bottomheader')
    Users Questions
    @endslot

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
                <a href="#" class="btn btn-primary">Edit</a>
                <a href="#" class="btn btn-danger">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

</x-backend.layout.master>