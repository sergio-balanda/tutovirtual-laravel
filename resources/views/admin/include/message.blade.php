@if (session("message"))
    <div class="alert alert-success alert-dismissible mt-2 mb-3" data-auto-dismiss="4000">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fas fa-check"></i> Exito!</h5>
        {{session("message")}}
    </div>
@endif