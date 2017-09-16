@section('modal_credits')
<div id="myModalCredits" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">{{  trans('messages.credits') }}</h4>
                </div>

 <div class="modal-body">

            <!--<ul class="nav nav-tabs" id="aboutTabs">
			  <li class="active"><a href="#disclaimer" data-toggle="tab"><i class="fa fa-flag"></i>&nbsp;&nbsp;Créditos</a></li	      
		    </ul>-->
			
			
			
		    <div class="tab-content" id="aboutTabsContent"> 
	
			  <div id="disclaimer" class="tab-pane fade active in">
			  
			  <li class="list-group-item">
			   
			   <p><b>El visor de mapas es una herramienta orientada a facilitar la gestión de información geográfica para el desarrollo territorial de la Alcaldia de Palmira.</b></p>		    
			    
			  </li>
			      
				  <li class="list-group-item"> <i class="fa fa-check-circle" aria-hidden="true"></i>  Universidad Nacional de Colombia Sede Palmira  <a href="http://www.palmira.unal.edu.co/" target="_blank">[ Ir al Sitio ]</a></li>
			
				  <p></p>
			    <li class="list-group-item">
			      <p align="CENTER">
				    Alcaldía del Municipio de Palmira<br>
					Secretaría de Planeación <br>
					Calle 30 – Carrera 29, Esquina / Teléfono (+57(2)2709521)<br>
				    <a rel="creditos" href="http://www.palmira.gov.co/"><img alt="LogoAlcaldia" style="border-width:0" src="{{ asset('geopalmira_resources/img/logos/logo2016_conunal.png')}}"></a>
			      </p> 
			    </li>
			  </div>
			 
		    </div>

</div>
    
       <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">{{  trans('messages.close') }}</button>
        </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>
@endsection