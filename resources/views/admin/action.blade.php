<a class="btn btn-info btn-sm" href="{{ route('admin.author.edit',$model) }}">
    <i class="fas fa-pencil-alt">
    </i>
    Edit
</a>
<form id="deleteForm" action="/admin/author/{{$id}}" method="POST" class="d-inline">
    @csrf
    @method('DELETE')
    <button type="submit" id="tombol" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">
        <i class=" fas fa-trash">
        </i>
        Delete
    </button>
</form>