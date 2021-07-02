@extends('layout.master') @section('content')
<div class="wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Input Data</h1>
                </div>
            </div>
        </div> 
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="card card-default">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <form action="setting" method="POST">
                                @csrf
                                <div class="form-group">
                                    <div class="form-group">
                                        <input type="hidden" name="id" value="{{auth()->user()->id}}">
                                        <label for="exampleInputEmail1">Nama</label>
                                        <input type="text" name="name" disabled value="{{auth()->user()->name}}" class="form-control" placeholder="Masukkan Nama" />
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Ganti Password Anda</label>
                                            <input type="password" name="password" class="form-control" placeholder="Password" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Save"  class="btn btn-primary"/>                                   
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
