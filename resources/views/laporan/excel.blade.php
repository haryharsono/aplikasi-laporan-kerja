<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table {
        border-collapse: collapse;
        border: 1px solid black;
    } 
    table.c {
        table-layout: auto;
        width: 100%;  
    }
    th,td {
        border: 1px solid black;
    }
    </style>
</head>
<body>
    <div style="text-align:center;">
       
    </div>
    <table  class="c">
        <thead>
            <tr>
                <td colspan="8">
                    <h2>QUICK RESPON LAPORAN KERJA</h2>
                </td>
            </tr>
            <tr>
                <th>NO</th>
                <th>Kabupaten/Kota</th>
                <th>Tanggal</th>
                <th>Sasaran Kerja</th>
                <th>Nama Pelaksana</th>
                <th>Uraian Kerja </th>
                <th>Jumlah Output hasil kerja</th>
                <th>Kendala/Permasalahan</th>
            </tr>
        </thead>
        <tbody>
            
            @php
                $helpme = 0  ;
                $no = 1;
            @endphp
            @foreach($data as $laporan)
            @php
                $helpme++
            @endphp
            <tr>
                <td>{{$no++}}</td>
                @foreach($countKota as $kota)
                    @if($kota->id_kabupaten == $laporan->id_kabupaten )
                        @if($helpme == 1)
                            <td valign="middle" rowspan="{{ $kota->jmlKab }}" >{{$laporan->id_kabupaten}}</td> 
                        @elseif($kota->jmlKab == $helpme )   
                            @php
                                $helpme = 0
                            @endphp
                        @endif 
                    @endif 
                @endforeach 
                <td>{{$laporan->tgl_laporan}}</td>
                <td>{{$laporan->sasaran_kerja}}</td>
                <td>{{$laporan->nama_pelaksana}}</td> 
                <td>{{$laporan->uraian_kerja}}</td>
                <td>{{$laporan->jumlah_output_hasil}}</td>
                <td>{{$laporan->kendala}}</td>
                 
            </tr>
            @endforeach
            
        </tbody>
    </table>
</body>
</html>