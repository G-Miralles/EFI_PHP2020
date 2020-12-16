<link href="{{ asset('css/form.css') }}" rel="stylesheet">

<div class=" d-flex justify-content-center aling-item-center">
    <div class="row">
        <div class="col-md-4">
        <div class="card" style="width: 50rem;">
            <div id="cardBody" class="card-body">
                <h5  class="card-title text-center"> {{ $Mod=='create' ? 'Agregar nuevo rol' : 'Editar rol' }} </h5>
                <hr style="background-color: #dee2e6">
                
                <div class="form-group">
                    <label for="Nombre" class="control-label"> {{'Nombre'}} </label>
                    <input type="text" name="name" placeholder="Ingrese un nombre para el nuevo rol" class="form-control" value="{{ isset($roles->name) ? $roles->name:old('name')}}">
                </div>

                <div class="text-center">
                    <a class="btn btn-primary" href="{{ url('roles') }}"> ← Vovler al Inicio </a>
                    <input type="submit" class="btn btn-success" value="{{ $Mod=='create' ? 'Agregar' : 'Editar' }}">
                </div>
                </div>
            </div>
        </div>
    </div>
</div>