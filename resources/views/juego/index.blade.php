@extends('layouts.app')

@section('template_title')
    Juego
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Juego') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('juegos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre</th>
										<th>Estado</th>
										<th>Fecha</th>
										<th>Ganador</th>
										<th>Resultado Final</th>
										<th>Estudiante Creador Id</th>
										<th>Estudiante Jugador Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($juegos as $juego)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $juego->nombre }}</td>
											<td>{{ $juego->estado }}</td>
											<td>{{ $juego->fecha }}</td>
											<td>{{ $juego->ganador }}</td>
											<td>{{ $juego->resultado_final }}</td>
											<td>{{ $juego->estudiante_creador_id }}</td>
											<td>{{ $juego->estudiante_jugador_id }}</td>

                                            <td>
                                                <form action="{{ route('juegos.destroy',$juego->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('juegos.show',$juego->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('juegos.edit',$juego->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $juegos->links() !!}
            </div>
        </div>
    </div>
@endsection
