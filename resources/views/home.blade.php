@extends('layouts.app')

@section('content')
<div class="container"  style="background-image: url('gambar/logoBapenda.png');">
    <div class="row justify-content-center">
    
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert" >
                            {{ session('status') }}
                            <p style="font-size: 50px; text-align: center;  color: white; font-family: Arial, Helvetica, sans-serif;">Selamat Datang Di Web Aplikasi Badan Pendapatan Daerah kota Makassar</p>

                        </div>
                    @endif
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
