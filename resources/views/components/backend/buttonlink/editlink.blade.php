
 
<form method="GET" {{ $attributes }}>
    @csrf
    <button type="submit" class="btn d-flex btn btn-outline-success btn-sm" onclick="return confirm('Are you Sure?')">Edit</button>
</form> 
 
 
 
