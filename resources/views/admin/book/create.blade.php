@extends('admin/template/default')

@section('title','Tambah Buku')

@section('content')

@push('cssoption')

<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">

@endpush

<div class="col-md-10 mt-3">
    <!-- general form elements -->
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Form Tambah Data Buku</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="{{ route('admin.book.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Judul Buku</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Masukkan Judul Buku" value="{{ old('title') }}">
                    @error('title')
                    <span class="note-help-block text-red">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Kategori</label>
                    <select name="category_id" class="form-control select2bs4" style="width: 100%;">
                        @foreach ($categories as $row)
                        <option value="{{ $row->id }}">{{ $row->category_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Nama Penulis</label>
                    <select name="author_id" class="form-control select2bs4" style="width: 100%;">
                        @foreach ($author as $row)
                        <option value="{{ $row->id }}">{{ $row->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea id="" class="form-control @error('description') is-invalid @enderror" rows="6" name="description"> {{ old('description') }}</textarea>
                    @error('description')
                    <span class="note-help-block text-red">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                    </div>
                    @error('image')
                    <span class="note-help-block text-red">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Jumlah</label>
                    <input type="number" class="form-control @error('qty') is-invalid @enderror" name="qty" placeholder="Masukkan jumlah buku">
                    @error('qty')
                    <span class="note-help-block text-red">{{ $message }}</span>
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
<script src="{{ asset('assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<script src="{{asset('assets/plugins/select2/js/select2.full.min.js')}}"></script>
<!-- ck editor -->
<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
<script>
    $(function() {
        CKEDITOR.replace('editor1');

        $(".textarea").wysihtml5();
    });
    var markup = 'Masukkan Deskripsi Buku';
    $('#summernote').summernote({
        placeholder: markup,
        height: 200,
    });

    $(document).ready(function() {
        bsCustomFileInput.init();
    });

    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
        theme: 'bootstrap4'
    })
</script>
@endpush