@extends('admin.layouts.app1')
  
  @section('heads')
   <link rel="stylesheet" type="text/css" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
  @endsection

  @section('main-content')

  <div class="content-wrapper">
  <section class="content-header" >
      <h1>
        <i class="fa fa-user"></i>  OwnerShip History
        
      </h1>
      <ol class="breadcrumb" style="background-color: #E6E6FA;">
        <li><a href="{{ route('admins.home1') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        
       <li> <a href="{{route('hist.create')}}"><i class="fa fa-plus"></i> Change OwnerShip</a></li>
      
      </ol>
    </section>
     <section class="content">

      <!-- Default box -->
      <div class="box">

        <div class="box-header">

           
       @include('include1.messages')

        </div>
       
        <div class="box-body">
        <div class="row">
      <div class="col-lg-6 col-lg-offset-3">
           
           <div >
            
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                 
                  
                  
                  
                  <th>Sr.No</th>
                  <th>M-IMEI</th>
                 
                 
                </tr>
                </thead>
                <tbody>
                @php 
                  $i=0;
                @endphp
                @foreach($history as $user)
                
                 <tr>
                  
                  <td>
                    {{($i++)+1}}
                  </td>
                  

                  <td><a href="{{ route('hist.show',$user->mobile->id) }}">{{$user->mobile->MobileCode}}</a></td>
                  
                  
                   
                </tr>
                @endforeach
            
               
                </tbody>
                <tfoot>
                <tr>
                <th>Sr.No</th>
                  <th>M-IMEI</th>
                 
                </tr>
                </tfoot>
              </table>
      </div>
            <!-- /.box-body -->
          
        </div>
        <!-- /.box-body -->
      </div>
      </div>
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