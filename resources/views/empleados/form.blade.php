

    <label for="Nombre"> {{'Nombre'}} </label>
    <input type="text" name="name" id="name" value="{{ isset($Empleado->name) ? $Empleado->name:''}}">
</br>
    <label for="Apellido"> {{'Apellido'}} </label>
    <input type="text" name="surname" id="surname" value="{{ isset($Empleado->surname) ? $Empleado->surname:''}}">
</br>
    <label for="Email"> {{'Email'}} </label>
    <input type="email" name="email" id="email" value="{{ isset($Empleado->email) ? $Empleado->email:''}}">
</br>
    <label for="Foto"> {{'Foto'}} </label>
    @if (isset($Empleado->photo))
        </br>
            <img src="{{ asset('storage').'/'.$Empleado->photo }}" alt="" width="200">
        </br>
    @endif
    
</br>
    <input type="submit"  value="{{ $Mod=='create' ? 'Agregar' : 'Editar' }}">

<a href="{{ url('empleados') }}"> Vovler al Inicio </a>
