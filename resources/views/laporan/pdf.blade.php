<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    td, th {
        border: 1px solid #dddddd; 
    } 
    .page-break {
    page-break-after: always;
}
    /* table { 
        border-collapse: collapse; 
    } */
    /* table {
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
    } */
    </style>
</head>
<body>
    <div style="text-align:center;" class="align-middle">
        <h2>QUICK RESPON LAPORAN KERJA</h2>
    </div>
    <table >
        <thead>
            <tr>
                <th style="text-align: center" class="align-middle">NO</th>
                <th style="text-align: center" class="align-middle">Kabupaten/Kota</th>
                <th style="text-align: center" class="align-middle">Tanggal</th>
                <th style="text-align: center" class="align-middle">Sasaran Kerja</th>
                <th style="text-align: center" class="align-middle">Nama Pelaksana</th>
                <th style="text-align: center" class="align-middle">Bagian Pelaksana</th>
                <th style="text-align: center" class="align-middle">Uraian Kerja </th>
                <th style="text-align: center" class="align-middle">Jumlah Output hasil kerja</th>
                <th style="text-align: center" class="align-middle">Kendala/Permasalahan</th> 
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
                                <td rowspan="{{ $kota->jmlKab }}" style="text-align: center" class="align-middle">{{$laporan->id_kabupaten}}</td> 
                            @elseif($kota->jmlKab == $helpme )   
                                @php
                                    $helpme = 0
                                @endphp
                            @endif 
                        @endif 
                    @endforeach 
                <td style="text-align: center" class="align-middle"> {{$laporan->tgl_laporan}}</td> 
                <td style="text-align: center" class="align-middle">{{$laporan->sasaran_kerja}}</td>
                <td style="text-align: center" class="align-middle">{{$laporan->nama_pelaksana}}</td>
                <td style="text-align: center" class="align-middle">{{$laporan->bagian_pelaksana}}</td>
                <td style="text-align: center" class="align-middle">{{$laporan->uraian_kerja}}</td>
                <td style="text-align: center" class="align-middle">{{$laporan->jumlah_output_hasil}}</td>
                <td style="text-align: center" class="align-middle">{{$laporan->kendala}}</td>
              
            </tr>  
            @endforeach 
        </tbody>
    </table>
</body>
</html>