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
                $helpme = 0  
            @endphp
            @foreach($data as $laporan)
            @php
                $helpme++
            @endphp
            <tr>
                <th scope="row">{{ $loop->iteration}}</th>
                 
                    @foreach($countKota as $kota)
                        @if($kota->id_kabupaten == $laporan->id_kabupaten )
                            @if($helpme == 1)
                                <td rowspan="{{ $kota->jmlKab }}" >{{$laporan->id_kabupaten}}</td> 
                            @elseif($kota->jmlKab == $helpme )   
                                @php
                                    $helpme = 0
                                @endphp
                            @endif 
                        @endif 
                    @endforeach 
                <td> {{$laporan->tgl_laporan}}</td> 
                <td>{{$laporan->sasaran_kerja}}</td>
                <td>{{$laporan->nama_pelaksana}}</td>
                <td>{{$laporan->bagian_pelaksana}}</td>
                <td>{{$laporan->uraian_kerja}}</td>
                <td>{{$laporan->jumlah_output_hasil}}</td>
                <td>{{$laporan->kendala}}</td>
                <td>{{$laporan->dokument_lampiran}}</td>
                <td>
                    <a href="/edit/{{$laporan->id}}" class="fas fa-edit"></a>
                    <a href="/hapus/{{$laporan->id}}" class="fas fa-trash-alt"></a>
                </td>
            </tr>
            @endforeach {{-- @foreach($kabupaten as $kabupaten)
            <tr>
                <th scope="row">{{ $loop->iteration}}</th>

                <td>{{$kabupaten->nama_kabupaten}}</td>
            </tr>
            @endforeach --}}
        </tbody>
    </table>
</body>
</html>