<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Africa Works</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>


<body style="background-color: #00ADB5">
<header>
      <div class="navbar shadow-sm" style="background-color: #303841">
        <div class="container d-flex justify-content-between">
          <a href="/countries" class="navbar-brand d-flex align-items-center">
            <strong style="color: #FF5722">Africa Works</strong>
          </a>
        </div>
      </div>
</header>
<br>
<br>
<main>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card login-box">
                <div class="card-header login-header">{{ __('ログイン') }}</div>

                <div class="card-body login-body">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('ログイン') }}">
                        @csrf

                      <div class="login-form">
                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('パスワード') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                      </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('パスワードを記憶する') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                          <div class="button-grp">
                            <button type="submit" class="btn login-b">{{ __('ログイン') }}</button>

                            <div class="forget">
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('パスワードを忘れましたか?') }}
                            </a>
                            </div>

                            <a href="/countries" class="btn login-back">戻る</a>
                          </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</main>

</body>
