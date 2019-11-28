@extends('theme.lte.layout')
@section('title','Roles')
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
                        <li class="breadcrumb-item"><a href="#">Roles</a></li>
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
                @include('admin.include.message')

                <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Roles</h3>

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
                                    <h3 class="card-title">Roles</h3>

                                    <div class="card-tools">

                                        <div class="input-group input-group-sm" style="width: 150px;">

                                            <input type="text" name="table_search" class="form-control float-right" placeholder="Buscar">

                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                                <a href="{{route('rols.create')}}" class="btn btn-primary">Nuevo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover" id="tabla-data">
                                        <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Acciones</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($rols as $key=>$rol)
                                            <tr>
                                                <td>{{$rol->name}}</td>
                                                <td>
                                                    <div class="btn-group" role="group">
                                                        <a href="{{route('rols.edit', ['id' => $rol->id])}}" class="btn btn-white" data-toggle="tooltip" data-placement="top" title="Editar">
                                                            <i class="fas fa-pencil-alt text-primary"></i>
                                                        </a>
                                                        <form action="{{route('rols.destroy', ['id' => $rol->id])}}"  method="POST" class="form-eliminar">
                                                            @csrf
                                                            @method("delete")
                                                            <button class="btn btn-white text-danger" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="fas fa-trash"></i></button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            {{--{{$rols->links()}}--}}
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
    <script src="{{asset("assets/js/funciones.js")}}"></script>
    <script src="{{asset("assets/pages/admin/index.js")}}"></script>
@endsection