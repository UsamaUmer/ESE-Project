@extends('admin.layouts.app')
  
  @section('main-content')

 <div class="content-wrapper">
  
    <section class="content">
      
  
      
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Shops Form</h3>
              @include('include.errors')
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{route('shop.store')}}" method="post" >
            	{{csrf_field()}}
              <div class="box-body">
              	<div class="row">
              	<div class="col-md-6">
            
                <div class="form-group">
                  <label for="name">Shop Name</label>
                  <input type="text" class="form-control" id="name" placeholder="Enter Shop Name" name="Name" autofocus="true">
                    
                </div>
                
                <div class="form-group">
                  <label for="name">City</label>
                  <input type="text" class="form-control" id="name" placeholder="Enter City" name="City" pattern="[a-zA-Z'\s]+" title="Only Alphabates Are Allowed"
                    >
                </div>

                  <div class="form-group">
                  <label for="name">Email</label>
                  <input type="email" class="form-control" id="name" placeholder="Enter Email" name="email"
                    >
                </div>

                <div class="form-group">
                  <label for="name">Province</label>
                  <input type="text" class="form-control" id="name" placeholder="Enter Province" name="Province"
                    >
                    <label>here also aplly check that user can select only 1 province within 4 provinces</label>
                </div>
             

              

             

              
               
                 </div>

                 <div class="col-md-6">
                 
               

                   <div class="form-group">
                  <label for="phone">Phone No.</label>
                  <input type="text" class="form-control" id="phone" placeholder="Phone Number" name="Phone"
                  pattern="^((\+92)|(0092))-{0,1}\d{3}-{0,1}\d{7}$|^\d{11}$|^\d{4}-\d{7}$" title="+92348-1864501 | 0348-1864501">
                 </div>

             

                <div class="form-group">
                 <label for="comment">Address</label>
                 <textarea class="form-control" rows="5" id="comment" name="Address" ></textarea>
                </div>

               
                 </div>
              <!-- /.box-body -->
            
             
          </div>

            <div class="row">
              	<div class="col-md-6">
              		 <div class="box-footer ">

                       <button type="submit" class="btn btn-primary " style="margin-left: -10px;">Submit</button>
                     </div>
              	</div>
              </div>
            </div>
            </form>
          </div>
          
      <!-- /.row -->
    </section>
  </div>
  @endsection