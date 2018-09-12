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
          <a href="/countries" class="navbar-brand d-flex align-items-center" style="color: #FF5722">
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
            <div class="card register-box">
                <div class="card-header register-header">{{ __('会員登録')}} <span>{{__('　　　※')}}</span> {{__('の付いている項目は必ず記入して下さい')}}</div>

                <div class="card-body register-body">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                    <div class="self">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('氏名')}} <span>{{__('　※') }}</span></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="阿弗利加　太郎" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name_call" class="col-md-4 col-form-label text-md-right">{{ __('フリガナ')}} <span>{{__('　※') }}</span></label>

                            <div class="col-md-6">
                                <input id="name_call" type="text" class="form-control{{ $errors->has('name_call') ? ' is-invalid' : '' }}" name="name_call" value="{{ old('name_call') }}" placeholder="アフリカ　タロウ" required autofocus>

                                @if ($errors->has('name_call'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name_call') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('性別')}} <span>{{__('　※') }}</span></label>

                            <div class="col-md-6">
                            <select  id="gender" type="integer" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" name="gender" required><option value="">選択して下さい</option>
                            <option value="男性">男性</option>
                            <option value="女性">女性</option></select>

                            @if ($errors->has('gender'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                            @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tel" class="col-md-4 col-form-label text-md-right">{{ __('電話番号')}} <span>{{__('　※') }}</span><br>{{ __('(半角数字・ハイフン有り)') }}</label>

                            <div class="col-md-6">
                                <input id="tel" type="integer" class="form-control{{ $errors->has('tel') ? ' is-invalid' : '' }}" name="tel" value="{{ old('tel') }}" placeholder="000-0000-0000" required>

                                @if ($errors->has('tel'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tel') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="birthday" class="col-md-4 col-form-label text-md-right">{{ __('生年月日')}} <span>{{__('　※') }}</span></label>
                            
                            <div class="col-md-6">
                                <input id="birthday" type="date" class="form-control{{ $errors->has('birthday') ? ' is-invalid' : '' }}" name="birthday" value="{{ old('birthday') }}" required>

                                @if ($errors->has('birthday'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('birthday') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                        
                    <div class="career">
                        <div class="text-center">
                            <h3>《学歴》</h3>
                        </div>
                        
                        <div class="form-group row">
                            <label for="university_name" class="col-md-4 col-form-label text-md-right">{{ __('大学名')}} <span>{{__('　※') }}</span></label>

                            <div class="col-md-6">
                                <input id="university_name" type="text" class="form-control{{ $errors->has('university_name') ? ' is-invalid' : '' }}" name="university_name" value="{{ old('university_name') }}" placeholder="アフリカ大学" required>

                                @if ($errors->has('university_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('university_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="university_degree" class="col-md-4 col-form-label text-md-right">{{ __('学部・コース名')}} <span>{{__('　※') }}</span></label>

                            <div class="col-md-6">
                                <input id="university_degree" type="text" class="form-control{{ $errors->has('university_degree') ? ' is-invalid' : '' }}" name="university_degree" value="{{ old('university_degree') }}" placeholder="国際関係学部　アフリカ地域専攻" required>

                                @if ($errors->has('university_degree'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('university_degree') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="university_date" class="col-md-4 col-form-label text-md-right">{{ __('')}} <span>{{__('　※') }}</span></label>

                            <div class="col-md-6">
                                <select id="university_date" class="form-control{{ $errors->has('university_date') ? ' is-invalid' : '' }}" name="university_date"><option value="">選択して下さい</option>
                            <option value="卒業見込み">卒業見込み</option>
                            <option value="卒業">卒業</option>
                            <option value="中退">中退</option></select>

                            @if ($errors->has('university_date'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('university_date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="master_university" class="col-md-4 col-form-label text-md-right">{{ __('大学院名') }}</label>

                            <div class="col-md-6">
                                <input id="master_university" type="text" class="form-control{{ $errors->has('master_university') ? ' is-invalid' : '' }}" name="master_university" value="{{ old('master_university') }}" placeholder="アフリカ大学大学院">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="master_degree" class="col-md-4 col-form-label text-md-right">{{ __('修士課程名') }}</label>

                            <div class="col-md-6">
                                <input id="master_degree" type="text" class="form-control{{ $errors->has('master_degree') ? ' is-invalid' : '' }}" name="master_degree" value="{{ old('master_degree') }}" placeholder="アフリカ文化研究科">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="master_date" class="col-md-4 col-form-label text-md-right">{{ __('') }}</label>

                            <div class="col-md-6">
                                <select id="master_date" class="form-control{{ $errors->has('master_date') ? ' is-invalid' : '' }}" name="master_date"><option value="">選択して下さい</option>
                            <option value="卒業見込み">卒業見込み</option>
                            <option value="卒業">卒業</option>
                            <option value="中退">中退</option></select>
                            </div>
                        </div>
                    </div>

                    <div class="job-career">
                        <div class="text-center">
                            <h3>《職歴》</h3>
                        </div>

                        <div class="form-group row">
                            <label for="company_name" class="col-md-4 col-form-label text-md-right">{{ __('その１　会社名') }}</label>

                            <div class="col-md-6">
                                <input id="company_name" type="text" class="form-control{{ $errors->has('company_name') ? ' is-invalid' : '' }}" name="company_name" value="{{ old('company_name') }}" placeholder="現職もしくは最新の前職名">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="position" class="col-md-4 col-form-label text-md-right">{{ __('役職') }}</label>

                            <div class="col-md-6">
                                <input id="position" type="text" class="form-control{{ $errors->has('position') ? ' is-invalid' : '' }}" name="position" value="{{ old('position') }}" placeholder="営業職">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="period" class="col-md-4 col-form-label text-md-right">{{ __('期間') }}</label>

                            <div class="col-md-6">
                                <select id="period" type="text" class="form-control{{ $errors->has('period') ? ' is-invalid' : '' }}" name="period"><option value="">選択して下さい</option>
                            <option value="1年">1年</option>
                            <option value="2年">2年</option>
                            <option value="3年">3年</option>
                            <option value="4年">4年</option>
                            <option value="5年">5年</option>
                            <option value="6年">6年</option>
                            <option value="7年">7年</option>
                            <option value="8年">8年</option>
                            <option value="9年">9年</option>
                            <option value="10年以上">10年以上</option></select>
                            </div>
                        </div>

                        <br>
                        <div class="form-group row">
                            <label for="company_name2" class="col-md-4 col-form-label text-md-right">{{ __('その２　会社名') }}</label>

                            <div class="col-md-6">
                                <input id="company_name2" type="text" class="form-control{{ $errors->has('company_name2') ? ' is-invalid' : '' }}" name="company_name2" value="{{ old('company_name2') }}" placeholder="前職もしくは前々職名">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="position2" class="col-md-4 col-form-label text-md-right">{{ __('役職') }}</label>

                            <div class="col-md-6">
                                <input id="position2" type="text" class="form-control{{ $errors->has('position2') ? ' is-invalid' : '' }}" name="position2" value="{{ old('position2') }}" placeholder="企画職">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="period2" class="col-md-4 col-form-label text-md-right">{{ __('期間') }}</label>

                            <div class="col-md-6">
                                <select id="period2" type="text" class="form-control{{ $errors->has('period2') ? ' is-invalid' : '' }}" name="period2"><option value="">選択して下さい</option>
                            <option value="1年">1年</option>
                            <option value="2年">2年</option>
                            <option value="3年">3年</option>
                            <option value="4年">4年</option>
                            <option value="5年">5年</option>
                            <option value="6年">6年</option>
                            <option value="7年">7年</option>
                            <option value="8年">8年</option>
                            <option value="9年">9年</option>
                            <option value="10年以上">10年以上</option></select>
                            </div>
                        </div>
                    </div>

                    <div class="key">
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail')}} <span>{{__('　※') }}</span><br>{{ __('(半角英数字)') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="a1b2c3d4f5g@africa.jp" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('パスワード')}} <span>{{__('　※') }}</span><br>{{ __('(半角英数字6字以上)') }}</label>

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
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('パスワードの再確認')}} <span>{{__('　※') }}</span></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                    </div>

                            <button type="submit" class="btn r-btn"><span>{{ __('登録する') }}</span></button>
                            <a href="/countries" class="btn register-back">戻る</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</main>

</body>
