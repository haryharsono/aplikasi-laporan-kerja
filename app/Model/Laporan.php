<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    public $timestamps= false;
        protected $table='laporan';
        protected $primaryKey='id';
        protected $fillable=[
            'wajib_pajak',
            'Nama_penjual',
            'nop',
            'lokasi_objek_pajak',
            'kecamatan_objek',
            'kelurahan_objek',
            'luas_tanah',
            'luas_bangunan',
            'njop_tanah',
            'hasil_njop_tanah',
            'hasil_njop_bangunan',
            'njop_pbb',
            'harga_transaksi',
            'npoptkp',
            'bphtb',
            'ket_tanah',
            'ppat',
            'keterangan_pembayaran',
            'tanggal'
];
}
