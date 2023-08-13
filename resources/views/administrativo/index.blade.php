@extends('layouts.app')

@section('template_title')
    Administrativo
@endsection

@section('content')
    <div class="pagetitle">
        <h1>Gestionar Administrativos</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('administrativos.index') }}">Administrativos</a></li>
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
                                {{ __('Administrativo') }}
                            </span>

                            {{-- <div class="float-right">
                                <a href="{{ route('administrativos.create') }}" class="btn btn-primary btn-sm float-right"
                                    data-placement="left">
                                    {{ __('Create New') }}
                                </a>
                            </div> --}}
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
                                        <th>Cargo</th>
                                        <th>Usuario</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($administrativos as $administrativo)
                                        <tr>
                                            <td>{{ $administrativo->id }}</td>

                                            <td>{{ $administrativo->user->ci }}</td>
                                            <td>{{ $administrativo->cargo }}</td>
                                            <td>{{ $administrativo->user->name }}</td>

                                            <td>
                                                <form action="{{ route('administrativos.destroy', $administrativo->id) }}"
                                                    method="POST">
                                                    {{-- <a class="btn btn-sm btn-primary "
                                                        href="{{ route('administrativos.show', $administrativo->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success"
                                                        href="{{ route('administrativos.edit', $administrativo->id) }}"><i
                                                            class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a> --}}
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
