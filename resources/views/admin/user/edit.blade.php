@extends('admin.template.default')

@section('title', 'Edit Pengguna')
@section('content')
    <div class="col-md-10 mt-3">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Form Pengguna</h3>
            </div>
            <form method="POST" action="/admin/user/{{ $user->id }}">
                {{ csrf_field() }}
                @method('PATCH')
                <div class="card-body">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name') ?? $user->name }}" name="name">
                        @error('name')
                            <span class="in-block text-red">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') ?? $user->email }}">
                        @error('email')
                            <span class="in-block text-red">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-info">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
