<?php
namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;

class Report implements FromCollection
{
    public function collection()
    {
        $data = DB::table('tbl_master')
            ->join('tabel_kabupaten_kota', 'tbl_master.id_kabupaten', '=', 'tabel_kabupaten_kota.nama_kabupaten')
            ->select('tbl_master.*')
            ->orderBy('tabel_kabupaten_kota.id')
            ->orderBy('tbl_master.tgl_laporan')
            ->get();
        return $data;
    }
}