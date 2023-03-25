@extends('admin.layouts.app')
  
  @section('main-content')

 <div class="content-wrapper">
   <section class="content-header">
    <h1 class="text-primary">
      <strong><i class="fa fa-user"></i> Compelte Retailer Information</strong>
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
            
            	
              <div class="box-body">
              	

                  

           

                      <div class="row">
                    <div class="col-md-3">

                    <div class="form-group">
                      <label for="name">Retailor ID</label>
                      <input type="text" class="form-control" id="name" value="{{$retailor->id}}">
                    </div>

              </div>
                <div class="col-md-3">

            
            
                <div class="form-group">
                  <label for="name">Retailor Name</label>
                  <input type="text" class="form-control" id="name" value="{{$retailor->name}}">
                </div>

              </div>
                
                <div class="col-md-3">
                <div class="form-group">
                  <label for="name">Retailor Cnic</label>
                  <input type="text" class="form-control" id="name" value="{{$retailor->cnic}}">
                </div>
              </div>

              <div class="col-md-3">

                <div class="form-group">
                  <label for="name">Retailor Cell</label>
                  <input type="text" class="form-control" id="name" value="{{$retailor->phone}}">
                </div>
              </div>
             


          </div>


          <div class="row">
                    <div class="col-md-3">

                    <div class="form-group">
                      <label for="name">Retailor Email</label>
                      <input type="text" class="form-control" id="name" value="{{$retailor->email}}">
                    </div>

              </div>
                <div class="col-md-3">

            
            
                <div class="form-group">
                  <label for="name">Shop Id</label>
                  <input type="text" class="form-control" id="name" value="{{$retailor->shop->id}}">
                </div>

              </div>
                
                <div class="col-md-3">
                <div class="form-group">
                  <label for="name">Retailor Address</label>
                  <input type="text" class="form-control" id="name" value="{{$retailor->address}}">
                </div>
              </div>

         


                   <div class="col-md-3">

                    <div class="form-group">
                      <label for="name">State</label>
                      <input type="text" class="form-control" id="name" value="@if($retailor->state==0) {{'Actice'}} @else {{'Not Actice'}}@endif">
                    </div>

              </div>
             


          </div>

       <div class="row">

             <div class="col-md-3">

                <div class="form-group">
                  <label for="name">Created Date</label>
                  <input type="text" class="form-control" id="name" value="{{$retailor->created_at}}">
                </div>
              </div>

                 <div class="col-md-3">

                <div class="form-group">
                  <label for="name">Updated Date</label>
                  <input type="text" class="form-control" id="name" value="{{$retailor->updated_at}}">
                </div>
              </div>
          
       </div>

        <br><br>

   

            </div>
          </div>


            

          
          <!-- /.box -->

  
       

        


    
     
      <!-- /.row -->
    </section>
  </div>
  @endsection