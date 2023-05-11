@extends('admin/template/default')

@push('datatables')
<!-- data tables -->
<link rel="stylesheet" href="{{asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

@endpush()

@section('title','Penulis')

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
        <h3 class="card-title">Data Penulis</h3>
        <a href="{{ route('admin.author.create') }}" class="btn btn-primary float-right"><i class="fa fa-plus"></i> Penulis</a>
    </div>
    <div class="card-body">
        <table id="dataTable" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Penulis</th>
                    <th>Opsi</th>
                </tr>
            </thead>
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
            processing: true,
            serverSide: true,
            ajax: "{{ route('admin.author.data') }}",
            columns: [{

                    data: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'name'
                },
                {
                    data: 'action'

                }
            ],
        })
    })
</script>
@endpush