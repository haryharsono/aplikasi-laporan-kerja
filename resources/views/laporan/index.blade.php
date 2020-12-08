@extends('layout.master') @section('content') {{--
<div class="content-wrapper">
    --}}
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Kategori</h1>
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
                        <a href="/inputData">
                            <button type="button" class="btn  btn-primary" data-target="#exampleModal">Tambah Data  </button>
                        </a>
                        <a href="/print">
                            <button type="button" class="btn  btn-primary" data-target="#exampleModal">PRINT  </button>
                        </a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kabupaten/Kota</th>
                                    <th>Tanggal Laporan</th>
                                    <th>Sasaran Kerja</th>
                                    <th>Nama Pelaksana</th>
                                    <th>Bagian Pelaksana</th>
                                    <th>Uraian Kerja</th>
                                    <th>Jumlah Output Hasil</th>
                                    <th>Kendala</th>
                                    <th>Dokumen Lampiran</th>
                                    <th>Aksi</th>
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
                    </div> 
                </div>  
            </div>
        </div>
    </section>
    @endsection
</div>
