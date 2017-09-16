@section('userprofile-header')
<!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="{{ asset('dist/img/boy.png')}}" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="{{ asset('dist/img/boy.png')}}" class="img-circle" alt="User Image">

                <p>
                    {{ Auth::user()->name }}
                     <small>{{  trans('messages.membersince') }} <br>{{ Auth::user()->created_at }}</small>
                </p>
              </li>
              <!-- Menu Body -->
              <!--<li class="user-body">
                 <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div> 
  
              </li>-->
              <!-- Menu Footer-->
              <li class="user-footer">

                <div class="pull-left">
                  <a href="{{ url('/home') }}" class="btn btn-warning btn-flat">&lt;&lt; {{  trans('messages.home') }}</a>
                </div>

                <div class="pull-left">
                  <a href="{{ url('/dashboard/') }}" class="btn btn-default btn-flat">{{  trans('messages.dashboard') }}</a>
                </div>
                <div class="pull-right">
                  <!-- <a href="#" class="btn btn-default btn-flat">Sign out</a> -->

                  <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">
                                            {{  trans('messages.logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>


                </div>
              </li>
            </ul>
          </li>
@endsection