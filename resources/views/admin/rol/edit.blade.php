@extends('theme.lte.layout')
@section('title','Crear Rol')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Boxed Layout</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Crear Rol</a></li>
                        <li class="breadcrumb-item"><a href="#">Layout</a></li>
                        <li class="breadcrumb-item active">Boxed Layout</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                @include('admin.include.validation')
                <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Crear rol</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                                    <i class="fas fa-times"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Nuevo</h3>
                                    <div class="card-tools">

                                        <div class="input-group input-group-sm">
                                            <div class="input-group-append">
                                                <a href="{{route('rols.index')}}" class="btn btn-danger">Volver</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <div class="col-md-6">
                                        <!-- general form elements disabled -->
                                        <!-- /.card-header -->
                                        <form role="form" action="{{route('rols.update', ['id' => $rol->id])}}"  method="POST" id="form-general">
                                            @method("put")
                                            @csrf
                                            <!-- input states -->
                                            <div class="form-group">
                                                <label class="col-form-label" for="inputSuccess">Nombre</label>
                                                <input type="text" class="form-control" id="name" placeholder="Nombre" name="name" autocomplete="off"
                                                       value="{{old('name', $rol->name ?? '')}}" required>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Guadar</button>
                                            </div>
                                        </form>

                                        <!-- /.card-body -->

                                        <!-- /.card -->

                                        <!-- /.card -->
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                        </div>
                        <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection
@section('extra-js')
    <script src="{{asset("assets/js/jquery-validation/jquery.validate.min.js")}}"></script>
    <script src="{{asset("assets/js/jquery-validation/localization/messages_es.min.js")}}"></script>
    <script src="{{asset("assets/js/funciones.js")}}"></script>
    <script src="{{asset("assets/js/funciones.js")}}"></script>
    <script src="{{asset("assets/pages/admin/crear.js")}}" type="text/javascript"></script>
@endsection