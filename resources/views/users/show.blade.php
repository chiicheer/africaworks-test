@extends('layouts.app')

<?php
      $role=Auth::user()->role;
      $users=Auth::user();
   ?>


@if(Auth::user() && $role == null)
@section('content')
<div class="user-apply-list">
<h2>応募中の会社リスト</h2>
</div>

    <div class="table-responsive user-apply" style="width: 97%">
    <table class="table table-striped">
        <tr>
        <th class="table-dark">会社名</th>
        </tr>

        @foreach($user->companies as $company)
        <tr>
        <td>{{$company->title}}</td>
        </tr>
        @endforeach
    </table>
    </div>


<div class="user-info">
<h1>登録内容</h1>　
<div>

  <div class="container">
    <div class="table-responsive">
        <table class="table table-striped">
                <tr>
                    <th class="table-dark">{{ __('氏名') }}</th>
                    <td>{{ Auth::user()->name }}</td>
                </tr>

                <tr>
                    <th class="table-dark">{{ __('フリガナ') }}</th>
                    <td>{{ Auth::user()->name_call }}</td>
                </tr>

                <tr>
                    <th class="table-dark">{{ __('性別') }}</th>
                    <td>{{ Auth::user()->gender }}</td>
                </tr>

                <tr>
                    <th class="table-dark">{{ __('電話番号') }}</th>
                    <td>{{ Auth::user()->tel }}</td>
                </tr>

                <tr>
                    <th class="table-dark">{{ __('生年月日') }}</th>
                    <td>{{ Auth::user()->birthday }}</td>
                </tr>

                <tr>
                    <th class="table-dark">{{ __('大学名') }}</th>
                    <td>{{ Auth::user()->university_name }}</td>
                </tr>

                <tr>
                    <th class="table-dark">{{ __('学部・コース名') }}</th>
                    <td>{{ Auth::user()->university_degree }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ Auth::user()->university_date }}</td>
                </tr>

                <tr>
                    <th class="table-dark">{{ __('大学院名') }}</th>
                    <td>{{ Auth::user()->master_university }}</td>
                </tr>

                <tr>
                    <th class="table-dark">{{ __('修士課程名') }}</th>
                    <td>{{ Auth::user()->master_degree }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ Auth::user()->master_date }}</td>
                </tr>

                <tr>
                    <th class="table-dark">{{ __('その１　会社名') }}</th>
                    <td>{{ Auth::user()->company_name }}</td>
                </tr>

                <tr>
                    <th class="table-dark">{{ __('役職') }}</th>
                    <td>{{ Auth::user()->position }}</td>
                </tr>

                <tr>
                    <th class="table-dark">{{ __('期間') }}</th>
                    <td>{{ Auth::user()->period }}</td>
                </tr>

                <tr>
                    <th class="table-dark">{{ __('その２　会社名') }}</th>
                    <td>{{ Auth::user()->company_name2 }}</td>
                </tr>

                <tr>
                    <th class="table-dark">{{ __('役職') }}</th>
                    <td>{{ Auth::user()->position2 }}</td>
                </tr>

                <tr>
                    <th class="table-dark">{{ __('期間') }}</th>
                    <td>{{ Auth::user()->period2 }}</td>
                </tr>

                <tr>
                    <th class="table-dark">{{ __('E-Mail') }}</th>
                    <td>{{ Auth::user()->email }}</td>
                </tr>

        </table>
    </div>

    <div class="user-b">
    <a class="btn" href="/countries">戻る</a>
    </div>
    <!--<a class="btn" href="/users/{{Auth::user()->id}}/edit">編集</a>

    {!! Form::open(['action'=>['UsersController@destroy', $user->id], 'method'=>'POST']) !!}
    {{ Form::hidden('_method', 'DELETE') }}
    {{ Form::submit('消去', ['class'=>'btn']) }}
    {!! Form::close() !!}-->

</div>

@endif
@endsection
