@extends('admin.layouts.app')
  
  @section('heads')
   <link rel="stylesheet" type="text/css" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
  @endsection

  @section('main-content')

  <div class="content-wrapper">
  <section class="content-header">
  <h1>
    <i class="fa fa-user-plus"></i> Pta Record
  </h1>
  <ol class="breadcrumb" style="background-color: #E6E6FA;">
    <li><a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="{{ route('pta.create') }}"><i class="fa fa-plus"></i> Add Record</a></li>
     <li><a href="{{ route('ptaRep.index') }}"><i class="fa fa-comments"></i> Forward Complains</a></li>
    <li><a href="{{ route('repoertedData') }}"><i class="fa fa-mobile"></i> Reported Mobiles</a></li>
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
                  
                  <th>Email</th>
                  <th>Phone</th>
                  <th>State</th>
                  <th>Address</th>
                  <th>Created Time</th>
                  <th>Updated Time</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
            
              
            @foreach ($ptas as $pta)
                <tr>
                  <td>{{$pta->id}}</td>
              
                  <td>{{$pta->Email}}</td>
                   <td>{{$pta->Phone}}</td>
                   <td>@if($pta->state== 0){{'Active'}} @else {{'Not Active'}} @endif</td>
                    <td>{{$pta->Address}}</td>
                  
                  <td>{{$pta->created_at}}</td>
                  <td>{{$pta->updated_at}}</td>
                  <td><a href="{{ route('pta.edit',$pta->id) }}" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Edit</a></td>
                  <form id="delete-form-{{$pta->id}}" action="{{route('pta.destroy',$pta->id)}}" method="post" style="display:none">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                  </form>
                  <td><a class="btn btn-danger btn-xs" href="" onclick="
                   if(confirm('Are You Sure You Want To Delete?')){
                     event.preventDefault();
                     document.getElementById('delete-form-{{$pta->id}}').submit();
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
                  
                  <th>Email</th>
                  <th>Phone</th>
                  <th>State</th>
                  <th>Address</th>
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