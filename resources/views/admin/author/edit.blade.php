@extends('admin/template/default')

@section('title','Edit Penulis')

@section('content')

<div class="col-md-10 mt-3">
    <!-- general form elements -->
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Form Edit Penulis</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="/admin/author/{{$author->id}}">
            {{ csrf_field() }}
            @method('PATCH')
            <div class="card-body">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') ?? $author->name }}">
                    @error('name')
                    <span class="in-block text-red">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-info">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $('#summernote').summernote({
        height: 200
    })
</script>

@endpush()