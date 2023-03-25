@extends('admin.layouts.app')
  
  @section('main-content')

 <div class="content-wrapper">
  
    <section class="content">
      
  
      
          <div class="box box-primary">

            <div class="box-header with-border">
              <h3 class="box-title">
                <strong><i class="fa fa-edit"></i> Edit Admin Record</strong></h3>
                
            </div>
            @include('include.errors')
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{route('admin.update',$admin->id)}}" method="post" >
            	{{csrf_field()}}
              {{method_field('PUT')}}
              <div class="box-body">
              	<div class="row">
              	<div class="col-md-6">
            
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" name="Name"
                    value="{{$admin->Name}}" pattern="[a-zA-Z'\s]+" title="Only Alphabates Are Allowed" required="">
                </div>

                <div class="form-group">
                  <label for="Cnic">Cnic</label>
                  <input type="text" class="form-control" id="Cnic"  name="Cnic"
                   value="{{$admin->cnic}}" pattern="^[1-4]{1}[0-9]{4}(-)?[0-9]{7}(-)?[0-9]{1}$" title="3420281569919 | 34202-8156991-9" required="">
                </div>

                 <div class="form-group">
                  <label for="phone">Phone No.</label>
                  <input type="text" class="form-control" id="phone"  name="Cell"
                  value="{{$admin->Cell}}" pattern="^[0-9]{4}(-)?[0-9]{7}" title="0348-1864501 | 03481864501" required="">
                 </div>

                  <div class="form-group">
                  <label for="Password">Password</label>
                  <input type="password" class="form-control" id="Password"  name="password"
                   value="{{$admin->password}}" required="">
                 </div>

             

              
               
                 </div>

                 <div class="col-md-6">
                 
         

                <div class="form-group">
                  <label for="numbers">Email</label>
                  <input type="email" class="form-control" id="numbers"  name="Email"  value="{{$admin->email}}">
                </div>

             

                <div class="form-group">
                 <label for="comment">Address</label>
                 <textarea class="form-control" rows="8" id="comment" name="Address" required="">{{$admin->Address}}</textarea>
                </div>

               
                 </div>
              <!-- /.box-body -->
            
             
          </div>

            <div class="row">
              	<div class="col-md-6">
              		 <div class="box-footer ">

                       <button type="submit" class="btn btn-primary " style="margin-left: -10px;"><i class="fa fa-edit"></i> Update</button>
                       <a href="{{route('admin.index')}}" class="btn btn-primary ">
                        <i class="fa fa-remove"></i> Go Back</a>
                     </div>
              	</div>
              </div>
            </div><!-- /.box body -->
            </form>
          </div>
          <!-- /.box -->
    </section>
  </div> <!-- /.content wrapper -->
  @endsection