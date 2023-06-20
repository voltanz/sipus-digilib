<!DOCTYPE html>
<html>

<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #000100;
            color: white;
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" <div
        class="container mt-5">
</head>

<body>
    <div class="row justify-content-center align-items-center">
        <table border="0" width="100%" style="text-align:center;">
            <tbody>
                <tr>
                    <td align="left" width="15%"><img src="assets/logo/logo_jatim.png" width="100px"
                            alt="Logo Jatim" title="Logo Jatim"></td>
                    <td align="center" width="70%">
                        <div>
                            <span style="font-family: 'Times New Roman'; font-size:16pt">PEMERINTAH PROVINSI JAWA
                                TIMUR</span><br>
                            <span style="font-family: 'Times New Roman'; font-size:16pt">DINAS PENDIDIKAN</span><br>
                            <span style="font-family: 'Times New Roman'; font-size:16pt"><strong>SMA NEGERI 1
                                    BLEGA</strong></span><br>
                            <span style="font-family: 'Times New Roman'; font-size:14pt">Jl. Raya Blega Kec. Blega Kab.
                                Bangkalan. Telp. (031) 3041 027</span><br>
                            <span style="font-family: 'Times New Roman'; font-size:14ptt">e-mail :<a
                                    href="mailto:">smansaga@yahoo.co.id</a></span>
                        </div>
                    </td>
                    <td align="left" width="15%"><img src="assets/logo/smansaga.png" width="100px"
                            alt="Logo Smansaga" title="Logo Smansaga"></td>
                </tr>
            </tbody>
        </table>
        <hr style="height:10px; border:0; border-top:3px double #000000">
        <div style="text-align: center">
            <h3>Laporan Peminjaman</h3><br>
        </div>

        <table id="customers">
            <tr style="font-family: 'Times New Roman'; font-size:12pt">
                <th>No.</th>
                <th>Nama</th>
                <th>NISN</th>
                <th>Kode</th>
            </tr>
            @foreach ($cetak as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td class="text-capitalize">{{ $item->user->name }}</td>
                    <td>{{ $item->user->nisn }}</td>
                    <td>{{ $item->kode_pinjam }}</td>
                </tr>
            @endforeach
        </table>
    </div>
</body>


</html>
