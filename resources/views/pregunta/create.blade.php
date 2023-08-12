@extends('layouts.app')

@section('template_title')
    {{ __('Crear') }} Pregunta
@endsection

@section('content')
    <div class="pagetitle">
        <h1>Gestionar Preguntas</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('preguntas.index') }}">Preguntas</a></li>
                <li class="breadcrumb-item active">Crear</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Crear') }} Pregunta</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('preguntas.store') }}" role="form"
                            enctype="multipart/form-data">
                            @csrf

                            @include('pregunta.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
        <button type="button" class="btn btn-danger disabled">Visitas</button>
        <button type="button" class="btn btn-warning disabled">{{ $visits }}</button>
    </div>
@endsection
