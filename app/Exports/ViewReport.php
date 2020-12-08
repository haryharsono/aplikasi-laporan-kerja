<?php
namespace App\Exports;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithStyles;

class ViewReport implements FromView,ShouldAutoSize
{
    use Exportable;
    
    public function view(): View
    {
        $kabupaten = DB::table('tabel_kabupaten_kota')
            ->select('nama_kabupaten')
            ->get();
 
        $countKota = DB::table('tbl_master')
                    ->select(DB::raw('count(id_kabupaten) as jmlKab'), 'id_kabupaten')
                    ->groupBy('id_kabupaten')->get();
        $data = DB::table('tbl_master')
            ->join('tabel_kabupaten_kota', 'tbl_master.id_kabupaten', '=', 'tabel_kabupaten_kota.nama_kabupaten')
            ->select('tbl_master.*')
            ->orderBy('tabel_kabupaten_kota.id')
            ->orderBy('tbl_master.tgl_laporan')
            ->get();

        return view('laporan.excel', [
            'data' => $data,'kabupaten' => $kabupaten,'countKota' => $countKota
        ]);
    }

    public function styles(Worksheet $sheet)
    {
        return [ 
            // Styling an entire column.
            'B'  => ['font' => ['size' => 16]],
        ];
    }
}