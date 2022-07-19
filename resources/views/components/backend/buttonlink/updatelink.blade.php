 
 
<form method="POST" {{ $attributes }}>
    @csrf
    @method('patch')
    <button type="submit" class="btn btn-success d-flex">Update</button>
 </form>