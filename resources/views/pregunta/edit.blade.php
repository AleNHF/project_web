@extends('layouts.app')

@section('template_title')
    {{ __('Editar') }} Pregunta
@endsection

@section('content')
    <div class="pagetitle">
        <h1>Gestionar Preguntas</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('preguntas.index') }}">Preguntas</a></li>
                <li class="breadcrumb-item active">Editar</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Editar') }} Pregunta</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('preguntas.update', $pregunta->id) }}" role="form"
                            enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('pregunta.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
