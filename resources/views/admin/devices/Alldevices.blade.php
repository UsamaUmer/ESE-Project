@extends('admin.layouts.app')
  
  @section('heads')
   <link rel="stylesheet" type="text/css" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
  @endsection

  @section('main-content')

  <div class="content-wrapper">
      <section class="content-header">
  <h1>
    <i class="fa fa-mobile"></i>  <strong>Devices Types</strong>
  </h1>
  
  <ol class="breadcrumb" style="background-color: #E6E6FA;">
    <li><a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    
    <li><a href="{{ route('device.create')}}"><i class="fa fa-plus"></i> Add New Device</a></li>
    <li><a href="{{ route('regDevc.create')}}"><i class="fa fa-plus"></i> Register New Device</a></li>
    <li><a href="{{ route('regDevc.index')}}"><i class="fa fa-mobile"></i> Show Register Devices</a></li>
     <li><a href="{{ route('blacklist')}}"><i class="fa fa-mobile"></i> BlackList Devices</a></li>
    
  </ol>
</section>
     <section class="content">

      <!-- Default box -->
      <div class="box">
       
        <div class="box-body">
           <div>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                

                  <th>Id.</th>
                  
                  <th>Device Type</th>
                  <th>State</th>
                  <th>Created Time</th>
                  <th>Updated Time</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
            
              
            @foreach ($devices as $device)
                <tr>
                  <td>{{$device->id}}</td>
              
                  <td>{{$device->Type}}</td>

                  <td>@if($device->state==0){{'active'}} @else {{'Not Active'}} @endif</td>
                  
                  <td>{{$device->created_at}}</td>
                  <td>{{$device->updated_at}}</td>
                  <td><a href="{{ route('device.edit',$device->id) }}" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Edit</a></td>
                   <form id="delete-form-{{$device->id}}" action="{{route('device.destroy',$device->id)}}" method="post" style="display:none">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                  </form>
                  <td><a class="btn btn-danger btn-xs" href="" onclick="
                   if(confirm('Are You Sure You Want To Delete?')){
                     event.preventDefault();
                     document.getElementById('delete-form-{{$device->id}}').submit();
                   }
                   else{
                     event.preventDefault();
                   } "><i class="fa fa-trash"></i> Delete</a></td>
                </tr>
            @endforeach
                </tbody>
                <tfoot>
                <tr>
                  

                  <th>Id.</th>
                  
                  <th>Device Type</th>
                  <th>State</th>
                  <th>Created Time</th>
                  <th>Updated Time</th>
                  <th>Edit</th>
                  <th>Delete</th>
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