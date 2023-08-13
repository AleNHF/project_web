@extends('layouts.app')

@section('template_title')
    Estudiante
@endsection

@section('content')
    <div class="pagetitle">
        <h1>Gestionar Estudiantes</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('estudiantes.index') }}">Estudiantes</a></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Estudiante') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('estudiantes.create') }}" class="btn btn-primary btn-sm float-right"
                                    data-placement="left">
                                    {{ __('Crear nuevo') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table datatable">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

                                        <th>CI</th>
                                        <th>Estudiante</th>
                                        <th>Carrera de Interés</th>
                                        <th>Colegio</th>
                                        <th>Grado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($estudiantes as $estudiante)
                                        <tr>
                                            <td>{{ $estudiante->id }}</td>

                                            <td>{{ $estudiante->user->ci }}</td>
                                            <td>{{ $estudiante->user->name }}</td>
                                            <td>{{ $estudiante->carreraInteres }}</td>
                                            <td>{{ $estudiante->colegio }}</td>
                                            <td>{{ $estudiante->grado }}</td>

                                            <td>
                                                <form action="{{ route('estudiantes.destroy', $estudiante->id) }}"
                                                    method="POST">
                                                    {{-- <a class="btn btn-sm btn-primary " href="{{ route('estudiantes.show',$estudiante->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a> --}}
                                                    {{-- <a class="btn btn-sm btn-success"
                                                        href="{{ route('estudiantes.edit', $estudiante->id) }}"><i
                                                            class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a> --}}
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                                            class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
        <button type="button" class="btn btn-danger disabled">Visitas</button>
        <button type="button" class="btn btn-warning disabled">{{ $visits }}</button>
    </div>
@endsection
