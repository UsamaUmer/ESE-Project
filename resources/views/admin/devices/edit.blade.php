@extends('admin.layouts.app')

@section('main-content')

<div class="content-wrapper">
      <section class="content-header">
  <h1>
    <i class="fa fa-mobile"></i>  <strong>Register Devices</strong>
  </h1>
  
  <ol class="breadcrumb" style="background-color: #E6E6FA;">
    <li><a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="{{ route('device.index')}}"><i class="fa fa-mobile"></i> Devices Categories</a></li>
    <li><a href="{{ route('device.create')}}"><i class="fa fa-plus"></i> Add New Device</a></li>
    <li><a href="{{ route('regDevc.create')}}"><i class="fa fa-plus"></i> Register New Device</a></li>
    <li><a href="{{ route('regDevc.index')}}"><i class="fa fa-mobile"></i> Show Register Devices</a></li>
    <li><a href="{{ route('blacklist')}}"><i class="fa fa-mobile"></i> BlackList Devices</a></li>
    
  </ol>
</section>
  <section class="content">



    <div class="box box-primary">
      <div class="box-header with-border bg-success">
        <center><h3 class="box-title"><i class="fa fa-edit"></i> <strong>Update Device Type</strong></h3></center>
      </div>
      <!-- /.box-header -->
      <!-- form start -->

      <form role="form" action="{{ route('device.update',$device->id) }}" method="post" >
       {{csrf_field()}}
       {{method_field('PUT')}}
       <div class="box-body">
         <div class="row">

           <div class="col-md-6 col-md-offset-3">
            @include('include.errors')
            <div class="form-group">
              <label for="name">Device Type</label>
              <input type="text" class="form-control" id="name"  name="Type"
              required="true"  value="{{$device->Type}}" pattern="[a-zA-Z'\s]+" title="Only Alphabates Are Allowed">
            </div>

              <div class="box-footer ">

             <button type="submit" class="btn btn-primary " style="margin-left: -10px;"><i class="fa fa-edit"></i> Update</button>
             <a href="{{route('device.index')}}" class="btn btn-primary "><i class="fa fa-remove"></i> Go Back</a>
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