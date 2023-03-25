@extends('admin.layouts.app')
  
  @section('main-content')

 <div class="content-wrapper">
 
    <section class="content">
      
  
      
          <div class="box box-primary">
    <div class="row">
       <div class="col-lg-3">
         
       </div>

       <div class="col-lg-6">
          <div class="box-header with-border">
              <h3 class="box-title"><strong>
            <i class="fa fa-user-plus"></i> Edit Role
          </strong></h3>
              
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            @include('include.errors')
            <form role="form" action="{{route('roles.update',$role->id)}}" method="post" >
              {{csrf_field()}}
              {{method_field('PUT')}}
              <div class="box-body">
                
            
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" placeholder="Enter Role Name" name="role" pattern="[a-zA-Z\'\s]+" title="Only Alphabates Are Allowed" value="{{$role->name}}" required="">
              

                
              <!-- /.box-body -->
            </div>
             
          </div>

            <div class="row">
                <div class="col-md-6">
                   <div class="box-footer ">

                       <button type="submit" class="btn btn-primary " ><i class="fa fa-plus"></i> Submit</button>
                       <a href="{{route('roles.index')}}" class="btn btn-primary "><i class="fa fa-remove"></i> Go Back</a>
                     </div>
                </div>
              </div>
            </form>
          </div>
       </div>

       <div class="col-lg-3">
         
       </div>
    </div>
           
          <!-- /.box -->

  

       

        


    
     
      <!-- /.row -->
    </section>
  </div>
  @endsection