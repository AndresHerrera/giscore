 <!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="shortcut icon" href="{{{ asset('favicon.ico') }}}">
<title>.:: Alcaldia de Palmira</title>
<link rel="stylesheet" href=" {{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
<link href="{{ asset('bower_components/bootstrap/dist/css/bootstrap-theme.min.css') }}" rel="stylesheet" media="screen"> 
<link href="{{ asset('geopalmira_resources/login_style.css')}}  " rel="stylesheet" type="text/css" media="screen">
<style>

body {
		  background-image: url({{ asset('geopalmira_resources/img/wood_bg_king.jpg')}});
				-webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
				background-size: cover;
				width:100%;
				margin:0;
		}
		
.modalBackground
{
    filter: alpha(opacity=70);
    opacity: 0.7;
    z-index: 10000;
}		

</style>
</head>
<body>
	@yield('content')
</body>
</html>