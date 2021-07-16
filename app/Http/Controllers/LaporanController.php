<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Laporan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use PDF;
use Excel; 
use App\Exports\Report;
use App\Exports\ViewReport;

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
        $data = DB::table('laporan')
             ->select('id','wajib_pajak', 'Nama_penjual','lokasi_objek_pajak','kecamatan_objek','kelurahan_objek','luas_tanah','luas_bangunan','harga_transaksi','bphtb')
             ->paginate(5);
       
    //     $countKota = DB::table('tbl_master')
    //                 ->select(DB::raw('count(id_kabupaten) as jmlKab'), 'id_kabupaten')
    //                 ->groupBy('id_kabupaten')->get();
    // //    dd($data);
        return view('laporan.index',['data' => $data]);
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
    // public function dataKabupaten(){
    //     $kabupaten = DB::table('tabel_kabupaten_kota')
    //             ->select('nama_kabupaten')
    //             ->get();
    //    // dd($kabupaten);
    //     return view('index',compact("kabupaten"));
    // }

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

        //$laporan = DB::table('laporan')->where('id',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php;
        //$data= laporan::find($id);
        $laporan = Laporan::find($id);
        $kab = DB::table('kecamatan')->select('kecamatan')->get();
        $npoptkp = DB::table('npoptkp')->select('npoptkp_harga')->get();
        $keterangan_tanah = DB::table('penjualan_tanah')->select('keterangan_penjualan')->get();
        return view('/laporan/edit') 
                    ->with(compact('laporan'))
                    ->with(compact('kab'))
                    ->with(compact('npoptkp'))
                    ->with(compact('keterangan_tanah'));
    // return View('/laporan/edit')
    //                 ->with(compact('data'))
    //                 ->with(compact('kabupaten'))
    //                 ;

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
        //  $validated = $request->validate([ 
        //     'file' => 'mimes:jpeg,jpg,png,docx,doc,pdf|max:80|required',
        // ],
    
        // [
        //     'file.required' => 'Data tidak boleh kosong.',
            
        // ]);
         $a=DB::table('laporan')->where('id',$request->id)->update([
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
            'njop_pbb'=>$request->njopbb,
            'bphtb' => $request->bphtb,
            'ket_tanah' => $request->keterangan_tanah,
            'ppat' => $request->notaris,
            'keterangan_pembayaran' => $request->keterangan_pembayaran

        ]);
        //dd($a);
        
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
        $data = DB::table('laporan')->where('id',$id)->delete();
     
        return Redirect::to('laporan');
    }
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$data = DB::table('laporan')
		->where('wajib_pajak','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data pegawai ke view index
            return view('laporan.index',['data' => $data]);
 
	}

    public function print()
    {
        return (new ViewReport)->download('Laporan.xlsx');
        // return Excel::download(new Report, 'Report.xlsx');
        // return Excel::download(new InvoicesExport, 'invoices.xlsx');
        // $data = Laporan::all();
        // $kabupaten = DB::table('tabel_kabupaten_kota')
        //     ->select('nama_kabupaten')
        //     ->get();
 
        // $countKota = DB::table('tbl_master')
        //             ->select(DB::raw('count(id_kabupaten) as jmlKab'), 'id_kabupaten')
        //             ->groupBy('id_kabupaten')->get();
        // $pdf = PDF::loadView('laporan.pdf', ['data'=> $data,'countKota'=>$countKota,'kabupaten'=>$kabupaten])->setPaper('a4', 'landscape');
        // dd($pdf);
        // return $pdf->stream('laporan-pegawai.pdf');
    }
}
