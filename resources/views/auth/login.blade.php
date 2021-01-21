@extends('layouts.app')


@section('content')
<div class="container">
    <img class="rounded mx-auto d-block" src="../imagenes/Logo.png" alt="logo">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">{{ __('Correo electrónico') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                </div>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <div class="mb-3">
                    <label for="password" class="form-label">{{ __('Contraseña') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                </div>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <div>
                    @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('¿Has olvidado tu contraseña? Recupérala aquí') }}
                    </a>
                    @endif
                </div>
                <div class="justify-content-center col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Atrás') }}
                    </button>
                    <button type="submit" class="btn btn-primary">
                        {{ __('Acceder') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="row justify-content-center">
        @if (Route::has('password.request'))
        <a class="btn btn-link" href="{{ route('password.request') }}">
            {{ __('¿Has olvidado tu contraseña? Recupérala aquí') }}
        </a>
        @endif
    </div>
</div>

@endsection