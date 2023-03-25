<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
       
      </div>
      <div class="pull-left info">
        <p></p>
        
      </div>
      <br>
    </div>


    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>




  



 



















<li class="treeview">
  <a href="#">
    <i class="fa fa-user"></i>
    <span>Users</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">

    <li><a href="{{route('rel.index')}}"><i class="fa fa-circle-o"></i> Registerd Users</a></li>
    <li><a href="{{ route('devicelesss') }}"><i class="fa fa-circle-o"></i> Deviceless Users</a></li>

  </ul>
</li>
<li class="treeview">
  <a href="#">
    <i class="fa fa-desktop"></i> <span>Devices</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    
    <li><a href="{{route('regDevice.index')}}"><i class="fa fa-circle-o"></i> Registered Devices</a></li>
    <li><a href="{{ route('hist.index') }}"><i class="fa fa-circle-o"></i> Ownership History</a></li>
    <li><a href="{{ route('blacklist1') }}"><i class="fa fa-circle-o"></i> Blacklisted Devices</a></li>

  </ul>
</li>
<li class="treeview">
  <a href="#">
    <i class="fa fa-table"></i> <span>PTA</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
     <li><a href="{{route('ptareportt.index')}}"><i class="fa fa-circle-o"></i> Forword Complains</a></li>
    
    <li><a href="{{route('his')}}"><i class="fa fa-circle-o"></i> Reported Mobiles</a></li>
  </ul>
</li>


<li class="treeview">
  <a href="#">
    <i class="fa fa-map-marker"></i> <span>Location</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
   <li><a href="#"><i class="fa fa-circle-o"></i> History</a></li>
   <li><a href="#"><i class="fa fa-circle-o"></i> Track</a></li>
   <li><a href="#"><i class="fa fa-circle-o"></i> Track By Owner</a></li>
   <li><a href="#"><i class="fa fa-circle-o"></i> Track By Retailer</a></li>
 </ul>
</li>


<li class="treeview">
  <a href="#">
    <i class="fa fa-map-marker"></i> <span>Stolen</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
   <li><a href="{{route('admins.home1')}}"><i class="fa fa-circle-o"></i> One Click Reporting</a></li>
   <li><a href="#"><i class="fa fa-circle-o"></i> Automated Report Back</a></li>
 </ul>
</li>

</ul>
</section>
<!-- /.sidebar -->
</aside>


<!-- modal for company detail -->


