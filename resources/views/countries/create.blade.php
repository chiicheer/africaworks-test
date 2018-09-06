@extends('layouts.app')

@section('content')
  @if(Auth::user()->id == 1)
   <h1>Country作成ページ</h1>
   <br>
   <br>
   <h3>《内容》</h3>

   {!! Form::open(['url'=>'/countries', 'method'=>'POST', 'enctype'=> 'multipart/form-data']) !!}
      <br>
      <div class="Form-group">
         {{Form::Label('name','国名')}}
         {{Form::text('name','',['class'=>'form-control'])}}
      </div>
      <br>

       <div class="from-group">
         {{Form::file('cover_image')}}
      </div>
      <br>

      <div class="Form-group">
         {{Form::Label('description','国要約')}}
         {{Form::textarea('description','',['class'=>'form-control'])}}
      </div>
      <br>
   <br>
   {{Form::submit('submit',['class'=>'btn btn-primary'])}}
   {!! Form::close() !!}

  @else

  <h3>申し訳ございません。<br>
  こちらのページはご覧頂けません。</h3>

  @endif
  
  <a class="btn btn-success float-right" href="/countries">Back</a>

@endsection