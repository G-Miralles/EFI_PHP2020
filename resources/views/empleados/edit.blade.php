<form action="{{ url('/empleados/' .$Empleado->id) }}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
{{ method_field('PATCH') }}
    <label for="Nombre"> {{'Nombre'}} </label>
    <input type="text" name="name" id="name" value="{{$Empleado->name}}">
</br>
    <label for="Apellido"> {{'Apellido'}} </label>
    <input type="text" name="surname" id="surname" value="{{$Empleado->surname}}">
</br>
    <label for="Email"> {{'Email'}} </label>
    <input type="email" name="email" id="email" value="{{$Empleado->email}}">
</br>
    <label for="Foto"> {{'Foto'}} </label>
    </br>
        <img src="{{ asset('storage').'/'.$Empleado->photo }}" alt="" width="200">
    </br>
    <input type="file" name="photo" id="photo" value="">
</br>
    <input type="submit"  value="Editar">
    <a href="{{ url('empleados') }}"> Vovler al Inicio </a>

</form>