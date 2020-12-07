@extends('layout.master')
@section('content')
<div class="wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Input Data</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="card card-default">
          <div class="card-header">
         
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" class="form-control" placeholder="Masukkan Nama">
                      </div>
                      <div class="form-group">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Sasaran Kerja</label>
                            <input type="text" class="form-control" placeholder="Masukkan Sasaran Kerja">
                          </div>
                    </div>
                
                <!-- /.form-group -->
                
                </div>
                
                
                <!-- /.form-group -->
             
              <!-- /.col -->
             
              
              <!-- /.col -->
            </div>
            
            <!-- /.row -->

            
          </div>
          <!-- /.card-body -->
          
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

  </div>
</div>

@endsection