@extends('layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>Gestionar Preguntas</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('preguntas.index') }}">Preguntas</a></li>
                <li class="breadcrumb-item active">Ver</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('preguntas.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            @if($pregunta->area->nombre == 'Lenguaje')
                                <h4><span class="badge badge-danger">{{ $pregunta->area->nombre }}</span></h4>
                            @elseif ($pregunta->area->nombre == 'Historia')
                                <h4><span class="badge badge-success">{{ $pregunta->area->nombre }}</span></h4>
                            @elseif ($pregunta->area->nombre == 'Psicologia')
                                <h4><span class="badge badge-warning">{{ $pregunta->area->nombre }}</span></h4>
                            @elseif ($pregunta->area->nombre == 'Matemáticas')
                                <h4><span class="badge badge-primary">{{ $pregunta->area->nombre }}</span></h4>
                            @endif                          
                        </div>
                        <div class="form-group">
                            <strong>Pregunta:</strong>
                            <h5>{{ $pregunta->texto }}</h5>
                        </div>
                        <strong>Respuestas</strong>
                        <div class="form-group">
                            <ul class="list-group">
                                @foreach ($respuestas as $respuesta)
                                    <li class="list-group-item">
                                        @if ($respuesta->esCorrecta)
                                            <i class="bi bi-check-circle text-success"></i>
                                            {{ $respuesta->texto }}
                                        @else
                                            <i class="bi bi-x-circle text-danger"></i>
                                            {{ $respuesta->texto }}
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
