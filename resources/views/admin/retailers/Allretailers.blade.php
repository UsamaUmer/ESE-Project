@extends('admin.layouts.app')

@section('heads')
<link rel="stylesheet" type="text/css" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection

@section('main-content')

<div class="content-wrapper">
 <section class="content-header">
  <h1>
    <strong><i class="fa fa-user-circle"></i> Registered Retailers</strong>
  </h1>
  
  <ol class="breadcrumb" style="background-color: #E6E6FA;">
    <li><a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="{{ route('NonRegisterRetailers')}}"><i class="fa fa-user"></i> Retailers Requests: <span class="badge badge-light">{{session()->get('VAR1')}}</span></a></li>
    
  </ol>
</section>
<section class="content">

  <!-- Default box -->
  <div class="box">
    
    <div class="box-body">
     
      <div class="box-header">
       
      </div>
      <!-- /.box-header -->
      <div >
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Id.</th>
              <th>Name</th>
              <th>CNIC</th>
              <th>Status</th>
              <th>Phone</th>
              <th>State</th>
              
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
           @foreach($retailor as $retail)
           
           <tr>
            <td><a href="{{route('retailer.show',$retail->id)}}">{{$retail->id}}</a></td>
            <td>
              <a href="{{route('retailer.show',$retail->id)}}">{{$retail->Name}}</a>
            </td>
            <td>{{$retail->Cnic}}</td>
            @if($retail->Status=="1")
            <td>Register</td>
            @endif

            

            <td>{{$retail->Phone}}</td>
            @if($retail->state=="0")
            <td>Active</td>
            @endif
            <form id="delete-form-{{$retail->id}}" action="{{route('retailer.destroy',$retail->id)}}" method="post" style="display:none">
              {{csrf_field()}}
              {{method_field('DELETE')}}
            </form>
            <td><a class="btn-danger btn-xs btn" href="" onclick="
            if(confirm('Are You Sure You Want To Delete?')){
             event.preventDefault();
             document.getElementById('delete-form-{{$retail->id}}').submit();
           }
           else{
             event.preventDefault();
           } "><i class="fa fa-remove"></i> Delete</a></td>
         </tr>
         @endforeach
       </tbody>
       <tfoot>
        <tr>
          <th>Id.</th>
          <th>Name</th>
          <th>CNIC</th>
          <th>Status</th>
          <th>Phone</th>
          <th>State</th>
          <th>Delete</th>
        </tr>
      </tfoot>
    </table>
  </div>
  <!-- /.box-body -->
</div>
</div>
<!-- /.box-body -->

<!-- /.box-footer-->


</section>

</div> 
@endsection

@section('foots')
<script type="text/javascript" src="{{asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
@endsection