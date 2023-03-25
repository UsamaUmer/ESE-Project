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
            <i class="fa fa-user-plus"></i> Assign Roles To Admins
          </strong></h3>

        </div>
        <!-- /.box-header -->
        <!-- form start -->
        @include('include.errors')
        @include('include1.messages')
        <form role="form" action="{{route('assign.store')}}" method="post" >
          {{csrf_field()}}
          <div class="box-body">


            <div class="form-group">
              <label for="name">Admin Cnic</label>
              <input type="text" class="form-control" id="name" placeholder="Enter Admin Cnic" name="role" autofocus="true" value="{{old('Cnic')}}" pattern="^[1-4]{1}[0-9]{4}(-)?[0-9]{7}(-)?[0-9]{1}$" title="3420281569919 | 34202-8156991-9" required="">
             
            </div>

          </div>
          
          <div class="form-group">
              <div class="checkbox">
                @foreach($roles as $role)

                 <div class="row">
              <div class="col-lg-5">
                <label >{{$role->name}}</label>
              </div>
              <div class="col-lg-7">
                <input type="checkbox" name="role_id[]" value="{{$role->id}}" >
              </div>
            </div>
                
        

                @endforeach
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