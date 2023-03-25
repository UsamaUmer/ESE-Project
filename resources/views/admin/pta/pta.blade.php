@extends('admin.layouts.app')

@section('main-content')

<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Add PTA Record
      
    </h1>
    
  </section>
  <section class="content">



    <div class="box box-primary">
      <div class="box-header with-border bg-danger">
        <center><h3 class="box-title"><i class="fa fa-plus"></i><strong> Add New Information</strong></h3></center>
      </div>
      <!-- /.box-header -->
      <!-- form start -->

      <form role="form" action="{{ route('pta.store') }}" method="post" >
       {{csrf_field()}}
       <div class="box-body">
         <div class="row">

           <div class="col-md-6 col-md-offset-3">
            @include('include.errors')
            <div class="form-group">
              <label for="numbers">Email</label>
              <input type="email" class="form-control" id="numbers" placeholder="Enter Email" name="Email" value="{{old('Email')}}" required="" autofocus="">
            </div>

          <div class="form-group">
                  <label for="phone">Phone No.</label>
                  <input type="text" class="form-control" id="phone" placeholder="Phone Number" name="Phone"
                  value="{{old('Phone')}}" pattern="^[0-9]{4}(-)?[0-9]{7}" title="0348-1864501 | 03481864501" required="">
                 </div>


              <div class="form-group">
                 <label for="comment">Address</label>
                 <textarea class="form-control" rows="5" id="comment"
                  name="Address" required="" >{{old('Address')}}</textarea>
                   
                 
                </div>




            
            <div class="box-footer ">

             <button type="submit" class="btn btn-primary " style="margin-left: -10px;">
              <i class="fa fa-plus"></i> Submit</button>
              <a href="{{route('pta.index')}}" class="btn btn-primary "><i class="fa fa-remove"></i> Go Back</a>
            </div>

          </div>


          <!-- /.box-body -->


        </div>

      </div>
    </form>
  </div>
  <!-- /.box -->









  <!-- /.row -->
</section>
</div>
@endsection