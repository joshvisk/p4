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
    @yield('head')
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
                    <a class="navbar-brand" href="/">Brand</a>
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
<!--                <form class="navbar-form navbar-right" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>-->
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
    <hr>
    <div class="section well">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <h3 class="text-center">WHO WE ARE</h3>
                    <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, ducimus, sit, quibusdam quidem recusandae veniam eos quod error nisi repellat excepturi laboriosam aspernatur suscipit possimus consectetur dolores nihil labore quas eius illo accusamus nulla sed blanditiis porro accusantium. Perspiciatis, perferendis!</h5>
                </div>
                <div class="col-lg-4 col-md-4">
                    <h3 class="text-center">GET IN TOUCH</h3>
                    <address class="text-center">
                        <strong>MyCompany, Inc.</strong><br>
                        Sunny Autumn Plaza, Grand Coulee,<br>
                        CA, 91308-4075, US<br>
                        <abbr title="Phone">P:</abbr> (123) 456-7890
                    </address>
                </div>
                <div class="col-lg-4 col-md-4">
                    <h3 class="text-center">NEWSLETTER</h3>
                    <form>
                        <div class="form-group col-lg-9 col-md-8 col-sm-10 col-xs-10">
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <button type="submit" class="btn btn-default">Subscribe<br></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <p>Copyright © MyCompany. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
	<script src="temp/js/jquery-1.11.2.min.js"></script> 
    <script src="temp/js/bootstrap.min.js"></script>
</body>
</html>
