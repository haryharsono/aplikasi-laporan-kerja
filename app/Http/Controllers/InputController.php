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
        // simpan::create([
        //     'nama' => $request->nama,
        //     'sasaran_kerja' => $request->sasaran_kerja,
        //     'bagian_pelaksana' => $request->bagian_pelaksana,
        //     'uraian_kerja' => $request->uraian_kerja,
        //     'tanggal' => $request->tanggal,
        //     'kabupaten_kota' => $request->kabupaten_kota,
        //     'jumlah_pengeluaran' => $request->jumlah_pengeluaran,
        //     'uraian_kerja' => $request->uraian_kerja,
        //     'kendala' => $request->kendala,
        //     'file' => $request->file

        // ]);
        DB::table('tbl_master')->insert([
			'nama_pelaksana' => $request->nama,
            'sasaran_kerja' => $request->sasaran_kerja,
            'bagian_pelaksana' => $request->bagian_pelaksana,
            'uraian_kerja' => $request->uraian_kerja,
            'tgl_laporan' => $request->tanggal,
            'id_kabupaten' => $request->kabupaten_kota,
            'jumlah_output_hasil' => $request->jumlah_pengeluaran,
            'kendala' => $request->kendala,
            'dokument_lampiran' => $request->file
        ]);
 
	$tujuan_upload = 'data_file';
	$file->move($tujuan_upload,$file->getClientOriginalName());
        return redirect('/inputData');
    }
}
