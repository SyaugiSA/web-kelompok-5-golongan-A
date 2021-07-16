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
                                <h6 class="card-subtitle">Data Pendaftar Akta Kelahiran</h6>
                                <div class="table-responsive">
                                    <table class="table user-table">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">No. Reg</th>
                                                <th class="border-top-0">NIK Pemohon</th>
                                                <th class="border-top-0">NIK Baru</th>
                                                <th class="border-top-0">Nama</th>
                                                <th class="border-top-0">Status</th>
                                                <th class="border-top-0">Detail</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- variable $aktakelahiran berasal dari controller AktaKelahiranController di method index --}}
                                            @foreach ($aktakelahiran as $item)
                                                <tr>
                                                    <td>{{$item->No_Reg}}</td>
                                                    <td>{{$item->nik_pemohon}}</td>
                                                    <td>{{$item->NIK}}</td>
                                                    <td>{{$item->nama_lengkap}}</td>
                                                    <td><button disabled class="btn btn-warning">{{$item->status}}</button></td>
                                                    {{-- link ini akan mengarah ke route '/aktakelahiran/edit/{{no_reg}}' sambil membawa
                                                        no_reg pegawai yang ingin dilihat detailnya--}}
                                                    <td><a href="/aktakelahiran/detail/{{$item->No_Reg}}" class="btn btn-warning" >Detail</a>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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