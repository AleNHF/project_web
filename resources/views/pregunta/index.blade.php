@extends('layouts.app')

@section('template_title')
    Pregunta
@endsection

@section('content')
    <div class="pagetitle">
        <h1>Gestionar Preguntas</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('preguntas.index') }}">Preguntas</a></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    @if (auth()->user()->tipo === 'D')
                        <div class="card-header">
                            <div style="display: flex; justify-content: space-between; align-items: center;">

                                <span id="card_title">
                                    {{ __('Pregunta') }}
                                </span>

                                <div class="float-right">
                                    <a href="{{ route('preguntas.create') }}" class="btn btn-primary btn-sm float-right"
                                        data-placement="left">
                                        {{ __('Crear nuevo') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    @if ($message = Session::get('danger'))
                        <div class="alert alert-danger">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table datatable">
                            {{-- <table class="table table-striped table-hover">  --}}
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

                                        <th style="width: 30%;">Pregunta</th>
                                        <th style="width: 20%;">Área</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($preguntas as $pregunta)
                                        <tr>
                                            {{-- <td>{{ ++$i }}</td> --}}
                                            <td>{{ $pregunta->id }}</td>

                                            <td>{{ Str::words($pregunta->texto, 10) }}</td>
                                            <td>{{ $pregunta->area->nombre }}</td>

                                            <td>
                                                <form action="{{ route('preguntas.destroy', $pregunta->id) }}"
                                                    method="POST">
                                                    <a class="btn btn-sm btn-primary "
                                                        href="{{ route('preguntas.show', $pregunta->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    @if (auth()->user()->tipo === 'D')
                                                        <a class="btn btn-sm btn-success"
                                                            href="{{ route('preguntas.edit', $pregunta->id) }}"><i
                                                                class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>

                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"><i
                                                                class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                    @endif
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>             
                    {{-- {!! $preguntas->links() !!}         --}}
            </div>
        </div>
    </div>

    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
        <button type="button" class="btn btn-danger disabled">Visitas</button>
        <button type="button" class="btn btn-warning disabled">{{ $visits }}</button>
    </div>
@endsection
