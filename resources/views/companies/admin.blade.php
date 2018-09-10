@extends('layouts.app')


<?php
      $role=Auth::user()->role;
      $users=Auth::user();
   ?>
   
@if($role == $company->id || Auth::user()->id == 1)
@section('content')

<div class="container">
<br>
<h2>御社に応募している登録者情報</h2>

  @foreach($company->users as $user)
  <br>
      <table class="table table-striped">
        <tr>
          <th class="table-dark" width="20%">{{ __('氏名') }}</th>
          <td>{{ $user->name }}</td>
        </tr>
        
        <tr>
          <th class="table-dark">{{ __('フリガナ') }}</th>
          <td>{{ $user->name_call }}</td>
        </tr>

        <tr>
          <th class="table-dark">{{ __('性別') }}</th>
          <td>{{ $user->gender }}</td>
        </tr>

        <tr>
          <th class="table-dark">{{ __('生年月日') }}</th>
          <td>{{ $user->birthday }}</td>
        </tr>

        <tr>
          <th class="table-dark">{{ __('電話番号') }}</th>
          <td>{{ $user->tel }}</td>
        </tr>

        <tr>
          <th class="table-dark">{{ __('E-Mail') }}</th>
          <td>{{ $user->email }}</td>
        </tr>

        <tr>
          <th class="table-dark">{{ __('大学名') }}</th>
          <td>{{ $user->university_name }}</td>
        </tr>

        <tr>
          <th class="table-dark">{{ __('学部・コース名') }}</th>
          <td>{{ $user->university_degree }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $user->university_date }}</td>
        </tr>

        <tr>
          <th class="table-dark">{{ __('大学院名') }}</th>
          <td>{{ $user->master_university }}</td>
        </tr>

        <tr>
          <th class="table-dark">{{ __('修士課程名') }}</th>
          <td>{{ $user->master_degree }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $user->master_date }}</td>
        </tr>

        <tr>
          <th class="table-dark">{{ __('その１　会社名') }}</th>
          <td>{{ $user->company_name }}</td>
        </tr>

        <tr>
          <th class="table-dark">{{ __('役職') }}</th>
          <td>{{ $user->position }}</td>
        </tr>

        <tr>
          <th class="table-dark">{{ __('期間') }}</th>
          <td>{{ $user->period }}</td>
        </tr>

        <tr>
          <th class="table-dark">{{ __('その２　会社名') }}</th>
          <td>{{ $user->company_name2 }}</td>
        </tr>

        <tr>
          <th class="table-dark">{{ __('役職') }}</th>
          <td>{{ $user->position2 }}</td>
        </tr>

        <tr>
          <th class="table-dark">{{ __('期間') }}</th>
          <td>{{ $user->period2 }}</td>
        </tr>
<br>
<br>
        
        {!!Form::open(['route' => ['company__users.destroy', $company->id]]) !!}

        {{ Form::submit('消去', ['class'=>'btn']) }}
        {!! Form::close() !!}


      @endforeach


      <br>
      </table>


@else

  <h3>申し訳ございません。<br>
  こちらのページはご覧頂けません。</h3>

@endif

<a class="btn" href="/countries">戻る</a>
</div>
@endsection