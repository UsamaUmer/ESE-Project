@extends('admin.layouts.app')
  
  @section('heads')
   <link rel="stylesheet" type="text/css" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
  @endsection

  @section('main-content')

  <div class="content-wrapper">
       <section class="content-header" >
      <h1>
        <i class="fa fa-user"></i> Shops Registered By Admin
        
      </h1>
      <ol class="breadcrumb" style="background-color: #E6E6FA;">
        <li><a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        
       <li> <a href="{{route('admin.create')}}"><i class="fa fa-plus"></i> Add New</a></li>
       <li> <a href="{{route('admin.index')}}"><i class="fa fa-user"></i> Admins Record</a></li>
      </ol>
    </section>

     <section class="content">

      <!-- Default box -->
      
      
        <div class="box">
        <div class="box-body" >
            
          
            <div >
           
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Shop Id.</th>
                  <th>Name</th>
                  <th>Phone</th>
                  <th>City</th>
                  <th>Province</th>
                  <th>State</th>
                  <th>Address</th>
                  <th>Admin Cnic</th>
                </tr>
                </thead>
                <tbody>
                
                @foreach($shops as $shop)
                 <tr>
                  <td>{{$shop->id}}</td>
                  <td>{{$shop->Name}}</td>
                  <td>{{$shop->Phone}}</td>
                  <td>{{$shop->City}}</td>
                  <td>{{$shop->Province}}</td>
                  <td>@if($shop->state==0) {{'active'}} @else {{'Not Actice'}} @endif</td>
                  <td>{{$shop->Address}}</td>
                  <td>{{$shop->admin->cnic}}</td>
               
                </tr>
                @endforeach
            
               
                </tbody>
                <tfoot>
                <tr>
                   <th>Shop Id.</th>
                  <th>Name</th>
                  <th>Phone</th>
                  <th>City</th>
                  <th>Province</th>
                  <th>State</th>
                  <th>Address</th>
                  <th>Admin Cnic</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        
        <!-- /.box-body -->
      </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>

 
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