@extends('admin.layouts.app1')

@section('main-content')

<div class="content-wrapper">
  <section class="content-header">
    <h1>
      <i class="fa fa-envelope"></i> Send Complain To Admin
    </h1>
    
  </section>
  <section class="content">

   

    <div class="box box-primary">

      <div class="box-header with-border bg-danger">
        <center><h3 class="box-title"><i class="fa fa-plus"></i><strong> Add  Information</strong></h3></center>
      </div>
      <!-- /.box-header -->
      <!-- form start -->

      <form role="form" action="{{ route('ptareportt.store') }}" method="post" >
       {{csrf_field()}}
       <div class="box-body">
         <div class="row">

           <div class="col-md-6 col-md-offset-3">
            @include('include2.messages')
            @include('include.errors')

               <div class="form-group">
                  <label for="name">Device IMEI Code</label>
                  <input type="number" class="form-control" id="name" placeholder="Enter Device IMEI Code" name="mobile_id"
                   required="true" autofocus="true" value="{{old('mobile_id')}}" min="1">
                </div>

                <div class="form-group">
                  <label for="Cnic">Select Email</label>
                  <select name="pta_id" class="form-control" >

                    <option value="" readonly="">Select Mail</option>
                    @foreach ($mailss as $mail)

                    

                    <option value="{{$mail->id}}" >{{$mail->Email}}</option>

                    @endforeach
                    

                  </select>
                </div>



                <div class="form-group">
                  <label for="Cnic">Retailer Cnic</label>
                  <input type="text" class="form-control" id="Cnic" placeholder="Enter Retailer Cnic" name="retailer_id"
                    required="true" value="{{old('retailer_id')}}" pattern="^[1-4]{1}[0-9]{4}(-)?[0-9]{7}(-)?[0-9]{1}$" title="3420281569919 | 34202-8156991-9">
                </div>

       






            
            <div class="box-footer ">

             <button type="submit" class="btn btn-primary " style="margin-left: -10px;">
              <i class="fa fa-plus"></i> Submit</button>
              <a href="{{route('ptareportt.index')}}" class="btn btn-primary "><i class="fa fa-remove"></i> Go Back</a>
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