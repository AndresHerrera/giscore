 {{-- @extends('layout.app')  --}}

@extends('geopalmira/layout')

@extends('geopalmira/modal_wellcome')
@extends('geopalmira/modal_contact')
@extends('geopalmira/modal_credits')
@extends('geopalmira/modal_help')


{{ Visitor::log() }}

@section('content')
<!-- <div class="container_map"> -->
    <div id="giscore_map"></div>
    <!--
    <div class="row">
        <div class="col-md-12">
            
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                <button 
                   type="button" 
                   class="btn btn-primary btn-lg" 
                   data-toggle="modal" 
                   data-target="#myModalContact">
                  {{  trans('messages.contact') }}
                </button>
                </div>
            </div>
            
        </div>
    </div>
-->
<!-- </div> -->
@endsection

