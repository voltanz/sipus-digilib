@extends('frontend.default')
@section('title', 'Detail Buku')
@section('content')
    <div class="container">
        <div class="col s12 m7">
            <h2 class="text-center mb-4 pt-3">Detail Buku</h2>
            <div class="card horizontal p-3">
                <center>
                    <div class="card-image pb-3">
                        <img src="{{ $book->getCover() }}" style="width:20rem">
                    </div>
                </center>
                <div class="card-stacked p-3">
                    <div class="card-content">
                        <h4 class="card-title"><b>{{ ucwords($book->title) }}</b></h4>
                        <blockquote>
                            <p>{{ $book->description }}</p>
                        </blockquote>
                        <hr>
                        <div class="row">
                            <div class="col s6 m3">
                                <p>Penulis</p>
                                <p>Penerbit</p>
                                <p>Jumlah Stok</p>
                            </div>
                            <div class="col s6 m5">
                                <p><b>{{ $book->author->name }}</b></p>
                                <p><b>{{ $book->publisher }}</b></p>
                                <p><b>{{ $book->qty }}</b></p>
                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <form action="{{ route('book.borrow') }}" method="POST">
                            @csrf
                            <input type="hidden" name="book_id" value="{{ $book->id }}">
                            <input type="hidden" name="title" value="{{ $book->title }}">
                            <button type="submit" class="btn-floating waves-effect waves-light teal lighten-2"><i
                                    class="material-icons">add</i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <blockquote>
            <p class="flow-text">Koleksi Buku lain dari Penulis: <b>{{ $book->author->name }}</b></p>
        </blockquote>
        <div class="row">
            @foreach ($books->shuffle() as $book)
                @include('frontend/templates/partials/component-card', $book)
            @endforeach()
        </div>
    </div>
@endsection
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.tooltipped');
        var instances = M.Tooltip.init(elems, options);
    });

    // Or with jQuery

    $(document).ready(function() {
        $('.tooltipped').tooltip();
    });
</script>
