@extends('admin.layouts.app')
  
  @section('heads')
   <link rel="stylesheet" type="text/css" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
  @endsection

  @section('main-content')

  <div class="content-wrapper">
   <section class="content-header">
    <h1>
      <strong><i class="fa fa-user"></i> Deviceless Users </strong>
    </h1>

    <ol class="breadcrumb" style="background-color: #E6E6FA;">
      <li><a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Home</a></li>

      <li><a href="{{ route('user.index')}}"><i class="fa fa-user"></i> Registered Users</a></li>

    </ol>
  </section>
     <section class="content">

      <!-- Default box -->
      <div class="box">

        <div class="box-body">
            
         
            <!-- /.box-header -->
            <div class="box-body">
              <div >
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id.</th>
                  
                  <th>Name</th>
                  
                  <th>Email</th>
                  <th>Cnic</th>
                  <th>Phone</th>
                  <th>Address</th>
                  <th>Status</th>
                  <th>State</th>
                  
                </tr>
                </thead>
                <tbody>
                
                @foreach($users as $user)
                 <tr>
                  <td>{{$user->id}}</td>
                  <td>
                    {{$user->name}}
                  </td>
                  <td>{{$user->email}}</td>
                  
                   <td>{{ $user->cnic }}</td>
                    <td>{{ $user->cell }}</td>
                     <td>{{ $user->address }}</td>
                     @if($user->status==0)
                        <td>{{'DeviceLess'}}</td>
                    @endif
              <td>@if($user->state==0) {{'active'}} @else {{'Not Active'}} @endif</td>
                </tr>
                @endforeach
            
               
                </tbody>
                <tfoot>
                <tr>
                  <th>Id.</th>
                  
                  <th>Name</th>
                  
                  <th>Email</th>
                  <th>Cnic</th>
                  <th>Phone</th>
                  <th>Address</th>
                  <th>Status</th>
                  <th>State</th>
                </tr>
                </tfoot>
              </table>
            </div>
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