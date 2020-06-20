  
@extends('layouts.app')
@section('content')


@if(Session::has('Mensaje')){{
    Session::get('Mensaje')
}}
@endif

<a href="{{url('empleados/create')}}" class="button is-large is-success is-rounded">Agregar Empleado</a>
<br/>
<br/>
<table class="table table-light table-hover">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($empleados as $empleado)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>
                <img src=" {{asset('storage').'/'.$empleado->Foto}}"class="img-thumbnail img-fluid" alt="" width="200">
            </td>
            <td>{{$empleado->Nombre}}</td>
            <td>{{$empleado->ApellidoPaterno}}</td>
            <td>{{$empleado->ApellidoMaterno}}</td>
            <td>{{$empleado->Correo}}</td>
            <td>

                <a  class="button is-warning" href="{{url('/empleados/'.$empleado->id.'/edit') }}">
                    Editar
                </a>
                | 

                <form method="post" action="{{url('/empleados/'.$empleado->id)}}" style="display:inline">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <button class="button is-danger" type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>
                    
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop