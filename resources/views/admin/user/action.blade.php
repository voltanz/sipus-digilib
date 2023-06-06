<a class="btn btn-info btn-sm" href="">
    <i class="fas fa-pencil-alt">
    </i>
    Edit
</a>
<form id="deleteForm" action="}" method="POST" class="d-inline">
    @csrf
    @method('DELETE')
    <button type="submit" id="tombol" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">
        <i class=" fas fa-trash">
        </i>
        Delete
    </button>
</form>
<a class="btn btn-info btn-sm" href="">
    <i class="fas fa-list">
    </i>
    View
</a>