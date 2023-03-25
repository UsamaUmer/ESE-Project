@extends('admin.layouts.app')

  @section('main-content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Admin Panal</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        
      
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    
  <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{$registerAdmins}}</h3>

              <p>Registered Admins</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="{{route('admin.index')}}" class="small-box-footer">More Admins info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{$registerShops}}</h3>

              <p>Registered Shops</p>
            </div>
            <div class="icon">
              <i class="fa fa-hospital-o"></i>
            </div>
            <a href="{{route('shop.index')}}" class="small-box-footer">More Shops info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{$count}}</h3>

              <p>Pending Shops</p>
            </div>
            <div class="icon">
              <i class="fa fa-hospital-o"></i>
            </div>
            <a href="{{route('NonRegisterShops')}}" class="small-box-footer">More Shops info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{$registerRetailers}}</h3>

              <p>Registered Retailers</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="{{route('retailer.index')}}" class="small-box-footer">More Retailers info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>


           <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{$counts}}</h3>

              <p>Pending Retailers</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="{{route('NonRegisterRetailers')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>


            <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{$registerUsers}}</h3>

              <p>Registerd Users</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="{{route('user.index')}}" class="small-box-footer">More Users info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>


             <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{$registerDevices}}</h3>

              <p>Registerd Devices</p>
            </div>
            <div class="icon">
              <i class="fa fa-mobile"></i>
            </div>
            <a href="{{route('regDevc.index')}}" class="small-box-footer">More Devices info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>



             <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{$blackListed}}</h3>

              <p>BlackListed Devices</p>
            </div>
            <div class="icon">
              <i class="fa fa-ban"></i>
            </div>
            <a href="{{route('blacklist')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>


   

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  @endsection