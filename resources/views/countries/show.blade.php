@extends('layouts.app')

@section('content')

  <div class="container space-2 space-3-top--lg">
    <h1>{!! $country-> name!!}</h1>
    <p class="lead">{{$country->description}}</p>
    <br>
    <br>
    <p>求人一覧</p>




  @if(count($country->companies)>0)
      
    <?php
      $colcount = count($country->companies);
      $i = 1;
    ?>

      <div class="container">
        <div class="row text-center">
        @foreach($country->companies as $company )
        @if($i == $colcount)
          <div class="col-md-4">
            <div class="card mb-3 shadow-sm" style="width: 18rem;">
                <img class="card-img-top" src="/storage/photos1/{{$company->cover_image1}}" alt="Card image cap" height="186px">

                <div class="card-body">
                  <a href="{{ url('companies/'. $company->id)}}"><h5 class="card-title">{{$company->title}}</h5></a>
                  <p class="card-text">{{$company->description}}</p>
                </div>

                <ul class="list-group list-group-flush">
                  <li class="list-group-item">{{$company->place}}</li>
                  <li class="list-group-item">{{$company->salary}}</li>
                  <li class="list-group-item">{{$company->time}}</li>
                  <li class="list-group-item">{{$company->relate}}</li>
                </ul>
            </div>
          </div>
        @else
          <div class="col-md-4">
            <div class="card mb-3 shadow-sm" style="width: 18rem;">
              <img class="card-img-top" src="/storage/photos1/{{$company->cover_image1}}" alt="Card image cap" height="186px">

              <div class="card-body">
                <a href="{{ url('companies/'. $company->id)}}"><h5 class="card-title">{{$company->title}}</h5></a>
                <p class="card-text">{{$company->description}}</p>
              </div>

              <ul class="list-group list-group-flush">
                <li class="list-group-item">{{$company->place}}</li>
                <li class="list-group-item">{{$company->salary}}</li>
                <li class="list-group-item">{{$company->time}}</li>
                <li class="list-group-item">{{$company->relate}}</li>
              </ul>
            </div>
        @endif

        @if($i % 3== 0)
          </div>  
        </div>
          <div class="row text-center">
        @else
          </div>
        @endif

          <?php $i++; ?>

        @endforeach
    </div>
  @else
    <p>!!!No Jobs To Display!!!</p>
  @endif
<br>

  @if(Auth::user())
    @if(Auth::user()->id == 1)
    <a class="btn" href="/countries/{{$country->id}}/edit">編集</a>

    {!! Form::open(['action'=>['CountriesController@destroy', $country->id], 'method'=>'POST']) !!}
    {{ Form::hidden('_method', 'DELETE') }}
    {{ Form::submit('消去', ['class'=>'btn']) }}
    {!! Form::close() !!}
    @endif
  @endif

<a class="btn" href="/countries">戻る</a>
<br>
</div>
@endsection