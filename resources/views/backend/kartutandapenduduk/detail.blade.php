@extends('backend/layouts.template')
@section('content')
      <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0">Dashboard</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Pendaftar</h4>
                                <h6 class="card-subtitle">Detail {{$kartutandapenduduk->nama_lengkap}}</h6>
                                <div class="container-fluid">
                                    <div class="card">
                                        <div class="card-body">
                                            <form class="form-horizontal form-material mx-2">
                                                <div class="form-group">
                                                    <label class="col-md-12 mb-0">Nomer Registrasi</label>
                                                    <div class="col-md-12">
                                                        <input type="text" disabled placeholder="{{$kartutandapenduduk->No_Reg}}"
                                                            class="form-control ps-0 form-control-line">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-12 mb-0">NIK</label>
                                                    <div class="col-md-12">
                                                        <input type="text" disabled placeholder="{{$kartutandapenduduk->NIK}}"
                                                            class="form-control ps-0 form-control-line">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-email" class="col-md-12">Nama Lengkap</label>
                                                    <div class="col-md-12">
                                                        <input type="email" disabled placeholder="{{$kartutandapenduduk->Nama_Lengkap}}"
                                                            class="form-control ps-0 form-control-line"
                                                            id="example-email">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-email" class="col-md-12">Foto Diri</label>
                                                    <div class="col-md-12">
                                                        <input type="email" disabled placeholder="{{$kartutandapenduduk->foto_diri}}"
                                                            class="form-control ps-0 form-control-line" 
                                                            id="example-email">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-email" class="col-md-12">Tanggal</label>
                                                    <div class="col-md-12">
                                                        <input type="email" disabled placeholder="{{$kartutandapenduduk->tanggal_waktu_lahir}}"
                                                            class="form-control ps-0 form-control-line" 
                                                            id="example-email">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-email" class="col-md-12">Nomor Kartu Keluarga</label>
                                                    <div class="col-md-12">
                                                        <input type="email" disabled placeholder="{{$kartutandapenduduk->no_KK}}"
                                                            class="form-control ps-0 form-control-line" 
                                                            id="example-email">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-email" class="col-md-12">Surat Keterangan</label>
                                                    <div class="col-md-12">
                                                        <input type="email" disabled placeholder="{{$kartutandapenduduk->surat_keterangan}}"
                                                            class="form-control ps-0 form-control-line" 
                                                            id="example-email">
                                                    </div>
                                                </div>  
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
@endsection