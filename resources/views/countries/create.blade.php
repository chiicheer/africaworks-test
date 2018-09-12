@extends('layouts.app')

@section('content')
  @if(Auth::user()->id == 1)
  <div class="cnt-create-title">
   <h1>Country作成ページ</h1>
  </div>

   {!! Form::open(['url'=>'/countries', 'method'=>'POST', 'enctype'=> 'multipart/form-data']) !!}

      <div class="Form-group cnt-create-form">
         {{Form::Label('name','国名')}}
         {{Form::text('name','',['class'=>'form-control'])}}
      </div>
<br>
       <div class="from-group">
         {{Form::file('cover_image')}}
      </div>
<br>
      <div class="Form-group cnt-create-form">
         {{Form::Label('description','国要約')}}
         {{Form::textarea('description','',['class'=>'form-control'])}}
      </div>

  <div class="cnt-create"> 
   {{Form::submit('作成を完了',['class'=>'btn'])}}
   {!! Form::close() !!}

  @else

  <h3>申し訳ございません。<br>
  こちらのページはご覧頂けません。</h3>

  @endif
  
  <a class="btn" href="/countries">戻る</a>
  </div>
  
@endsection