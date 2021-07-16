@extends('layout.master') @section('content')
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Input Laporan BPHTB</h1>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>
            <section class="content">
                <div class="container-fluid">
                    <div class="card card-default">
                       
                        <!-- /.card-header -->
                        <div class="card-body">
                           
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <form class="form-horizontal" action="{{url('/inputDatastore')}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                <label for="exampleInputEmail1">Nama Wajib Pajak</label>
                                                <input type="text" name="nama_wajib_pajak" class="form-control" placeholder="Masukkan Nama" required />
                                            </div>
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Nama Penjual</label>
                                                    <input type="text" name="nama_penjual" class="form-control" placeholder="Masukkan Nama Penjual" required />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Nomor Objek Pajak (NOP)</label>
                                                    <input type="text" name="nop" id="nop" class="form-control" placeholder="Masukkan Nomor Objek Pajak" required />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Lokasi Objek Pajak</label>
                                                    <input type="text" name="lokasi_objek_pajak"  class="form-control" placeholder="Masukkan Lokasi Objek Pajak" required />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Kecamatan Objek</label>
                                                <select class="form-control select2" style="width: 100%;" name="kecamatan_objek">
                                                    <option value="Panakkukang">Panakkukang</option>
                                                   <option value="Rappocini">Rappocini</option>
                                                   <option value="makassar">makassar</option>
                                                   <option value="Tamalandrea">Tamalandrea</option>
                                                   <option value="Biringkanaya">Biringkanaya</option>
                                                   <option value="Bontoala">Bontoala</option>
                                                   <option value="wajo">wajo</option>
                                                   <option value="Ujung tanah">Ujung tanah</option>
                                                   <option value="Tallo">Tallo</option>
                                                   <option value="Tamalate">Tamalate</option>
                                                   <option value="Mamajang">Mamajang</option>
                                                   <option value="Mariso">Mariso</option>
                                                   <option value="Ujung pandang">Ujung pandang</option>
                                                </select>
                                            </div>
                                            <!-- /.form-group -->
                                        </div>
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Kelurahan</label>
                                                <input type="text" class="form-control" placeholder="Masukkan Kelurahan" name="kelurahan" id="kelurahan" required />
                                            </div>
                                        </div>

                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Berkas Tanggal</label>

                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="far fa-calendar-alt"></i>
                                                    </span>
                                                </div>
                                                <input type="date" class="form-control float-right" name="tanggal" id="tanggal" required/>
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                        
                                        <!-- /.form-group -->
                                        
                                            <div class="row">
                                                
                                                <p><label for="exampleInputEmail1">Tanah</label>
                                                    <input type="text" class="form-control" name="tanah" id="tanah" required style="width:100px;" oninput="hitungNjopTanah()" />
                                                </p>
                                                <div class="col-md-6">
                                                <p><label for="exampleInputEmail1">NJOP</label>
                                                    <input type="text" class="form-control" name="njop_tanah" id="njopTanah" required style="width:200px;" oninput="hitungNjopTanah()" />
                                                </p>
                                                </div>
                                                <p><label for="exampleInputEmail1">Hasil NJOP Tanah</label>
                                                    <input type="text" class="form-control" name="hasil_njop_tanah" id="hasilnjopTanah" style="width:200px;" readonly/>
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
                                                        var harga = document.getElementById("harga_transaksi").value;
                                                        var npoptkp = document.getElementById("npoptkp").value;
                                                        var konvertHarga=harga.replace(/\./g,'');
                                                        var konvertNpoptkp=npoptkp.replace(/\./g,'');
                                                        var hasil=(konvertHarga-konvertNpoptkp)*0.05;
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
                                                    <input type="text" class="form-control" name="bangunan" id="bangunan"  oninput="hitungNjopBangunan()" required style="width:100px;"/>
                                                </p>
                                                <div class="col-md-6">
                                                <p><label for="exampleInputEmail1">NJOP</label>
                                                    <input type="text" class="form-control" name="njop_bangunan" id="njopBangunan"  oninput="hitungNjopBangunan()" required style="width:200px;" />
                                                </p>
                                                </div>   
                                                <p><label for="exampleInputEmail1">Hasil NJOP Bangunan</label>
                                                    <input type="text" class="form-control" name="hasil_njop_bangunan" id="hasilNjopBangunan" required style="width:200px;" readonly/>
                                                </p>        
                                            </div>  
                                        
                                            <div class="row">
                                                
                                                <p><label for="exampleInputEmail1">NJOP PBB</label>
                                                    <input type="text" class="form-control" name="njoppbb" id="njopPbb" required style="width:200px;" readonly/>
                                                </p>
                                                <div class="col-md-6">
                                                <p><label for="exampleInputEmail1">Harga transaksi</label>
                                                    <input type="text" class="form-control" name="harga_transaksi" id="harga_transaksi" oninput="totalBphtb()" required style="width:200px;" />
                                                </p>
                                                </div>   
                                                <p><label for="exampleInputEmail1">Nilai Perolehan Objek Pajak Tidak Kena Pajak (NPOPTKP)</label>
                                                    <select class="form-control select2" style="width: 200px;" name="npoptkp" onchange="totalBphtb()" id="npoptkp">
                                                       <option value="60.000.000">60.000.000</option>
                                                       <option value="300.000.000">300.000.000</option>
                                                    </select>
                                                </p>        
                                            </div>  
                                            <p><label for="exampleInputEmail1">BPHTB</label>
                                                <input type="text" class="form-control" name="bphtb" id="bphtb" style="width:200px;" readonly/>
                                            </p>
                                            <p><label for="exampleInputEmail1">Keterangan</label>
                                                <select class="form-control select2" style="width: 200px;" name="keterangan_tanah" id="keterangan_tanah">
                                                   <option value="01 (Jual Beli)">01 (Jual Beli) </option>
                                                   <option value="02 (Jual Beli">02 (Jual Beli) </option>
                                                   <option value="03 (Hibah)">03 (Hibah) </option>
                                                   <option value="05 (Waris)">05 (Waris) </option>
                                                   <option value="07 (Aphb">07 (Aphb) </option>
                                                   <option value="08 (Lelang)">08 (Lelang) </option>
                                                   <option value="16 (Penerbitan">16 (Penerbitan) </option>
                                                   
                                                   
                                                </select>
                                            </p>    
                                        <div class="form-group">
                                            <label for="exampleInputFile">PPAT/NOTARIS</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="notaris" id="notaris"/>
                                                </div>
                                               
                                                <div class="form-group">
                                                    <label for="exampleInputFile">Keterangan Membayar</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="keterangan_pembayaran" id="keterangan_pembayaran"/>
                                                        </div>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                    

                                    <!-- /.col -->
                                </div>

                                <!-- /.row -->
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.container-fluid -->
                    <!-- /.content -->
                </div>
             
            </section>
        </div>
@endsection