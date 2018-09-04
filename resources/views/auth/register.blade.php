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


<body>
<header>
      <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container d-flex justify-content-between">
          <a href="/countries" class="navbar-brand d-flex align-items-center">
            <strong>Africa Works</strong>
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
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf


                        <br>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('氏名　※') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('役割　※') }}</label>

                            <div class="col-md-6">
                                <input id="role" type="text" class="form-control{{ $errors->has('role') ? ' is-invalid' : '' }}" name="role" value="{{ old('role') }}" required autofocus>

                                @if ($errors->has('role'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('role') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!--<div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('性別　※') }}</label>

                            <div class="col-md-6 btn-group btn-group-toggle" data-toggle="buttons">
                                <input id="gender" type="button" class="btn btn-outline-secondary form-control{{ $errors->has('tel') ? ' is-invalid' : '' }}" name="options"  autocomplete="off" value="男性" checked>
                        
                                <input id="gender" type="button" class="btn btn-outline-secondary form-control{{ $errors->has('tel') ? ' is-invalid' : '' }}" name="options"  autocomplete="off" value="女性" checked>
                            
                            @if ($errors->has('tel'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tel') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('電話番号　※') }}</label>

                            <div class="col-md-6">
                                <input id="tel" type="integer" class="form-control{{ $errors->has('tel') ? ' is-invalid' : '' }}" name="tel" value="{{ old('tel') }}" required>

                                @if ($errors->has('tel'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tel') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="birthday" class="col-md-4 col-form-label text-md-right">{{ __('生年月日　※') }}</label>
                            
                            <div class="col-md-6">
                                <input id="birthday" type="date" class="form-control{{ $errors->has('birthday') ? ' is-invalid' : '' }}" name="birthday" value="{{ old('birthday') }}" required>

                                @if ($errors->has('birthday'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('birthday') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <br>
                        <div class="text-center">
                            <h3>《学歴》</h3>
                        </div>
                        
                        <div class="form-group row">
                            <label for="university_name" class="col-md-4 col-form-label text-md-right">{{ __('大学名　※') }}</label>

                            <div class="col-md-6">
                                <input id="university_name" type="text" class="form-control{{ $errors->has('university_name') ? ' is-invalid' : '' }}" name="university_name" value="{{ old('university_name') }}" required>

                                @if ($errors->has('university_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('university_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="university_degree" class="col-md-4 col-form-label text-md-right">{{ __('学部・コース名　※') }}</label>

                            <div class="col-md-6">
                                <input id="university_degree" type="text" class="form-control{{ $errors->has('university_degree') ? ' is-invalid' : '' }}" name="university_degree" value="{{ old('university_degree') }}" required>

                                @if ($errors->has('university_degree'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('university_degree') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="master_university" class="col-md-4 col-form-label text-md-right">{{ __('大学院名') }}</label>

                            <div class="col-md-6">
                                <input id="master_university" type="text" class="form-control{{ $errors->has('master_university') ? ' is-invalid' : '' }}" name="master_university" value="{{ old('master_university') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="master_degree" class="col-md-4 col-form-label text-md-right">{{ __('修士課程名') }}</label>

                            <div class="col-md-6">
                                <input id="master_degree" type="text" class="form-control{{ $errors->has('master_degree') ? ' is-invalid' : '' }}" name="master_degree" value="{{ old('master_degree') }}">
                            </div>
                        </div>

                        <br>
                        <div class="text-center">
                            <h3>《職歴》</h3><p style="margin-left:10%">※職歴がある方は最新の物から記入。</p>
                        </div>

                        <div class="form-group row">
                            <label for="company_name" class="col-md-4 col-form-label text-md-right">{{ __('その１　会社名') }}</label>

                            <div class="col-md-6">
                                <input id="company_name" type="text" class="form-control{{ $errors->has('company_name') ? ' is-invalid' : '' }}" name="company_name" value="{{ old('company_name') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="position" class="col-md-4 col-form-label text-md-right">{{ __('役職') }}</label>

                            <div class="col-md-6">
                                <input id="position" type="text" class="form-control{{ $errors->has('position') ? ' is-invalid' : '' }}" name="position" value="{{ old('position') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="period" class="col-md-4 col-form-label text-md-right">{{ __('期間') }}</label>

                            <div class="col-md-6">
                                <input id="period" type="text" class="form-control{{ $errors->has('period') ? ' is-invalid' : '' }}" name="period" value="{{ old('period') }}">
                            </div>
                        </div>

                        <br>
                        <div class="form-group row">
                            <label for="company_name2" class="col-md-4 col-form-label text-md-right">{{ __('その２　会社名') }}</label>

                            <div class="col-md-6">
                                <input id="company_name" type="text" class="form-control{{ $errors->has('company_name2') ? ' is-invalid' : '' }}" name="company_name2" value="{{ old('company_name2') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="position2" class="col-md-4 col-form-label text-md-right">{{ __('役職') }}</label>

                            <div class="col-md-6">
                                <input id="position2" type="text" class="form-control{{ $errors->has('position2') ? ' is-invalid' : '' }}" name="position2" value="{{ old('position2') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="period2" class="col-md-4 col-form-label text-md-right">{{ __('期間') }}</label>

                            <div class="col-md-6">
                                <input id="period2" type="text" class="form-control{{ $errors->has('period2') ? ' is-invalid' : '' }}" name="period" value="{{ old('period2') }}">
                            </div>
                        </div>-->

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address　※') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                            <a href="/countries" class="btn btn-success">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</main>

</body>
