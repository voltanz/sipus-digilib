@extends('frontend.default')
@section('title', 'Daftar Peminjaman')

@section('content')
    <div class="container d-flex flex-column py-5" style="height: 100vh">
        <h2 class="text-center text-capitalize">Daftar Buku Yang Dipinjam</h2>
        <table class="table">
            <thead>
                <tr>
                    <th style="width: 5px;">No</th>
                    <th scope="col">Kode Pinjam</th>
                    <th scope="col">Opsi</th>
                </tr>
                @foreach ($borrow as $borrow)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $borrow->kode_pinjam }}</td>
                        <td>
                            <button class="btn btn-dark">
                                <a href="{{ route('detail_pinjam', $borrow) }}"
                                    class="text-light text-capitalize text-decoration-none">detail</a>
                            </button>
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
