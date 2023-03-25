@extends('admin.layouts.app1')
  
  @section('heads')
   <link rel="stylesheet" type="text/css" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
  @endsection

  @section('main-content')

  <div class="content-wrapper">
 
     <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"><strong><i class="fa fa-mobile"></i> Black Listed Devices</strong> </h3>
        </div>
        <div class="box-body">
           
            <div >
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  
                  
                  <th>U-Cnic</th>
                  
                  <th>Device</th>
                  <th>IMEI</th>
                  <th>Status</th>
                  <th>Created Time</th>
                  <th>Updated Time</th>
                  
                </tr>
                </thead>
                <tbody>
            
            @foreach ($bd as $device)
                <tr>
                 
                  <td>{{$device->user->cnic}}</td>
                  <td>{{$device->device->Type}}</td>
                  <td><a href="{{ route('blacklisted',$device->id) }}">{{$device->MobileCode}}</a></td>
                  @if($device->Status==1)
                  <td>{{'Valid'}}</td>
                  @else
                  <td>{{'Stolen'}}</td>
                  @endif
                   <td>{{$device->created_at}}</td>
                  <td>{{$device->updated_at}}</td>
                 
                </tr>
              {{-- expr --}}
            @endforeach
                </tbody>
                <tfoot>
                <tr>
         <th>U-Cnic</th>
                  
                  <th>Device</th>
                  <th>IMEI</th>
                  <th>Status</th>
                  <th>Created Time</th>
                  <th>Updated Time</th>
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