@extends('admin.layouts.app')

@section('main-content')

<div class="content-wrapper">
  <section class="content-header">
    <h1>
      <i class="fa fa-envelope"></i> Send Complain To PTA
    </h1>
    
  </section>
  <section class="content">

   

    <div class="box box-primary">

      <div class="box-header with-border bg-danger">
        <center><h3 class="box-title"><i class="fa fa-plus"></i><strong> Add  Information</strong></h3></center>
      </div>
      <!-- /.box-header -->
      <!-- form start -->

      <form role="form" action="{{ route('ptaRep.update',$data->id) }}" method="post" >
       {{csrf_field()}}
       {{method_field('PUT')}}
       <div class="box-body">
         <div class="row">

           <div class="col-md-6 col-md-offset-3">
           
            @include('include.errors')

               <div class="form-group">
                  <label for="name">Device IMEI Code</label>
                  <input type="number" class="form-control" id="name" name="mobile_id"
                     value="{{$data->mobile->MobileCode}}" >
                </div>

             <div class="form-group">
                  <label for="name">PTA Mail</label>
                  <input type="email" class="form-control" id="name"  name="pta_id"
                    readonly value="{{$data->pta->Email}}" >
                </div>



                <div class="form-group">
                  <label for="Cnic">Retailer Cnic</label>
                  <input type="text" class="form-control" id="Cnic"  name="retailer_id"
                    readonly="" value="{{$data->retailer->cnic}}">
                </div>

                <div class="form-group">
                  <label for="Cnic">Admin Cnic</label>
                  <input type="text" class="form-control" id="Cnic" placeholder="Enter Admin Cnic" name="admin_id"
                  required="true" value="{{old('admin_id')}}" pattern="^[1-4]{1}[0-9]{4}(-)?[0-9]{7}(-)?[0-9]{1}$" title="3420281569919 | 34202-8156991-9">
                </div>
                <br>
                <div class="form-group">
                  <label>
                   <input type="checkbox" class=""  name="status" value="1" required=""> 
                 Status </label>
               </div>

       






            
            <div class="box-footer ">

             <button type="submit" class="btn btn-primary " style="margin-left: -10px;">
              <i class="fa fa-plus"></i> Submit</button>
              <a href="{{route('ptaRep.index')}}" class="btn btn-primary "><i class="fa fa-remove"></i> Go Back</a>
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