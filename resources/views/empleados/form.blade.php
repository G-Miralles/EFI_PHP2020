{{ $Mod=='create' ? 'Nuevo empleado' : 'Editar empleado' }}

    <label for="Nombre"> {{'Nombre'}} </label>
    <input type="text" name="name" id="name" value="">
</br>
    <label for="Apellido"> {{'Apellido'}} </label>
    <input type="text" name="surname" id="surname" value="">
</br>
    <label for="Email"> {{'Email'}} </label>
    <input type="email" name="email" id="email" value="">
</br>
    <label for="Foto"> {{'Foto'}} </label>
    <input type="file" name="photo" id="photo" value="">
</br>
    <input type="submit"  value="Agregar">

<a href="{{ url('empleados') }}"> Vovler al Inicio </a>
