<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\simpan;
use Illuminate\Support\Facades\DB;

class InputController extends Controller
{
    //
    public function input(){
        $kabupaten = DB::table('tabel_kabupaten_kota')->select('nama_kabupaten')->get();
        $pelaksana = DB::table('tabel_pelaksana')->select('pelaksana')->get(); 
        return view('laporan.inputLaporan', compact('kabupaten','pelaksana'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([ 
            'file' => 'mimes:jpeg,jpg,png,docx,doc,pdf|max:80|required',
        ],
    
        [
            'file.required' => 'Data tidak boleh kosong.',
            
        ]);
   

        
        $model = $request->all();
        $file = $request->file('file');
        $model['file'] = $file->getClientOriginalName(); 
        $file->move("data_file",$model['file']); 

        DB::table('tbl_master')->insert([
			'nama_pelaksana' => $request->nama,
            'sasaran_kerja' => $request->sasaran_kerja,
            'bagian_pelaksana' => $request->bagian_pelaksana,
            'uraian_kerja' => $request->uraian_kerja,
            'tgl_laporan' => $request->tanggal,
            'id_kabupaten' => $request->kabupaten_kota,
            'jumlah_output_hasil' => $request->jumlah_pengeluaran,
            'kendala' => $request->kendala,
            'dokument_lampiran' => $model['file']
        ]);
  
        
        return redirect('/inputData');
    }
}
