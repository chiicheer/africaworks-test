@extends('layouts.app')

@section('content')

<main class="main pt-4" role="main">
    <div class="container">
	 <div class="row">
      <div class="col-md-12">

       <article class="card mb-4 text-center">
       	 <br>
         <h1 class="card-title">{{$company->title}}</h1>
         <br>
         <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  			<div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block w-100" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRQyMGg1988pPi2NmtJ2zHBKx5ZMfvIzcaEotYBcpjJT4XNotYyBw" alt="First slide" height="500px">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTw5n20gOJd13IIcrpeBGf4ep1mZ3bZIE5sJ0TXyDPZfEJeZDSyXQ" alt="Second slide" height="500px">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRpXw9c6G5qjBqFguDSFsPPY7Mu7udGRVl3grb27XnlOiOcXF9-" alt="Third slide" height="500px">
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		 </div>
		<br>
		<br>
        {{$company->description}}


       </article>
	  </div>
	 </div>
	</div>



@foreach($company->users as $user)
{{ Auth::user()->id }}:{{$company->id}}
@endforeach<!--company__usersテーブルから値を取ってきてる-->

{{$company->id}}
{{Auth::user()->id}}<!--companyの idと userの id をこれで表示させられる-->

<?php
	$role=Auth::user()->role;
	$users=Auth::user();
?>

@if($role == "user")
<h1>{{ Auth::user()->name }}</h1>
{{ Auth::user()->id }}



{!!Form::open(['route' => 'companies.store', 'method'=>'POST'])!!}

{{ csrf_field() }}


{{Form::hidden('company_id', $company->id)}}
{{Form::hidden('user_id', 'Auth::user()->id')}}

{{Form::submit('apply',['class'=>'btn btn-danger'])}}

{!! Form::close() !!}

<a class="btn btn-success float-right" href="/countries/{{$company->country_id}}" style="margin-right: 10%">Back</a>
@endif

</main>

@endsection

