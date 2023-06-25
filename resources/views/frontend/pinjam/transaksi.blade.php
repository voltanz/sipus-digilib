@extends('frontend.default')
@section('title', 'Daftar Peminjaman')

@section('content')
    <div class="container py-5" style="height: 100vh">
        <div class="d-flex flex-column align-items-center">
            <h2 class="text-capitalze text-center mb-4">::Daftar Buku Yang Dipinjam::</h2>
            <table class="table w-100">
                <thead>
                    <tr>
                        <th style="width: 5px;">No</th>
                        <th class="center">Kode Pinjam</th>
                        <th class="center">Opsi</th>
                    </tr>
                    @foreach ($borrow as $borrow)
                        <tr>
                            <td class="center">{{ $loop->iteration }}</td>
                            <td class="center">{{ $borrow->kode_pinjam }}</td>
                            <td class="center">
                                <a href="{{ route('detail_pinjam', $borrow) }}" class="btn teal"><i
                                        class="material-icons">list</i></a>
                            </td>
                        </tr>
                    @endforeach
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
@endsection
