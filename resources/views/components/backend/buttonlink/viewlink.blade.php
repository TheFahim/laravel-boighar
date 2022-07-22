
 <form method="GET" {{ $attributes }}>
    @csrf
    <button type="submit" class="btn d-flex btn btn-outline-info btn-sm" onclick="return confirm('Are you Sure?')">View</button>
</form> 