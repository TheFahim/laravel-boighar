 
 
<form method="POST" {{ $attributes }}>
    @csrf
    @method('delete')
    <button type="submit" class="btn   d-flex btn btn-outline-danger btn-sm" onclick="return confirm('Are you Sure?')"><i class="fa-solid fa-trash-can"></i></button>
 </form> 