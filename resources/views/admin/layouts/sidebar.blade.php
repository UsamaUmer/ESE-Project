<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
      </div>
      <div class="pull-left info">
        <p>{{Auth::user()->Name}}</p>
        
      </div>
      <br>
    </div>


    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>

    @role('Junior Admin|Super Admin')
      <li class="treeview">
        <a href="#">
         <i class="fa fa-user"></i>
         <span>Admins</span>
         <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
   
        <li><a href="{{route('admin.create')}}"><i class="fa fa-circle-o"></i> New Admins</a></li>
        <li><a href="{{route('admin.index')}}"><i class="fa fa-circle-o"></i> Registered Admins</a> </li>
   

      </ul>
    </li>
  @endrole

 @role('Super Admin')
    <li class="treeview">
      <a href="#">
       <i class="fa fa-user-plus"></i>
       <span>Roles</span>
       <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">

      <li><a href="{{ route('roles.create')}}"><i class="fa fa-circle-o"></i> Create New Role</a></li>
      <li><a href="{{ route('roles.index')}}"><i class="fa fa-circle-o"></i> Check All Roles</a> </li>
      <li><a href="{{route('assign.create')}}"><i class="fa fa-circle-o"></i> Assign Role</a> </li>
      <li><a href="{{route('check.create')}}"><i class="fa fa-circle-o"></i> Check Admin Role</a> </li>
    </ul>
  </li>
@endrole

@role('Junior Admin|Super Admin')
  <li class="treeview">
    <a href="#">
     <i class="fa fa-hospital-o"></i>
     <span>Shops</span>
     <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">

    <li><a href="{{route('NonRegisterShops')}}"><i class="fa fa-circle-o"></i> Pending Shops</a></li>
    <li><a href="{{route('shop.index')}}"><i class="fa fa-circle-o"></i> Registered Shops</a> </li>


  </ul>
</li>

<li class="treeview">
  <a href="#">
   <i class="fa fa-user-circle"></i>
   <span>Retailers</span>
   <span class="pull-right-container">
    <i class="fa fa-angle-left pull-right"></i>
  </span>
</a>
<ul class="treeview-menu">
 <li><a href="{{route('retailer.create')}}"><i class="fa fa-circle-o"></i> Add New Retailer</a></li>
 <li><a href="{{route('retailer.index')}}"><i class="fa fa-circle-o"></i> Retailors Record</a></li>
 <li><a href="{{route('NonRegisterRetailers')}}"><i class="fa fa-circle-o"></i> Pending Requests</a> </li>


</ul>
</li>

<li class="treeview">
  <a href="#">
    <i class="fa fa-user"></i>
    <span>Users</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">

    <li><a href="{{route('user.index')}}"><i class="fa fa-circle-o"></i> Registerd Users</a></li>
    <li><a href="{{ route('deviceless') }}"><i class="fa fa-circle-o"></i> Deviceless Users</a></li>

  </ul>
</li>
@endrole

@role('Super Admin')
<li class="treeview">
  <a href="#">
    <i class="fa fa-desktop"></i> <span>Devices</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li><a href="{{route('device.index')}}"><i class="fa fa-circle-o"></i> Device Categories</a></li>
    <li><a href="{{route('regDevc.index')}}"><i class="fa fa-circle-o"></i> Registered Devices</a></li>
    <li><a href="{{route('history.index')}}"><i class="fa fa-circle-o"></i> Ownership History</a></li>
    <li><a href="{{ route('blacklist') }}"><i class="fa fa-circle-o"></i> Blacklisted Devices</a></li>

  </ul>
</li>
@endrole

@role('Super Admin')
<li class="treeview">
  <a href="#">
    <i class="fa fa-table"></i> <span>PTA</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li><a href="{{route('pta.index')}}"><i class="fa fa-circle-o"></i> Pta Record</a></li>
    <li><a href="{{route('ptaRep.index')}}"><i class="fa fa-circle-o"></i> Forword Complains</a></li>
    <li><a href="{{ route('repoertedData') }}"><i class="fa fa-circle-o"></i> Reported Mobiles</a></li>
  </ul>
</li>
@endrole

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




</ul>
</section>
<!-- /.sidebar -->
</aside>


<!-- modal for company detail -->


