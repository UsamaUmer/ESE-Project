@extends('admin.layouts.app1')
  
  @section('heads')
   <link rel="stylesheet" type="text/css" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
  @endsection

  @section('main-content')

  <div class="content-wrapper">
  <section class="content-header" >
      <h1>
        <i class="fa fa-user"></i>  OwnerShip Mobile User History
        
      </h1>
      <ol class="breadcrumb" style="background-color: #E6E6FA;">
        <li><a href="{{ route('admins.home1') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ route('hist.index') }}"><i class="fa fa-user"></i> OwnerShip</a></li>
        
       <li> <a href="{{route('hist.create')}}"><i class="fa fa-plus"></i> Change OwnerShip</a></li>
      
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
                  <th>Id.</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>N-Cnic</th>
                  <th>Old-Cnic</th>
                  <th>Cell</th>
                  <th>Address</th>
                  <th>R-Cnic</th>
                  <th>Created Time</th>
                  <th>Updated Time</th>
                </tr>
                </thead>
                <tbody>
                
                @foreach($users as $user)

                @if($getlast->id == $user->id)
                 <tr style="background-color: lavender;">
                  <td>{{$user->id}}</td>
                  <td>{{$user->user->name}}</td>
                  <td>{{$user->user->email}}</td>

                  <td>{{$user->user->cnic}}</td>
           
                 @foreach($gets as $get)
                  @if($get->id == $user->old_id)
                   <td>{{$get->cnic}}</td>
                  @endif 
                 @endforeach 
              
                  <td>{{$user->user->cell}}</td>
                  <td>{{$user->user->address}}</td>
                   <td>{{$user->user->retailer->cnic}}</td>
               
                  <td>{{$user->created_at}}</td>
                  <td>{{$user->updated_at}}</td>
                  
                   
                </tr>

                @else
                        <tr>
                  <td>{{$user->id}}</td>
                  <td>{{$user->user->name}}</td>
                  <td>{{$user->user->email}}</td>

                  <td>{{$user->user->cnic}}</td>
           
                 @foreach($gets as $get)
                  @if($get->id == $user->old_id)
                   <td>{{$get->cnic}}</td>
                  @endif 
                 @endforeach 
              
                  <td>{{$user->user->cell}}</td>
                  <td>{{$user->user->address}}</td>
                   <td>{{$user->user->retailer->cnic}}</td>
               
                  <td>{{$user->created_at}}</td>
                  <td>{{$user->updated_at}}</td>
                  
                   
                </tr>
                @endif
                @endforeach
            
               
                </tbody>
                <tfoot>
                <tr>
                  <th>Id.</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>N-Cnic</th>
                  <th>Old-Cnic</th>
                  <th>Cell</th>
                  <th>Address</th>
                  <th>R-Cnic</th>
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