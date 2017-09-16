<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>.:: {{  trans('messages.giscore_client_name') }} - Geoportal</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
    <link href="{{ asset('css/giscore.css') }}" rel="stylesheet"> 

    <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
  	<link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}">
  	<link rel="stylesheet" href="{{ asset('bower_components/leaflet/leaflet.css') }}" />


    <link rel="shortcut icon" href="{{{ asset('favicon.ico') }}}">

</head>
<body>


    <div id="app">
    
    <div class="cabecera">
		<img src="{{ asset('geopalmira_resources/img/logos/logo2016.png') }} ">
		<img src="{{ asset('geopalmira_resources/img/logos/logo2016_unal.png') }}" class="hidden-xs hidden-sm" style="float:right;  position: absolute; top: 0;right: 0;"> 
    </div>



        <nav class="navbar navbar-default navbar-static-top">
        <!--  style="background-color:#2570BB;" -->
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <!--<a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>-->
                </div>

                <div class="collapse navbar-collapse"  id="app-navbar-collapse"  >  
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav ">
					
											
						<!-- INI -->
						
				<li class="dropdown mega-dropdown active visible-xl visible-lg visible-md">
			    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-list-ul"></i> {{  trans('messages.process_bar') }}   <span class="caret"></span></a>				
				<div class="dropdown-menu mega-dropdown-menu">
                    <div class="container-fluid">
    				    <!-- Tab panes -->
                        <div class="tab-content">
						  
                          <div class="tab-pane active" id="planeacion">
                            <ul class="nav-list list-inline">
                                <li><a href="#"><img src="http://content.nike.com/content/dam/one-nike/globalAssets/menu_header_images/OneNike_Global_Nav_Icons_Running.png"><span>Calculo Buffer</span></a></li>
                                <li><a href="#"><img src="http://content.nike.com/content/dam/one-nike/globalAssets/menu_header_images/OneNike_Global_Nav_Icons_Basketball.png"><span>Equipamentos</span></a></li>
                                <li><a href="#"><img src="http://content.nike.com/content/dam/one-nike/globalAssets/menu_header_images/OneNike_Global_Nav_Icons_Football.png"><span>Football</span></a></li>
                                <li><a href="#"><img src="http://content.nike.com/content/dam/one-nike/globalAssets/menu_header_images/OneNike_Global_Nav_Icons_Soccer.png"><span>Soccer</span></a></li>
                                <li><a href="#"><img src="http://content.nike.com/content/dam/one-nike/globalAssets/menu_header_images/OneNike_Global_Nav_Icons_MensTraining.png"><span>Men's Training</span></a></li>
                                <li><a href="#"><img src="http://content.nike.com/content/dam/one-nike/globalAssets/menu_header_images/OneNike_Global_Nav_Icons_WomensTraining.png"><span>Women's Training</span></a></li>
                            </ul>
                          </div>
						  
                          <div class="tab-pane" id="hacienda">
                            <ul class="nav-list list-inline">
                                <li><a href="#"><img src="http://content.nike.com/content/dam/one-nike/globalAssets/menu_header_images/OneNike_Global_Nav_Icons_Running.png"><span>Running</span></a></li>
                                <li><a href="#"><img src="http://content.nike.com/content/dam/one-nike/globalAssets/menu_header_images/OneNike_Global_Nav_Icons_Basketball.png"><span>Basketball</span></a></li>
                                <li><a href="#"><img src="http://content.nike.com/content/dam/one-nike/globalAssets/menu_header_images/OneNike_Global_Nav_Icons_Football.png"><span>Football</span></a></li>
                                <li><a href="#"><img src="http://content.nike.com/content/dam/one-nike/globalAssets/menu_header_images/OneNike_Global_Nav_Icons_Soccer.png"><span>Soccer</span></a></li>                                
                            </ul>
                          </div>
						  
                          <div class="tab-pane" id="agricola">
                            <ul class="nav-list list-inline">
                                <li><a href="#"><img src="http://content.nike.com/content/dam/one-nike/globalAssets/menu_header_images/OneNike_Global_Nav_Icons_Running.png"><span>Running</span></a></li>
                                <li><a href="#"><img src="http://content.nike.com/content/dam/one-nike/globalAssets/menu_header_images/OneNike_Global_Nav_Icons_Basketball.png"><span>Basketball</span></a></li>
                                <li><a href="#"><img src="http://content.nike.com/content/dam/one-nike/globalAssets/menu_header_images/OneNike_Global_Nav_Icons_Football.png"><span>Football</span></a></li>
                                <li><a href="#"><img src="http://content.nike.com/content/dam/one-nike/globalAssets/menu_header_images/OneNike_Global_Nav_Icons_Soccer.png"><span>Soccer</span></a></li>
                                <li><a href="#"><img src="http://content.nike.com/content/dam/one-nike/globalAssets/menu_header_images/OneNike_Global_Nav_Icons_MensTraining.png"><span>Men's Training</span></a></li>
                                <li><a href="#"><img src="http://content.nike.com/content/dam/one-nike/globalAssets/menu_header_images/OneNike_Global_Nav_Icons_WomensTraining.png"><span>Women's Training</span></a></li>
                            </ul>
                          </div>
						  
                          <div class="tab-pane" id="riesgo">
                            <ul class="nav-list list-inline">                                
                                <li><a href="#"><img src="http://content.nike.com/content/dam/one-nike/globalAssets/menu_header_images/OneNike_Global_Nav_Icons_Basketball.png"><span>Basketball</span></a></li>
                                <li><a href="#"><img src="http://content.nike.com/content/dam/one-nike/globalAssets/menu_header_images/OneNike_Global_Nav_Icons_Football.png"><span>Football</span></a></li>
                                <li><a href="#"><img src="http://content.nike.com/content/dam/one-nike/globalAssets/menu_header_images/OneNike_Global_Nav_Icons_Soccer.png"><span>Soccer</span></a></li>
                                <li><a href="#"><img src="http://content.nike.com/content/dam/one-nike/globalAssets/menu_header_images/OneNike_Global_Nav_Icons_MensTraining.png"><span>Men's Training</span></a></li>
                                <li><a href="#"><img src="http://content.nike.com/content/dam/one-nike/globalAssets/menu_header_images/OneNike_Global_Nav_Icons_WomensTraining.png"><span>Women's Training</span></a></li>
                            </ul>
                          </div>
						  
						  <div class="tab-pane" id="medioambiente">
                            <ul class="nav-list list-inline">                                
                                <li><a href="#"><img src="http://content.nike.com/content/dam/one-nike/globalAssets/menu_header_images/OneNike_Global_Nav_Icons_Basketball.png"><span>Basketball</span></a></li>
                                <li><a href="#"><img src="http://content.nike.com/content/dam/one-nike/globalAssets/menu_header_images/OneNike_Global_Nav_Icons_Football.png"><span>Football</span></a></li>
                                <li><a href="#"><img src="http://content.nike.com/content/dam/one-nike/globalAssets/menu_header_images/OneNike_Global_Nav_Icons_Soccer.png"><span>Soccer</span></a></li>
                                <li><a href="#"><img src="http://content.nike.com/content/dam/one-nike/globalAssets/menu_header_images/OneNike_Global_Nav_Icons_MensTraining.png"><span>Men's Training</span></a></li>
                                <li><a href="#"><img src="http://content.nike.com/content/dam/one-nike/globalAssets/menu_header_images/OneNike_Global_Nav_Icons_WomensTraining.png"><span>Women's Training</span></a></li>
                            </ul>
                          </div>
						  
						  <div class="tab-pane" id="desarrolloi">
                            <ul class="nav-list list-inline">                                
                                <li><a href="#"><img src="http://content.nike.com/content/dam/one-nike/globalAssets/menu_header_images/OneNike_Global_Nav_Icons_Basketball.png"><span>Basketball</span></a></li>
                                <li><a href="#"><img src="http://content.nike.com/content/dam/one-nike/globalAssets/menu_header_images/OneNike_Global_Nav_Icons_Football.png"><span>Football</span></a></li>
                                <li><a href="#"><img src="http://content.nike.com/content/dam/one-nike/globalAssets/menu_header_images/OneNike_Global_Nav_Icons_Soccer.png"><span>Soccer</span></a></li>
                                <li><a href="#"><img src="http://content.nike.com/content/dam/one-nike/globalAssets/menu_header_images/OneNike_Global_Nav_Icons_MensTraining.png"><span>Men's Training</span></a></li>
                                <li><a href="#"><img src="http://content.nike.com/content/dam/one-nike/globalAssets/menu_header_images/OneNike_Global_Nav_Icons_WomensTraining.png"><span>Women's Training</span></a></li>
                            </ul>
                          </div>
						  
						  <div class="tab-pane" id="seguridadconv">
                            <ul class="nav-list list-inline">                                
                                <li><a href="#"><img src="http://content.nike.com/content/dam/one-nike/globalAssets/menu_header_images/OneNike_Global_Nav_Icons_Basketball.png"><span>Basketball</span></a></li>
                                <li><a href="#"><img src="http://content.nike.com/content/dam/one-nike/globalAssets/menu_header_images/OneNike_Global_Nav_Icons_Football.png"><span>Football</span></a></li>
                            </ul>
                          </div>
						  
						  
                        </div>
                    </div>
                   
				   
                    <ul class="nav nav-tabs" role="tablist">
                       <li class="active"><a href="#planeacion" role="tab" data-toggle="tab">Planeación</a></li>
                       <li><a href="#hacienda" role="tab" data-toggle="tab">Hacienda</a></li>
                       <li><a href="#agricola" role="tab" data-toggle="tab">Agrícola</a></li>
                       <li><a href="#riesgo" role="tab" data-toggle="tab">Riesgo y desastres</a></li>
					   <li><a href="#medioambiente" role="tab" data-toggle="tab">Medio Ambiente</a></li>
					   <li><a href="#desarrolloi" role="tab" data-toggle="tab">Desarrollo institucional</a></li>
					   <li><a href="#seguridadconv" role="tab" data-toggle="tab">Seguridad y convivencia</a></li>
					   
					 
					 
					   
					   
					   
					<!-- <ul class="nav nav-tabs navbar-right " > -->
						<li><a href="#" id="closemenubar"  ><i class="fa fa-window-close-o fa-2x" aria-hidden="true"></i></a></li>
					 <!-- </ul> -->
								   
                    </ul>  
					
				</div>				
			</li>
						
						
						<!-- EOF---->
                        <li><a href="#myModalCredits" data-toggle="modal" data-target="#myModalCredits"><i class="fa fa-globe"></i> {{  trans('messages.about') }}</a></li>  
                        <li><a href="#myModalContact" data-toggle="modal" data-target="#myModalContact"><i class="fa fa-envelope"></i> {{  trans('messages.contact') }} </a></li>
                        <li class="visible-xl visible-lg visible-md" ><a href="{{ route('login') }}"><i class="fa fa-print"></i> {{  trans('messages.print') }} </a></li>
                        <li><a href="#myModalHelp" data-toggle="modal" data-target="#myModalHelp"><i class="fa fa-question-circle"></i> {{  trans('messages.help') }} </a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right " >
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">{{  trans('messages.login') }} </a></li>
                            <li><a href="{{ route('register') }}">{{  trans('messages.register') }} </a></li>


                        @else
                            <li class="dropdown2">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <i class="fa fa-user-circle-o" aria-hidden="true"></i> {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">

                                @if( Auth::User()->hasrole('superuser') )
                                    <li>

                                        <a href="{{ route('dashboard_post') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('dashboard-form').submit();">
                                            <i class="fa fa-cog" aria-hidden="true"></i> {{  trans('messages.dashboard') }}
                                        </a>

                                        <form id="dashboard-form" action="{{ route('dashboard_post') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                    @endif


                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="fa fa-sign-out" aria-hidden="true"></i> {{  trans('messages.logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>

                                    

                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
			

			
			
        </nav>
		
		
		
		
		
		
		
		
	       

        @yield('content')
    </div>

@yield('modal_wellcome')
@yield('modal_contact')
@yield('modal_credits')
@yield('modal_help')

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script> 
<script src="{{ asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
<script src="{{ asset('bower_components/leaflet/leaflet.js') }}"></script>
<script src="{{ asset('js/giscore.js') }}"></script>

</body>
</html>
