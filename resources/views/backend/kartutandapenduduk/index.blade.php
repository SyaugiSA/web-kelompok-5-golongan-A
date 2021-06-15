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
                                <h6 class="card-subtitle">Data Pendaftar Kartu Tanda Penduduk</h6>
                                <div class="table-responsive">
                                    <table class="table user-table">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">NIK</th>
                                                <th class="border-top-0">NO. KK</th>
                                                <th class="border-top-0">Agama</th>
                                                <th class="border-top-0">Perkawinan</th>
                                                <th class="border-top-0">Gol. Darah</th>
                                                <th class="border-top-0">Pekerjaan</th>
                                                <th class="border-top-0">Edit</th>
                                            </tr>
                                        </thead>
                                        

                                        {{-- menerima variable $ktp_list yang berasal dari KartuTandaPendudukController pada method index --}}
                                        @foreach ($ktp_list as $list)
                                        <tr>
                                            <td>{{$list->nik}}</td>
                                            <td>{{$list->no_kk}}</td>
                                            <td>{{$list->agama}}</td>
                                            <td>{{$list->perkawinan}}</td>
                                            <td>{{$list->gol_darah}}</td>
                                            <td>{{$list->pekerjaan}}</td>
                                            <td>
                                                <div class="btn-group">
                                                    {{-- mengambil nik yang ingin di edit lalu mengararhkan bya ke route /kartutandapenduduk/edit/nik --}}
                                                    <a href="/kartutandapenduduk/edit/{{ $list->nik }}" class="btn btn-warning">Edit</a>
                                                </div>
                                            </td>
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