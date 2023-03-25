@extends('admin.layouts.app')

@section('heads')
<link rel="stylesheet" type="text/css" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection

@section('main-content')

<div class="content-wrapper">
 <section class="content-header">
  <h1>
    <strong><i class="fa fa-user"></i> Non Registered Retailers</strong>
  </h1>
  
  <ol class="breadcrumb" style="background-color: #E6E6FA;">
    <li><a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="{{ route('retailer.index')}}"><i class="fa fa-user"></i> Registerd Retailers</a></li>
    
  </ol>
</section>
<section class="content">

  <!-- Default box -->
  <div class="box">
   
    <div class="box-body">
      
        <div class="box-header">

          <h4 class="text-danger pull-right">{{session('msg')}}</h4>
        </div>
        <!-- /.box-header -->
        <div >
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Id.</th>

                <th>Name</th>

                <th>Cnic</th>
                <th>Status</th>
                <th>Phone</th>
                <th>Approve</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>

              @foreach($retailor as $retail)
              <tr>
                <td>{{$retail->id}}</td>
                <td>
                  {{$retail->Name}}
                </td>
                <td>{{$retail->Cnic}}</td>
                @if($retail->Status=="0")
                <td>Non Register</td>
                @endif
                <td>{{$retail->Phone}}</td>
                <td><a class="btn btn-xs btn-primary" href="{{route('approver.edit',$retail->id)}}"><i class="fa fa-check"></i>  Approve</a></td>
                <form id="delete-form-{{$retail->id}}" action="{{route('approver.destroy',$retail->id)}}" method="post" style="display:none">
                  {{csrf_field()}}
                  {{method_field('DELETE')}}
                </form>
                <td><a class="btn btn-xs btn-danger" href="" onclick="
                if(confirm('Are You Sure You Want To Delete?')){
                 event.preventDefault();
                 document.getElementById('delete-form-{{$retail->id}}').submit();
               }
               else{
                 event.preventDefault();
               } "><i class="fa fa-remove"></i>  Delete</a></td>
             </tr>
             @endforeach


           </tbody>
           <tfoot>
            <tr>
             <th>Id.</th>

             <th>Name</th>

             <th>Cnic</th>
             <th>Status</th>
             <th>Phone</th>
             <th>Approve</th>
             <th>Delete</th>
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