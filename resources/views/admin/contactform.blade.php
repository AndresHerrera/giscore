
@section('content-header')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{  trans('messages.about') }}
        <small>{{  trans('messages.contact') }}</small>
      </h1>
      <!--<ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>-->
    </section>
@endsection


@section('content')

    <meta name="csrf-token" content="{{ csrf_token() }}">

      <div class="container">
      		<div class="row">
      			<div class="col-xs-12 col-sm-6 col-sm-offset-3"> 
      			<form class="form-signin modalBackground " action="{{ route('contactform') }}" method="POST">
      				
      				{{ csrf_field() }}
      				
        	  <div class="form-group">
        	    <label for="name">{{  trans('messages.name') }}</label>
        	    <input type="text" class="form-control" id="name" name="name" placeholder="{{  trans('messages.name') }}"  required autofocus  >
        	  </div>

        	 <div class="form-group">
        	    <label for="email">{{  trans('messages.email_address') }}</label>
        	    <input type="email" class="form-control" id="email" name="email" placeholder="{{  trans('messages.email_address') }}" required>
        	  </div>

      	  <div class="form-group">
      	    <label for="content">{{  trans('messages.message') }}</label>
      	    <textarea name="content" class="form-control" id="content"  cols="30" rows="10" required></textarea>
      	  </div>

        	  <div class="form-group">
        			<button type="submit" class="btn btn-primary">{{  trans('messages.send_message') }}</button>
        	  </div>
      			</form>
      			</div>
      		</div>
      </div>

@endsection