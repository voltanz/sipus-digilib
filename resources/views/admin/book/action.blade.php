<a class="btn btn-info btn-sm" href="book/{{$id}}/edit">
    <i class="fas fa-pencil-alt">
    </i>
    Edit
</a>
<form id="deleteForm" action="book/{{$id}}" method="POST" class="d-inline">
    @csrf
    @method('DELETE')
    <button type="submit" id="tombol" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">
        <i class=" fas fa-trash">
        </i>
        Delete
    </button>
</form>
<a class="btn btn-info btn-sm" href="book/{{$id}}">
    <i class="fas fa-list">
    </i>
    View
</a>