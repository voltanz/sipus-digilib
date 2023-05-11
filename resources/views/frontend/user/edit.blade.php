@extends('frontend.default')
@section('title','Edit Data Pengguna')
@section('content')
<div class="container">
    <div class="row">
        <div class="col s12 m12">
            <h5 class="center">Edit Data Pengguna</h5>
            <form class="col s12 offset-m2 m8" action="{{ route('register') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="first_name" name="name" autocomplete="off" type="text" class="@error('name') invalid @enderror" value="{{ $user->name }}">
                        <label for="first_name">Nama Lengkap</label>
                        @error('name')
                        <span class="helper-text" data-error="{{ $message }}"></span>
                        @enderror()
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">email</i>
                        <input id="email" readonly name="email" type="email" autocomplete="off" value="{{ $user->email }}">
                        <label for="email">Email</label>
                        <span class="helper-text" data-error="">Email tidak bisa diubah</span>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">home</i>
                        <textarea name="address" id="address" type="address" class="materialize-textarea"></textarea>
                        <label for="address">Alamat</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">lock</i>
                        <input name="phone" id="phone" type="number" class="validate">
                        <label for="phone">Nomor Telepon</label>
                    </div>
                </div>
                <button type="submit" class="waves-effect waves-light btn teal lighten-2 right">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection