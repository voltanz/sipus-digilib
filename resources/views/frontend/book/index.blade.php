@extends('frontend.default')
@section('title','Homepage')
@section('content')
<div class="container">
    <blockquote>
        <p class="flow-text">Koleksi buku</p>
    </blockquote>
    <div class="row">
        @foreach ($books as $book)
        @include('frontend/templates/partials/component-card',$book)
        @endforeach()
    </div>
    {{ $books->links('vendor.pagination.materialize') }}
</div>
@endsection