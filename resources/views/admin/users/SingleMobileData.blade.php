@extends('admin.layouts.app')
  
  @section('main-content')

 <div class="content-wrapper">
   <section class="content-header">
    <h1>
      <strong><i class="fa fa-mobile "></i> Complete Mobile Information </strong>
    </h1>

    <ol class="breadcrumb" style="background-color: #E6E6FA;">
      <li><a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{ route('user.index')}}"><i class="fa fa-user"></i> Registered Users</a></li>
      <li><a href="{{ route('deviceless')}}"><i class="fa fa-user"></i> Deviceless Users</a></li>
      <li><a href="" id="sanan" class="" style=""><i class="fa fa-print" ></i> Print</a></li>
    </ol>
  </section>

    
    <section class="content">

          <div class="box box-primary">
              <div class="" >
              <h1 class="box-title text-primary" id="had" style="display: none; transition: 1s;">Ehanced Smart Phone
                <hr>
              </h1>

         
            </div>

            <div class="box-header with-border">
              <h3 class="box-title text-primary"><i class="fa fa-mobile"></i> Mobile Information</h3>
         
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
            	
              <div class="box-body">
              	<div class="row">
                    <div class="col-md-3">

                    <div class="form-group">
                      <label >Mobile ID</label>
                      <input type="text" class="form-control"  value="{{$mobile->id}}">
                    </div>

              </div>

                 <div class="col-md-3">
                <div class="form-group">
                  <label >Device</label>
                  <input type="text" class="form-control"  value="{{$mobile->device->Type}}">
                </div>
              </div>

              	<div class="col-md-3">

            
            
                <div class="form-group">
                  <label >Mobile Code</label>
                  <input type="text" class="form-control"  value="{{$mobile->MobileCode}}">
                </div>

              </div>
                
             

              <div class="col-md-3">

                <div class="form-group">
                  <label >Status</label>
                  @if($mobile->Status==1)
                  <input type="text" class="form-control"  value="{{'Valid'}}">
                  @else
                  <input type="text" class="form-control"  value="{{'Stolen'}}">
                  @endif
                </div>
              </div>

           
             


          </div>


                    <div class="row">
                              <div class="col-md-3">

                <div class="form-group">
                  <label >Brand</label>
                  <input type="text" class="form-control"  value="{{$mobile->Brand}}">
                </div>
              </div>

                   <div class="col-md-3">

                <div class="form-group">
                  <label >Recapture</label>
                  <input type="text" class="form-control"  value="{{$mobile->Recapture}}">
                </div>
              </div>

                    <div class="col-md-3">

                    <div class="form-group">
                      <label >OwnerShip</label>
                      <input type="text" class="form-control"  value="{{$mobile->Ownership}}">
                    </div>

              </div>
                <div class="col-md-3">

            
            
                <div class="form-group">
                  <label >Retailer Cnic</label>
                  <input type="text" class="form-control"  value="{{$mobile->retailer->cnic}}">
                </div>

              </div>
                
      

          </div>

          <div class="row">
                      <div class="col-md-3">
                <div class="form-group">
                  <label >User Cnic</label>
                  <input type="text" class="form-control"  value="{{$mobile->user->cnic}}">
                </div>
              </div>

              <div class="col-md-3">

                <div class="form-group">
                  <label >Created Time</label>
                  
                   <input type="text" class="form-control"  value="{{$mobile->created_at}}">
                 
                </div>
              </div>

                       <div class="col-md-3">

                <div class="form-group">
                  <label >Updated Time</label>
                  
                   <input type="text" class="form-control"  value="{{$mobile->updated_at}}">
                 
                </div>
              </div>

          </div>



          





         
            </div>
            
          </div>
          <!-- /.box -->

  

       

        


    
     
      <!-- /.row -->
    </section>
 </div>
  @endsection

  @section('foots')
  <script src="{{asset('admin/dist/js/custom.js')}}"></script>
  @endsection

 