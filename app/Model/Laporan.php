<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    public $timestamps= false;
        protected $table='tbl_master';
        protected $primaryKey='id';
        protected $fillable=[
            'id_kabupaten',
            'tgl_laporan',
            'sasaran_kerja',
            'nama_pelaksana',
            'bagian_pelaksana',
            'uraian_kerja',
            'jumlah_output_hasil',
            'kendala',
            'dokument_lampiran'
];
}
