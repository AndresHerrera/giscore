 @section('footer')
 <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      {{  trans('messages.admin_module_name') }} 
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; {{ date('Y') }} - <a href="#">  {{  trans('messages.giscore_client_name') }} </a>.</strong> {{  trans('messages.allrightsreserved') }}
  </footer>
@endsection