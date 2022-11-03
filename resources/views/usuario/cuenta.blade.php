@extends('master')

@section('contenido')
    <h1 class="text-center">Tu Cuenta</h1>
    <table class="table table-hover">
            @foreach($usuario as $a)
                <ul class="list-group">
                    <li class="list-group-item">{{$a->nombre}}</li>
                    <li class="list-group-item">{{$a->correo_electronico}}</li>
                    <li class="list-group-item">{{$a->edad}}</li>
                    <li class="list-group-item">{{$a->sexo}}</li>
                    <li class="list-group-item">{{$a->fecha_nacimiento}}</li>
                    <li class="list-group-item">{{$a->domicilio}}</li>
                    <li class="list-group-item">{{$a->telefono}}</li>
                  </ul>
            @endforeach
        </tbody>
    </table>
@stop