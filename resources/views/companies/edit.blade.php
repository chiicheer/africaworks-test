@extends('layouts.app')

@section('content')
   <?php
      $role=Auth::user()->role;
      $users=Auth::user();
   ?>
   
@if($role == $company->id || Auth::user()->id == 1)
<div class="edit-title">
<h1>編集ページ</h1>
</div>

<div class="edit-sub">
<h3>求人内容</h3>
</div>

{!! Form::open(['action'=>['CompaniesController@update', $company->id], 'method'=>'POST', 'enctype'=> 'multipart/form-data']) !!}
   <br>
    <!--<div class="from-group">
      {{Form::file('cover_image')}}
      {{Form::file('cover_image')}}
      {{Form::file('cover_image')}}
   </div>
   <br>

   <div class="Form-group">
      {{Form::Label('country_id','国種別　※こちらは変更しないで下さい！！！')}}
      {{Form::text('country_id', $company->country_id, ['class'=>'form-control'])}}
   </div>-->
   <br>

   <div class="Form-group edit">
   	{{Form::Label('title','タイトル')}}
   	{{Form::text('title', $company->title, ['class'=>'form-control'])}}
   </div>
   <br>

   <div class="Form-group edit">
      {{Form::Label('description','業務要約')}}
      {{Form::textarea('description', $company->description, ['class'=>'form-control'])}}
   </div>
   <br>

   <div class="Form-group edit">
      {{Form::Label('point','業務要約')}}
      {{Form::textarea('point', $company->point, ['class'=>'form-control'])}}
   </div>
   <br>

   <div class="Form-group edit">
      {{Form::Label('job_content','業務内容')}}
      {{Form::textarea('job_content', $company->job_content, ['class'=>'form-control'])}}
   </div>
   <br>

   <div class="Form-group edit">
      {{Form::Label('place','勤務地')}}
      {{Form::text('place', $company->place, ['class'=>'form-control'])}}
   </div>
   <br>

   <div class="Form-group edit">
      {{Form::Label('relate','雇用形態')}}
      {{Form::text('relate', $company->relate, ['class'=>'form-control'])}}
   </div>
   <br>

   <div class="Form-group edit">
      {{Form::Label('role','職種')}}
      {{Form::text('role', $company->role, ['class'=>'form-control'])}}
   </div>
   <br>

   <div class="Form-group edit">
      {{Form::Label('salary','給与')}}
      {{Form::text('salary', $company->salary, ['class'=>'form-control'])}}
   </div>
   <br>

   <div class="Form-group edit">
      {{Form::Label('welfare','待遇')}}
      {{Form::text('welfare', $company->welfare, ['class'=>'form-control'])}}
   </div>
   <br>

   <div class="Form-group edit">
      {{Form::Label('time','勤務時間')}}
      {{Form::text('time', $company->time, ['class'=>'form-control'])}}
   </div>
   <br>

   <div class="Form-group edit">
      {{Form::Label('skill','求める人材')}}
      {{Form::textarea('skill', $company->skill, ['class'=>'form-control'])}}
   </div>
   <br>

   <div class="Form-group edit">
      {{Form::Label('apply_way','応募の流れ')}}
      {{Form::textArea('apply_way', $company->apply_way, ['class'=>'form-control'])}}
   </div>

   <div class="edit-sub1">
   <h3>御社に関する情報</h3>
   </div>

   <div class="Form-group edit">
      {{Form::Label('company_name','会社名')}}
      {{Form::text('company_name', $company->company_name, ['class'=>'form-control'])}}
   </div>
   <br>

   <div class="Form-group edit">
      {{Form::Label('company_place','所在地')}}
      {{Form::text('company_place', $company-> title, ['class'=>'form-control'])}}
   </div>
   <br>

   <div class="Form-group edit">
      {{Form::Label('foundation','設立年')}}
      {{Form::text('foundation', $company->foundation, ['class'=>'form-control'])}}
   </div>
   <br>

   <div class="Form-group">
      {{Form::Label('employee','従業員数')}}
      {{Form::text('employee', $company->employee, ['class'=>'form-control'])}}
   </div>
   <br>

   <div class="Form-group edit">
      {{Form::Label('company_type','業種')}}
      {{Form::text('company_type', $company->company_type, ['class'=>'form-control'])}}
   </div>
   <br>

   <div class="Form-group edit">
      {{Form::Label('company_content','事業内容')}}
      {{Form::text('company_content', $company->company_content, ['class'=>'form-control'])}}
   </div>


{{Form::hidden('_method', 'PUT')}}
<div class="com-edit"> 
{{Form::submit('編集を完了',['class'=>'btn'])}}
{!! Form::close() !!}

@else

  <h3>申し訳ございません。<br>
  こちらのページはご覧頂けません。</h3>
@endif

<a class="btn" href="/companies/{{$company->id}}">戻る</a>
</div>

@endsection
