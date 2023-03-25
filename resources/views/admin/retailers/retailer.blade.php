@extends('admin.layouts.app')
  
  @section('main-content')

 <div class="content-wrapper">
  
    <section class="content">
      
  
      
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Retailers Form</h3>
               @include('include1.messages')

            </div>
            <!-- /.box-header -->
            <!-- form start -->
             @include('include.errors')
             
           
            
            <form role="form" action="{{route('retailer.store')}}" method="post" >
            	{{csrf_field()}}
              <div class="box-body">
              	<div class="row">
              	<div class="col-md-6">
            
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" placeholder="Enter Name" name="Name"
                   required="true" autofocus="true">
                </div>

                <div class="form-group">
                  <label for="Cnic">Cnic</label>
                  <input type="text" class="form-control" id="Cnic" placeholder="Enter Cnic" name="Cnic"
                  pattern="^[0-9+]{5}-[0-9+]{7}-[0-9]{1}$" title="12345-1234567-1" required="true">
                </div>

                 <div class="form-group">
                  <label for="phone">Phone No.</label>
                  <input type="text" class="form-control" id="phone" placeholder="Phone Number" name="Phone"
                  pattern="^((\+92)|(0092))-{0,1}\d{3}-{0,1}\d{7}$|^\d{11}$|^\d{4}-\d{7}$" title="+92348-1864501 | 0348-1864501">
                 </div>

                 <div class="form-group">
                  <label for="phone">Password</label>
                  <input type="password" class="form-control" id="phone" placeholder="Enter password" name="Password"
                  >
                 </div>

             

              
               
                 </div>

                 <div class="col-md-6">
                 
          <div class="form-group">
                  <label for="numbers">Confirm Password</label>
                  <input type="password" class="form-control" id="numbers" placeholder="Again Enter Password" name="Password_confirmation"  required="">
                </div>

                     <div class="form-group">
                  <label for="numbers">Email</label>
                  <input type="email" class="form-control" id="numbers" placeholder="Enter Email" name="Email" required="true" min="100">
                </div>

                  <div class="form-group">
                  <label for="numbers">Shop Id</label>
                  <input type="text" class="form-control" id="numbers" placeholder="Enter Shop Id" name="shop" required="true" min="100">
                </div>

             

                <div class="form-group">
                 <label for="comment">Address</label>
                 <textarea class="form-control" rows="5" id="comment" name="Address" required="true"></textarea>
                </div>

               
                 </div>
              <!-- /.box-body -->
            
             
          </div>

            <div class="row">
              	<div class="col-md-6">
              		 <div class="box-footer ">

                       <button type="submit" class="btn btn-primary " style="margin-left: -10px;">Submit</button>
                       <a href="{{route('retailer.index')}}" class="btn btn-primary ">Go Back</a>
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