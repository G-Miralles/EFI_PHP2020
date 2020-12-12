@extends('layouts.app')

@section('content')


<div class="container">

<form action="{{ url('/empleados') }}" method="post" enctype="multipart/form-data">
{{ csrf_field ()}}

@include('empleados.form', ['Mod'=>'create'])

</form>

@endsection
