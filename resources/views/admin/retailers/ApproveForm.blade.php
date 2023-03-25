@extends('admin.layouts.app')
  
  @section('main-content')

 <div class="content-wrapper">
   <section class="content-header">
    <h1>
      <strong><i class="fa fa-user"></i> Approve Retailer</strong>
    </h1>

    <ol class="breadcrumb" style="background-color: #E6E6FA;">
      <li><a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{ route('retailer.index')}}"><i class="fa fa-user"></i> Registered Retailers</a></li>
      <li><a href="{{ route('NonRegisterRetailers')}}"><i class="fa fa-user"></i> Non Registered Retailers</a></li>

    </ol>
  </section>
    <section class="content">
      
  
      
          <div class="box box-primary">
           
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{route('approver.update',$retailor->id)}}" method="post" >
            	{{csrf_field()}}
              {{method_field('PUT')}}
              <div class="box-body">
              	<div class="row">
              	<div class="col-md-6">
               
                <div class="form-group">
                  <label for="name">Retailor Name</label>
                  <input type="text" class="form-control" id="name" name="name"
                    value="{{$retailor->name}}" readonly>
                </div>
                
                <div class="form-group">
                  <label for="name">Retailor Cnic</label>
                  <input type="text" class="form-control" id="name" name="cnic"
                    value="{{$retailor->cnic}}" readonly>
                </div>

                <div class="form-group">
                  <label for="name">Retailor Email</label>
                  <input type="text" class="form-control" id="name" name="email"
                    value="{{$retailor->email}}" readonly>
                </div>
             

              
                <div class="form-group">
                  <label for="phone">Phone No.</label>
                  <input type="text" class="form-control" id="phone" name="phone"
                   
                  value="{{$retailor->phone}}" readonly>
                 </div>
             
                  <div class="form-group">
                  <label for="phone">Password</label>
                  <input type="password" class="form-control" id="phone"  name="password"
                   
                  value="{{$retailor->password}}" readonly>
                 </div>
              
               
                 </div>

                 <div class="col-md-6">
                 
               
                  <div class="form-group">
                  <label for="Admin">Shop Id</label>
                  <input type="text" class="form-control" id="Admin"  name="shop"
                   value="{{$retailor->shop_id}}" readonly>
                 </div>
                 <br>
                 <div class="form-group">
                  <label>
                     <input type="checkbox" class=""  name="status" value="1" required=""> 
                  Status </label>
                 </div>
             
                 <br>
                <div class="form-group">
                 <label for="comment">Address</label>
                 <textarea class="form-control" rows="8" id="comment" name="address" readonly>{{$retailor->address}}</textarea>
                </div>

               
                 </div>
              <!-- /.box-body -->
            
             
          </div>

            <div class="row">
              	<div class="col-md-6">
              		 <div class="box-footer ">

                       <button type="submit" class="btn btn-primary " style="margin-left: -10px;"><i class="fa fa-plus"></i> Approve Retailer</button>
                       
                     </div>
              	</div>
              </div>
            </div>
            </form>
          </div>
          <!-- /.box -->

  

       

       


    
     
      <!-- /.row -->
    </section>
  </div>
  @endsection