@extends('layouts.auth')

@section('content')
    <div class="container position-relative" style="margin-top: 80px;">
        <div class="row gy-5" data-aos="fade-in">
            <div class="col-lg-6">
                <img src="{{ asset('assets/img/welcome-img.png') }}" class="img-fluid" alt="" style="width: 100%;">
            </div>
            <div class="col-lg-6">
                <h1 style="font-size: 56px; color: #FFFFFF; font-weight: bold; margin-top: 40px; margin-right: 10px;">¡Bienvenido de vuelta!</h1>
                    
                <form method="POST" action="{{ route('login') }}" style="margin-top: 50px;">
                    @csrf

                    <div class="row mb-3">
                        <label for="email"
                            class="col-md-4 col-form-label text-md-end" style="color: #FFFFFF;">{{ __('Correo electrónico') }}</label>
                        <div class="col-md-6">
                            <input id="email" type="email"
                                class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="password"
                            class="col-md-4 col-form-label text-md-end" style="color: #FFFFFF;">{{ __('Contraseña') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password"
                                required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-4 mt-4">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn" style="background-color: #73191E; border-color: #73191E; color:#FFFFFF;">
                                {{ __('Iniciar Sesión') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}" style="color:#FFFFFF;">
                                    {{ __('¿Olvidaste tu contraseña?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
