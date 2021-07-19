@extends('frontend/layouts.template')
@section('content')
      <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Pengajuan Cetak KTP Status PRR</h4>
                                <h6 class="card-subtitle">KHUSUS BAGI WARGA YANG PERNAH MELAKUKAN PEREKAMAN DATA DIRI </h6>
                                <div class="panel-body">
                                    @if ($message = Session::get('success'))
                                        <div class="alert alert-success">
                                            <h5>{{$message}}</h5>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- column -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                               <a href="/ktp_user/create/{{$user}}" class="btn btn-primary">Pengajuan Baru</a>
                                <div class="table-responsive">
                                    <table class="table user-table">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">No</th>
                                                <th class="border-top-0">NIK PEMOHON</th>
                                                <th class="border-top-0">NIK TERDAFTAR</th>
                                                <th class="border-top-0">NAMA LENGKAP</th>
                                                <th class="border-top-0">TANGGAL</th>
                                                <th class="border-top-0">STATUS</th>
                                                <th class="border-top-0">AKSI</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                             @foreach ($data as $item)
                                                 <tr>
                                                     <td>{{$no++}}</td>
                                                     <td>{{$item->NIK}}</td>
                                                     <td>{{$item->NIK}}</td>
                                                     <td>{{$item->Nama_Lengkap}}</td>
                                                     <td>{{$item->tanggal}}</td>
                                                     <td><button disabled class="btn btn-warning">{{$item->status}}</button></td>
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