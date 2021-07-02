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
    <table class="c">
        <thead>
            <tr>
                <td style="font-size:20px;text-align:center;" colspan="8">
                    <h2>QUICK RESPON LAPORAN KERJA</h2>
                </td>
            </tr>
            <tr>
                <th>NO</th>
                <th style="width: 13px">wajib pajak</th>
                <th>Nama Penjual</th>
                <th>Nop</th>
                <th style="width: 18px">Lokasi Objek Pajak</th>
                <th>Kecamatan Objek</th>
                <th style="width: 23px">Kelurahan Objek</th>
                <th style="width: 20px">Luas Tanah</th>
                <th style="width: 20px">Luas Bangunan</th>
                <th style="width: 20px">Njop Tanah</th>
                <th>Njop Bangunan</th>
                <th style="width: 23px">Hasil Njop Tanah</th>
                <th style="width: 20px">Hasil Njop Bangunan</th>
                <th style="width: 20px">Njop Pbb</th>
                <th style="width: 20px">Harga Transaksi</th>
                <th>Npoptkp</th>
                <th style="width: 23px">Bphtb</th>
                <th style="width: 20px">Keterangan tanah</th>
                <th style="width: 20px">Ppat</th>
                <th style="width: 20px">Keterangan pembayaran</th>
                <th style="width: 20px">Tanggal</th>
                
            </tr>
        </thead>
        <tbody>
            <?php $no = 0;?>
            @foreach($data as $laporan)
            <?php $no++ ;?>
                <tr>
                    <td style="text-align: center" class="align-middle">{{ $no }}</td>
                    <td style="text-align: center" class="align-middle"> {{$laporan->wajib_pajak}}</td> 
                    <td style="text-align: center" class="align-middle">{{$laporan->Nama_penjual}}</td>
                    <td style="text-align: center" class="align-middle">{{$laporan->nop}}</td>
                    <td style="text-align: center" class="align-middle">{{$laporan->lokasi_objek_pajak}}</td>
                    <td style="text-align: center" class="align-middle">{{$laporan->kecamatan_objek}}</td>
                    <td style="text-align: center" class="align-middle">{{$laporan->kelurahan_objek}}</td>
                    <td style="text-align: center" class="align-middle">{{$laporan->luas_tanah}}</td>
                    <td style="text-align: center" class="align-middle">{{$laporan->luas_bangunan}}</td>
                    <td style="text-align: center" class="align-middle">{{$laporan->njop_tanah}}</td>
                    <td style="text-align: center" class="align-middle">{{$laporan->njop_bangunan }}</td>
                    <td style="text-align: center" class="align-middle"> {{$laporan->hasil_njop_tanah}}</td> 
                    <td style="text-align: center" class="align-middle">{{$laporan->hasil_njop_bangunan}}</td>
                    <td style="text-align: center" class="align-middle">{{$laporan->njop_pbb}}</td>
                    <td style="text-align: center" class="align-middle">{{$laporan->harga_transaksi}}</td>
                    <td style="text-align: center" class="align-middle">{{$laporan->npoptkp}}</td>
                    <td style="text-align: center" class="align-middle">{{$laporan->bphtb}}</td>
                    <td style="text-align: center" class="align-middle">{{$laporan->ket_tanah}}</td>
                    <td style="text-align: center" class="align-middle">{{$laporan->ppat}}</td>
                    <td style="text-align: center" class="align-middle">{{$laporan->keterangan_pembayaran}}</td>
                    <td style="text-align: center" class="align-middle">{{$laporan->tanggal}}</td>
                    <td style="text-align: center" class="align-middle">
                    <div class="btn-group">
                    <a href="{{ url('/edit/'.$laporan->id) }}" class="fas fa-edit"></a>
                    
                    <a href="{{ url('/hapus/'.$laporan->id) }}" class="fas fa-trash-alt"></a>
                </div>
                </td>
                </tr>
                @endforeach
            </tr>
                <tr>
                <td style="font-size:13px;text-align:right;" colspan="8">Makassar</td>
            </tr>
        </tbody>
    </table>
</body>
</html>