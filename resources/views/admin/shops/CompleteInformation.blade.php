@extends('admin.layouts.app')

@section('main-content')

<div class="content-wrapper">
    <section class="content-header">
  <h1>
    <i class="fa fa-hospital-o"></i> Complete Shop Information
  </h1>
  
  <ol class="breadcrumb" style="background-color: #E6E6FA;">
    <li><a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="{{ route('shop.index')}}"><i class="fa fa-hospital-o"></i> Registered Shops</a></li>
    <li><a href="{{ route('NonRegisterShops')}}"><i class="fa fa-hospital-o"></i> Non-Registered Shops</a></li>
    
  </ol>
</section>
 <section class="content">



  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title text-primary"><i class="fa fa-hospital-o"></i> Shop Information</h3>

    </div>
    <!-- /.box-header -->
    <!-- form start -->


    <div class="box-body">
     <div class="row">
      <div class="col-md-3">

        <div class="form-group">
          <label for="name">Shop ID</label>
          <input type="text" class="form-control" id="name" readonly value="{{$shops->id}}">
        </div>

      </div>
      <div class="col-md-3">



        <div class="form-group">
          <label for="name">Shop Name</label>
          <input type="text" class="form-control" id="name" readonly value="{{$shops->Name}}">
        </div>

      </div>

      <div class="col-md-3">
        <div class="form-group">
          <label for="name">City</label>
          <input type="text" class="form-control" id="name" readonly value="{{$shops->City}}">
        </div>
      </div>

      <div class="col-md-3">

        <div class="form-group">
          <label for="name">Province</label>
          <input type="text" class="form-control" id="name" readonly value="{{$shops->Province}}">
        </div>
      </div>



    </div>

    <div class="row">
      <div class="col-md-3">

        <div class="form-group">
          <label for="name">Status</label>
          @if($shops->status==1)
          <input type="text" class="form-control" id="name" readonly value="{{'Register'}}">
          @endif
        </div>

      </div>
      <div class="col-md-3">



        <div class="form-group">
          <label for="name">Date</label>
          <input type="text" class="form-control" id="name" readonly value="{{$shops->created_at}}">
        </div>

      </div>

      <div class="col-md-3">

        <div class="form-group">
          <label for="name">Phone</label>
          <input type="text" class="form-control" id="name" readonly value="{{$shops->Phone}}">
        </div>
      </div>

      <div class="col-md-3">
        <div class="form-group">
          <label for="name">Address</label>
          <input type="text" class="form-control" id="name" readonly value="{{$shops->Address}}">
        </div>
      </div>





    </div>


         <div class="row">
      <div class="col-md-3">

       <div class="form-group">
          <label for="name">State</label>
          <input type="text" class="form-control" id="name" readonly value="@if($shops->state==0){{'Actice'}}@else{{'Non Actice'}}@endif">
        </div>

      </div>
     
  </div>

    <div class="box-header with-border">
      <h3 class="box-title text-primary" style="margin-left:-10px;">
        <i class="fa fa-user"></i> Admin Information</h3>

    </div>

    <div class="row">
      <div class="col-md-3">

        <div class="form-group">
          <label for="name">Admin ID</label>
          <input type="text" class="form-control" id="name" readonly value="{{$shops->admin_id}}">
        </div>

      </div>
      <div class="col-md-3">



        <div class="form-group">
          <label for="name">Admin Name</label>
          <input type="text" class="form-control" id="name" readonly value="{{$shops->admin->Name}}">
        </div>

      </div>

      <div class="col-md-3">
        <div class="form-group">
          <label for="name">Admin Cnic</label>
          <input type="text" class="form-control" id="name" readonly value="{{$shops->admin->cnic}}">
        </div>
      </div>

      <div class="col-md-3">

        <div class="form-group">
          <label for="name">Admin Cell</label>
          <input type="text" class="form-control" id="name" readonly value="{{$shops->admin->Cell}}">
        </div>
      </div>



    </div>


    <div class="row">
      <div class="col-md-3">

        <div class="form-group">
          <label for="name">Admin Email</label>
          <input type="text" class="form-control" id="name" readonly value="{{$shops->admin->email}}">
        </div>

      </div>
      <div class="col-md-3">



        <div class="form-group">
          <label for="name">State</label>
          <input type="text" class="form-control" id="name" readonly value="@if($shops->admin->state==0){{'Actice'}}@else{{'Non Actice'}}@endif">
        </div>

      </div>

      <div class="col-md-3">
        <div class="form-group">
          <label for="name">Admin Address</label>
          <input type="text" class="form-control" id="name" readonly value="{{$shops->admin->Address}}">
        </div>
      </div>

      <div class="col-md-3">

        <div class="form-group">
          <label for="name">Date</label>
          <input type="text" class="form-control" id="name" readonly value="{{$shops->admin->created_at}}">
        </div>
      </div>



    </div>

    <div class="row">
     <div class="col-md-6">
       <div class="box-footer ">

        

         <a href="{{route('AllRetailers',$shops->id)}}" class="btn btn-primary ">
          <i class="fa fa-user"></i> See Shop Retailers</a>
       </div>
     </div>
   </div>


   <!-- /.box -->




 </div>

</div>  <!-- /.box primary-->




<!-- /.row -->
</section>
</div>
@endsection