@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Pregunta
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Pregunta</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('preguntas.store') }}"  role="form" enctype="multipart/form-data">
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
