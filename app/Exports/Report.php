<?php
namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;

class Report implements FromCollection
{
    public function collection()
    {
        $data = DB::table('laporan')->get();
        return $data;
    }
}