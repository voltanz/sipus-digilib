@extends('frontend.default')
@section('title','Detail Buku')
@section('content')
<div class="container">
    <div class="col s12 m7">
        <h4 class="header">Detail Buku</h4>
        <div class="card horizontal">
            <div class="card-image">
                <img src="{{ $book->getCover() }}">
            </div>
            <div class="card-stacked">
                <div class="card-content">
                    <p class="card-title"><b>{{ ucwords($book->title) }}</b></p>
                    <blockquote>
                        <p>{{ $book->description }}</p>
                    </blockquote>
                    <hr>
                    <div class="row">
                        <div class="col s6 m3">
                            <p>Penulis</p>
                            <p>Jumlah Stok</p>
                        </div>
                        <div class="col s6 m5">
                            <p><b>{{ $book->author->name }}</b></p>
                            <p><b>{{ $book->qty }}</b></p>
                        </div>
                    </div>
                </div>
                <div class="card-action">
                    <form action="{{ route('book.borrow') }}" method="POST">
                        @csrf
                        <input type="hidden" name="book_id" value="{{ $book->id }}">
                        <input type="hidden" name="title" value="{{ $book->title }}">
                        <button type="submit" class="btn-floating waves-effect waves-light teal lighten-2"><i class="material-icons">add</i></button>
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
        @include('frontend/templates/partials/component-card',$book)
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