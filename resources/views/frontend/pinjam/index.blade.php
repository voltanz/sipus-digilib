@extends('frontend.default')
@section('title', 'Data Keranjang')

@section('content')
    <div class="container py-5"">
        <div class="d-flex flex-column align-items-center text-capitalize">
            <h2 class="text-center mb-4">::Daftar buku yang akan dipinjam::</h2>
            <table class="table w-100">
                <thead>
                    <tr>
                        <th style="width: 5px;">No</th>
                        <th>Judul</th>
                        <th>Sampul</th>
                        <th>Tgl Pinjam</th>
                        <th>Tgl Kembali</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><a class="text-dark text-decoration-none"
                                    href="{{ route('book.show', $book->book_id) }}">{{ Str::limit($book->book->title, 40) }}</a>
                            </td>
                            <td>
                                <img src="{{ $book->book->getCover() }}" style="width: 60px;">
                            </td>
                            <td>
                                <input readonly name="tgl_pinjam" type="date" value="{{ date('Y-m-d') }}"
                                    class="border-0">
                            </td>
                            <td>
                                <input readonly type="date" name="tgl_kembali"
                                    value="{{ date('Y-m-d', strtotime('+7days')) }}" class="border-0">
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
                <div class="d-flex flex-column justify-content-start w-100">
                    <blockquote>
                        *Maksimal Peminjaman 7 hari, lebih dari itu akan dikenakan denda 1000/hari
                    </blockquote>
                    <form action="{{ route('transaksi.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ Auth()->user()->id }}">
                        <button type="submit" class="btn btn-primary text-light">Pinjam</button>
                </div>
                </form>
            @endif
        </div>
    </div>
@endsection
