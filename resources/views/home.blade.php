@extends('frontend.default')

@section('content')
<div class="container">
    <div class="col s12 m12">
        @foreach($books as $book)
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
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection