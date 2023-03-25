@extends('admin.layouts.app')

@section('heads')
<link rel="stylesheet" type="text/css" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection

@section('main-content')

<div class="content-wrapper">
   
    <section class="content-header">
  <h3>
    <strong><i class="fa fa-user-plus"></i> All Roles List</strong>
  </h3>
  <ol class="breadcrumb" style="background-color: #E6E6FA;">
    <li><a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
       <li><a href="{{ route('roles.create') }}" class="btn btn-sm btn-flat">
          <span class="fa fa-plus"></span> Create New Role</a>
        </li>
  </ol>
</section>


 <section class="content">

  <!-- Default box -->
  <div class="box">
    <div class="box-header ">
     
    
     
        
        @include('include1.messages')
    </div>
    <div class="box-body">
    
       
        <!-- /.box-header -->
        <div >
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Id.</th>
                <th>Role Name</th>
                <th>Guard Name</th>
                <th>Created Time</th>
                <th>Updated Time</th>
                <th>Edit</th>
              </tr>
            </thead>
            <tbody>
             @foreach($roles as $role)

             <tr>

              <td>{{$role->id}}</td>
              <td>{{$role->name}}</td>
              <td>{{$role->guard_name}}</td>
              <td>{{$role->created_at}}</td>
              <td>{{$role->updated_at}}</td>
              <td>
                <a href="{{route('roles.edit',$role->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> Edit</a>
              </td>

            </tr>
            @endforeach
          </tbody>
          <tfoot>
            <tr>
              <th>Id.</th>
              <th>Role Name</th>
              <th>Guard Name</th>
              <th>Created Time</th>
              <th>Updated Time</th>
            </tr>
          </tfoot>
        </table>
      </div>
      <!-- /.box-body -->
 
  </div>
  <!-- /.box-body -->

  <!-- /.box-footer-->
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



