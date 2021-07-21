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
                <h3 class="page-title mb-0 p-0"></h3>
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
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-6 mb-3">
                <div class="card text-white bg-primary mb-3" >
                <h3><div class="card-header">Kartu Tanda Penduduk</div></h3>
                <div class="card-body">
                    <p class="card-text">Berikut data dan jumlah pemohon Kartu Tanda Kelahiran</p>
                    <a href="{{url ('kartutandapenduduk')}}" class="btn btn-light">Lihat</a>
                </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 mb-3">
                <div class="card text-white bg-info mb-3" >
                <h3><div class="card-header">Akta Kelahiran</div></h3>
                <div class="card-body">
                    <p class="card-text">Berikut data dan jumlah pemohon Akta Kelahiran</p>
                    <a href="{{url ('aktakelahiran')}}" class="btn btn-light">Lihat</a>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer"> © 2021 Material Pro Admin by Wrappixel.com </a>
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
@endsection