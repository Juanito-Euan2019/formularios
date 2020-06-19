@extends('layouts.app')
@section('content')

{{$Modo=='crear'?'Agregar empleado':'Modificar empleado'}}

<div class="form-group">
<label for="Nombre" class="label">{{'Nombre'}}</label>
<input type="text" class="control" name="Nombre" id="Nombre" 
value="{{isset($empleado->Nombre)?$empleado->Nombre:''}}"
>
</div>


<div class="form-group">
<label for="ApellidoPaterno" class="label">{{'Apellido Paterno'}}</label>
<input type="text" class="control" name="ApellidoPaterno" id="ApellidoPaterno" 
value="{{isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:''}}"
>
</div>

<div class="form-group">
<label for="ApellidoMaterno" class="label">{{'Apellido Materno'}}</label>
<input type="text" class="control" name="ApellidoMaterno" id="ApellidoMaterno" 
value="{{isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:''}}"
>
</div>

<div class="form-group">
<label for="Correo" class="label">{{'Correo'}}</label>
<input type="email" class="control" name="Correo" id="Correo" 
value="{{isset($empleado->Correo)?$empleado->Correo:''}}"
>
</div>
<div class="form-group">
<label for="Foto" class="label">{{'Foto'}}</label>
@if(isset($empleado->Foto))
<br/>
<img src=" {{asset('storage').'/'.$empleado->Foto}}" alt="" width="200">
<br/>
@endif
<input type="file" class="control" name="Foto" id="Foto" value="">
</div>

<input type="submit" class="button is-success" value="{{$Modo=='crear'?'Agregar empleado':'Modificar empleado'}}">

<a class="button is-primary" href="{{url('empleados')}}">Regresar</a>
@stop
