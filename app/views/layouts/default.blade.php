
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Alan's World Cup Prediction Competition">

    <title>World Cup Competition</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this site -->
    <link href="{{ asset('css/world-cup.css') }}" rel="stylesheet">

    <!-- Page specific CSS -->
    @yield('extra_css')

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <body>

    <div id="wrap">

      <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            {{ link_to_route('home', 'World Cup Competition', $parameters = array(), $attributes = array('class' => 'navbar-brand')) }}
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li>{{ link_to_route('home', 'Home') }}</li>
              <li>{{ link_to_route('instructions', 'Instructions') }}</li>
              <li>{{ link_to_route('entry.index', 'Competition Entry') }}</li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>

      <div class="container">

          <div class="row">
            <a href="http://www.fifa.com/worldcup" target="_blank"><img src="{{ asset('header.png') }}" class="img-responsive" alt="Header image"></a>
          </div>

          @if (Session::has('message'))
            <div class="panel panel-danger">
                <div class="panel-heading">Error</div>
                <div class="panel-body">
                    <p>{{ Session::get('message') }}</p>
                </div>
            </div>
          @endif

          @if ($errors->any())
            <div class="panel panel-danger">
                <div class="panel-heading">Validation Errors</div>
                <div class="panel-body">
                    <ul>
                        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                    </ul>
                </div>
            </div>
          @endif
                
          @yield('content')

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- Page specific JS -->
    @yield('extra_js')

  </body>

</html>
