@extends('layouts.game')

@section('content')
    <section class="content container-fluid">
        <h1>AQUI SE SELECCIONA EL MODO DE JUEGO PARA EMPEZAR PARTIDA</h1>
    </section>

    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
        <button type="button" class="btn btn-danger disabled">Visitas</button>
        <button type="button" class="btn btn-warning disabled">{{ $visits }}</button>
    </div>
@endsection
