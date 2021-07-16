@extends('frontend/layouts.template')
@section('content')
      <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">

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
                                <h4 class="card-title">FORM PENGAJUAN CETAK KTP</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- column -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body"> 
                                <form action="/ktp_user/store" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="mb-3">
                                      <label class="form-label">Nomor NIK</label>
                                      <input type="text" class="form-control" value="{{$aktakelahiran->NIK}}" placeholder="{{$aktakelahiran->NIK}}" id="NIK_Pengajuan" name="NIK">
                                    </div>
                                    <div class="mb-3">
                                      <label class="form-label">Nama Lengkap</label>
                                      <input type="text" class="form-control" value="{{$aktakelahiran->nama_lengkap}}" placeholder="{{$aktakelahiran->nama_lengkap}}" name="Nama_Lengkap">
                                    </div>
                                    <div class="mb-3">
                                      <label class="form-label">Foto diri</label>
                                      <input type="file" name="foto_diri" class="form-control" >
                                    </div>
                                    @if ($errors->has('foto_diri'))
                                        <span class="text-danger small">
                                          <p>{{$errors->first('foto_diri')}}</p>
                                        </span>
                                    @endif
                                    <div class="mb-3">
                                      <label class="form-label">Nomor Kartu-Keluarga</label>
                                      <input placeholder="{{$aktakelahiran->no_KK}}" value="{{$aktakelahiran->no_KK}}" type="text" name="no_KK" class="form-control" >
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Surat Keterangan</label>
                                        <input type="file" name="surat_keterangan" class="form-control" >
                                    </div>
                                    @if ($errors->has('surat_keterangan'))
                                        <span class="text-danger small">
                                          <p>{{$errors->first('surat_keterangan')}}</p>
                                        </span>
                                    @endif
                                    <div class="mb-3">
                                      <label class="form-label">Tanggal Pengajuan</label>
                                      <input type="text" name="tanggal" id="tanggal_pembuatan" class="form-control tanggal_pembuatan" >
                                    </div>
                                    @if ($errors->has('tanggal'))
                                    <span class="text-danger small">
                                      <p>{{$errors->first('tanggal')}}</p>
                                    </span>
                                     @endif
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                  </form>
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

@push('content-css')
    {{-- <link rel="stylesheet" href="js/jquery-ui/jquery-ui.css"> --}}
    <link rel="stylesheet" href="{{asset("frontend/jquery/jquery-ui.css")}}">
@endpush

@push('content-js')
    <script src="{{asset("frontend/jquery/jquery.js")}}"></script>
    <script src="{{asset("frontend/jquery/jquery-ui.js")}}"></script>
  

    <script type="text/javascript">
        $(document).ready(function(){
            $('#tanggal_pembuatan').datepicker({
                dateFormat:"yy-mm-dd",
            });		
        });
    </script>
@endpush