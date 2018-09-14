<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Africa Works</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md shadow-sm navbar-laravel" style="background-color: #303841">
            <div class="container d-flex justify-content-between">
                <a href="/countries" class="navbar-brand d-flex align-items-center">
                <strong>Africa Works</strong>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('') }}</a>
                            </li>

                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                    <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('ログアウト') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>



  <main role="main">

    <section class="jumbotron text-center middle">
      <div class="container">
        @include('inc.messages')
        <div class="heading-title">
          <h1>Africa Works</h1>
        </div>

        <div class="heading-text">
         <p class="lead text-muted">Let's go to Africa for discovering</p>
        </div>

        <div class="heading-button">
         @if(!Auth::user())
          <a href="/login" class="btn login-b">ログイン</a>

          <a href="/register" class="btn register-b">会員登録</a>
         @endif

         @if(Auth::user())
          <?php
            $role=Auth::user()->role;
            $users=Auth::user();
          ?>

         @if(Auth::user()->id == 1)
          <a href="/countries/create" class="btn top-b">国作成</a>
          <a class="btn top-b" href="/companies/create">仕事作成</a>
         @endif

         @if($role == null)
          <a href="/users/{{Auth::user()->id}}" class="btn top-b">マイページ</a>
         @endif

         @foreach($countries as $country)
         @foreach($country->companies as $company )
         @if(Auth::user() && $role == $company->id)
          <a href="/companies/{{$company->id}}/admin" class="btn top-b">マイページ</a>
         @endif
         @endforeach
         @endforeach

         @endif
        </div>
<br>
      </div>
    </section>

    @if(count($countries) > 0)
      <?php
        $colcount = count($countries);
        $i = 1;
      ?>
        <div class="container">
          <div class="row text-center">
          @foreach($countries as $country)
          @if($i == $colcount)
            <div class="col-md-4">
              <div class="card mb-3 country-box">
                <img class="card-img-top" src= "/storage/cover_images/{{$country->cover_image}}" alt="Card image cap" height="227px" width="348px">

                <a href="{{ url('countries/'.$country->id)}}">
                <h4 class="cn-name">{{$country->name}}</h4>
                </a>
                  <div class="card-body">
                    <p class="card-text">{{$country->description}}</p>
                  </div>
              </div>
            </div>
          @else
            <div class="col-md-4">
              <div class="card mb-3 country-box">
                <img class="card-img-top" src="/storage/cover_images/{{$country->cover_image}}" alt="Card image cap" height="227px" width="348px">

                <a href="{{ url('countries/'.$country->id)}}">
                <a href="/countries/{{$country->id}}">
                <h4 class="cn-name">{{$country->name}}</h4>
                </a>
                  <div class="card-body">
                    <p class="card-text">{{$country->description}}</p>
                  </div>
              </div>
          @endif
          
          @if($i % 3 == 0)
            </div>
          </div>
            <div class="row text-center">
          @else
            </div>
          @endif

            <?php $i++; ?>

          @endforeach
        </div>
    @endif

  </main>

    <footer class="text-muted">
      <div class="container">
        <!--<p class="float-right">
          <a href="#">Back to top</a>
        </p>-->
        <p>Africa Works created by @chihiro</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"></script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
  </body>
</html>