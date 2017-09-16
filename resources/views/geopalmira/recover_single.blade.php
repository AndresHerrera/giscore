@section('content')
    
<div class="signin-form">

	<div class="container">
	
	
     @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
        
       <form class="form-signin modalBackground " method="POST" action="{{ route('password.email') }}">

       {{ csrf_field() }}
	   
	   <img src="{{ asset('geopalmira_resources/img/logo2016_conunal.png')}}"/>
      
        <h2 class="form-signin-heading">{{  trans('messages.reset_password') }}</h2><hr />
        
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
        
     

     	<hr />
		
		
        
        <div class="form-group">

         <button type="button" class="btn btn-success" name="btn-back" id="btn-back" onClick="javascript:history.go(-1);">
            <span class="glyphicon glyphicon-chevron-left"></span> &nbsp; {{  trans('messages.back') }}
            </button> 

            
            <button type="submit" class="btn btn-default" name="btn-login" id="btn-login">
    		      <span class="glyphicon glyphicon-log-in"></span> &nbsp; {{  trans('messages.reset_password_link') }}
			</button> 

    

          

        </div>  
      
      </form>

    </div>

</div>
    
@endsection