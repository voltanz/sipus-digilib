@extends('frontend.default')
@section('title','Detail')

@section('content')
<div class="container">
    <div class="row">
        <div class="col s12 m12">
            <blockquote>
                <h5>Daftar Buku Sedang Dipinjam</h5>
            </blockquote>
            <div class="card">
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th style="width: 5px;">No</th>
                            <th>Judul</th>
                            <th>Sampul</th>
                            <th>Tgl Pinjam</th>
                            <th>Tgl Kembali</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($detail as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><a href="{{ route('book.show',$row->book->id) }}"> {{ $row->book->title }}</a></td>
                            <td>
                                <img src="{{ $row->book->getCover() }}" alt="" style="width:80px;">
                            </td>
                            <td>{{ date('d-m-Y',strtotime($row->tgl_pinjam)) }}</td>
                            <td>{{ date('d-m-Y',strtotime($row->tgl_kembali)) }}</td>
                            <td>
                                @if($row->status == 0)
                                <span class="new badge yellow" data-badge-caption="Belum Kembali"></span>
                                @else
                                <span class="new badge" data-badge-caption="Sudah Kembali"></span>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <blockquote>
                    *Harap Mengembalikan Buku Sesuai Tanggal Kembali, denda keterlambatan 1000/hari/buku
                </blockquote>
            </div>
            <a href="{{ route('transaksi.index') }}" class="btn teal"><i class="material-icons">arrow_back</i></a>
        </div>
    </div>
</div>
@endsection