<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan</title>
</head>

<body>
    <div class="w-100">
        <section id="kop"></section>
        <section id="isi">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NISN</th>
                        <th scope="col">Kode</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cetak as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td class="text-capitalize">{{ $item->user->name }}</td>
                            <td>{{ $item->user->nisn }}</td>
                            <td>{{ $item->kode_pinjam }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
        <section id="footer"></section>
    </div>
</body>

</html>