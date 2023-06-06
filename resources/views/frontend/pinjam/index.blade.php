@extends('frontend.default')
@section('title', 'Data Keranjang')

@section('content')
    <div class="container d-flex flex-column py-5" style="height: 100vh">
        <h2 class="text-center text-capitalize">Daftar Buku Yang Akan Dipinjam</h2>
        <table class="table">
            <thead>
                <tr>
                    <th style="width: 5px;">No</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Sampul</th>
                    <th scope="col">Tgl Pinjam</th>
                    <th scope="col">Tgl Kembali</th>
                    <th scope="col">Opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td><a class="text-decoration-none text-black"
                                href="{{ route('book.show', $book->book_id) }}">{{ Str::limit($book->book->title, 40) }}</a>
                        </td>
                        <td>
                            <img src="{{ $book->book->getCover() }}" style="width: 60px;">
                        </td>
                        <td>
                            <input style="border: none" readonly name="tgl_pinjam" type="date"
                                value="{{ date('Y-m-d') }}">
                        </td>
                        <td>
                            <input style="border: none" readonly type="date" name="tgl_kembali"
                                value="{{ date('Y-m-d', strtotime('+7days')) }}">
                        </td>
                        <td>
                            <form action="{{ route('delete') }}" class="rignt-align" method="POST">
                                <input type="hidden" name="id" value="{{ $book->id }}">
                                <input type="hidden" name="book_id" value="{{ $book->book_id }}">
                                @csrf
                                @method('delete')
                                <button onclick="return confirm('Are you sure?')" type="submit"
                                    class="btn red small tooltipped" data-position="top" data-tooltip="Hapus"><i
                                        class="material-icons">delete</i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @if ($books->count() < 1)
        @else
            <blockquote>
                *Maksimal Peminjaman 7 hari, lebih dari itu akan dikenakan denda 1000/hari
            </blockquote>
            <form action="{{ route('transaksi.store') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ Auth()->user()->id }}">
                <button type="submit" class="btn btn-primary text-capitalize">simpan</button>
            </form>
        @endif
    </div>
@endsection
