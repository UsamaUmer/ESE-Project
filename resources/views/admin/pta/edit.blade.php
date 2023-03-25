@extends('admin.layouts.app')

@section('main-content')

<div class="content-wrapper">
  


    <section class="content-header">
  <h1>
    <i class="fa fa-pencil-square-o"></i> Edit PTA Record
  </h1>
  <ol class="breadcrumb" style="background-color: #E6E6FA;">
    <li><a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="{{ route('pta.create') }}"><i class="fa fa-plus"></i> Add Record</a></li>
     <li><a href="{{ route('ptaRep.index') }}"><i class="fa fa-comments"></i> Forward Complains</a></li>
    <li><a href="{{ route('repoertedData') }}"><i class="fa fa-mobile"></i> Reported Mobiles</a></li>
  </ol>
</section>

  <section class="content">



    <div class="box box-primary">
      <div class="box-header with-border bg-success">
        <center><h3 class="box-title"><i class="fa fa-pencil-square-o"></i><strong> Edit Existing Information</strong></h3></center>
      </div>
      <!-- /.box-header -->
      <!-- form start -->

      <form role="form" action="{{ route('pta.update',$pta->id) }}" method="post" >
       {{csrf_field()}}
       {{method_field('PUT')}}
       <div class="box-body">
         <div class="row">

           <div class="col-md-6 col-md-offset-3">
            @include('include.errors')
            <div class="form-group">
              <label for="numbers">Email</label>
              <input type="email" class="form-control" id="numbers"  name="Email"  required="" value="{{$pta->Email}}">
            </div>

               <div class="form-group">
                  <label for="phone">Phone No.</label>
                  <input type="text" class="form-control" id="phone"  name="Phone"
                   pattern="^[0-9]{4}(-)?[0-9]{7}" title="0348-1864501 | 03481864501" required="" value="{{$pta->Phone}}">
                 </div>


              <div class="form-group">
                 <label for="comment">Address</label>
                 <textarea class="form-control" rows="5" id="comment"
                  name="Address" required="" >{{$pta->Address}}</textarea>
                   
                 
                </div>




            
            <div class="box-footer ">

             <button type="submit" class="btn btn-primary " style="margin-left: -10px;">
              <i class="fa fa-pencil-square-o"></i> Update</button>
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