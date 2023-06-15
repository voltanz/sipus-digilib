@extends('admin/template/default')
@section('title', 'Daftar User')
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
            <h3 class="card-title">Data Pengguna</h3>
            <div class="dropdown float-right">
                <button class="btn btn-white dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Tambah Pengguna
                </button>
                <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item active" href="{{ route('admin.user.create') }}?select=user">User</a></li>
                    <li><a class="dropdown-item" href="{{ route('admin.user.create') }}?select=staff">Staff</a></li>
                    <li><a class="dropdown-item" href="{{ route('admin.user.create') }}?select=admin">Admin</a></li>
                </ul>
            </div>
            {{--
            <a href="{{ route('admin.user.create') }}" class="btn btn-dark float-right">
                Tambah Pengguna</a> --}}
        </div>
        <div class="card-body">
            <table id="dataTable" class="table table-bordered table-hover" style="width: 100%;">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection
@push('scripts')
    <!-- data tables -->
    <script src="{{ asset('assets/plugins/datatables/jquery.datatables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script>
        $(function() {
            $('#dataTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('admin.user.data') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'name'
                    },
                    {
                        data: 'email'
                    },
                    {
                        data: 'action'
                    },
                ],
            })
        })
    </script>
@endpush