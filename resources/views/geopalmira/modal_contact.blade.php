<script src="{{ asset('bower_components/jquery/dist/jquery.min.js')}}"></script>

@section('modal_contact')
<div id="myModalContact" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">{{  trans('messages.contact') }}</h4>
                </div>


                 <div class="modal-body">
        
       <!-- <iframe src="geopalmira/contactform/modal" width="100%" height="560px" frameborder="0" allowtransparency="true"></iframe> -->

        <meta name="csrf-token" content="{{ csrf_token() }}">


        <div class="alert alert-success" id="message_response">
              <span id="message_response_text"></span>
        </div>

     
         
            <!--<div class="col-xs-12 col-sm-6 col-sm-offset-3"> -->
            <form name="contact_form" id="contact_form" >

            <!-- action="{{ route('contactform_modal') }}" method="POST" -->
              
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
              <button type="submit" id="comment" name="comment"  class="btn btn-primary">{{  trans('messages.send_message') }}</button>
            </div>
            </form>
            
         <!-- </div> -->
      

</div>
    
       <div class="modal-footer">
            <button type="button" id="close_modal_contact" class="btn btn-default" data-dismiss="modal">{{  trans('messages.close') }}</button>
        </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>

<script type="text/javascript">

$('#message_response').hide();

 $('#contact_form').on('submit', function(e) {
    e.preventDefault(); 
    $.ajax({
        type: "POST",
        url: "{{ route('contactform_modal') }}",
        data: $(this).serialize(),
        success: function(msg) {
            $('#message_response').show();
            $('#message_response_text').html( '<strong>'+"{{  trans('messages.thanks') }}"  + ',</strong> ' +   msg.name + ' ' +   msg.message);
            $('#contact_form').trigger("reset");

            setTimeout(function(){
                   $('#message_response').hide();
              }, 4000);
        }
    });
});

</script>
@endsection