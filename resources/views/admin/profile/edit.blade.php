@extends('siswa.layout')
@section('content')
< class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
        <div class="card-header">
            Edit Mahasiswa
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
            <form method="post" action="{{ route('useredit', $siswa->Nama) }}" id="myForm">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="Nama">Nama</label> 
                    <input type="text" name="Nama" class="formcontrol" id="Nama" value="{{ $Profile->Nama }}" ariadescribedby="Nama" > 
                </div>
                <div class="form-group">
                    <label for="Email">Email</label> 
                    <input type="Email" name="Email" class="formcontrol" id="Email" value="{{ $Profile->Email }}" ariadescribedby="Email">
                </div>
                <div class="form-group">
                    <label for="No_Handphone">No_Handphone</label> 
                    <input type="No_Handphone" name="No_Handphone" class="formcontrol" id="No_Handphone" value="{{ $Profile->No_Handphone }}" ariadescribedby="No_Handphone" > 
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection