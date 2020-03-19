@extends('layouts.top-bar')

@section('content')
<!-- Messages -->
@include('partials.mensajeBuscando')
<div class="card shadow">
    <div class="card-header">Objetos encontrados
        <a class="btn btn-outline-info bg-white" style="float:right;" href="{{ route('incidencias.createReporte') }}">Reportar objero perdido</a>
    </div>
    <div class="table-responsive">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Objeto</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Fecha del<br>reporte</th>
                    <th scope="col">Edificio o lugar</th>
                    <th scope="col">Aula</th>
                    <th scope="col">Ubicación<br>actual</th>
                    <th scope="col">Estado</th>
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
                    <td>{{ $inc->fechaIncidente }}</td>
                    <td>{{ $inc->edificio }}</td>
                    <td>{{ $inc->aula }}</td>
                    <td>{{ $inc->ubicacionActual }}</td>
                    @if($inc->estado == 0)
                      <td>Perdido</td>
                    @elseif($inc->estado == 1)
                      <td>Reclamado</td>
                    @endif
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
