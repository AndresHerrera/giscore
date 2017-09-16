<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="shortcut icon" href="{{{ asset('favicon.ico') }}}">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
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
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">{{  trans('messages.login') }} </a></li>
                            <li><a href="{{ route('register') }}">{{  trans('messages.register') }} </a></li>


                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">

                                @if( Auth::User()->hasrole('superuser') )
                                    <li>
                                        <a href="{{ route('dashboard_post') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('dashboard-form').submit();">
                                            {{  trans('messages.dashboard') }}
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
                                            {{  trans('messages.logout') }}
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

        <button 
           type="button" 
           class="btn btn-primary btn-lg" 
           data-toggle="modal" 
           data-target="#favoritesModal">
          Add to Favorites
        </button>

        <button 
           type="button" 
           class="btn btn-primary btn-lg" 
           data-toggle="modal" 
           data-target="#myModal">
          Addsdsdsds
        </button>

        @yield('content')
    </div>



    <!-- modal example -->

    <div class="modal fade" id="favoritesModal" 
     tabindex="-1" role="dialog" 
     aria-labelledby="favoritesModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" 
          data-dismiss="modal" 
          aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" 
        id="favoritesModalLabel">The Sun Also Rises</h4>
      </div>
      <div class="modal-body">
        <p>
        Please confirm you would like to add 
        <b><span id="fav-title">The Sun Also Rises</span></b> 
        to your favorites list.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" 
           class="btn btn-default" 
           data-dismiss="modal">Close</button>
        <span class="pull-right">
          <button type="button" class="btn btn-primary">
            Add to Favorites
          </button>
        </span>
      </div>
    </div>
  </div>
</div>

<!-- modal example -->


<!-- modal example2 -->
<div id="myModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Edit</h4>
                </div>
        <iframe src="geopalmira/contactform/modal" width="100%" height="560px" frameborder="0" allowtransparency="true"></iframe> 
    
       <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>

<!-- modal example -->



<div class="modal fade" tabindex="-1" role="dialog" id="edit-modal">
           <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Edit</h4>
                </div>
             <div class="modal-body">
                   <form method="post">
                     <div class="form-group">
                   <label for="edit-taunt">Edit Taunt</label>
                  <textarea name="post-body" id="post-body" rows="5" class="form-control"></textarea>
              </div>
         </form>
           </div>
            <div class="modal-footer">
             <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary" id="modal-save">Save changes</button>
                </div>
             </div><!-- /.modal-content -->
           </div><!-- /.modal-dialog -->
         </div>




    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>







 



</body>
</html>
