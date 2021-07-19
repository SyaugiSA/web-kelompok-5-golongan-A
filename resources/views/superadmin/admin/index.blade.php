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

        <!-- Form validation -->
        <div class="container-fluid">
        <div class="row">
        <div class="tab-content">
            <div class="tab-pane active" id="home" role="tabpanel">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Tambah Admin
                    </header>
                    <div class="panel-body">
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                        @endif
                        <a href="{{ route('super.create') }}"><button class="btn btn-primary"
                            type="button"><li class="fa fa-plus">Tambah</li></button></a>
                    <br><br>
                    <table class="table table-striped table-advance table-hover">
                        <tbody>
                            <tr>
                                <th><i class="border-top-0"></i> Id</th>
                                <th><i class="border-top-0"></i> Password</th>
                                <th><i class="icon-cogs"></i>Action</th>
                            </tr>
                            @foreach ($admin as $item)
                            <tr>
                                <td>{{$item->email}}</td>
                                    <td>*****************</td>
                                <td>
                                    <div class="btn-group">
                                    <form action="{{ route('super.destroy',$item->id) }}" method="POST">
                                    <a class="btn btn-warning" href="{{ route('super.edit',$item->id) }}" >
                                        <i class="far fa-edit"></i></a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda mau menghapus data ini?')">
                                                <i class="far fa-trash-alt"></i>
                                                </button>
                                    </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </section>
            </div>
        </div>
        </div>
        </div>
        <!-- page end -->
    </section>
</section>
@endsection