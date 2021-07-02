<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\simpan;
use Illuminate\Support\Facades\DB;

class InputController extends Controller
{
    //
    public function input(){
       return view('laporan.inputLaporan');
    }

    public function store(Request $request)
    {
        // $validated = $request->validate([ 
        //     'file' => 'mimes:jpeg,jpg,png,docx,doc,pdf|max:80|required',
        // ],
    
        // [
        //     'file.required' => 'Data tidak boleh kosong.',
            
        // ]);
   

        
        // $model = $request->all();
        // $file = $request->file('file');
        // $model['file'] = $file->getClientOriginalName(); 
        // $file->move("data_file",$model['file']); 

        DB::table('laporan')->insert([
			'wajib_pajak' => $request->nama_wajib_pajak,
            'Nama_penjual' => $request->nama_penjual,
            'nop' => $request->nop,
            'lokasi_objek_pajak' => $request->lokasi_objek_pajak,
            'kecamatan_objek' => $request->kecamatan_objek,
            'kelurahan_objek'=>$request->kelurahan,
            'tanggal'=>$request->tanggal,
            'luas_tanah'=>$request->tanah,
            'luas_bangunan'=>$request->bangunan,
            'njop_tanah'=>$request->njop_tanah,
            'njop_bangunan'=>$request->njop_bangunan,
            'hasil_njop_tanah' => $request->hasil_njop_tanah,
            'hasil_njop_bangunan' => $request->hasil_njop_bangunan,
            'harga_transaksi'=>$request->harga_transaksi,
            'npoptkp'=>$request->npoptkp,
            'njop_pbb'=>$request->njoppbb,
            'bphtb' => $request->bphtb,
            'ket_tanah' => $request->keterangan_tanah,
            'ppat' => $request->notaris,
            'keterangan_pembayaran' => $request->keterangan_pembayaran


        ]);
  
  
        
        return redirect('/inputData');
    }
}
