@extends('layout.master')
@section('content')

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Data</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
     
        <div class="card card-default">
          
          </div>
          <!-- /.card-header -->
          <div class="card-body">
           <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                    <div class="form-group">
                      <form class="form-horizontal" action="{{url('/update')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                   
                        <label for="exampleInputEmail1">Nama Wajib Pajak</label>
                        <input type="hidden" name="id" value="{{ $laporan->id }}">
                    <input type="text" name="nama_wajib_pajak" class="form-control" value="{{$laporan->wajib_pajak}}" placeholder="Masukkan Nama" required>
                      </div>
                      <div class="form-group">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Penjual</label>
                            <input type="text" name="nama_penjual" value="{{$laporan->Nama_penjual}}" class="form-control" placeholder="Masukkan Sasaran Kerja" required>
                          </div>
                          
                    </div>
                    <div class="form-group">
                      <div class="form-group">
                          <label for="exampleInputEmail1">Nomor Objek Pajak (NOP)</label>
                          <input type="text" name="nop" value="{{$laporan->nop}}" class="form-control" placeholder="Masukkan Sasaran Kerja" required>
                        </div>
                        
                  </div>
                  <div class="form-group">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Lokasi Objek Pajak</label>
                        <input type="text" name="lokasi_objek_pajak" value="{{$laporan->lokasi_objek_pajak}}" class="form-control" placeholder="Masukkan Sasaran Kerja" required>
                      </div>
                      
                </div>
                <div class="form-group">
                  <label>Kecamatan Objek</label>
                  <select class="form-control select2" style="width: 100%;" name="kecamatan_objek" value="{{$laporan->kecamatan_objek}}">
                    @foreach($kab as $value)
                    <option value="{{ $value->kecamatan }}" {{ (($laporan->kecamatan_objek == $value->kecamatan)) ? 'selected' : null }}>{{ $value->kecamatan }}</option>
                     @endforeach
                  </select>
                </div>
                <!-- /.form-group -->
                
                </div>
                
                
                <div class="form-group">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kelurahan</label>
                        <input type="text" class="form-control" placeholder="Masukkan Uraian Kerja" name="kelurahan" value="{{$laporan->kelurahan_objek}}" required>
                      </div>
                </div>
                
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                    <label>Tanggal</label>
  
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="far fa-calendar-alt"></i>
                        </span>
                      </div>
                      <input type="date" class="form-control float-right" value="{{$laporan->tanggal}}" name="tanggal" >
                    </div>
                    <!-- /.input group -->
                  </div>
                  
                  <div class="row">
                                                
                    <p><label for="exampleInputEmail1">Tanah</label>
                        <input type="text" class="form-control" name="tanah" id="tanah" value="{{$laporan->luas_tanah}}" required style="width:100px;" oninput="hitungNjopTanah()" />
                    </p>
                    <div class="col-md-6">
                    <p><label for="exampleInputEmail1">NJOP</label>
                        <input type="text" class="form-control" name="njop_tanah" id="njopTanah" value="{{$laporan->njop_tanah}}" required style="width:200px;" oninput="hitungNjopTanah()" />
                    </p>
                    </div>
                    <p><label for="exampleInputEmail1">Hasil NJOP Tanah</label>
                        <input type="text" class="form-control" name="hasil_njop_tanah" id="hasilnjopTanah" value="{{$laporan->hasil_njop_tanah}}" style="width:200px;" readonly/>
                    </p>

                    <script>
                        
                        function hitungNjopTanah() {
                            var x = document.getElementById("tanah").value;
                        //     var hasil=x*500000;
                           var z =document.getElementById("njopTanah").value;
                           var konvert=z.replace(/\./g,'');
                          var hasilnjop=x*konvert;
                          document.getElementById("hasilnjopTanah").value = konversiRupiah(hasilnjop);
                         // var hasilnjopbangunan=document.getElementById("hasilnjopbangunan").value;
                         // totalnya=hasilnjopbangunan+hasilnjop;
                         // document.getElementById("njopPbb").value = konversiRupiah(totalnya);
                         return hasilnjop;
                         }
                        function konversiRupiah(nilai){
                            var	number_string = nilai.toString(),
                                sisa 	= number_string.length % 3,
                                rupiah 	= number_string.substr(0, sisa),
                                ribuan 	= number_string.substr(sisa).match(/\d{3}/g);
                                    
                            if (ribuan) {
                                separator = sisa ? '.' : '';
                                rupiah += separator + ribuan.join('.');
                            }
                            return rupiah;
                        }
                        function hitungNjopBangunan() {
                            var x = document.getElementById("bangunan").value;
                        //     var hasil=x*500000;
                           var z =document.getElementById("njopBangunan").value;
                           var totalTanah =document.getElementById("hasilnjopTanah").value;
                           var konvert=z.replace(/\./g,'');
                           var konvertTanah=totalTanah.replace(/\./g,'');

                          var hasilnjop=x*konvert;
                          var pbb=(parseInt(konvertTanah)+parseInt(hasilnjop));
                          document.getElementById("hasilNjopBangunan").value = konversiRupiah(hasilnjop);
                          document.getElementById("njopPbb").value = konversiRupiah(pbb);
                        
                         }
                         function totalBphtb(){
                            var x = document.getElementById("hargaTransaksi").value;
                            var y = document.getElementById("npoptkp").value;
                            var hasil=(x*y)*0.05;
                            document.getElementById("bphtb").value = konversiRupiah(hasil);
                             
                         }
                         function njopPbb(){
                             var hasilNjopTanah=document.getElementById("hasilNjopTanah").value;
                             var hasilNjopBangunan=document.getElementById("hasilNjopBangunan").value;
                             var a=hasilNjopTanah.replace(/\./g,'');
                             var b=hasilNjopBangunan.replace(/\./g,'');
                             var hasil=a+b;
                             document.getElementById("njopPbb").value=konversiRupiah(hasil);
                         }

                        </script>
                                                                                
                </div>   
                <div class="row">
                    
                    <p><label for="exampleInputEmail1">Bangunan</label>
                        <input type="text" class="form-control" name="bangunan" id="bangunan" value="{{$laporan->luas_bangunan}}"  oninput="hitungNjopBangunan()" required style="width:100px;"/>
                    </p>
                    <div class="col-md-6">
                    <p><label for="exampleInputEmail1">NJOP</label>
                        <input type="text" class="form-control" name="njop_bangunan" id="njopBangunan" value="{{$laporan->njop_bangunan}}"  oninput="hitungNjopBangunan()" required style="width:200px;" />
                    </p>
                    </div>   
                    <p><label for="exampleInputEmail1">Hasil NJOP Bangunan</label>
                        <input type="text" class="form-control" name="hasil_njop_bangunan" id="hasilNjopBangunan" value="{{$laporan->hasil_njop_bangunan}}" required style="width:200px;" readonly/>
                    </p>        
                </div>  
            
                <div class="row">
                    
                    <p><label for="exampleInputEmail1">NJOP PBB</label>
                        <input type="text" class="form-control" name="njopbb" id="njopPbb" value="{{$laporan->njop_pbb}}" required style="width:200px;" readonly/>
                    </p>
                    <div class="col-md-6">
                    <p><label for="exampleInputEmail1">Harga transaksi</label>
                        <input type="text" class="form-control" name="harga_transaksi" id="hargaTransaksi" value="{{$laporan->harga_transaksi}}" oninput="totalBphtb()" required style="width:200px;" />
                    </p>
                    </div>   
                    <p><label for="exampleInputEmail1">Nilai Perolehan Objek Pajak Tidak Kena Pajak (NPOPTKP)</label>
                        <select class="form-control select2" style="width: 200px;" onchange="totalBphtb()" name="npoptkp" id="npoptkp" value="{{$laporan->npoptkp}}">
                          @foreach($npoptkp as $value)
                          <option value="{{ $value->npoptkp_harga }}" {{ (($laporan->npoptkp == $value->npoptkp_harga)) ? 'selected' : null }}>{{ $value->npoptkp_harga }}</option>
                           @endforeach
                        </select>
                    </p>        
                </div>  
                <p><label for="exampleInputEmail1">BPHTB</label>
                    <input type="text" class="form-control" name="bphtb" id="bphtb" value="{{$laporan->bphtb}}" style="width:200px;" readonly/>
                </p>
                  <div class="form-group">
                    <label>Kabupaten/Kota</label>
                    <select class="form-control select2" style="width: 100%;" name="keterangan_tanah" value="{{$laporan->id_kabupaten}}">
                     @foreach($keterangan_tanah as $value)
                     <option value="{{ $value->keterangan_penjualan }}" {{ (($laporan->ket_tanah == $value->keterangan_penjualan)) ? 'selected' : null }}>{{ $value->keterangan_penjualan }}</option> 
                      @endforeach
                    </select>
                </div>
                <!-- /.for  m-group -->
                <div class="form-group">
                    <div class="form-group">
                        <label for="exampleInputEmail1">PPAT/Notaris</label>
                        <div class="input-group mb-3">
                        <input type="text" class="form-control" name="notaris" value="{{$laporan->ppat}}" required>
                            <div class="input-group-append">
                              <span class="input-group-text">Rp</span>
                            </div>
                          </div>
                      </div>
                </div>
                <div class="form-group">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Keterangan Membayar</label>
                        <input type="text" class="form-control" placeholder="Masukkan Kendala" name="keterangan_pembayaran" value="{{$laporan->keterangan_pembayaran}}" required>
                      </div>
                </div>
                <!--<div class="form-group">-->
                <!--    <label for="exampleInputFile">File input</label>-->
                <!--    <div class="input-group">-->
                <!--      <div class="custom-file">-->
                <!--      </div>-->
                <!--    </div>-->
                <!--    <small class="text-danger"> </small>-->
                <!--  </div>-->

                
                  
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  
              </div>
              
              <!-- /.col -->
            </div>
            
            <!-- /.row -->

            </form>
          </div>
          <!-- /.card-body -->
          
     
    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->
  
  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->


@endsection