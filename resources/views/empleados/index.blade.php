Inicio despliegue de datos

<a href="{{ url('empleados/create') }}"> Nuevo empleado </a>

<table class="table table-dark">

    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
    @foreach ($Empleados as $Empleado)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>
                <img src="{{ asset('storage').'/'.$Empleado->photo }}" alt="" width="200">
            </td>
            <td>{{ $Empleado->name  }}</td>
            <td>{{ $Empleado->surname  }}</td>
            <td>{{ $Empleado->email  }}</td>
            <td> 

                <a href="{{ url('/empleados/'.$Empleado->id.'/edit') }}">
                    Editar
                </a>

                <form method="post" action="{{ url('/empleados/'.$Empleado->id)}}">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" onclick="return confirm ('¿Esta seguro de que desea eliminar este registro?');"> Eliminar </button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>

</table>