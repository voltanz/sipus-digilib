@extends('admin/template/default')

@section('title','Edit Buku')

@section('content')
@push('cssoption')

<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
@endpush

<div class="row mt-3">
    <div class="col-md-4">
        <!-- general form elements -->
        <div class="card card-info card-outline">
            <div class="card-body box-profile">
                <div class="text-center">
                    <img class="img-thumnail img-fluid" style="width: 300px;" src="{{ $book->getCover() }}" alt="User profile picture">
                </div>
                <h3 class="profile-username text-center">Cover Buku</h3>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
    <div class="col-md-8">
        <div class="card card-info card-outline">
            <div class="card-header p-2">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#description" data-toggle="tab">Deskripsi</a></li>
                    <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Detail</a></li>
                </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
                <div class="tab-content">
                    <div class="active tab-pane" id="description">
                        {{ $book->description }}
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="timeline">
                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Judul</b> <a class="float-right">{{$book->title}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Penerbit</b> <a class="float-right">-</a>
                            </li>
                            <li class="list-group-item">
                                <b>Penulis</b> <a class="float-right">{{ucwords($book->author->name)}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Jumlah Halaman</b> <a class="float-right">-</a>
                            </li>
                            <li class="list-group-item">
                                <b>Stok Buku</b> <a class="float-right">{{ $book->qty }}</a>
                            </li>
                        </ul>

                    </div>
                    <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
            </div><!-- /.card-body -->
        </div>
        <!-- card -->
    </div>
</div>
<hr>
@endsection

@push('scripts')
<script src="{{ asset('assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<script src="{{asset('assets/plugins/select2/js/select2.full.min.js')}}"></script>
<script>
    $('#summernote').summernote({
        height: 200,
        airMode: true,
        readOnly: true,
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
</script>

@endpush()