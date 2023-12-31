@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Docente
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Docente</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('docentes.update', $docente->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('docente.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div>
        <p>Esta página ha sido visitada<h5><span class="badge badge-warning">{{ $visits }}</span></h5> veces.</p>
    </div>
@endsection
