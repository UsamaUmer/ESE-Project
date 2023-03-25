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
    <li><a href="{{ route('regDevc.index')}}"><i class="fa fa-mobile"></i> Show Register Devices</a></li>
    
  </ol>
</section>
    <section class="content">
      
  
      
          <div class="box box-primary">
            <div class="box-header with-border">
             
              @include('include1.messages')
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            @include('include.errors')
            <form role="form" action="{{route('regDevc.store')}}" method="post" >
            	{{csrf_field()}}
              <div class="box-body">
              	<div class="row">
              	<div class="col-md-6">
            
                <div class="form-group">
                  <label for="name">Device IMEI Code</label>
                  <input type="number" class="form-control" id="name" placeholder="Enter Device IMEI Code" name="MobileCode"
                   required="true" autofocus="true" min=0 value="{{old('MobileCode')}}" >
                </div>
                
                <div class="form-group">
                  <label for="name">Brand</label>
                  <input type="text" class="form-control" id="name" placeholder="Enter Device Brand" name="Brand"
                   required="true" value="{{old('Brand')}}">
                </div>

                <div class="form-group">
                  <label for="name" >Status</label>
                  <select name="Status" class="form-control" required="">
                    <option value="1" selected="">Valid</option>
                    <option value="0">Stolen</option>

                  </select>
                </div>

                 </div>

                 <div class="col-md-6">
                 
              <div class="form-group">
                  <label for="Cnic">Select Device</label>
                  <select name="device_id" class="form-control" >

                    <option value="" readonly="">Select Device</option>
                    @foreach ($devices as $device)

                    

                    <option value="{{$device->id}}" >{{$device->Type}}</option>
                      
                    @endforeach
                    

                  </select>
                </div>

             

                <div class="form-group">
                  <label for="Cnic">Retailer Id</label>
                  <input type="text" class="form-control" id="Cnic" placeholder="Enter Retailer Id" name="retailer_id"
                    required="true" value="{{old('retailer_id')}}" pattern="^[0-9]*$" title="Only Digits Are Allowed">
                </div>

                 <div class="form-group">
                  <label for="Cnic">User Id</label>
                  <input type="text" class="form-control" id="Cnic" placeholder="Enter User Id" name="user_id"
                    required="true" value="{{old('user_id')}}" pattern="^[0-9]*$" title="Only Digits Are Allowed">
                </div>



               
                 </div>
              <!-- /.box-body -->
            
             
          </div>

            <div class="row">
              	<div class="col-md-6">
              		 <div class="box-footer ">

                       <button type="submit" class="btn btn-primary " style="margin-left: -10px;">
                        <i class="fa fa-plus"></i> Register Device</button>
                      
                     </div>
              	</div>
              </div>



               </div>
            </form>
          </div>
          <!-- /.box primary div -->

  

       

    

    
     
      <!-- /.row -->
    </section>
 </div>
  @endsection