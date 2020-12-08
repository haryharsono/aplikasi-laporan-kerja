@extends('layout.master') @section('content')
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>AdminLTE 3 | Advanced form elements</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.min.css')}}" />
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
        <!-- daterange picker -->
        <link rel="stylesheet" href="{{asset('admin/plugins/daterangepicker/daterangepicker.css')}}" />
        <!-- iCheck for checkboxes and radio inputs -->
        <link rel="stylesheet" href="{{asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}" />
        <!-- Bootstrap Color Picker -->
        <link rel="stylesheet" href="{{asset('admin/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}" />
        <!-- Tempusdominus Bbootstrap 4 -->
        <link rel="stylesheet" href="{{asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}" />
        <!-- Select2 -->
        <link rel="stylesheet" href="{{asset('admin/plugins/select2/css/select2.min.css')}}" />
        <link rel="stylesheet" href="{{asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}" />
        <!-- Bootstrap4 Duallistbox -->
        <link rel="stylesheet" href="{{asset('admin/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css')}}" />
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset('admin/dist/css/adminlte.min.css')}}" />
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet" />
    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Input Data</h1>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
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
                            <form class="form-horizontal" action="/inputDatastore" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Nama Pelaksana</label>
                                                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" required />
                                            </div>
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Sasaran Kerja</label>
                                                    <input type="text" name="sasaran_kerja" class="form-control" placeholder="Masukkan Sasaran Kerja" required />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Bagian Pelaksana</label>
                                                <select class="form-control select2" style="width: 100%;" name="bagian_pelaksana">
                                                    @foreach($pelaksana as $value)
                                                        <option value="{{ $value->pelaksana }}">{{ $value->pelaksana }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <!-- /.form-group -->
                                        </div>

                                        <div class="form-group">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Uraian Kerja</label>
                                                <input type="text" class="form-control" placeholder="Masukkan Uraian Kerja" name="uraian_kerja" required />
                                            </div>
                                        </div>

                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Tanggal</label>

                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="far fa-calendar-alt"></i>
                                                    </span>
                                                </div>
                                                <input type="date" class="form-control float-right" name="tanggal" required/>
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                        <div class="form-group">
                                            <label>Kabupaten/Kota</label>
                                            <select class="form-control select2" style="width: 100%;" name="kabupaten_kota">
                                                @foreach($kabupaten as $value)
                                                    <option value="{{ $value->nama_kabupaten }}">{{ $value->nama_kabupaten }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <!-- /.form-group -->
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Jumlah Pengeluaran</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" name="jumlah_pengeluaran" required />
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">Rp</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Kendala Saat Bekerja</label>
                                                <input type="text" class="form-control" placeholder="Masukkan Kendala" name="kendala" required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">File input</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input @error('file') is-invalid @enderror " name="file" required />
                                                    <label class="custom-file-label" for="exampleInputFile">Masukkan File Anda</label>
                                                  </div>
                                                </div>
                                                <small class="text-danger"> {{ $errors->first('file') }}</small>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>

                                    <!-- /.col -->
                                </div>

                                <!-- /.row -->
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.container-fluid -->
                    <!-- /.content -->
                </div>
                <!-- /.content-wrapper -->

                <!-- Control Sidebar -->

                <!-- /.control-sidebar -->
                <!-- ./wrapper -->

                <!-- jQuery -->
                <script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
                <!-- Bootstrap 4 -->
                <script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
                <!-- Select2 -->
                <script src="{{asset('admin/plugins/select2/js/select2.full.min.js')}}"></script>
                <!-- Bootstrap4 Duallistbox -->
                <script src="{{asset('admin/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js')}}"></script>
                <!-- InputMask -->
                <script src="{{asset('admin/plugins/moment/moment.min.js')}}"></script>
                <script src="{{asset('admin/plugins/inputmask/min/jquery.inputmask.bundle.min.js')}}"></script>
                <!-- date-range-picker -->
                <script src="{{asset('admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
                <!-- bootstrap color picker -->
                <script src="{{asset('admin/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
                <!-- Tempusdominus Bootstrap 4 -->
                <script src="{{asset('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
                <!-- Bootstrap Switch -->
                <script src="{{asset('admin/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
                <!-- AdminLTE App -->
                <script src="{{asset('admin/dist/js/adminlte.min.js')}}"></script>
                <!-- AdminLTE for demo purposes -->
                <script src="{{asset('admin/dist/js/demo.js')}}"></script>
                <!-- Page script -->
                <script>
                    $(function () {
                        //Initialize Select2 Elements
                        $(".select2bs4").select2({
                            theme: "bootstrap4",
                        });

                        //Initialize Select2 Elements
                        $(".select2").select2();

                        //Datemask dd/mm/yyyy
                        $("#datemask").inputmask("dd/mm/yyyy", { placeholder: "dd/mm/yyyy" });
                        //Datemask2 mm/dd/yyyy
                        $("#datemask2").inputmask("mm/dd/yyyy", { placeholder: "mm/dd/yyyy" });
                        //Money Euro
                        $("[data-mask]").inputmask();

                        //Date range picker
                        $("#reservation").daterangepicker();
                        //Date range picker with time picker
                        $("#reservationtime").daterangepicker({
                            timePicker: true,
                            timePickerIncrement: 30,
                            locale: {
                                format: "MM/DD/YYYY hh:mm A",
                            },
                        });
                        //Date range as a button
                        $("#daterange-btn").daterangepicker(
                            {
                                ranges: {
                                    Today: [moment(), moment()],
                                    Yesterday: [moment().subtract(1, "days"), moment().subtract(1, "days")],
                                    "Last 7 Days": [moment().subtract(6, "days"), moment()],
                                    "Last 30 Days": [moment().subtract(29, "days"), moment()],
                                    "This Month": [moment().startOf("month"), moment().endOf("month")],
                                    "Last Month": [moment().subtract(1, "month").startOf("month"), moment().subtract(1, "month").endOf("month")],
                                },
                                startDate: moment().subtract(29, "days"),
                                endDate: moment(),
                            },
                            function (start, end) {
                                $("#reportrange span").html(start.format("MMMM D, YYYY") + " - " + end.format("MMMM D, YYYY"));
                            }
                        );

                        //Timepicker
                        $("#timepicker").datetimepicker({
                            format: "LT",
                        });

                        //Bootstrap Duallistbox
                        $(".duallistbox").bootstrapDualListbox();

                        //Colorpicker
                        $(".my-colorpicker1").colorpicker();
                        //color picker with addon
                        $(".my-colorpicker2").colorpicker();

                        $(".my-colorpicker2").on("colorpickerChange", function (event) {
                            $(".my-colorpicker2 .fa-square").css("color", event.color.toString());
                        });

                        $("input[data-bootstrap-switch]").each(function () {
                            $(this).bootstrapSwitch("state", $(this).prop("checked"));
                        });
                    });
                </script>
            </section>
        </div>
    </body>
</html>
@endsection
