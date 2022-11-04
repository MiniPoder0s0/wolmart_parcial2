@extends('master')

@section('contenido')
    <h1 class="text-center">Tu Cuenta</h1>
    <table class="table table-hover">
                <ul class="list-group">
                    <li class="list-group-item">{{$usuario->nombre}}</li>
                    <li class="list-group-item">{{$usuario->correo_electronico}}</li>
                    <li class="list-group-item">{{$usuario->edad}}</li>
                    <li class="list-group-item">{{$usuario->sexo}}</li>
                    <li class="list-group-item">{{$usuario->fecha_nacimiento}}</li>
                    <li class="list-group-item">{{$usuario->domicilio}}</li>
                    <li class="list-group-item">{{$usuario->telefono}}</li>
                  </ul>
        </tbody>
    </table>
@stop