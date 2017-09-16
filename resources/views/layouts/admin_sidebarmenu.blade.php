@section('sidebar_menu')
<!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">{{  trans('messages.menu') }}</li>
        
        <!-- 
        <li class="active"><a href="#"><i class="fa fa-link"></i> <span>Crea</span></a></li>
        <li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li>
        -->
        
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>{{  trans('messages.map') }}</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('/dashboard/mapdesign') }} ">{{  trans('messages.layoutmap') }}</a></li>
            <li><a href="{{ url('/dashboard/layers') }} ">{{  trans('messages.layers') }}</a></li>
          </ul>
        </li>


        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>{{  trans('messages.users') }}</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('/dashboard/register') }} ">{{  trans('messages.register') }}</a></li>
            
            <li><a href="{{ url('/dashboard/role') }}">{{  trans('messages.role') }}</a></li>
          </ul>
        </li>

        <li><a href="{{ url('/dashboard/help') }}"><i class="fa fa-question"></i> <span>{{  trans('messages.help') }}</span></a></li>


          <li class="treeview">
          <a href="#"><i class="fa fa-info"></i> <span>{{  trans('messages.about') }}</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('/dashboard/credits') }}"> <i class="fa fa-star-o"></i> {{  trans('messages.credits') }}</a></li>
            <li><a href="{{ url('/dashboard/contact') }}"> <i class="fa fa-envelope-o"></i> {{  trans('messages.contact') }}</a></li>
          </ul>
        </li>

      </ul>
@endsection