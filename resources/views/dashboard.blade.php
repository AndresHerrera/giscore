@extends('layouts.admin_gui')
@extends('layouts.admin_logoheader')
@extends('layouts.admin_sidebarmenu')
@extends('layouts.admin_sidebar_userpanel')
@extends('layouts.admin_sidebar_searchpanel')

{{--- @extends('layouts.admin_header_messages') --}}
{{--- @extends('layouts.admin_header_notifications') --}}
{{--- @extends('layouts.admin_header_tasks') --}}
 
@extends('layouts.admin_header_user')
{{--- @extends('layouts.admin_asidebar') --}}



@extends('layouts.admin_footer')


@if( !Auth::User()->hasrole('superuser') )
  	<script type="text/javascript">
    	window.location = "home";
	</script>
@endif



@section('content')


@if(isset($option))
	@switch($option)
		@case('register')
			@include('admin/register')
		@breakswitch

		@case('mapdesign')
			@include('admin/mapdesign')
		@breakswitch

		@case('role')
			@include('admin/role')
		@breakswitch

		@case('help')
			@include('admin/help')
		@breakswitch

		@case('credits')
			@include('admin/credits')
		@breakswitch

		@case('layers')
			@include('admin/layers')
		@breakswitch

		@case('reset')
			@include('geopalmira/recover')
		@breakswitch

		@case('contact')
			@include('admin/contactform')
		@breakswitch


		@default
			@include('errors.404')
		@breakswitch


	@endswitch
@endif

@if (Auth::guest())
	@include('errors.no_authorized')
@else
	@include('layouts.admin_landing')
@endif




@endsection