@extends('admin.layouts.app1')

@section('main-content')

<div class="content-wrapper">
  <section class="content-header">
    <h1>
     Change OwnerShip    
    </h1>
    
  </section>
  <section class="content">



    <div class="box box-primary">

      <div class="box-header with-border">
        @include('include1.messages')
        <center><h3 class="box-title"><i class="fa fa-plus"></i><strong> Change OwnerShip </strong></h3></center>
      </div>
      <!-- /.box-header -->
      <!-- form start -->

      <form role="form" action="{{ route('hist.store') }}" method="post" >
       {{csrf_field()}}
       <div class="box-body">
         <div class="row">

           <div class="col-md-6 col-md-offset-3">
            @include('include.errors')
            <div class="form-group">
              <label for="name">New User Cnic</label>
              <input type="text" class="form-control" id="name" placeholder="Enter User Cnic" name="user_id"
              required="true" autofocus="true" value="{{old('user_id')}}" pattern="^[1-4]{1}[0-9]{4}(-)?[0-9]{7}(-)?[0-9]{1}$" title="3420281569919 | 34202-8156991-9">
            </div> 

            <div class="form-group">
              <label for="name">Old User Cnic</label>
              <input type="text" class="form-control" id="name" placeholder="Enter User Cnic" name="old_id"
              required="true" autofocus="true" value="{{old('old_id')}}" pattern="^[1-4]{1}[0-9]{4}(-)?[0-9]{7}(-)?[0-9]{1}$" title="3420281569919 | 34202-8156991-9">
            </div> 

            <div class="form-group">
              <label for="name">Retailer Cnic</label>
              <input type="text" class="form-control" id="name" placeholder="Enter Retailer Cnic" name="retailer_id"
              required="true"  value="{{old('retailer_id')}}" pattern="^[1-4]{1}[0-9]{4}(-)?[0-9]{7}(-)?[0-9]{1}$" title="3420281569919 | 34202-8156991-9">
            </div>  
            <div class="form-group">
              <label for="name">Mobile IMEI</label>
              <input type="number" class="form-control" id="name" placeholder="Enter Mobile IMEI" name="mobile_id"
              required="true"  value="{{old('mobile_id')}}" min="1">
            </div>

            
            <div class="box-footer ">

             <button type="submit" class="btn btn-primary " style="margin-left: -10px;">
              <i class="fa fa-plus"></i> Submit</button>
              <a href="{{route('hist.index')}}" class="btn btn-primary "><i class="fa fa-remove"></i> Go Back</a>
            </div>

          </div>


          <!-- /.box-body -->


        </div>

      </div>
    </form>
  </div>
  <!-- /.box -->









  <!-- /.row -->
</section>
</div>
@endsection