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
    <div class="container-fluid">
        <div class="row">
            <!-- Column -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="container-fluid">
                                    <div class="panel-body">
                                        <form  method="post" action="{{url('kartutandapenduduk/update', $kartutandapenduduk->nik)}}">
                                            {{ csrf_field() }}
                                            {{ method_field('PUT') }}
                                            <div class="mb-3">
                                                <label for="nik" class="form-label">Nomor Induk Keluarga</label>
                                                <input type="text" class="form-control" id="nik" name="nik" value="{{$kartutandapenduduk->nik}}">
                                                
                                            </div> 
                                            <div class="mb-3">
                                                <label for="no_kk" class="form-label">Nomor Kartu Keluarga</label>
                                                <input type="text" class="form-control" id="no_kk"   name="no_kk" value="{{$kartutandapenduduk->no_kk}}">
                                                
                                            </div> 
                                            <div class="mb-3">
                                                <label class="form-label" for="agama">Agama</label>
                                                <select class="form-select" id="agama" name="agama">
                                                  <option selected>{{$kartutandapenduduk->agama}}</option>
                                                  <option name="Islam">Islam</option>
                                                  <option name="konghucu">Konghucu</option>
                                                  <option name="Kristen">Kristen</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="perkawinan">Status Perkawinan</label>
                                                <select class="form-select" id="perkawinan" name="perkawinan">
                                                  <option selected>{{$kartutandapenduduk->perkawinan}}</option>
                                                  <option name="kawin">Kawin</option>
                                                  <option name="Belum Kawin">Belum Kawin</option>
                                                  <option name="Janda">Janda</option>
                                                  <option name="Duda">Duda</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="gol_darah">Golongan Darah</label>
                                                <select class="form-select" id="gol_darah" name="gol_darah">
                                                  <option selected>{{$kartutandapenduduk->gol_darah}}</option>
                                                  <option name="A">A</option>
                                                  <option name="B">B</option>
                                                  <option name="AB">AB</option>
                                                  <option name="O">O</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="pekerjaan" class="form-label">Pekrjaan</label>
                                                <input type="text" class="form-control" id="pekerjaan"  value="{{$kartutandapenduduk->pekerjaan}}" name="pekerjaan">
                                                <div id="pekerjaan" class="form-text"></div>
                                            </div> 
                                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                <button type="submit" class="btn btn-primary" >Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
@endsection