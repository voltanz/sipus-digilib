<!DOCTYPE html>
<html>

<head>
    <style>
        #user {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #user td,
        #user th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #user tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #user tr:hover {
            background-color: #ddd;
        }

        #user th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #000503;
            color: white;
        }
    </style>
</head>

<body>

    <table border="0" width="100%" style="text-align:center;">
        <tbody>
            <tr>
                <td align="left" width="15%"><img src="{{ asset('assets/logo/smansaga.png') }}" width="100px"
                        height="100px" alt="Logo Smansaga" title="Logo Smansaga"></td>
                <td align="center" width="70%">
                    <div>
                        <span style="font-family: 'Times New Roman'; font-size:12pt">PEMERINTAH PROVINSI JAWA
                            TIMUR</span><br>
                        <span style="font-family: 'Times New Roman'; font-size:12pt">DINAS PENDIDIKAN</span><br>
                        <span style="font-family: 'Times New Roman'; font-size:14pt"><strong>SMA NEGERI 1
                                BLEGA</strong></span><br>
                        <span style="font-family: 'Times New Roman'; font-size:11pt">Jl. Raya Blega Kec. Blega Kab.
                            Bangkalan Telp (031) 3041 027 <br>email: smansaga@yahoo.co.id</span>
                    </div>
                </td>
                <td align="left" width="15%"><img src="{{ asset('assets/logo/logo_jatim.png') }}" width="100px"
                        height="100px" alt="Logo Jatim" title="Logo Jatim"></td>
            </tr>
        </tbody>
    </table>
    <hr style="height:10px; border:0; border-top:3px double #000000">
    <div style="text-align: center">
        <h3>Laporan Daftar Peminjaman</h3>
    </div>

    <table id="user">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NISN</th>
            <th>Kode</th>
        </tr>
        @foreach ($cetak as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->user->name }}</td>
                <td>{{ $item->user->nisn }}</td>
                <td>{{ $item->kode_pinjam }}</td>
            </tr>
        @endforeach
    </table>

</body>

</html>
