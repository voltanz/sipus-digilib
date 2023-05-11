@extends('admin/template/default')

@push('datatables')
<!-- data tables -->
<link rel="stylesheet" href="{{asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

@endpush()

@section('title','Detail Peminjaman')

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
    @if (session('alert'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Oops!</strong> {{ session('alert') }}
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <div class="card-header">
        <h3 class="card-title">Detail Peminjaman</h3>
    </div>
    <div class="card-body">
        <table id="dataTable" class="table table-bordered table-hover" style="width: 100%;">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th class="text-center">Sampul</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Denda</th>
                    <th>Tanggal Pengembalian</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($detail as $row)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ Str::limit($row->title,20)}}</td>
                    <td class="text-center">
                        <img src="{{ $row->cover}}" alt="" style="width: 40px">
                    </td>
                    <td>{{ date('d-m-Y',strtotime($row->tgl_pinjam))}}</td>
                    <td>{{ date('d-m-Y',strtotime($row->tgl_kembali))}}</td>
                    <td>Rp{{ number_format($row->denda,2,',','.')}}</td>
                    @if($row->tgl_pengembalian !=null)
                    <td>{{ date('d-m-Y',strtotime($row->tgl_pengembalian))}}</td>
                    @else
                    <td>
                        <form action="{{ route('admin.borrow.update') }}" class="d-inline" method="POST">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="hidden" name="book_id" value="{{$row->book_id}}">
                                <input type="hidden" name="tgl_pinjam" value="{{$row->tgl_pinjam}}">
                                <input type="hidden" name="tgl_kembali" value="{{$row->tgl_kembali}}">
                                <input type="hidden" name="id" value="{{$row->id}}">
                                <input type="date" name="tgl_pengembalian" class="form-control" value="{{ date('d-m-Y') }}">
                                <div class="input-group-append">
                                    <button type="submit" onclick="return confirm('Apakah buku sudah dicek kembali?')" class="btn btn-info"><i class="fas fa-check"></i></button>
                                </div>
                            </div>
                        </form>
                    </td>
                    @endif
                    <td>
                        @if($row->status == 0)
                        <span class="badge bg-warning">Belum Kembali</span>
                        @else
                        <span class="badge bg-primary">Sudah Kembali</span>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
@endsection