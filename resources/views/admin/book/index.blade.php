@extends('admin/template/default')

@push('datatables')
<!-- data tables -->
<link rel="stylesheet" href="{{asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

@endpush()

@section('title','Daftar Buku')

@section('content')

<div class="card mt-3">
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Yeah!</strong> {{ session('success') }}
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <div class="card-header">
        <h3 class="card-title">Data Buku</h3>
        <a href="{{ route('admin.book.create') }}" class="btn btn-primary float-right"><i class="fa fa-plus"></i> Buku</a>
    </div>
    <div class="card-body">
        <table id="dataTable" class="table table-bordered table-hover" style="width: 100%;">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Cover</th>
                    <th>Jumlah</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
@endsection

@push('scripts')
<!-- data tables -->
<script src="{{asset('assets/plugins/datatables/jquery.datatables.min.js') }}"></script>
<script src="{{asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script>
    $(function() {
        $('#dataTable').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: " {{ route('admin.book.data') }}",
            select: true,
            columns: [{
                    data: 'DT_RowIndex',
                    orderable: false
                },
                {
                    data: 'title'
                },
                {
                    data: 'author'
                },
                {
                    data: 'cover'
                },
                {
                    data: 'qty'
                },
                {
                    data: 'action',
                }
            ],
        })
    })
</script> @endpush