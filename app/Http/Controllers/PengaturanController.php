<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash; 

class PengaturanController extends Controller
{
    public function pengaturan(){
        return view('laporan.pengaturan');
    }

    public function setting(Request $request){
        $model = $request->all();
        $data = User::find($model['id']);  
        if($model['password'] == null){
            $model['password'] = $data['password'];
        }
        else{
            $model['password'] = Hash::make($model['password']);
        }

        $data->update($model);

        return view('laporan.pengaturan');
    }
}
