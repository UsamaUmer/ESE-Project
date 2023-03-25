    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    <div class="site-navbar-wrap js-site-navbar bg-white">
      
      <div class="container">
        <div class="site-navbar bg-light">
          <div class="py-1">
            <div class="row align-items-center">
              <div class="col-4">
                <h2 class="mb-0 site-logo"><a href="{{route('/')}}"><strong class="font-weight-bold">Smart</strong> Phone</a></h2>
              </div>
              <div class="col-8">
                <nav class="site-navigation text-right" role="navigation">
                  <div class="container">
                    <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                      
                 
                     
                       <li><a href="https://www.imei.info/" target="_blank">Check Specification</a></li>
                      <li class="has-children">
                        <a href="">Login Here</a>
                        <ul class="dropdown arrow-top">
                          <li><a href="{{route('admin.login')}}">Admin Login</a></li>
                          <li><a href="{{route('admins.login')}}">Retailer Login</a></li>
                               <li><a href="{{route('login')}}"><i class="glyphicon glyphicon-user"></i> User Login</a></li>

                        </ul>
                      </li>
                       <li><a href="{{asset('/stolenMobiles')}}">Stolen Mobiles</a></li>
                      <li><a href="{{asset('/contact')}}">Contact</a></li>
                    
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>  