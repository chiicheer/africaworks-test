@extends('layouts.app')


<?php
      $role=Auth::user()->role;
      $users=Auth::user();
   ?>
   
@if($role == $company->id)
@section('content')
<h1>companyのUserリストページ</h1>　
  <div class="container">
    <div class="table-responsive">
      <table class="table table-striped">
        <tr>
          <th>{{ __('Name') }}</th>
          <th>{{ __('Email') }}</th>
        </tr>
        @foreach($company->users as $user)
        <tr>
          <td>{!! $user->name !!}</td>
          <td>{{ $user->email }}</td>
        </tr>
        @endforeach
      </table>
    </div>
<br>
  </div>

@else

  <h3>申し訳ございません。<br>
  こちらのページはご覧頂けません。</h3>

@endif

<a class="btn btn-success float-right" href="/countries" style="margin-right: 10%">Back</a>

@endsection