@extends('layouts.top-bar')

@section('content')
<!-- Messages -->
@include('partials.mensajeBuscando')
<style>
  .block1
  {
    display: block;
    width: 100%;
    border: none;
    background-color: #CB3234;
    color: white;
    padding: 50px 100px;
    font-size: 16px;
    cursor: pointer;
    text-align: center;
    border-radius: 5px;
  }

  .block1:hover
  {
    background-color: #5E2129;
    color: white;
  }

  .block2
  {
    display: block;
    width: 100%;
    border: none;
    background-color: #252850;
    color: white;
    padding: 50px 100px;
    font-size: 16px;
    cursor: pointer;
    text-align: center;
    border-radius: 5px;
  }

  .block2:hover
  {
    background-color: #36465D;
    color: white;
  }
</style>

<form action="{{ route('incidencias.indexEncontrados') }}" method="GET">
    <button type="submit" class="btn block1 btn-block">Lista de objetos perdidos</button>
</form>
<br><br><br>
<form action="{{ route('incidencias.createReporte') }}" method="GET">
    <button type="submit" class="btn block2 btn-block">Reportar objeto perdido</button>
</form>
@endsection
