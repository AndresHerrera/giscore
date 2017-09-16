@extends('layouts.layout_geopalmira_auth')

<title>Contacto desde el sitio - {{  trans('messages.giscore_client_name') }} </title>
@section('content')
	<h1>{{  trans('messages.name') }} : {{ $datos['name'] }} </h1>
	<h2>{{  trans('messages.email_address') }} : {{ $datos['email'] }} </h2>
	<h2>{{  trans('messages.message') }} :</h2> 
	<p>
		{{ $datos['content'] }}
	</p>
@endsection