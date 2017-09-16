@section('modal_help')
<div id="myModalHelp" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">{{  trans('messages.helpdocs') }}</h4>
                </div>



            <!--<ul class="nav nav-tabs" id="aboutTabs">
			  <li class="active"><a href="#disclaimer" data-toggle="tab"><i class="fa fa-flag"></i>&nbsp;&nbsp;Créditos</a></li	      
		    </ul>-->
			
			
			 <div class="modal-body">
		   
       <li class="list-group-item"><a href="{{ asset('geopalmira_resources/docs/Manual_geovisor_usuario_basico_F.pdf')}}" download="Ayuda 1"><img src="{{ asset('geopalmira_resources/img/ayuda_256.png')}}"> Manual de Ayuda ( Geovisor ) - [PDF]</a></li>
        
        </div>

    
       <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">{{  trans('messages.close') }}</button>
        </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>
@endsection