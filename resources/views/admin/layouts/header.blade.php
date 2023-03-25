<header class="main-header">
    <!-- Logo -->
    <a href="{{route('admin.home')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>E</b>SE</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Smart Phone</b> ESE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
           <!-- Notifications: style can be found in dropdown.less -->
           <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle btn-lg" data-toggle="dropdown">
              <i class="fa fa-envelope-o" ></i>
              <span class="label label-danger" style="padding:4px;">{{session()->get('VAR')+session()->get('VAR1')}}</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have {{session()->get('VAR')+session()->get('VAR1')}} Messages</li>
              <li>
                
                <ul class="menu">
                  <li>
                    <a href="{{route('NonRegisterShops')}}">
                      <i class="fa fa-hospital-o text-aqua"></i> {{session()->get('VAR')}} Shops Request For Registering 
                    </a>
                  </li>
            
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 0 Users Requests For Registering
                    </a>
                  </li>
               
                  <li>
                    <a href="{{route('NonRegisterRetailers')}}">
                      <i class="fa fa-user text-danger"></i> {{session()->get('VAR1')}} Retailer Requests For Registering
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
        
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle btn-lg" data-toggle="dropdown">
              <i class="fa fa-bell-o" ></i>
              <span class="label label-warning" style="padding:4px;">{{session()->get('VAR')+session()->get('VAR1')}}</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have {{session()->get('VAR')+session()->get('VAR1')}} notifications</li>
              <li>
                
                <ul class="menu">
                  <li>
                    <a href="{{route('NonRegisterShops')}}">
                      <i class="fa fa-hospital-o text-aqua"></i> {{session()->get('VAR')}} Shops Request For Registering 
                    </a>
                  </li>
            
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 0 Users Requests For Registering
                    </a>
                  </li>
               
                  <li>
                    <a href="{{route('NonRegisterRetailers')}}">
                      <i class="fa fa-user text-danger"></i> {{session()->get('VAR1')}} Retailer Requests For Registering
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"></li>
            </ul>
          </li>
         
          <!-- Tasks: style can be found in dropdown.less -->
        
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{asset('admin/dist/img/one.jpg')}}" class="user-image" alt="User Image">
              <span class="hidden-xs">{{Auth::user()->Name}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{asset('admin/dist/img/one.jpg')}}" class="img-circle" alt="User Image">

                <p>
                  {{Auth::user()->Name}}
                  <small>{{Auth::user()->cnic}}</small>
                </p>
              </li>
              <!-- Menu Body -->
          
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
         
    <a href="{{route('profiled.edit',Auth::user()->id)}}" class="btn btn-primary btn-flat" >Profile</a>


                </div>
                <div class="pull-right">
                     <a class="btn btn-flat btn-primary" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
         
        </ul>
      </div>
    </nav>
  </header>



  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h3 class="modal-title" id="exampleModalLabel"><strong>Update Your Profile</strong></h3>
       
      </div>
      <div class="modal-body">
   
      
  
  <form class="" action="{{route('profiled.update',Auth::user()->id)}}" method="post">
  {{csrf_field()}}
  {{method_field('put')}}
      
  
    <div class="form-group">

      <label class="" for="email">Email :</label>
      <div class="">
        <input type="email" class="form-control" id="email" name="email" >
      </div>
    </div>
    <div class="form-group">
      <label class="" for="pwd">Cell No :</label>
      <div class="">          
        <input type="text" class="form-control" id="cell"  name="Cell">
      </div>
    </div>

    <div class="form-group">
      <label class="" for="emaila">New Password :</label>
      <div class="">
        <input type="password" class="form-control" id="pwd"  name="password">
      </div>
    </div>

    <div class="form-group">
      <label class="" for="emaila">Confirm Password :</label>
      <div class="">
        <input type="password" class="form-control" id="cpwd"  name="confirm">
      </div>
    </div>


    <div class="form-group">
      <label class="" >Address :</label>
      <div class="">          
        <textarea rows="4" class="form-control" name="Address" id="address"></textarea>
      </div>
    </div>
    
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    
  </form>

        <!-- body end -->
      </div>
      
    </div>
  </div>
</div>