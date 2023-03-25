@extends('admin.layouts.app1')

@section('main-content')

<div class="content-wrapper">
 <section class="content-header" >
  <h1>
    <i class="fa fa-user"></i> Complete User Information
    
  </h1>
  <ol class="breadcrumb" style="background-color: #E6E6FA;">
    <li><a href="{{ route('admins.home1') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    
    <li> <a href="{{route('rel.create')}}"><i class="fa fa-plus"></i> Add New</a></li>
    <li> <a href="{{route('rel.index')}}"><i class="fa fa-user"></i> Registered Users</a></li>
  </ol>
</section>
<section class="content">
  
  
  
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title text-primary"><strong><i class="fa fa-user"></i> User Information</h3>
       
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      
      
      <div class="box-body">
       <div class="row">
        <div class="col-md-3">

          <div class="form-group">
            <label for="name">User ID</label>
            <input type="text" class="form-control" id="name" value="{{$user->id}}">
          </div>

        </div>
        <div class="col-md-3">

          
          
          <div class="form-group">
            <label for="name">User Name</label>
            <input type="text" class="form-control" id="name" value="{{$user->name}}">
          </div>

        </div>
        
        <div class="col-md-3">
          <div class="form-group">
            <label for="name">User Email</label>
            <input type="text" class="form-control" id="name" value="{{$user->email}}">
          </div>
        </div>

        <div class="col-md-3">

          <div class="form-group">
            <label for="name">User Cnic</label>
            <input type="text" class="form-control" id="name" value="{{$user->cnic}}">
          </div>
        </div>

        
        


      </div>


      <div class="row">
        <div class="col-md-3">

          <div class="form-group">
            <label for="name">User Cell</label>
            <input type="text" class="form-control" id="name" value="{{$user->cell}}">
          </div>
        </div>

        <div class="col-md-3">

          <div class="form-group">
            <label for="name">User Address</label>
            <input type="text" class="form-control" id="name" value="{{$user->address}}">
          </div>
        </div>

        <div class="col-md-3">

          <div class="form-group">
            <label for="name">Created Time</label>
            <input type="text" class="form-control" id="name" value="{{$user->created_at}}">
          </div>

        </div>
        <div class="col-md-3">

          
          
          <div class="form-group">
            <label for="name">Updated Time</label>
            <input type="text" class="form-control" id="name" value="{{$user->updated_at}}">
          </div>

        </div>
        
        

      </div>

      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            <label for="name">Retailer Id</label>
            <input type="text" class="form-control" id="name" value="{{$user->retailer->cnic}}">
          </div>
        </div>

        <div class="col-md-3">

          <div class="form-group">
            <label for="name">Status</label>
            @if($user->status==1)
            <input type="text" class="form-control" id="name" value="{{'Having Device'}}">
            @endif
          </div>
        </div>

        <div class="col-md-3">

          <div class="form-group">
            <label for="name">State</label>
            
            <input type="text" class="form-control" id="name" 
            value="@if($user->state==0) {{'Active'}} @else {{'Not Active'}} @endif">
            
          </div>
        </div>

        <div class="col-md-3">

<div class="form-group">
  <label for="name">Total Devices</label>
  
  <input type="text" class="form-control" id="name" value="{{$count}}">
  
</div>
</div>

      </div>



      





      <div class="row">
       <div class="col-md-6">
         

        
        <div class="form-group">
         <a href="{{ route('allDeviced',$user->id) }}" class="btn btn-primary btn-flat">
          <i class="fa fa-mobile"></i> See Devices Of User</a>
        </div>
      </div>
    </div>
  </div>
  
</div>
<!-- /.box -->










<!-- /.row -->
</section>
</div>
@endsection