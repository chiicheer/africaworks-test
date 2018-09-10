@extends('layouts.app')

@section('content')

<div class="container">
<br>
        <h1>{{$company->title}}</h1>

<br>
        <div class="alert alert-warning" role="alert">
  		  <h5>POINT!!<br>{{$company->description}}</h5>
		</div>

<br>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		  </ol>

  		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block" src="/storage/photos1/{{$company->cover_image1}}" alt="First slide" height="400px" width="800px">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block" src="/storage/photos2/{{$company->cover_image2}}" alt="Second slide" height="400px" width="800px">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block" src="/storage/photos3/{{$company->cover_image3}}" alt="Third slide" height="400px" width="800px">
		    </div>
		  </div>
		</div>

<br>
		<h3>業務内容</h3>
        {{$company->job_content}}

<br>
		<h3>基本情報</h3>
	 	<div class="table-responsive">
      	  <table class="table table-striped">
	    	<tr>
		      <th class="table-dark" width="20%">勤務地</th>
		      <td>{{$company->place}}</td>
	    	</tr>

		    <tr>
		      <th class="table-dark">雇用形態</th>
		      <td>{{$company->relate}}</td>
		    </tr>

		    <tr>
		      <th class="table-dark">職種</th>
		      <td>{{$company->role}}</td>
		    </tr>

		    <tr>
		      <th class="table-dark">給与</th>
		      <td>{{$company->salary}}</td>
		    </tr>

		    <tr>
		      <th class="table-dark">待遇</th>
		      <td>{{$company->welfare}}</td>
		    </tr>

		    <tr>
		      <th class="table-dark">勤務日・時間</th>
		      <td>{{$company->time}}</td>
		    </tr>
		  </table>
	    </div>

<br>
		<h3>求める人材</h3>
		{{$company->skill}}

<br>
		<h3>企業情報</h3>
		<div class="table-responsive">
      	  <table class="table table-striped">
	    	<tr>
		      <th class="table-dark" width="20%">企業名</th>
		      <td>{{$company->company_name}}</td>
	    	</tr>

		    <tr>
		      <th class="table-dark">所在地</th>
		      <td>{{$company->company_place}}</td>
		    </tr>

		    <tr>
		      <th class="table-dark">設立年</th>
		      <td>{{$company->foundation}}</td>
		    </tr>

		    <tr>
		      <th class="table-dark">従業員数</th>
		      <td>{{$company->employee}}</td>
		    </tr>

		    <tr>
		      <th class="table-dark">業種</th>
		      <td>{{$company->company_type}}</td>
		    </tr>

		    <tr>
		      <th class="table-dark">事業内容</th>
		      <td>{{$company->company_content}}</td>
		    </tr>
		  </table>
	    </div>

<br>
		<h3>応募の流れ</h3>
		{{$company->apply_way}}

<br>




@if(Auth::user())

	<?php
		$role=Auth::user()->role;
		$users=Auth::user();
	?>

	@if($role == $company->id || Auth::user()->id == 1)
	<a class="btn" href="/companies/{{$company->id}}/edit">編集</a>

	{!! Form::open(['action'=>['CompaniesController@destroy', $company->id], 'method'=>'POST']) !!}
	{{ Form::hidden('_method', 'DELETE') }}
    {{ Form::submit('消去', ['class'=>'btn']) }}
    {!! Form::close() !!}
	@endif

	@if($role == null)

	{!!Form::open(['route' => 'company__users.store', 'method'=>'POST'])!!}

	{{ csrf_field() }}


	{{Form::hidden('company_id', $company->id)}}
	{{Form::hidden('user_id', 'Auth::user()->id')}}

	{{Form::submit('この案件に応募する',['class'=>'btn'])}}

	{!! Form::close() !!}
	@endif

@endif

<a class="btn" href="/countries/{{$company->country_id}}">戻る</a>

	</div>


@endsection

