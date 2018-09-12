@extends('layouts.app')

@section('content')
   <div class="cnt-edit-title">
   <h1>Country編集ページ</h1>
   </div>

   {!! Form::open(['action'=>['CountriesController@update', $country->id], 'method'=>'POST', 'enctype'=> 'multipart/form-data']) !!}

      <div class="form-group cnt-edit">
         {{Form::Label('name','国名')}}
         {{Form::text('name', $country->name, ['class'=>'form-control'])}}
      </div>
      <br>

      <!--<div class="from-group">
         {{Form::file('cover_image1')}}
      </div>-->
      <br>

      <div class="Form-group cnt-edit">
         {{Form::Label('description','国要約')}}
         {{Form::textarea('description', $country->description, ['class'=>'form-control'])}}
      </div>
      <br>

   {{Form::hidden('_method', 'PUT')}}

   <div class="cnt-edit-btn"> 
   {{Form::submit('編集を完了',['class'=>'btn'])}}
   {!! Form::close() !!}

   <a class="btn" href="/countries/{{$country->id}}">戻る</a>
   </div>

@endsection