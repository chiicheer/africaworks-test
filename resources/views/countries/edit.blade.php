@extends('layouts.app')

@section('content')
   <h1>Country作成ページ</h1>
   <br>
   <br>
   <h3>《内容》</h3>

   {!! Form::open(['action'=>['CountriesController@update', $country->id], 'method'=>'POST', 'enctype'=> 'multipart/form-data']) !!}
      <br>
      <div class="form-group">
         {{Form::Label('name','国名')}}
         {{Form::text('name', $country->name, ['class'=>'form-control'])}}
      </div>
      <br>

      <!--<div class="from-group">
         {{Form::file('cover_image1')}}
      </div>-->
      <br>

      <div class="Form-group">
         {{Form::Label('description','国要約')}}
         {{Form::textarea('description', $country->description, ['class'=>'form-control'])}}
      </div>
      <br>

   {{Form::hidden('_method', 'PUT')}}
   <br>
   {{Form::submit('編集を完了',['class'=>'btn'])}}
   {!! Form::close() !!}

   <a class="btn" href="/countries/{{$country->id}}">戻る</a>

@endsection