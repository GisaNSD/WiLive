@extends('layouts.app')

@section('content')
<div class="container">
    <img class="rounded mx-auto d-block logo" src="../imagenes/logo-primary.svg" alt="logo">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">{{ __('Correo electrónico') }}</label>
                    <input id="email" type="email" placeholder="nombre@gmail.com" class="form-control @error('email') is-invalid @enderror shadow-sm p-3 mb-5 bg-white rounded" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                </div>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <div class="mb-3">
                    <label for="password" class="form-label">{{ __('Contraseña') }}</label>
                    <input id="password" type="password" placeholder="********" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                </div>
                @error('password')
                <span class="invalid-feedback color" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <div class="forget-password-container">
                    @if (Route::has('password.request'))
                    <a class="btn forget-password-link" href="{{ route('password.request') }}">
                        {{ __('¿Has olvidado tu contraseña? Recupérala aquí') }}
                    </a>
                    @endif
                </div>
                <div class="buttons-container">
                    <button type="submit" class="button-back">
                        {{ __('Atrás') }}
                    </button>
                    <button type="submit" class="button-access">
                        {{ __('Acceder') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection