@extends('admin.layouts.app')

@section('main-content')

<div class="content-wrapper">
 <section class="content-header">
  <h1>
    <i class="fa fa-hospital-o"></i> Approve Shop
  </h1>
  
  <ol class="breadcrumb" style="background-color: #E6E6FA;">
    <li><a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="{{ route('shop.index') }}"><i class="fa fa-hospital-o"></i> Registered Shops</a></li>
    <li><a href="{{ route('NonRegisterShops') }}"><i class="fa fa-hospital-o"></i> Non-Registered Shops</a></li>
  </ol>
</section>

  <section class="content">
    
    
    
    <div class="box box-primary">
  
      <!-- /.box-header -->
      <!-- form start -->

      <form role="form" action="{{route('shop.update',$shops->id)}}" method="post" >
       {{csrf_field()}}
       {{method_field('PUT')}}
       <div class="box-body">
         <div class="row">
           <div class="col-md-6">
             
            <div class="form-group">
              <label for="name">Shop Name</label>
              <input type="text" class="form-control" id="name"  name="Name"
              value="{{$shops->Name}}" readonly>
            </div>
            
            <div class="form-group">
              <label for="name">City</label>
              <input type="text" class="form-control" id="name"  name="City"
              value="{{$shops->City}}" readonly>
            </div>

            <div class="form-group">
              <label for="name">Province</label>
              <input type="text" class="form-control" id="name"  name="Province"
              value="{{$shops->Province}}" readonly>
            </div>
            

            
            <div class="form-group">
              <label for="phone">Phone No.</label>
              <input type="text" class="form-control" id="phone"  name="Phone"
               
              value="{{$shops->Phone}}" readonly>
            </div>

                <div class="form-group">
              <label for="phone">Email</label>
              <input type="email" class="form-control" id="phone"  name="email"
               
              value="{{$shops->email}}" readonly>
            </div>
            

            
            
          </div>

          <div class="col-md-6">
           
           
            <div class="form-group">
              <label for="Admin">Admin Cnic</label>
              <input type="text" class="form-control" id="Admin" placeholder="Enter Admin Cnic" name="Admin"
              required="" pattern="^[1-4]{1}[0-9]{4}(-)?[0-9]{7}(-)?[0-9]{1}$" title="3420281569919 | 34202-8156991-9">
            </div>
            <br>
            <div class="form-group">
              <label>
               <input type="checkbox" class=""  name="Status" value="1" required=""> 
             Status </label>
           </div>
           

           <div class="form-group">
             <label for="comment">Address</label>
             <textarea class="form-control" rows="9" id="comment" name="Address" readonly>{{$shops->Address}}</textarea>
           </div>

           
         </div>
         <!-- /.box-body -->
         
         
       </div>

       <div class="row">
         <div class="col-md-6">
           <div class="box-footer ">

             <button type="submit" class="btn btn-primary " style="margin-left: -10px;"><i class="fa fa-plus"></i> Add New Shop</button>
             
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