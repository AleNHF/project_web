@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Nombre completo') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> <!-- Nombre -->

                            <div class="row mb-3">
                                <label for="ci"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Carnet de Identidad') }}</label>

                                <div class="col-md-6">
                                    <input id="ci" type="text"
                                        class="form-control @error('ci') is-invalid @enderror" name="ci"
                                        value="{{ old('ci') }}" required autocomplete="ci">

                                    @error('ci')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> <!-- CI -->

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Correo electrónico') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> <!-- Email -->

                            <div class="row mb-3">
                                <label for="telefono"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Nro. celular') }}</label>

                                <div class="col-md-6">
                                    <input id="telefono" type="text"
                                        class="form-control @error('telefono') is-invalid @enderror" name="telefono"
                                        value="{{ old('telefono') }}" required autocomplete="telefono">

                                    @error('telefono')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> <!-- Telefono -->

                            <div class="row mb-3">
                                <label for="colegio"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Colegio') }}</label>

                                <div class="col-md-6">
                                    <input id="colegio" type="text"
                                        class="form-control @error('colegio') is-invalid @enderror" name="colegio"
                                        value="{{ old('colegio') }}" required autocomplete="colegio">

                                    @error('colegio')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> <!-- Colegio -->

                            <div class="row mb-3">
                                <label for="carreraInteres"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Carrera de Interés') }}</label>

                                <div class="col-md-6">
                                    <select id="carreraInteres" name="carreraInteres" class="form-select">
                                        <option selected>Escoge una carrera...</option>
                                        <option value="Administracion">Administración de Empresas</option>
                                        <option value="Comercio">Comercio Internacional</option>
                                        <option value="Economia">Economía</option>
                                        <option value="Comercial">Ingeniería Comercial</option>
                                        <option value="Financiera">Ingeniería Financiera</option>
                                    </select>
                                </div>
                            </div><!-- CarreraInteres -->

                            <div class="row mb-3">
                                <label for="grado"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Grado') }}</label>

                                <div class="col-md-6">
                                    <select id="grado" name="grado" class="form-select">
                                        <option selected>Escoge un grado...</option>
                                        <option value="4">4to grado</option>
                                        <option value="5">5to grado</option>
                                        <option value="6">6to grado</option>
                                    </select>
                                </div>
                            </div><!-- Grado -->

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirmar contraseña') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Regístrate') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
