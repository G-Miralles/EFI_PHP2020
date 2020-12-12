@extends('layouts.app')

@section('content')

<div class="container">

    @if(Session::has('Mensaje'))

        <div class="alert alert-success" role="alert">
            {{Session::get('Mensaje')}}
        </div>

    @endif


    <a href="{{ url('empleados/create') }}" class="btn btn-success"> Nuevo empleado </a>
    <br/>
    <br/>

    <table class="table table-bordered table-hover table-dark table-striped">

        <thead>
            <tr>
                <th class="text-center" >#</th>
                <th class="text-center" >Foto</th>
                <th class="text-center" >Nombre</th>
                <th class="text-center" >Email</th>
                <th class="text-center" >Acciones</th>
            </tr>
        </thead>

        <tbody>
        @foreach ($Empleados as $Empleado)
            <tr>
                <td class="text-center" >{{$loop->iteration}}</td>
                <td class="text-center">
                    <img src="{{ asset('storage').'/'.$Empleado->photo }}" class="img-thumbnail img-fluid" alt="" width="100">
                </td>
                <td class="text-center" >{{ $Empleado->name . " " . $Empleado->surname  }}</td>
                <td class="text-center" >{{ $Empleado->email  }}</td>
                <td class="text-center"> 

                    <a class="btn btn-primary" href="{{ url('/empleados/'.$Empleado->id.'/edit') }}">
                        Editar
                    </a>

                    <form method="post" action="{{ url('/empleados/'.$Empleado->id)}}" style="display:inline">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button class="btn btn-danger" type="submit" onclick="return confirm ('¿Esta seguro de que desea eliminar este registro?');"> Eliminar </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>

    </table>
<div class="row justify-content-center align-items-center">
        {{ $Empleados->links() }}
</div>
    

</div>

@endsection