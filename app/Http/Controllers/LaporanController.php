<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Laporan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data=Laporan::all();
        // $tampung=$data->groupBy("id_kabupaten");
        //dd($tampung);
        $data = DB::table('tbl_master')
            ->join('tabel_kabupaten_kota', 'tbl_master.id_kabupaten', '=', 'tabel_kabupaten_kota.nama_kabupaten')
            ->select('tbl_master.*')
            ->orderBy('tabel_kabupaten_kota.id')
            ->orderBy('tbl_master.tgl_laporan')
            ->get();
            $kabupaten = DB::table('tabel_kabupaten_kota')
                ->select('nama_kabupaten')
                ->get();
                

        return view('laporan.index',compact('data','kabupaten'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function dataKabupaten(){
        $kabupaten = DB::table('tabel_kabupaten_kota')
                ->select('nama_kabupaten')
                ->get();
        dd($kabupaten);
        return view('index',compact("kabupaten"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    // $data = DB::table('tbl_master')->where('id',$id)->get();
    $data = Laporan::find($id);
    $kabupaten = DB::table('tabel_kabupaten_kota')->where('id',$id)->select('nama_kabupaten')->get();
    // dd($data);
	return view('/laporan/edit', compact('data','kabupaten'));
    }   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
         $a=DB::table('tbl_master')->where('id',$request->id)->update([
            'nama_pelaksana' => $request->nama,
            'sasaran_kerja' => $request->sasaran_kerja,
            'bagian_pelaksana' => $request->bagian_pelaksana,
            'uraian_kerja' => $request->uraian_kerja,
            'tgl_laporan' => $request->tanggal,
            'id_kabupaten' => $request->kabupaten_kota,
            'jumlah_output_hasil' => $request->jumlah_pengeluaran,
            'kendala' => $request->kendala,
            'dokument_lampiran' => $request->filet
        ]);
        dd($a);
        
        return Redirect::to('laporan');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = DB::table('tbl_master')->where('id',$id)->get();
    $kabupaten = DB::table('tabel_kabupaten_kota')->where('id',$id)->select('nama_kabupaten')->get();
	return redirect('/layout.master');;

    }
}
