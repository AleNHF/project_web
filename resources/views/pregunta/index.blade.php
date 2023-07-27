@extends('layouts.app')

@section('template_title')
    Pregunta
@endsection

@section('content')
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
                                <a href="{{ route('preguntas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

										<th>Texto</th>
										<th>Area Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($preguntas as $pregunta)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $pregunta->texto }}</td>
											<td>{{ $pregunta->area_id }}</td>

                                            <td>
                                                <form action="{{ route('preguntas.destroy',$pregunta->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('preguntas.show',$pregunta->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    @if (auth()->user()->tipo === 'D')
                                                    <a class="btn btn-sm btn-success" href="{{ route('preguntas.edit',$pregunta->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>

                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
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
                {!! $preguntas->links() !!}
            </div>
        </div>
    </div>

    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
        <button type="button" class="btn btn-danger disabled">Visitas</button>
        <button type="button" class="btn btn-warning disabled">{{ $visits }}</button>
    </div>
@endsection
