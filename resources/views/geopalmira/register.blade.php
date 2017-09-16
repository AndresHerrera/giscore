@extends('layouts.layout_geopalmira_auth')


@section('content-header')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Users
        <small>Register</small>
      </h1>
      <!--<ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>-->
    </section>
@endsection




@section('content')

<div class="signin-form">

    <div class="container">
    
    
     
        
       <form class="form-signin modalBackground " method="POST" action="{{ route('register') }}">

       {{ csrf_field() }}

       
       <img src="{{ asset('geopalmira_resources/img/logo2016_conunal.png')}}"/>
      
        <h3 class="form-signin-heading">Complete el formulario para acceso a el Visor de Mapas de la Alcaldía del Municipio de Palmira</h3><hr />
        
        <div id="error">
        <!-- error will be shown here ! -->
        </div>
        
        
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <input type="text" class="form-control" placeholder="{{  trans('messages.register_name') }}" value="{{ old('name') }}" name="name" id="name" required autofocus />
        <span id="check-e">
            @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
        </span>
        </div>
        
        
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <input type="email" class="form-control" placeholder="{{  trans('messages.email_address') }}" name="email" id="email" value="{{ old('email') }}" required/>
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

 <span id="check-e">
         @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
</span>

        </div>
        
        <div class="form-group">
        <input type="password" class="form-control" placeholder="{{  trans('messages.confirm_password') }}" name="password_confirmation" id="password-confirm" required/>
        </div>


        
        <hr />
        
        
        
        <div class="form-group">
        
             <button type="button" class="btn btn-success" name="btn-back" id="btn-back" onClick="javascript:history.go(-1);">
            <span class="glyphicon glyphicon-chevron-left"></span> &nbsp; {{  trans('messages.back') }}
            </button> 
            
            <button type="submit" class="btn btn-default" name="btn-login" id="btn-login">
            <span class="glyphicon glyphicon-user"></span> &nbsp;  {{  trans('messages.register') }}
            </button> 
            
            
        </div>  
      
      </form>

    </div>
    
   
    
</div>


@endsection
