@extends('admin.layouts.app1')
  
  @section('main-content')

 <div class="content-wrapper">
    <section class="content-header">
      <h1>
         Update Device Information 
        
      </h1>
      
    </section>
    <section class="content">
      
  
      
          <div class="box box-primary">
            <div class="box-header with-border">
             
              @include('include1.messages')
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            @include('include.errors')
            <form role="form" action="{{route('regDevice.update',$mobile->id)}}" method="post" >
            	{{csrf_field()}}
              {{method_field('PUT')}}
              <div class="box-body">
              	<div class="row">
              	<div class="col-md-6">
            
                <div class="form-group">
                  <label >Device IMEI Code</label>
                  <input type="number" class="form-control"   name="MobileCode"
                    value="{{$mobile->MobileCode}}" readonly>
                </div>
                
                <div class="form-group">
                  <label >Brand</label>
                  <input type="text" class="form-control"   name="Brand"
                   required="true" value="{{$mobile->Brand}}" >
                </div>

                <div class="form-group">
                  <label  >Status</label>
                  <select name="Status" class="form-control" required="">
                    <option value="" readonly>Select Status</option>
                    <option value="1">Valid</option>
                    <option value="0">Stolen</option>

                  </select>
                </div>

                 </div>

                 <div class="col-md-6">
                 
                <div class="form-group">
                  <label >Device</label>
                  <input type="text" class="form-control"   name="device_id"
                   value="{{$mobile->device->Type}}" readonly="">
                </div>

             

                <div class="form-group">
                  <label >Retailer Cnic</label>
                  <input type="text" class="form-control"  placeholder="Enter Retailer Cnic" name="retailer_id"
                    required="true" value="{{old('retailer_id')}}" pattern="^[1-4]{1}[0-9]{4}(-)?[0-9]{7}(-)?[0-9]{1}$" title="3420281569919 | 34202-8156991-9">
                </div>

                 <div class="form-group">
                  <label >User Id</label>
                  <input type="text" class="form-control"   name="user_id"
                     value="{{$mobile->user->cnic}}" readonly="">
                </div>



               
                 </div>
              <!-- /.box-body -->
            
             
          </div>

            <div class="row">
              	<div class="col-md-6">
              		 <div class="box-footer ">

                       <button type="submit" class="btn btn-primary " style="margin-left: -10px;">
                        <i class="fa fa-plus"></i> Submit</button>
                       <a href="{{route('regDevice.index')}}" class="btn btn-primary "><i class="fa fa-remove"></i> Go Back</a>
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