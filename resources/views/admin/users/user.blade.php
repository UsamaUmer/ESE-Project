@extends('admin.layouts.app1')
  
  @section('main-content')

 <div class="content-wrapper">
    <section class="content-header">
      <h1>
         Users Form
        
      </h1>
      
    </section>
    <section class="content">
      
  
      
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><strong><i class="fa fa-user"></i> Users Form</strong></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('user.store') }}" method="post" >
            	{{csrf_field()}}
              <div class="box-body">
                @include('include.errors')
              	<div class="row">
              	<div class="col-md-6">
            
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" placeholder="Enter Name" 
                    name="name" value="{{ old('name') }}"  autofocus  pattern="[a-zA-Z\'\s]+" title="Only Alphabates Are Allowed" required="">
                </div>

                <div class="form-group">
                  <label for="Cnic">Cnic</label>
                  <input type="text" class="form-control" id="Cnic" placeholder="Enter Cnic" name="cnic"
                   value="{{old('cnic')}}" pattern="^[1-4]{1}[0-9]{4}(-)?[0-9]{7}(-)?[0-9]{1}$" title="3420281569919 | 34202-8156991-9" required="">
                </div>

                 <div class="form-group">
                  <label for="phone">Phone No.</label>
                  <input type="text" class="form-control" id="phone" placeholder="Phone Number" name="cell" pattern="^[0-9]{4}(-)?[0-9]{7}" title="0348-1864501 | 03481864501" required="" value="{{old('cell')}}">
                 </div>

              <div class="form-group">
                  <label for="numbers">Email</label>
                  <input type="email" class="form-control" id="numbers" placeholder="Enter Email" name="email" value="{{ old('email') }}" required="">
                </div>

                  <div class="form-group">
                  <label for="numbers">Password</label>
                  <input type="password" class="form-control" id="numbers" placeholder="Enter password" name="password" value="{{ old('password') }}" required="">
                </div>

              
               
                 </div>

                 <div class="col-md-6">
                 
                <div class="form-group">
                  <label for="numbers">Confirm Password</label>
                  <input type="password" class="form-control" id="numbers" placeholder="Enter password" name="password_confirmation" value="{{ old('password') }}" required="">
                </div>

                    
                <div class="form-group">
                  <label for="numbers">Retailer Id</label>
                  <input type="text" class="form-control" id="numbers" placeholder="Enter Retailer Id" name="retailer_id" value="{{ old('retailer_id') }}" required="">
                </div>
             

                <div class="form-group">
                 <label for="comment">Address</label>
                 <textarea class="form-control" rows="9" id="comment" name="address" required="">{{ old('address') }}</textarea>
                </div>

               
                 </div>
              <!-- /.box-body -->
            
             
          </div>

            <div class="row">
              	<div class="col-md-6">
              		 <div class="box-footer ">

                       <button type="submit" class="btn btn-primary " style="margin-left: -10px;">
                        <i class="fa fa-plus"></i> Submit</button>
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