<x-backend.layout.master>
    @slot('title')
    Faq edit
    @endslot
    @slot('bottomheader')
    Edit Questions
    @endslot

    @if ($errors->any())
    <x-backend.alertmessage.alertmessage />
    @endif

    <form class="container row g-3" method="POST" action="{{route('faqs.update',['faq'=>$faq->id])}}">
        @csrf
        @method('patch')

            <x-frontend.forms.input name="name" type="text" id="name" :value="old('name',$faq->name)"/>


            <x-frontend.forms.input name="email" type="email" id="email" :value="old('email',$faq->email)"/>
          <br>
          


            <x-frontend.forms.textarea name="comment" type="text" id="comment" :value="old('comment',$faq->comment)"/>





        <div class="col-6">
          <button type="submit" class="btn btn-primary">Edit</button>
        </div>
      </form>

</x-backend.layout.master>