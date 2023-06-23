@extends('admin/template/default')

@section('content')
    <div class="col-md-10 mt-3">
        <div class="card card-info">
            <div class="card-header">
                <h5> Edit Profile </h5>
            </div>
            @if ($errors->any())
                <div class="card-body">
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
            <form method="post" action="{{ route('profile.update', auth()->user()->id) }}" id="myForm">
                @method('PUT')
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" name="name" class="form-control" id="name"
                            value="{{ $Profile->name }}" ariadescribedby="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email"
                            value="{{ $Profile->email }}" ariadescribedby="email">
                    </div>
                    <div class="form-group">
                        <label for="phone">No_Handphone</label>
                        <input type="phone" name="phone" class="form-control" id="phone"
                            value="{{ $Profile->phone }}" ariadescribedby="phone">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-info">Simpan</button>
                </div>
            </form>
        </div>
    </div>
    </div>
@endsection
