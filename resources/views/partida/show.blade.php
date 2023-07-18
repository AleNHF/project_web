@extends('layouts.app')

@section('template_title')
    {{ $partida->name ?? "{{ __('Show') Partida" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Partida</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('partidas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Tiempo:</strong>
                            {{ $partida->tiempo }}
                        </div>
                        <div class="form-group">
                            <strong>Resultado:</strong>
                            {{ $partida->resultado }}
                        </div>
                        <div class="form-group">
                            <strong>Juego Id:</strong>
                            {{ $partida->juego_id }}
                        </div>
                        <div class="form-group">
                            <strong>Pregunta Id:</strong>
                            {{ $partida->pregunta_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
