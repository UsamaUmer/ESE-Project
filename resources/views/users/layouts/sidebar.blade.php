  <div id="mySidebar" class="sidebar">
       
        <h6 style="margin-left: 70px;  width: 100px; height: 100px; "><img src="{{asset('users/Images/11.jpg')}}" style="border-style: solid; border: 2px solid black;border-radius: 50%;box-shadow: 1px 1px 3px 3px #E2E2E2;"></h6>
        <ul id="take">
               <a href="{{route('/profile')}}"><li id="profile">Profile</li></a>
              
               <a href="{{ route('allDeviceOfSingleUser',Auth::user()->id) }}"><li id="device">Owning Devices</li></a>
               <a href="{{ route('blackListedMobiles')}}"><li id="blockedDevice">Blocklist Devices</li></a>
               
               <a href="https://www.imei.info/" target="_blank"><li id="informationBank">Info Bank</li></a>
               <a href="{{ route('reportedMobiles',Auth::user()->id)}}"><li id="retailer">
               Reports</li></a>      
           </ul>
    </div>