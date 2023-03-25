@extends('admin.layouts.app')
  
  @section('heads')
   <link rel="stylesheet" type="text/css" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
  @endsection

  @section('main-content')

  <div class="content-wrapper">
     <section class="content-header">
  <h1>
    <i class="fa fa-mobile"></i>  <strong>Register Devices</strong>
  </h1>
  
  <ol class="breadcrumb" style="background-color: #E6E6FA;">
    <li><a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="{{ route('device.index')}}"><i class="fa fa-mobile"></i> Devices Categories</a></li>
    <li><a href="{{ route('device.create')}}"><i class="fa fa-plus"></i> Add New Device</a></li>
    <li><a href="{{ route('regDevc.create')}}"><i class="fa fa-plus"></i> Register New Device</a></li>
    <li><a href="{{ route('blacklist')}}"><i class="fa fa-mobile"></i> BlackList Devices</a></li>
    
  </ol>
</section>
     <section class="content">

      <!-- Default box -->
      <div class="box">
      
        <div class="box-body">
           
            <div >
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  
                  
                  <th>U-CNIC</th>
                  <th>R-CNIC</th>
                  <th>Device</th>
                  <th>IMEI</th>
                  <th>Status</th>
                  <th>Brand</th>
                  <th>Edit</th>
                  
                </tr>
                </thead>
                <tbody>
            
            @foreach ($RegDevices as $device)
                <tr>
                 
                  <td>{{$device->user->cnic}}</td>
                  <td>{{$device->retailer->cnic}}</td>
                  <td>{{$device->device->Type}}</td>
                  <td>{{$device->MobileCode}}</td>
                  @if($device->Status==1)
                  <td>{{'Valid'}}</td>
                  @else
                  <td>{{'Stolen'}}</td>
                  @endif
                   <td>{{$device->Brand}}</td>
                  <td> <a href="{{ route('regDevc.edit',$device->id) }}" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Edit</a></td>
                 
                </tr>
              {{-- expr --}}
            @endforeach
                </tbody>
                <tfoot>
                <tr>
               <th>U-CNIC</th>
                  <th>R-CNIC</th>
                  <th>Device</th>
                  <th>IMEI</th>
                  <th>Status</th>
                  <th>Brand</th>
                  <th>Edit</th>
                </tr>
                </tfoot>
              </table>
          </div>
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