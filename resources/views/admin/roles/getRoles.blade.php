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
            <i class="fa fa-user-plus"></i>   Get Assigned Roles Of Admin
          </strong></h3>
         
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        @include('include.errors')
        
        <form role="form" action="{{route('remove.store')}}" method="post" >
          {{csrf_field()}}
          <div class="box-body">


            <div class="form-group">
              <label for="name">Admin Id</label>

              <input type="text" class="form-control" id="name"  name="role"
                @if(@$a) value="{{$a}}" @endif readonly="">

             
           </div>



           

<p class="">For Removing The Role Fill The Chekbox</p>
           <div class="form-group">
             
              @if(@$complains)
              @foreach($complains as $role)

              <div class="row">
                <div class="col-lg-5">
                  <label >{{$role->name}}</label>
                </div>
                <div class="col-lg-7">
                  <input type="checkbox" name="role_id[]" value="{{$role->id}}" >
                </div>
              </div>



              @endforeach
              @endif
          

          </div>


        </div>




        <div class="row">
          <div class="col-md-6">
           <div class="box-footer ">

             <button type="submit" class="btn btn-primary " ><i class="fa fa-plus"></i> Submit</button >

             <a href="{{route('check.create')}}" class="btn btn-primary">Go Back</a>

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