@extends('admin.layouts.app1')

@section('main-content')

<div class="content-wrapper">
  <section class="content-header">
    <h1>
     BlackListed Device Information

   </h1>

 </section>
 <section class="content">



  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title text-primary"> <i class="fa fa-mobile"></i> Mobile Information</h3>

    </div>
    <!-- /.box-header -->
    <!-- form start -->


    <div class="box-body">
     <div class="row">
      <div class="col-md-3">

        <div class="form-group">
          <label >Mobile ID</label>
          <input type="text" class="form-control"  value="{{$mobile->id}}">
        </div>

      </div>
      <div class="col-md-3">



        <div class="form-group">
          <label >IMEI Code</label>
          <input type="text" class="form-control"  value="{{$mobile->MobileCode}}">
        </div>

      </div>

      <div class="col-md-3">
        <div class="form-group">
          <label  >Status</label>
          @if($mobile->Status==1)
          <input type="text" class="form-control"  value="{{'Valid'}}">
          @else
          <input type="text" class="form-control"  value="{{'Stolen'}}">
          @endif
        </div>
      </div>

      <div class="col-md-3">

        <div class="form-group">
          <label >Brand</label>
          <input type="text" class="form-control"  value="{{$mobile->Brand}}">
        </div>
      </div>



    </div>

    <div class="row">
      <div class="col-md-3">

        <div class="form-group">
          <label >Recapture</label>
          
          <input type="text" class="form-control"  value="{{$mobile->Recapture}}">
          
        </div>

      </div>
      <div class="col-md-3">



        <div class="form-group">
          <label >OwnerShip</label>
          <input type="text" class="form-control"  value="{{$mobile->Ownership}}">
        </div>

      </div>

      <div class="col-md-3">

        <div class="form-group">
          <label >Retailer Cnic</label>
          <input type="text" class="form-control"  value="{{$mobile->retailer->cnic}}">
        </div>
      </div>

      <div class="col-md-3">
        <div class="form-group">
          <label for="name">Device</label>
          <input type="text" class="form-control" id="name" value="{{$mobile->device->Type}}">
        </div>
      </div>





    </div>

    <div class="row">
      <div class="col-md-3">
        <div class="form-group">
          <label >Created Time</label>
          <input type="text" class="form-control"  value="{{$mobile->created_at}}">
        </div>
      </div>

      <div class="col-md-3">
        <div class="form-group">
          <label >Updated Time</label>
          <input type="text" class="form-control"  value="{{$mobile->updated_at}}">
        </div>
      </div>

    </div>

    <div class="box-header with-border">
      <h3 class="box-title text-primary" style="margin-left:-10px;"><i class="fa fa-user"></i> User Information</h3>

    </div>

    <div class="row">
      <div class="col-md-3">

        <div class="form-group">
          <label for="name">User ID</label>
          <input type="text" class="form-control" id="name" value="{{$mobile->user->id}}">
        </div>

      </div>
      <div class="col-md-3">



        <div class="form-group">
          <label for="name">User Name</label>
          <input type="text" class="form-control" id="name" value="{{$mobile->user->name}}">
        </div>

      </div>

      <div class="col-md-3">
        <div class="form-group">
          <label for="name">User Cnic</label>
          <input type="text" class="form-control" id="name" value="{{$mobile->user->cnic}}">
        </div>
      </div>

      <div class="col-md-3">

        <div class="form-group">
          <label for="name">User Cell</label>
          <input type="text" class="form-control" id="name" value="{{$mobile->user->cell}}">
        </div>
      </div>



    </div>


    <div class="row">
      <div class="col-md-3">

        <div class="form-group">
          <label for="name">User Email</label>
          <input type="text" class="form-control" id="name" value="{{$mobile->user->email}}">
        </div>

      </div>
      <div class="col-md-3">



        <div class="form-group">
          <label for="name">User Password</label>
          <input type="text" class="form-control" id="name" value="{{$mobile->user->password}}">
        </div>

      </div>

      <div class="col-md-3">
        <div class="form-group">
          <label for="name">User Address</label>
          <input type="text" class="form-control" id="name" value="{{$mobile->user->address}}">
        </div>
      </div>

      <div class="col-md-3">

        <div class="form-group">
          <label for="name">Date</label>
          <input type="text" class="form-control" id="name" value="{{$mobile->user->created_at}}">
        </div>
      </div>



    </div>



    <div class="row">
     <div class="col-md-6">
       <div class="box-footer ">

         <a href="{{route('blacklist1')}}" class="btn btn-primary btn-flat" style="margin-left: -10px;">
          <i class="fa fa-remove"></i> Go Back</a>


       </div>
     </div>
   </div>
</div>

   <!-- /.box -->




 </div>






<!-- /.row -->
</section>
</div>

@endsection