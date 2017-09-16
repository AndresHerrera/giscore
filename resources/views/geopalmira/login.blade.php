@extends('layouts.layout_geopalmira_auth')
{{ Visitor::log() }}


@if (!Auth::guest())
   <script type="text/javascript">
        window.location.href = "home";
  </script>
@else

@section('content')
    
<div class="signin-form">

	<div class="container">
	
	
     
        
       <form class="form-signin modalBackground " method="POST" action="{{ route('login') }}" id="login-form">

       {{ csrf_field() }}
	   
	   <img src="{{ asset('geopalmira_resources/img/logo2016_conunal.png')}}"/>
      
        <h2 class="form-signin-heading">Bienvenidos al Visor de Mapas de la Alcaldía del Municipio de Palmira</h2><hr />
        
        <div id="error">
        </div>
        
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <input type="email" class="form-control" placeholder="{{  trans('messages.email_address') }}" name="email" id="email" value="{{ old('email') }}" required autofocus />
        <span id="check-e">
            
             @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

        </span>
        </div>
        
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <input type="password" class="form-control" placeholder="{{  trans('messages.password') }}" name="password" id="password" required/>

         @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif


        </div>


        <div class="form-group">
                            <div class="col-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{  trans('messages.rememberme') }}  
                                    </label>
                                </div>

                                

                            </div>

                            <div align="center"><a href="geopalmira/register">{{  trans('messages.register') }} </a></div>


                        </div>
       

     	<hr />
		
		
        
        <div class="form-group">
            <button type="submit" class="btn btn-default" name="btn-login" id="btn-login">
    		      <span class="glyphicon glyphicon-log-in"></span> &nbsp; {{  trans('messages.login') }} 
			</button> 

            <a class="btn btn-link" href="geopalmira/recover">
                {{  trans('messages.forgot_password') }} 
            </a>

          

        </div>  
      
      </form>

    </div>
	<br>
	<div style="font-size:xx-small; "align="center">
		<i>Visitas: {{  Visitor::count()   }}  /  Clicks:  {{  Visitor::clicks()  }}    </i>
    <div>
</div>


    
@endsection


@endif

