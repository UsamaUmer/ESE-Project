<nav class="navbar navbar-inverse" id="nav">
        <div class="container-fluid">
            <div class="navbar-header" style="float: left;">
                <a class="navbar-brand" href="{{ route('home') }}"><span id="large"> <b>S</b>mart 
                  <b>P</b>hone ESE</span></a>
            <a class="navbar-brand" href="#"><span id="small"><strong>ESE</strong></span></a>
              <button  class="openbtn" id="openbtnn" onclick="openNav()">☰</button>
            </div>
            
            <ul class="nav navbar-nav navbar-right" style="float:right;">
               
                <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><img src="{{asset('users/Images/little11.jpg')}}" style="margin-top:10px; margin-right: 25px;"></a>
                

    
              
            </ul>

                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
            
        </div>
    </nav>