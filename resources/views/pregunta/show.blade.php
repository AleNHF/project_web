@extends('layouts.app')

@section('template_title')
    {{ $pregunta->area->nombre ?? "{{ __('Ver') Pregunta" }}
@endsection

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
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Pregunta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('preguntas.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Texto:</strong>
                            {{ $pregunta->texto }}
                        </div>
                        <div class="form-group">
                            <strong>Área:</strong>
                            {{ $pregunta->area->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
