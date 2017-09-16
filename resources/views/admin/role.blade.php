@section('content-header')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{  trans('messages.users') }}
        <small>{{  trans('messages.role') }}</small>
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
      		
      </div>

@endsection