@extends('layouts.app')

@section('content')
<h1>companyのリストページ</h1>　
  <div class="container">
    <div class="table-responsive">


    @foreach($company->users as $user)
    {{$user->id}}
    @endforeach





    </div>
<br>
</div>

@endsection