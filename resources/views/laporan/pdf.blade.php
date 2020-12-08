<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
    </style>
</head>
<body>
    <div style="text-align:center;">
        <h2>QUICK RESPON LAPORAN KERJA</h2>
    </div>
    <table >
        <thead>
            <tr>
                <th>NO</th>
                <th>Kabupaten/Kota</th>
                <th>Tanggal</th>
                <th>Sasaran Kerja</th>
                <th>Nama Pelaksana</th>
                <th>Uraian Kerja </th>
                <th>Jumlah Output hasil kerja</th>
                <th>Kendala/Permasalahan</th>
                <th>Dokumen lampiran</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach($data as $value)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$value->id_kabupaten}}</td>
                <td>{{$value->tgl_laporan}}</td>
                <td>{{$value->sasaran_kerja}}</td>
                <td>{{$value->nama_pelaksana}}</td> 
                <td>{{$value->uraian_kerja}}</td>
                <td>{{$value->jumlah_output_hasil}}</td>
                <td>{{$value->kendala}}</td>
                <td>{{$value->dokument_lampiran}}</td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
</body>
</html>