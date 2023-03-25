@extends('admin.layouts.app')
  
  @section('heads')
   <link rel="stylesheet" type="text/css" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
  @endsection

  @section('main-content')

  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        <i class="fa fa-envelope"></i> Complains For Mobile Blockege
      </h1>
      <ol class="breadcrumb" style="background-color: #E6E6FA;">
        <li><a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Home</a></li>

       <li><a href="{{ route('repoertedData') }}"><i class="fa fa-mobile"></i> Reported Mobiles</a></li>

      </ol>
    </section>
     <section class="content">

      <!-- Default box -->
      <div class="box">
     
        <div class="box-body">
           @include('include2.messages')
           <div >
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                

                  <th>Id.</th>
                  
                  
                  <th>IMEI</th>
                  <th>Email</th>
                  <th>R-Cnic</th>
                  <th>Status</th>
                  <th>Send Mail</th>
                  <th>Created Time</th>
                  
              
                </tr>
                </thead>
                <tbody>
            
              
            @foreach ($complains as $pta)
                <tr>
                 
               <td>{{$pta->id}}</td> 
                  <td>{{$pta->MobileCode}}</td> 
                  <td>{{$pta->Email}}</td>
                  <td>{{$pta->cnic}}</td>
                  @if($pta->status==0)
                  <td>{{'Processing'}}</td>
                  @else
                  <td>{{'Complain Done'}}</td>
                  @endif
                  <td><a class="btn btn-primary btn-xs" href="{{route('ptaRep.edit',$pta->id)}}"><i class="fa fa-check"></i> Send </a></td>
                   <td>{{$pta->created_at}}</td>
                  
                {{--   <td><a href="{{ route('pta.edit',$pta->id) }}" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Edit</a></td>
                  <td>optional</td> --}}
                </tr>
            @endforeach
                </tbody>
                <tfoot>
                <tr>
                  

               
                <th>Id.</th>
                  <th>IMEI</th>
                  <th>Email</th>
                  <th>R-Cnic</th>
                  <th>Status</th>
                  <th>Send Mail</th>
                  <th>Created Time</th>
                  
                  
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