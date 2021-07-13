@extends('frontend/layouts.template')

@section('content')
        <!-- ============================================================== -->
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
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
               <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                    <div class="col-lg-12 col-xlg-9">
                        <div class="card">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home" role="tabpanel">
                                    <div class="card-body">
                                    <h4 class="font-medium mt-4">Berkas-berkas</h4>
                                    <hr>
                                    <div class="sl-right">
                                            <div class="mt-3 row">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Akta Kelahiran</h5>
                                                        <p class="card-text">Berikut berkas-berkas yang harus disiapkan : <br>
                                                                1. Kartu Keluarga (KK) <br>
                                                                2. Foto/Scan Surat Keterangan Kelahiran dari Dokter/Bidang/Penolong <br>
                                                                3. Foto/Scan Kartu Keluarga (KK) Orang Tua <br>
                                                                4. Foto/Scan Kartu Tanda Penduduk (KTP) Orang Tua <br>
                                                                5. Foto/Scan Akta Nikah/Perkawinan Orang Tua <br>
                                                                6. Foto/Scan Kartu Tanda Penduduk (KTP) Saksi Kelahiran <br>
                                                                7. Mengisi dan Melampirkan Form F-2.01 <br>
                                                                8. Mengisi dan Melampirkan Surat Permohonan Pencatatan Kelahiran <br>
                                                                9. Mengisi dan Melampirkan Surat Pernyataan Pencatatan Saksi <br>
                                                                10. Mengisi dan Melampirkan Surat Pernyataan Belum Pernah Mencatatkan Perkawinan (Anak Hasil dari Perkawinan Sirih/Tidak Tercatat di KUA <br></p>
                                                        
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title">KTP</h5>
                                                        <p class="card-text">Berikut berkas-berkas yang harus disiapkan : <br>
                                                                1. Foto/Scan Surat Keterangan<br>
                                                                2. Foto/Scan Kartu Keluarga (KK)<br></p>
                                                        
                                                    </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <h4 class="font-medium mt-4">Note</h4>
                                                <blockquote class="mt-2">
                                                    <h5>Mohon untuk melampirkan berkas-berkas diatas dalam bentuk file rar/zip </h5>
                                                </blockquote>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->

                
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> © 2021 Material Pro Admin by wrappixel.com </a>
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
    <!-- ============================================================== -->
@endsection