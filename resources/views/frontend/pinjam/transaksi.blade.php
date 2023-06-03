@extends('frontend.default')
@section('title','Daftar Peminjaman')

@section('content')
<div class="container">
    <div class="row">
        <div class="col s12 m12">
            <blockquote>
                <h5>Daftar Buku Yang Dipinjam</h5>
            </blockquote>
            <div class="card">
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th style="width: 5px;">No</th>
                            <th class="center">Kode Pinjam</th>
                            <th class="center">Opsi</th>
                        </tr>
                        @foreach($borrow as $borrow)
                        <tr>
                            <td class="center">{{ $loop->iteration }}</td>
                            <td class="center">{{ $borrow->kode_pinjam }}</td>
                            <td class="center">
                                <a href="{{ route('detail_pinjam',$borrow) }}" class="btn teal"><i class="material-icons">list</i></a>
                            </td>
                        </tr>
                        @endforeach
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection