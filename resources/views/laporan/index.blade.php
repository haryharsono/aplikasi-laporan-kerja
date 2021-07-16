@extends('layout.master') @section('content') {{--
<div class="content-wrapper">
    --}}
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Laporan BPHTB</h1>
                </div>
                <div class="col-sm-6"></div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                   
                        <!-- <a href="{{url('/print')}}">
                            <button type="button" class="btn  btn-primary" data-target="#exampleModal">PRINT  </button>
                        </a> -->
	<form action="/laporan/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Wajib Pajak .." value="{{ old('cari') }}">
		<input type="submit" value="CARI">
	</form>
                            
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="table-responsive">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th style="text-align: center" class="align-middle">No</th>
                                    <th style="text-align: center" class="align-middle">Nama Wajib Pajak</th>
                                    <th style="text-align: center" class="align-middle">Nama Penjual</th>
                                    <th style="text-align: center" class="align-middle">Lokasi Objek Pajak</th>
                                    <th style="text-align: center" class="align-middle">Kecamatan Objek</th>
                                    <th style="text-align: center" class="align-middle">Kelurahan Objek</th>
                                    <th style="text-align: center" class="align-middle">Luas Tanah</th>
                                    <th style="text-align: center" class="align-middle">Luas Bangunan</th>
                                    <th style="text-align: center" class="align-middle">Harga Transaksi</th>
                                    <th style="text-align: center" class="align-middle">BPHTB</th>
                                    <th style="text-align: center" class="align-middle">Aksi</th>
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
                                        <td style="text-align: center" class="align-middle">{{$laporan->lokasi_objek_pajak}}</td>
                                        <td style="text-align: center" class="align-middle">{{$laporan->kecamatan_objek}}</td>
                                        <td style="text-align: center" class="align-middle">{{$laporan->kelurahan_objek}}</td>
                                        <td style="text-align: center" class="align-middle">{{$laporan->luas_tanah}}</td>
                                        <td style="text-align: center" class="align-middle">{{$laporan->luas_bangunan}}</td>
                                        <td style="text-align: center" class="align-middle">{{$laporan->harga_transaksi}}</td>
                                        <td style="text-align: center" class="align-middle">{{$laporan->bphtb}}</td>
                                        <td style="text-align: center" class="align-middle">
                                        <div class="btn-group">
                                        <a href="{{ url('/edit/'.$laporan->id) }}" class="fas fa-edit"></a>
                                        
                                        <a href="{{ url('/hapus/'.$laporan->id) }}" class="fas fa-trash-alt"></a>
                                    </div>
                                    </td>
                                    </tr>
                                    @endforeach
                                {{-- @php
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
                                                @endif
                                                @if($kota->jmlKab == $helpme )   
                                                    @php
                                                        $helpme = 0
                                                    @endphp  
                                                @elseif($kota->jmlKab == 1)  
                                                    <td style="text-align: center" class="align-middle">{{$laporan->id_kabupaten}}</td> 
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
                                    <td style="text-align: center" class="align-middle">{{$laporan->dokument_lampiran}}</td>
                                    <td style="text-align: center" class="align-middle">
                                        <div class="btn-group">
                                        <a href="{{ url('/edit/'.$laporan->id) }}" class="fas fa-edit"></a>
                                        
                                        <a href="{{ url('/hapus/'.$laporan->id) }}" class="fas fa-trash-alt"></a>
                                    </div>
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
                        <br/>
	Halaman : {{ $data->currentPage() }} <br/>
	Jumlah Data : {{ $data->total() }} <br/>
	Data Per Halaman : {{ $data->perPage() }} <br/>
    {{ $data->links() }}
                    </div>
                    </div>  
                </div>  
            </div>
        </div>
    </section>
    @endsection
</div>
