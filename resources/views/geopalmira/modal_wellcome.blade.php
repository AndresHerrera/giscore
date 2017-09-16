@section('modal_wellcome')
<div id="myModalWellcome" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">{{  trans('messages.wellcometitle') }}</h4>
                </div>



            <!--<ul class="nav nav-tabs" id="aboutTabs">
			  <li class="active"><a href="#disclaimer" data-toggle="tab"><i class="fa fa-flag"></i>&nbsp;&nbsp;Créditos</a></li	      
		    </ul>-->
			
			
			 <!--<div class="modal-body">
		   
       <li class="list-group-item"><a href="{{ asset('geopalmira_resources/docs/Manual_geovisor_usuario_basico_F.pdf')}}" download="Ayuda 1"><img src="{{ asset('geopalmira_resources/img/ayuda_256.png')}}"> Manual de Ayuda ( Geovisor ) - [PDF]</a></li>
        
        </div> -->


        <div class="modal-body">
       
       <div align="center"><img src="{{ asset('geopalmira_resources/img/logos/logo2016_conunal.png')}} "></div>
       <br>
       <h4>El Geovisor de la Alcaldía del Municipio de Palmira es una herramienta para la gestión y 
       administración tanto a nivel público como privado, ya que ofrece 
       información geográfica y datos de distintas variables.
       <br>
       
       <br>
       A continuación se ilustra una guía para la correcta utilización del Geovisor. 
      <li class="list-group-item"><a href="{{ asset('geopalmira_resources/docs/Manual_geovisor_usuario_basico_F.pdf')}}" download="Ayuda 1"><img src="{{ asset('geopalmira_resources/img/ayuda_256.png')}}" width="50px"> Manual de Ayuda ( Geovisor ) - [PDF]</a></li>      
       
       </h4>
          
      </div>



    
       <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">{{  trans('messages.close') }}</button>
        </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>
@endsection