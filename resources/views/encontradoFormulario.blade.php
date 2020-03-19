@extends('layouts.top-bar')

@section('content')
<!-- Messages -->
@include('partials.mensajeEncontradoForm')
<div class="card shadow">
    <div class="card-header">{{ __('Reportar objeto encontrado') }}</div>
    <div class="card-body">
        @include('partials.formErrors')
        <form method="POST" action="{{ route('incidencias.store') }}">
            @csrf

            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-right"></label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="tipo" value="Encontrado" required readonly>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-right">Objeto encontrado</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="nombre" required autofocus>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-right">Descripción</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="color">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-right">Edificio o lugar donde fue encontrado</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="edificio" required>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-right">Aula (Si fue encontrado dentro de una)</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="aula">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-right">Lugar donde lo dejaste</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="ubicacionActual" required>
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-outline-primary">
                        {{ __('Enviar reporte') }}
                    </button>
                </div>
            </div>

        </form>
    </div>
</div>
@endsection
