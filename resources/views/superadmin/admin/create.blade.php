@extends('superadmin/layouts.template')

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
                                    <li class="breadcrumb-item active" aria-current="page">Admin</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        {{ isset($admin_lecturer) ? 'Mengubah' : 'Menambahkan'}} Admin
                    </header>
                    @if ($errors->any())
                    <div class ="alert alert-danger">
                        <strong>Whoops!!</strong> there were some problems with your input. <br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="panel-body">
                        <div class="form">
                            <form class="form-validate form-horizontal" id="admin_form" 
                                action="{{ isset($admin) ? route('admin.update', $admin->id) : route('admin.store')}}" 
                                method="post">
                                {!! csrf_field() !!}
                                {!! isset($admin) ? method_field('PUT') : '' !!}
                                    <input type="hidden" name="id" value="{{isset($admin) ? $admin->id : ''}}"><br>
                                    <div class="form-group">
                                        <label for="cname" class="control-label col-lg-2">Id <span class="required">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="id" name="id" minlenght="5" 
                                            value="{{ isset($admin) ? $admin->id : '' }}" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cname" class="control-label col-lg-2">Nama <span class="required">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="nama" name="nama" minlenght="2" 
                                            value="{{isset($admin) ? $admin->nama : ''}}" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="curl" class="control-label col-lg-2">Password <span class="required">*</span></label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="password" name="password" 
                                            value="{{isset($admin) ? $admin->password : ''}}" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <button class="btn btn-primary" type="submit">Save</button>
                                            <a href="{{ route('admin.index')}}"><button class="btn btn-default" type="button">Cancel</button></a>
                                        </div>
                                    </div>
                            </form>
                        </div>

                    </div>
                </section>
            </div>
            </div>
        </div>
    </section>    
</section>
@endsection