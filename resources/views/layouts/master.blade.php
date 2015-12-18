<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Brewing Calculator @yield('title')</title>
    <!-- Bootstrap -->
    {!! Html::style("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css") !!}
    {!! Html::script("http://code.jquery.com/jquery-1.11.3.min.js") !!}
    {!! Html::script("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js") !!}
	{!! Html::style("/css/style.css") !!}
    @yield('header')
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container"> 
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myDefaultNavbar1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    <a class="navbar-brand" href="#">P4</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="myDefaultNavbar1">
                <ul class="nav navbar-nav">
					@if(Auth::check())
                        <li class="active"><a href="/beer">Beer<span class="sr-only">(current)</span></a></li>
                        <li class="active"><a href="/beer/create">Create Recipe<span class="sr-only">(current)</span></a></li>
                        <li class="active"><a href="/logout">Logout<span class="sr-only">(current)</span></a></li>
                    @else
                        <li class="active"><a href="/beer">Beer<span class="sr-only">(current)</span></a></li>                    	
                        <li class="active"><a href="/login">Login<span class="sr-only">(current)</span></a></li>
                        <li class="active"><a href="/register">Register<span class="sr-only">(current)</span></a></li>
                    @endif
                </ul>
            </div>
        <!-- /.navbar-collapse --> 
        </div>
      <!-- /.container-fluid --> 
    </nav>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    @if(\Session::has('flash_message'))
                        <div class='flash_message'>
                            @if(\Session::has('flash_message'))
                            {{ \Session::get('flash_message') }}
                            @endif
                        </div>
                    @endif
                    
                    <div class="container">
                        @yield('content')
                    </div>            
                </div>
            </div>
        </div>
    </section>
	<script src="temp/js/jquery-1.11.2.min.js"></script> 
    <script src="temp/js/bootstrap.min.js"></script>
</body>
</html>
