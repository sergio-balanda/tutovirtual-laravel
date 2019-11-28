@if($errors->any())
    <div class="alert alert-danger alert-dismissible mt-2 mb-3">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h5><i class="icon fas fa-ban"></i> Alerta!</h5>
    El formulario contine errores
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
</div>
@endif