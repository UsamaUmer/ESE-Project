@extends('admin.layouts.app')

@section('main-content')

<div class="content-wrapper">
 <section class="content-header">
  <h1>
    <i class="fa fa-user"></i> Add New Admin
  </h1>
  <ol class="breadcrumb" style="background-color: #E6E6FA;">
    <li><a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="{{ route('admin.index') }}"><i class="fa fa-user"></i> Admins Record</a></li>
  </ol>
</section>
<section class="content">
  
  
  
  <div class="box box-primary">

   
    <!-- /.box-header -->
    <!-- form start -->
    
    <form role="form" action="{{route('admin.store')}}" method="post" >

     {{csrf_field()}}
     <div class="box-body">
      @include('include.errors')
      <div class="row">
       <div class="col-md-6">
        
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" placeholder="Enter Name" name="Name"
          autofocus="true" pattern="[a-zA-Z'\s]+" title="Only Alphabates Are Allowed" value="{{old('Name')}}" required="">
        </div>

        <div class="form-group">
          <label for="Cnic">Cnic</label>
          <input type="text" class="form-control" id="Cnic" placeholder="Enter Cnic" name="Cnic"
          value="{{old('Cnic')}}" pattern="^[1-4]{1}[0-9]{4}(-)?[0-9]{7}(-)?[0-9]{1}$" title="3420281569919 | 34202-8156991-9" required="">
        </div>

        <div class="form-group">
          <label for="phone">Phone No.</label>
          <input type="text" class="form-control" id="phone" placeholder="Phone Number" name="Cell"
          value="{{old('Cell')}}" pattern="^[0-9]{4}(-)?[0-9]{7}" title="0348-1864501 | 03481864501" required="">
        </div>

        <div class="form-group">
          <label for="Password">Password</label>
          <input type="password" class="form-control" id="Password" placeholder="Password" name="password" required="">
        </div>

        

        
        
      </div>

      <div class="col-md-6">
       
        <div class="form-group">
          <label for="numbers">Confirm Password</label>
          <input type="password" class="form-control" id="numbers" placeholder="Again Enter Password" name="password_confirmation"  required="">
        </div>

        <div class="form-group">
          <label for="numbers">Email</label>
          <input type="email" class="form-control" id="numbers" placeholder="Enter Email" name="Email" value="{{old('Email')}}" required="">
        </div>

        

        <div class="form-group">
         <label for="comment">Address</label>
         <textarea class="form-control" rows="5" id="comment"
         name="Address" required="" >{{old('Address')}}</textarea>
         
         
       </div>

       
     </div>
     <!-- /.box-body -->
   </div>
   
 </div>

 <div class="row">
   <div class="col-md-6">
     <div class="box-footer ">

       <button type="submit" class="btn btn-primary " ><i class="fa fa-plus"></i> Submit</button>
       
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