@extends('frontend/layouts.template')
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
                                <h6 class="card-subtitle">Detail {{$aktakelahiran->nama_lengkap}}</h6>
                                <div class="container-fluid">
                                    <div class="card">
                                        <div class="card-body">
                                            <form class="form-horizontal form-material mx-2">
                                                <div class="form-group">
                                                    <label class="col-md-12 mb-0">Nomer Registrasi</label>
                                                    <div class="col-md-12">
                                                        <input type="text" disabled placeholder="{{$aktakelahiran->No_Reg}}"
                                                            class="form-control ps-0 form-control-line">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-12 mb-0">Nama Lengkap</label>
                                                    <div class="col-md-12">
                                                        <input type="text" disabled placeholder="{{$aktakelahiran->nama_lengkap}}"
                                                            class="form-control ps-0 form-control-line">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-email" class="col-md-12">Jenis Kelamin</label>
                                                    <div class="col-md-12">
                                                        <input type="email" disabled placeholder="{{$aktakelahiran->jenis_kelamin}}"
                                                            class="form-control ps-0 form-control-line"
                                                            id="example-email">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-email" class="col-md-12">Temppat Lahir</label>
                                                    <div class="col-md-12">
                                                        <input type="email" disabled placeholder="{{$aktakelahiran->tempat_lahir}}"
                                                            class="form-control ps-0 form-control-line" 
                                                            id="example-email">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-email" class="col-md-12">Temppat Lahir</label>
                                                    <div class="col-md-12">
                                                        <input type="email" disabled placeholder="{{$aktakelahiran->tempat_lahir}}"
                                                            class="form-control ps-0 form-control-line" 
                                                            id="example-email">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-email" class="col-md-12">Tanggal Waktu Lahir</label>
                                                    <div class="col-md-12">
                                                        <input type="email" disabled placeholder="{{$aktakelahiran->tanggal_waktu_lahir}}"
                                                            class="form-control ps-0 form-control-line" 
                                                            id="example-email">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-email" class="col-md-12">Tempat Dilahirkan</label>
                                                    <div class="col-md-12">
                                                        <input type="email" disabled placeholder="{{$aktakelahiran->tempat_dilahirkan}}"
                                                            class="form-control ps-0 form-control-line" 
                                                            id="example-email">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-email" class="col-md-12">Jenis Kelahiran</label>
                                                    <div class="col-md-12">
                                                        <input type="email" disabled placeholder="{{$aktakelahiran->jenis_kelahiran}}"
                                                            class="form-control ps-0 form-control-line" 
                                                            id="example-email">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-email" class="col-md-12">Kelahiran ke</label>
                                                    <div class="col-md-12">
                                                        <input type="email" disabled placeholder="{{$aktakelahiran->kelahiran_ke}}"
                                                            class="form-control ps-0 form-control-line" 
                                                            id="example-email">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-email" class="col-md-12">Penolong Kelahiran</label>
                                                    <div class="col-md-12">
                                                        <input type="email" disabled placeholder="{{$aktakelahiran->penolong_kelahiran}}"
                                                            class="form-control ps-0 form-control-line" 
                                                            id="example-email">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-email" class="col-md-12">Berat</label>
                                                    <div class="col-md-12">
                                                        <input type="email" disabled placeholder="{{$aktakelahiran->berat}} Kg"
                                                            class="form-control ps-0 form-control-line" 
                                                            id="example-email">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-email" class="col-md-12">Tinggi</label>
                                                    <div class="col-md-12">
                                                        <input type="email" disabled placeholder="{{$aktakelahiran->tinggi}} Cm"
                                                            class="form-control ps-0 form-control-line" 
                                                            id="example-email">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-email" class="col-md-12">Nomor Kartu Keluarga</label>
                                                    <div class="col-md-12">
                                                        <input type="email" disabled placeholder="{{$aktakelahiran->no_KK}}"
                                                            class="form-control ps-0 form-control-line" 
                                                            id="example-email">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-email" class="col-md-12">Nama Kepala Keluarga</label>
                                                    <div class="col-md-12">
                                                        <input type="email" disabled placeholder="{{$aktakelahiran->nama_kepala_keluarga}}"
                                                            class="form-control ps-0 form-control-line" 
                                                            id="example-email">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-email" class="col-md-12">Nomor Handphone</label>
                                                    <div class="col-md-12">
                                                        <input type="email" disabled placeholder="{{$aktakelahiran->noHP}}"
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