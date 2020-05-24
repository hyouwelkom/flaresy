@extends('layout')

@section('content')
<div class="container pt-lg-5 pb-lg-5 text-center" style="height: calc(100vh - 190px);">

    <h2 class="flaresy-title">SE CONNECTER</h2>

    <div class="custom-underlines">
        <div class="line"></div>
        <div class="box"></div>
        <div class="line"></div>
    </div>

    <div class="row justify-content-center">
        <div class="col-5">

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <input placeholder="Identifiant" id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autofocus>

                @error('username')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror

                <br><br>

                <input placeholder="Mot de passe" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror

                <br>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        Se souvenir de moi
                    </label>
                </div>

                <br>

                <button type="submit" class="btn btn-flaresy-rose">
                    Connexion
                </button>


            </form>

        </div>
    </div>
</div>
@endsection
