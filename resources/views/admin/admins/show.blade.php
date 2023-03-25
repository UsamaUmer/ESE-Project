@extends('admin.layouts.app')
  
  @section('main-content')

 <div class="content-wrapper">
      <section class="content-header" >
      <h1>
        <i class="fa fa-user"></i> Single Admin Record
        
      </h1>
      <ol class="breadcrumb" style="background-color: #E6E6FA;">
        <li><a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        
       <li> <a href="{{route('admin.create')}}"><i class="fa fa-plus"></i> Add New</a></li>
       <li> <a href="{{route('admin.index')}}"><i class="fa fa-user"></i> Admins Record</a></li>
      </ol>
    </section>
    <section class="content">
      
  
      
          <div class="box box-primary">

            <div class="box-header ">
             
       
            </div>
            <!-- /.box-header -->
            <!-- form start -->
          
            	
              <div class="box-body">
              	<div class="row">
              	<div class="col-md-6">
            
                
                 <div class="form-group">
                  <label for="Password">Id</label>
                  <input type="text" class="form-control" id="id" value="{{$admin->id}}" readonly>
                 </div>
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" value="{{$admin->Name}}" readonly>
                </div>

                <div class="form-group">
                  <label for="Cnic">Cnic</label>
                  <input type="text" class="form-control" id="Cnic" value="{{$admin->cnic}}" readonly>
                </div>

                 <div class="form-group">
                  <label for="phone">Phone No.</label>
                  <input type="text" class="form-control" id="phone" value="{{$admin->Cell}}" readonly>
                 </div>

                

             

              
               
                 </div>

                 <div class="col-md-6">
                 
             

                     <div class="form-group">
                  <label for="numbers">Email</label>
                  <input type="email" class="form-control" id="numbers" value="{{$admin->email}}" readonly>
                </div>

                              <div class="form-group">
                  <label for="numbers">State</label>
                  <input type="text" class="form-control" id="numbers" value="@if($admin->state==0){{'Actice'}}@else{{'Non Actice'}}
                  @endif
                  " readonly>
                </div>

             

                <div class="form-group">
                 <label for="comment">Address</label>
                 <textarea class="form-control" rows="5" id="comment" readonly>{{$admin->Address}}</textarea>
                </div>

               
                 </div>
              
            
             
          </div>

            <div class="row">
              	<div class="col-md-6">
                       <a href="{{route('AllShops',$admin->id)}}" class="btn btn-primary "><i class="fa fa-hospital-o"></i> See Shops</a>
                     
              	</div>

              </div>
         
          </div>
          <!-- /.box -->
</div>
    </section>
  </div> <!-- content wrapper -->

  @endsection