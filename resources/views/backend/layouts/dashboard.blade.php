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
            
            <div class="col-md-6 col-sm-12 mb-3">
                <div class="card">

                    <div class="card-body">
                        <div class="card-title"><h4>Akta Kelahiran</h4></div>
                       Berikut data dan jumalh pemohon Akta Kelahiran
                    </div>

                    <div class="card-footer">
                        <a href="{{url ('aktakelahiran')}}" class="card-link">Lihat</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-6 mb-3">
                <div class="card">

                    <div class="card-body">
                        <div class="card-title"><h4>KTP</h4></div>
                        Berikut data  dan jumlah pemohon Kartu Tanda Penduduk
                    </div>

                    <div class="card-footer">
                        <a href="{{url ('kartutandapenduduk')}}" class="card-link">Lihat</a>
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