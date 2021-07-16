@extends('frontend/layouts.template')
@section('content')
      <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            {{-- <div class="page-breadcrumb">
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
            </div> --}}

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
                                <h4 class="card-title">Data Bayi/Anak</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- column -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body"> 
                                <form action="/aktakelahiran_user/store" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="mb-3">
                                      <label class="form-label">NOMOR NIK PEMOHON</label>
                                      <input type="text" class="form-control" value="" placeholder="" id="NIK_Pengajuan" name="nik_pemohon">
                                    </div>
                                    @if ($errors->has('NIK'))
                                        <span class="text-danger small">
                                          <p>{{$errors->first('NIK')}}</p>
                                        </span>
                                    @endif
                                    <div class="mb-3">
                                      <label class="form-label">Nama Lengkap</label>
                                      <input type="text" class="form-control" value="" placeholder="" name="nama_lengkap">
                                    </div>
                                    @if ($errors->has('nama_lengkap'))
                                        <span class="text-danger small">
                                          <p>{{$errors->first('nama_lengkap')}}</p>
                                        </span>
                                    @endif
                                    <div class="mb-3">
                                      <label class="from-label">Jenis Kelamin</label>
                                      <select class="form-select" name="jenis_kelamin">
                                        <option value="">Pilih</option>
                                        <option value="L">Laki-Laki</option>
                                        <option value="P">Perempuan</option>
                                      </select>
                                    </div>
                                    @if ($errors->has('jenis_kelamin'))
                                        <span class="text-danger small">
                                          <p>{{$errors->first('jenis_kelamin')}}</p>
                                        </span>
                                    @endif
                                    <div class="mb-3">
                                      <label class="form-label">Tempat Kelahiran</label>
                                      <input name="tempat_lahir" class="form-control" >
                                    </div>
                                    @if ($errors->has('tempat_lahir'))
                                        <span class="text-danger small">
                                          <p>{{$errors->first('tempat_lahir')}}</p>
                                        </span>
                                    @endif
                                    <div class="mb-3">
                                      <label class="form-label">Tanggal Lahir</label>
                                      <input type="text" name="tanggal_lahir" id="tanggal_lahir" class="form-control" >
                                    </div>
                                    @if ($errors->has('tanggal_lahir'))
                                        <span class="text-danger small">
                                          <p>{{$errors->first('tanggal_lahir')}}</p>
                                        </span>
                                    @endif
                                    <div class="mb-3">
                                      <label class="form-label">Waktu Lahir Format: hh:mm</label>
                                      <input type="text" name="waktu_lahir" id="waktu_lahir" class="form-control" >
                                    </div>
                                    @if ($errors->has('waktu_lahir'))
                                        <span class="text-danger small">
                                          <p>{{$errors->first('waktu_lahir')}}</p>
                                        </span>
                                    @endif
                                    <div class="mb-3">
                                      <label class="form-label">Tempat Dilahirkan</label>
                                      <input type="text" name="tempat_dilahirkan" class="form-control" >
                                    </div>
                                    @if ($errors->has('tempat_dilahirkan'))
                                        <span class="text-danger small">
                                          <p>{{$errors->first('tempat_dilahirkan')}}</p>
                                        </span>
                                    @endif
                                    <div class="mb-3">
                                      <label class="from-label">Jenis Kelahiran</label>
                                      <select class="form-select" name="jenis_kelahiran">
                                        <option value="">Pilih</option>
                                        <option value="normal">Normal</option>
                                        <option value="cesar">Cesar</option>
                                      </select>
                                    </div>
                                    @if ($errors->has('jenis_kelahiran'))
                                        <span class="text-danger small">
                                          <p>{{$errors->first('jenis_kelahiran')}}</p>
                                        </span>
                                    @endif
                                    <div class="mb-3">
                                      <label class="form-label">Kelahiran Ke</label>
                                      <input type="text" name="kelahiran_ke" class="form-control" >
                                    </div>
                                    @if ($errors->has('kelahiran_ke'))
                                        <span class="text-danger small">
                                          <p>{{$errors->first('kelahiran_ke')}}</p>
                                        </span>
                                    @endif
                                    <div class="mb-3">
                                      <label class="form-label">Penolong Kelahiran</label>
                                      <select class="form-select" name="penolong_kelahiran">
                                        <option value="">Pilih</option>
                                        <option value="Bidan">Bidan</option>
                                        <option value="Dokter">Dokter</option>
                                        <option value="Dukun">Dukun</option>
                                      </select>
                                    </div>
                                    @if ($errors->has('penolong_kelahiran'))
                                        <span class="text-danger small">
                                          <p>{{$errors->first('penolong_kelahiran')}}</p>
                                        </span>
                                    @endif
                                    <div class="mb-3">
                                      <label class="form-label">Berat</label>
                                      <input type="text" name="berat" class="form-control" >
                                    </div>
                                    @if ($errors->has('berat'))
                                        <span class="text-danger small">
                                          <p>{{$errors->first('berat')}}</p>
                                        </span>
                                    @endif
                                    <div class="mb-3">
                                      <label class="form-label">Tinggi</label>
                                      <input type="text" name="tinggi" class="form-control" >
                                    </div>
                                    @if ($errors->has('tinggi'))
                                        <span class="text-danger small">
                                          <p>{{$errors->first('tinggi')}}</p>
                                        </span>
                                    @endif
                                    <div class="mb-3">
                                      <label class="form-label">Nomor Kartu Keluarga</label>
                                      <input type="text" name="no_KK" class="form-control" >
                                    </div>
                                    @if ($errors->has('no_KK'))
                                        <span class="text-danger small">
                                          <p>{{$errors->first('no_KK')}}</p>
                                        </span>
                                    @endif
                                    <div class="mb-3">
                                      <label class="form-label">Nama Kepala Keluarga</label>
                                      <input type="text" name="nama_kepala_keluarga" class="form-control" >
                                    </div>
                                    @if ($errors->has('nama_kepala_keluarga'))
                                        <span class="text-danger small">
                                          <p>{{$errors->first('nama_kepala_keluarga')}}</p>
                                        </span>
                                    @endif
                                    <div class="mb-3">
                                      <label class="form-label">Nomor Handphone</label>
                                      <input type="text" name="noHP" class="form-control" >
                                    </div>
                                    @if ($errors->has('noHP'))
                                    <span class="text-danger small">
                                      <p>{{$errors->first('noHP')}}</p>
                                    </span>
                                @endif
                                    <div class="mb-3">
                                      <label class="form-label">File Administrasi format : pdf</label>
                                      <input type="file" name="file_administrasi" class="form-control" >
                                    </div>
                                    @if ($errors->has('file_administrasi'))
                                        <span class="text-danger small">
                                          <p>{{$errors->first('file_administrasi')}}</p>
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
    <link rel="stylesheet" href="js/jquery-ui/jquery-ui.css">
    <link rel="stylesheet" href="{{asset("frontend/jquery/jquery-ui.css")}}">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
@endpush

@push('content-js')
    <script src="{{asset("frontend/jquery/jquery.js")}}"></script>
    <script src="{{asset("frontend/jquery/jquery-ui.js")}}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
  

    <script type="text/javascript">
        $(document).ready(function(){
            $('#tanggal_lahir').datepicker({
                dateFormat:"yy-mm-dd",
            });		
        });
    </script>

@endpush
