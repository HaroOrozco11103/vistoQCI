@extends('layouts.top-bar')

@section('content')
<div class="card shadow">
    <div class="card-header">Lista de incidencias</div>
    <div class="table-responsive">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Objeto</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Reportado</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Fecha del<br>reporte</th>
                    <th scope="col">Fecha de<br>resolución</th>
                    <th scope="col">Edificio o lugar</th>
                    <th scope="col">Aula</th>
                    <th scope="col">Ubicación<br>actual</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Contacto</th>
                    <th scope="col">Mostrar</th>
                </tr>
            </thead>
            <tbody>
              @if(count($incidencias)==0 && count($objetos)==0)
                <div class="alert alert-dismissible text-center alert-dismissible" style="background-color:#ff9d16;" role="alert">
                  Aún no existen reportes de objetos encontrados.
                </div>
              @else
                @foreach($incidencias as $key => $inc)
                <tr>
                    <td>{{ $objetos[$key]->nombre }}</td>
                    <td>{{ $objetos[$key]->color }}</td>
                    @if($inc->tipo == 0)
                      <td>Perdido</td>
                    @elseif($inc->tipo == 1)
                      <td>Encontrado</td>
                    @endif
                    @if($inc->estado == 0)
                      <td>Ausente</td>
                    @elseif($inc->estado == 1)
                      <td>Regresado</td>
                    @endif
                    <td>{{ $inc->fechaIncidente }}</td>
                    <td>{{ $inc->fechaResuelto }}</td>
                    <td>{{ $inc->edificio }}</td>
                    <td>{{ $inc->aula }}</td>
                    <td>{{ $inc->ubicacionActual }}</td>
                    <td>{{ $inc->nombre }}</td>
                    <td>{{ $inc->contacto }}</td>
                    <td>
                        <a href="{{ route('incidencias.show', $inc->id) }}" class="btn-outline-info bg-white">Mostrar detalles del objeto</a>
                    </td>
                </tr>
                @endforeach
              @endif
            </tbody>
        </table>
    </div>
    <br>
</div>
@endsection
