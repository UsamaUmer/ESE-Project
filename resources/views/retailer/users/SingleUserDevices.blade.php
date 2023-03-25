@extends('admin.layouts.app1')

@section('heads')
<link rel="stylesheet" type="text/css" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection

@section('main-content')

<div class="content-wrapper">
 <section class="content-header" >
  <h1>
    <i class="fa fa-user"></i> Register Devices Of A User
    
  </h1>
  <ol class="breadcrumb" style="background-color: #E6E6FA;">
    <li><a href="{{ route('admins.home1') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    
    <li> <a href="{{route('rel.create')}}"><i class="fa fa-plus"></i> Add New</a></li>
    <li> <a href="{{route('rel.index')}}"><i class="fa fa-user"></i> Registered Users</a></li>
  </ol>
</section>
 <section class="content">

  <!-- Default box -->
  <div class="box">

    <div class="box-body">


      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>

            <th>Id</th>
            <th>U-CNIC</th>

            <th>Device</th>
            <th>IMEI</th>
            <th>Status</th>
            <th>Created Time</th>

          </tr>
        </thead>
        <tbody>

          @foreach ($mobiles as $device)
          <tr>
           <td>{{$device->id}}</td>

           <td>{{$device->user->cnic}}</td>

           <td>{{$device->device->Type}}</td>
           <td><a href="{{ route('singleDeviced',$device->id) }}">{{$device->MobileCode}}</a></td>
           @if($device->Status==1)
           <td>{{'Valid'}}</td>
           @else
           <td>{{'Stolen'}}</td>
           @endif
           <td>{{$device->created_at}}</td>


         </tr>
         {{-- expr --}}
         @endforeach
       </tbody>
       <tfoot>
        <tr>
          <th>Id</th>
          <th>U-CNIC</th>

          <th>Device</th>
          <th>IMEI</th>
          <th>Status</th>
          <th>Created Time</th>
        </tr>
      </tfoot>
    </table>

  </div>

</div>
<!-- /.box -->

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