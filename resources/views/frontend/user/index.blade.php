@extends('frontend.default')
@section('title','Profil Pengguna')


@section('content')
<div class="container">
    <div class="row">
        <div class="col s12 m4">
            <blockquote>
                <h5>Foto Profil</h5>
            </blockquote>
            <div class="card">
                <div class="card-image">
                    <img src="https://materializecss.com/images/sample-1.jpg" style="height: 300px;">
                    <a class="btn-floating halfway-fab waves-effect waves-light teal"><i class="material-icons">edit</i></a>
                </div>
            </div>
        </div>
        <div class="col s12 m8">
            <blockquote>
                <h5>Profil Pengguna</h5>
            </blockquote>
            <div class="card">
                <div class="card-content">
                    <ul class="collection">
                        <li class="collection-item avatar">
                            <i class="material-icons circle teal">person</i>
                            <span class="title">{{ ucwords($user->name) }}</span>
                        </li>
                        <li class="collection-item avatar">
                            <i class="material-icons circle teal">email</i>
                            <span class="title">{{ $user->email }}</span>
                        </li>
                        <li class="collection-item avatar">
                            <i class="material-icons circle teal">home</i>
                            <span class="title">
                                @if($user->address)
                                {{ $user()->address}}
                                @else
                                -
                                @endif
                            </span>
                        </li>
                        <li class="collection-item avatar">
                            <i class="material-icons circle teal">phone</i>
                            <span class="title">
                                @if($user->phone)
                                {{ $user->phone }}
                                @else
                                -
                                @endif
                            </span>
                        </li>
                    </ul>
                </div>
                <div class="card-action">
                    <a href="{{ route('profile.edit',$user) }}" class="btn teal"><i class="material-icons">edit</i></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection