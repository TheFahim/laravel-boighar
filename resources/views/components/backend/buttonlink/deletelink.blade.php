 
 
<form method="POST" {{ $attributes }}>
    @csrf
    @method('delete')
    <button type="submit" class="btn text-danger d-flex" onclick="return confirm('Are you Sure?')"><i class="fa-solid fa-trash-can"></i></button>
 </form> 