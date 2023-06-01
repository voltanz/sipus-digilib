@extends('frontend.default')
@section('title', 'Detail')

@section('content')
    <div class="container d-flex flex-column py-5" style="height: 100vh">
        <h2 class="text-center text-capitalize">Daftar Buku Sedang Dipinjam</h2>
        <table class="table">
            <thead>
                <tr>
                    <th style="width: 5px;">No</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Sampul</th>
                    <th scope="col">Tgl Pinjam</th>
                    <th scope="col">Tgl Kembali</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($detail as $row)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td><a class="text-dark text-capitalize text-decoration-none"
                                href="{{ route('book.show', $row->book->id) }}">
                                {{ $row->book->title }}</a></td>
                        <td>
                            <img src="{{ $row->book->getCover() }}" alt="" style="width:80px;">
                        </td>
                        <td>{{ date('d-m-Y', strtotime($row->tgl_pinjam)) }}</td>
                        <td>{{ date('d-m-Y', strtotime($row->tgl_kembali)) }}</td>
                        <td class="text-capitalize">
                            @if ($row->status == 0)
                                <span class="text-dark">belum kembali</span>
                            @else
                                <span class="text-dark">sudah kembali</span>
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
