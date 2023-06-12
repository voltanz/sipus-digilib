<a class="btn btn-info btn-sm" href="">
    <i class="fas fa-pencil-alt">
    </i>
</a>
<form id="deleteForm" action="}" method="POST" class="d-inline">
    @csrf
    @method('DELETE')
    <button type="submit" id="tombol" onclick="return confirm('Apakah kamu yakin?')" class="btn btn-danger btn-sm">
        <i class=" fas fa-trash">
        </i>
    </button>
</form>
<a class="btn btn-primary btn-sm" href="">
    <i class="fas fa-list">
    </i>
</a>
