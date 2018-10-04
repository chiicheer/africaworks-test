@extends('layouts.app')

@section('content')
  @if(Auth::user()->id == 1)
   <div class="create-title">
   <h1>作成ページ</h1>
   </div>


<div class="create-sub">
   <h3>求人内容</h3>
</div>

   {!! Form::open(['route' => 'companies.store', 'method'=>'POST', 'enctype'=> 'multipart/form-data']) !!}
      <br>
      <div class="Form-group create">
         {{Form::Label('country_id','国種別')}}
         {{Form::text('country_id','',['class'=>'form-control'])}}
      </div>
      <br>

       <div class="from-group create">
         {{Form::file('cover_image1')}}
         {{Form::file('cover_image2')}}
         {{Form::file('cover_image3')}}
      </div>
      <br>

      <div class="Form-group create">
      	{{Form::Label('title','タイトル')}}
      	{{Form::text('title','',['class'=>'form-control'])}}
      </div>
      <br>

      <div class="Form-group create">
         {{Form::Label('description','業務要約')}}
         {{Form::textarea('description','',['class'=>'form-control'])}}
      </div>
      <br>

      <div class="Form-group create">
         {{Form::Label('point','ポイント')}}
         {{Form::textarea('point','',['class'=>'form-control'])}}
      </div>
      <br>

      <div class="Form-group create">
         {{Form::Label('job_content','業務内容')}}
         {{Form::textarea('job_content','',['class'=>'form-control'])}}
      </div>
      <br>

      <div class="Form-group create">
         {{Form::Label('place','勤務地')}}
         {{Form::text('place','',['class'=>'form-control'])}}
      </div>
      <br>

      <div class="Form-group create">
         {{Form::Label('relate','雇用形態')}}
         {{Form::text('relate','',['class'=>'form-control'])}}
      </div>
      <br>

      <div class="Form-group create">
         {{Form::Label('role','職種')}}
         {{Form::text('role','',['class'=>'form-control'])}}
      </div>
      <br>

      <div class="Form-group create">
         {{Form::Label('salary','給与')}}
         {{Form::text('salary','',['class'=>'form-control'])}}
      </div>
      <br>

      <div class="Form-group create">
         {{Form::Label('welfare','待遇')}}
         {{Form::text('welfare','',['class'=>'form-control'])}}
      </div>
      <br>

      <div class="Form-group create">
         {{Form::Label('time','勤務時間')}}
         {{Form::text('time','',['class'=>'form-control'])}}
      </div>
      <br>

      <div class="Form-group create">
         {{Form::Label('skill','求める人材')}}
         {{Form::textarea('skill','',['class'=>'form-control'])}}
      </div>
      <br>

      <div class="Form-group create">
         {{Form::Label('apply_way','応募の流れ')}}
         {{Form::textArea('apply_way','',['class'=>'form-control'])}}
      </div>

<div class="create-sub1">
      <h3>御社に関する情報</h3>
</div>

      <div class="Form-group create">
         {{Form::Label('company_name','会社名')}}
         {{Form::text('company_name','',['class'=>'form-control'])}}
      </div>
      <br>

      <div class="Form-group create">
         {{Form::Label('company_place','所在地')}}
         {{Form::text('company_place','',['class'=>'form-control'])}}
      </div>
      <br>

      <div class="Form-group create">
         {{Form::Label('foundation','設立年')}}
         {{Form::text('foundation','',['class'=>'form-control'])}}
      </div>
      <br>

      <div class="Form-group create">
         {{Form::Label('employee','従業員数')}}
         {{Form::text('employee','',['class'=>'form-control'])}}
      </div>
      <br>

      <div class="Form-group create">
         {{Form::Label('company_type','業種')}}
         {{Form::text('company_type','',['class'=>'form-control'])}}
      </div>
      <br>

      <div class="Form-group create">
         {{Form::Label('company_content','事業内容')}}
         {{Form::text('company_content','',['class'=>'form-control'])}}
      </div>

   <div class="com-create"> 
   {{Form::submit('作成を完了',['class'=>'btn'])}}
   {!! Form::close() !!}

  @else

  <h3>申し訳ございません。<br>
  こちらのページはご覧頂けません。</h3>

  @endif

  <a class="btn" href="/">戻る</a>
   </div>
@endsection