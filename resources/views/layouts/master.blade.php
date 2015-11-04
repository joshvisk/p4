<!doctype html>
<html lang="en">
<head>
	<title>Welcome to TODOParrot</title>
	<meta charset="utf-8">
  {!! Html::style("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css") !!}
  {!! Html::script("http://code.jquery.com/jquery-1.11.3.min.js") !!}
  {!! Html::script("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js") !!}
  @yield('head')

</head>
<body>

	@yield('content')
  
</body>
</html>
