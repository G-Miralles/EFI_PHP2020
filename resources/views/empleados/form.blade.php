
<div class="form-group">
    <label for="Nombre" class="control-label"> {{'Nombre'}} </label>
    <input type="text" class="form-control {{$errors->has('name')?'is-invalid':''}}" name="name" id="name" value="{{ isset($Empleado->name) ? $Empleado->name:old('name')}}">
    {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
</div>


<div class="form-group">
    <label for="Apellido" class="control-label"> {{'Apellido'}} </label>
    <input type="text" class="form-control {{$errors->has('surname')?'is-invalid':''}}" name="surname" id="surname" value="{{ isset($Empleado->surname) ? $Empleado->surname:old('surname')}}">
    {!! $errors->first('surname', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="form-group">
    <label for="Email" class="control-label"> {{'Email'}} </label>
    <input type="email" class="form-control {{$errors->has('email')?'is-invalid':''}}" name="email" id="email" value="{{ isset($Empleado->email) ? $Empleado->email:old('email')}}">
    {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
    <label for="Documento" class="control-label"> {{'Documento'}} </label>
    <input type="number" class="form-control {{$errors->has('dni')?'is-invalid':''}}" name="dni" id="dni" value="{{ isset($Empleado->dni) ? $Empleado->dni:old('dni')}}">
    {!! $errors->first('dni', '<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
    <label for="Direccion" class="control-label"> {{'Direccion'}} </label>
    <input type="text" class="form-control {{$errors->has('address')?'is-invalid':''}}" name="address" id="address" value="{{ isset($Empleado->address) ? $Empleado->address:old('address')}}">
    {!! $errors->first('address', '<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
    <label for="Telefono" class="control-label"> {{'Telefono'}} </label>
    <input type="number" class="form-control {{$errors->has('phone')?'is-invalid':''}}" name="phone" id="phone" value="{{ isset($Empleado->phone) ? $Empleado->phone:old('phone')}}">
    {!! $errors->first('phone', '<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
    <label for="Foto" class="control-label"> {{'Foto'}} </label>
    @if (isset($Empleado->photo))
        </br>
            <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$Empleado->photo }}" alt="" width="200">
        </br>
    @endif
    <input class="form-control {{$errors->has('photo')?'is-invalid':''}}" type="file" name="photo" id="photo" value="">
    {!! $errors->first('photo', '<div class="invalid-feedback">:message</div>') !!}
</div>



    <input type="submit" class="btn btn-success" value="{{ $Mod=='create' ? 'Agregar' : 'Editar' }}">

<a class="btn btn-primary" href="{{ url('empleados') }}"> Vovler al Inicio </a>
