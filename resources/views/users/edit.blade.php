@extends('layouts.app')

@if(Auth::user())
<?php
      $role=Auth::user()->role;
      $users=Auth::user();
   ?>


@if(Auth::user() && $role == null)
@section('content')
<h1>　登録内容の変更</h1>　

{!! Form::open(['url'=>'/users/{{$user->id}}', 'method'=>'POST']) !!}
   <br>
   <div class="Form-group">
      {{Form::Label('name','氏名')}}
      {{Form::text('name', $user->name, ['class'=>'form-control'])}}
   </div>
   <br>

   <div class="Form-group">
      {{Form::Label('name_call','フリガナ')}}
      {{Form::text('name_call', $user->name_call, ['class'=>'form-control'])}}
   </div>
   <br>

   <div class="Form-group">
      {{Form::Label('gender','性別')}}
      {{Form::text('gender', $user->gender, ['class'=>'form-control'])}}
   </div>
   <br>

   <div class="Form-group">
      {{Form::Label('tel','電話番号')}}
      {{Form::text('tel', $user->tel, ['class'=>'form-control'])}}
   </div>
   <br>

   <div class="Form-group">
      {{Form::Label('birthday','生年月日')}}
      {{Form::text('birthday', $user->birthday, ['class'=>'form-control'])}}
   </div>
   <br>

   <div class="Form-group">
      {{Form::Label('university_name','大学名')}}
      {{Form::text('university_name', $user->university_name, ['class'=>'form-control'])}}
   </div>
   <br>

   <div class="Form-group">
      {{Form::Label('university_degree','学部・コース名')}}
      {{Form::text('university_degree', $user->university_degree, ['class'=>'form-control'])}}
   </div>
   <br>

   <div class="Form-group">
      {{Form::Label('university_date','')}}
      {{Form::text('university_date', $user->university_date, ['class'=>'form-control'])}}
   </div>
   <br>

   <div class="Form-group">
      {{Form::Label('master_university','大学院名')}}
      {{Form::text('master_university', $user->master_university, ['class'=>'form-control'])}}
   </div>
   <br>

   <div class="Form-group">
      {{Form::Label('master_degree','修士課程名')}}
      {{Form::text('master_degree', $user->master_degree, ['class'=>'form-control'])}}
   </div>
   <br>

   <div class="Form-group">
      {{Form::Label('master_date','')}}
      {{Form::text('namaster_dateme', $user->master_date, ['class'=>'form-control'])}}
   </div>
   <br>

   <div class="Form-group">
      {{Form::Label('company_name','その１　会社名')}}
      {{Form::text('company_name', $user->company_name, ['class'=>'form-control'])}}
   </div>
   <br>

   <div class="Form-group">
      {{Form::Label('position','役職')}}
      {{Form::text('position', $user->position, ['class'=>'form-control'])}}
   </div>
   <br>

   <div class="Form-group">
      {{Form::Label('period','期間')}}
      {{Form::text('period', $user->period, ['class'=>'form-control'])}}
   </div>
   <br>

   <div class="Form-group">
      {{Form::Label('company_name2','その２　会社名')}}
      {{Form::text('company_name2', $user->company_name2, ['class'=>'form-control'])}}
   </div>
   <br>

   <div class="Form-group">
      {{Form::Label('position2','役職')}}
      {{Form::text('position2', $user->position2, ['class'=>'form-control'])}}
   </div>
   <br>

   <div class="Form-group">
      {{Form::Label('period2','期間')}}
      {{Form::text('period2', $user->period2, ['class'=>'form-control'])}}
   </div>
   <br>

   {{Form::hidden('_method', 'PUT')}}
   <br>
   {{Form::submit('submit',['class'=>'btn btn-primary'])}}
   {!! Form::close() !!}


@else

  <h3>申し訳ございません。<br>
  こちらのページはご覧頂けません。</h3>

@endif

<a class="btn btn-success float-right" href="/users/{{$user->id}}" style="margin-right: 10%">Back</a>


@endsection
@endif