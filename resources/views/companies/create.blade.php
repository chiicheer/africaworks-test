t@extends('layouts.app')

@section('content')
<h1>作成ページ</h1>
<br>
<br>
<h3>《求人内容》</h3>

{!! Form::open(['url'=>'/companies/{{$company->id}}}', 'method'=>'POST', 
    'enctype'=> 'multipart/form-data']) !!}
   <br>
    <div class="from-group">
      {{Form::file('cover_image')}}
      {{Form::file('cover_image')}}
      {{Form::file('cover_image')}}
   </div>
   <br>

   <div class="Form-group">
   	{{Form::Label('title','タイトル')}}
   	{{Form::text('title','',['class'=>'form-control'])}}
   </div>
   <br>

   <div class="Form-group">
      {{Form::Label('description','業務内容')}}
      {{Form::textarea('description','',['class'=>'form-control'])}}
   </div>
   <br>

   <div class="Form-group">
      {{Form::Label('place','勤務地')}}
      {{Form::text('place','',['class'=>'form-control'])}}
   </div>
   <br>

   <div class="Form-group">
      {{Form::Label('relate','雇用形態')}}
      {{Form::text('relate','',['class'=>'form-control'])}}
   </div>
   <br>

   <div class="Form-group">
      {{Form::Label('role','職種')}}
      {{Form::text('role','',['class'=>'form-control'])}}
   </div>
   <br>

   <div class="Form-group">
      {{Form::Label('salary','給与')}}
      {{Form::text('salary','',['class'=>'form-control'])}}
   </div>
   <br>

   <div class="Form-group">
      {{Form::Label('welfare','待遇')}}
      {{Form::text('welfare','',['class'=>'form-control'])}}
   </div>
   <br>

   <div class="Form-group">
      {{Form::Label('time','勤務時間')}}
      {{Form::text('time','',['class'=>'form-control'])}}
   </div>
   <br>

   <div class="Form-group">
      {{Form::Label('skill','求める人材')}}
      {{Form::textarea('skill','',['class'=>'form-control'])}}
   </div>
   <br>

   <div class="Form-group">
      {{Form::Label('apply_way','応募の流れ')}}
      {{Form::textArea('apply_way','',['class'=>'form-control'])}}
   </div>

   <br>
   <br>
   <br>
   <h3>《御社に関する情報》</h3>

   <div class="Form-group">
      {{Form::Label('company_name','会社名')}}
      {{Form::text('company_name','',['class'=>'form-control'])}}
   </div>
   <br>

   <div class="Form-group">
      {{Form::Label('company_place','所在地')}}
      {{Form::text('company_place','',['class'=>'form-control'])}}
   </div>
   <br>

   <div class="Form-group">
      {{Form::Label('foundation','設立年')}}
      {{Form::text('foundation','',['class'=>'form-control'])}}
   </div>
   <br>

   <div class="Form-group">
      {{Form::Label('employee','従業員数')}}
      {{Form::text('employee','',['class'=>'form-control'])}}
   </div>
   <br>

   <div class="Form-group">
      {{Form::Label('company_type','業種')}}
      {{Form::text('company_type','',['class'=>'form-control'])}}
   </div>
   <br>

   <div class="Form-group">
      {{Form::Label('company_content','事業内容')}}
      {{Form::text('company_content','',['class'=>'form-control'])}}
   </div>

<br>
{{Form::submit('submit',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}

@endsection