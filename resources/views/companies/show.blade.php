@extends('layouts.app')

@section('content')

<div class="company">
<div class="container">
	<div class="com-title">
        <h1>{{$company->title}}</h1>
    </div>

        <div class="point">
          <span class="point-title">POINT</span>
  		  <h5>{{$company->point}}</h5>
  		</div>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		  </ol>

  		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block" src="/storage/photos1/{{$company->cover_image1}}" alt="First slide" height="400px" width="70%">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block" src="/storage/photos2/{{$company->cover_image2}}" alt="Second slide" height="400px" width="70%">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block" src="/storage/photos3/{{$company->cover_image3}}" alt="Third slide" height="400px" width="70%">
		    </div>
		  </div>
		</div>
</div>

		<div class="sub-title">
		  <h3>　業務内容</h3>
		</div>
          <p>{{$company->job_content}}</p>

        <div class="sub-title">
		  <h3>　基本情報</h3>
		</div>
	 	<div class="table-responsive com-table" style="width: 70%">
      	  <table class="table table-striped">
	    	<tr>
		      <th class="table-dark" width="30%">勤務地</th>
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

	    <div class="sub-title">
		  <h3>　求める人材</h3>
		</div>
		  <p>{{$company->skill}}</p>

		<div class="sub-title">
		  <h3>　企業情報</h3>
		</div>
		<div class="table-responsive com-table" style="width: 70%">
      	  <table class="table table-striped">
	    	<tr>
		      <th class="table-dark" width="30%">企業名</th>
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

	    <div class="sub-title">
		  <h3>　応募の流れ</h3>
		</div>
		  <p>{{$company->apply_way}}</p>



	<div class="com-show">
	<a class="btn " href="/countries/{{$company->country_id}}">戻る</a>
	</div>
@if(Auth::user())

	<?php
		$role=Auth::user()->role;
		$users=Auth::user();
	?>

	@if($role == $company->id || Auth::user()->id == 1)


	
	<div class="com-show-edit">
	<a class="btn" href="/companies/{{$company->id}}/edit">編集</a>
	</div>

	<div class="com-show">
	@if(Auth::user()->id == 1)
	{!! Form::open(['action'=>['CompaniesController@destroy', $company->id], 'method'=>'POST']) !!}
	{{ Form::hidden('_method', 'DELETE') }}
    {{ Form::submit('消去', ['class'=>'btn']) }}
    {!! Form::close() !!}
    @endif
	@endif
	</div>


	@if($role == null)

	{!!Form::open(['route' => 'company__users.store', 'method'=>'POST'])!!}

	{{ csrf_field() }}

	<div class="com-apply">
	{{Form::hidden('company_id', $company->id)}}
	{{Form::hidden('user_id', 'Auth::user()->id')}}

	{{Form::submit('この案件に応募する',['class'=>'btn'])}}

	{!! Form::close() !!}
	</div>
	@endif

@endif


</div>
@endsection

