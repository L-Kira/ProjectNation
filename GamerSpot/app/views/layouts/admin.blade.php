<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Signin Template for Bootstrap</title>
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap-theme.min.css') }}" />
	<script>
		var base_url = window.location.protocol+"//"+window.location.host + "/laravel_learn/";
	</script>
	<script type="text/javascript" data-main="{{ URL::asset('js/vendor/main') }}" src="{{ URL::asset('js/vendor/requirejs/require.js') }}"></script>
	
	<!-- Custom styles for this template -->
	<link rel="stylesheet" href="{{ URL::asset('css/signin.css') }}" />
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="container">
		@yield('content')
    </div> <!-- /container -->
</body>
</html>