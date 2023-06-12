<a class="btn btn-info btn-sm" href="{{ route('admin.user.detail',$model) }}">
    <i class="fas fa-pencil-alt">
    </i>
</a>
<form id="deleteForm" action="}" method="POST" class="d-inline">
    @csrf
    @method('DELETE')
    <button type="submit" id="tombol" onclick="return confirm('Apakah kamu yakin?')" class="btn btn-danger btn-sm" href="{{ route('admin.user.detail',$model) }}"> 
    <i class=" fas fa-trash"></i>
        Delete
    </button>
</form>
<a class="btn btn-info btn-sm" href="{{ route('admin.user.detail',$model) }}">
    <i class="fas fa-list">
    </i>
</a>
