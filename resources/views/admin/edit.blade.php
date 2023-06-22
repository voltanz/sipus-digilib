@extends('admin/template/default')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card card-info" style="width: 40rem;">
        <div class="card-header">
            <h5> Edit Admin </h5>
        </div>
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form method="post" action="{{ route('profile.update', auth()->user()->id) }}" id="myForm">
            @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="name">Nama</label> 
                    <input type="text" name="name" class="formcontrol" id="name" value="{{ $Profile->name }}" ariadescribedby="name" > 
                </div>
                <div class="form-group">
                    <label for="email">Email</label> 
                    <input type="email" name="email" class="formcontrol" id="email" value="{{ $Profile->email }}" ariadescribedby="email">
                </div>
                <div class="form-group">
                    <label for="phone">No_Handphone</label> 
                    <input type="phone" name="phone" class="formcontrol" id="phone" value="{{ $Profile->phone }}" ariadescribedby="phone" > 
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection