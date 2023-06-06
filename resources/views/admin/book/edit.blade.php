@extends('admin/template/default')


@section('title','Edit Buku')

@section('content')
@push('cssoption')

<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
@endpush

<div class="col-md-10 mt-3">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Form Edit Data Buku</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="/admin/book/{{ $book->id }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="card-body">
                <div class="form-group">
                    <label>Judul Buku</label>
                    <input type="text" class="form-control" name="title" placeholder="Masukkan Judul Buku" value="{{ $book->title }}">
                </div>
                <div class="form-group">
                    <label>Kategori Buku</label>
                    <select name="category_id" class="form-control select2bs4" style="width: 100%;">
                        <option value="{{ $book->category_id }}">{{ $book->category->category_name}}</option>
                        @foreach ($categories as $row)
                        <option value="{{ $row->id }}">{{ $row->category_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Nama Penulis</label>
                    <select name="author_id" class="form-control select2bs4" style="width: 100%;">
                        <option value="{{ $book->author_id }}">{{ $book->author->name}}</option>
                        @foreach ($author as $row)
                        <option value="{{ $row->id }}">{{ $row->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea id="" class="form-control" rows="6" name="description">{{ $book->description }}</textarea>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Cover</label>
                    <div class="col-sm-3">
                        <img src="{{ asset($book->cover) }}" class="img-thumbnail" style="height: 120px;" alt="">
                    </div>
                    <div class="col-sm-7">
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
                </div>
                <div class="form-group">
                    <label>Jumlah</label>
                    <input type="number" class="form-control" name="qty" value="{{ $book->qty }}">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
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
<!-- Summernote -->
<script src="{{asset('assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script>
    $('#summernote').summernote({
        height: 200
    })

    // customfile

    $(document).ready(function() {
        bsCustomFileInput.init();
    });

    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
        theme: 'bootstrap4'
    })

    $(function() {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1');
        //bootstrap WYSIHTML5 - text editor
        $(".textarea").wysihtml5();
    });
</script>

@endpush()