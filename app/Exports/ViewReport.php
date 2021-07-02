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
                    
        $data = DB::table('laporan')->get();

        return view('laporan.excel', [
            'data' => $data]);
    }

    public function styles(Worksheet $sheet)
    {
        return [ 
            // Styling an entire column.
            'B'  => ['font' => ['size' => 16]],
        ];
    }
}