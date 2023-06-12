@extends('admin.template.default')

@section('title', $user->id)
@section('content')
    <div class="container py-5">
        <div class="d-flex flex-column align-items-center justify-content-center"></div>
        <h2 class="text-center mb-4">Data Pengguna</h2>
        <div class="d-flex justify-content-center">
            <table class="table table-borderless w-50">
                <tbody>
                    <tr>
                        <td>Name</td>
                        <td>:</td>
                        <td>{{ $user->name }}</td>
                    </tr>
                    <tr>
                        <td>NISN</td>
                        <td>:</td>
                        <td>{{ $user->nisn }}</td>
                    </tr>
                    <tr>
                        <td>E-mail</td>
                        <td>:</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                    <tr>
                        <td>Tanggal Pembuatan</td>
                        <td>:</td>
                        <td>{{ $user->created_at }}</td>
                    </tr>
                    <tr>
                        <td>Tanggal Verifikasi E-mail</td>
                        <td>:</td>
                        <td>{{ $user->email_verified_at }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
