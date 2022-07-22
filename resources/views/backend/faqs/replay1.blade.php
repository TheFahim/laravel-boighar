<x-backend.layout.master>
    @slot('title')
    Faq backend
    @endslot
 <div class="card w-50 mx-auto">
    <x-frontend.form.card_header text="Give Answer"/>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
              <tr>
                <th> </th>
                <td>{{ $sellbookshow->booktitle }}</td>
               
              </tr>
              <tr>
                <th> Book Author</th>
                <td>{{ $sellbookshow->bookauthor }}</td>
               
              </tr>
              
              
            </thead>
            <tbody>
            </tbody>
          </table>
        <form class="row g-3" method="POST" action="{{route('faqs.store')}}">
            <x-frontend.forms.textarea name="answer" type="text" id="comment" :value="old('comment')"/>
        </form>
    </div>
    

 </div>
 
</x-backend.layout.master>