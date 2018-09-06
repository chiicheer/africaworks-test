@extends('layouts.app')

@section('content')
   <h1>Country作成ページ</h1>
   <br>
   <br>
   <h3>《内容》</h3>

   {!! Form::open(['url'=>['/countries'], 'method'=>'POST', 'enctype'=> 'multipart/form-data']) !!}
      <br>
      <div class="Form-group">
         {{Form::Label('name','国名')}}
         {{Form::text('name','',['class'=>'form-control'])}}
      </div>
      <br>

      <div class="from-group">
         {{Form::file('cover_image1')}}
      </div>
      <br>

      <div class="Form-group">
         {{Form::Label('description','国要約')}}
         {{Form::textarea('description','',['class'=>'form-control'])}}
      </div>
      <br>

   {{Form::hidden('_method', 'PUT')}}
   <br>
   {{Form::submit('submit',['class'=>'btn btn-primary'])}}
   {!! Form::close() !!}

   <a class="btn btn-success float-right" href="/countries/{{$country->id}}">Back</a>

@endsection