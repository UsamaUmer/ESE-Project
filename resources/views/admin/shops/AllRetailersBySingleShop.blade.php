@extends('admin.layouts.app')

@section('heads')
<link rel="stylesheet" type="text/css" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection

@section('main-content')

<div class="content-wrapper">

  <section class="content-header">
    <h1>
      <i class="fa fa-user"></i> <strong>Shop Retailers</strong>
    </h1>
    
    <ol class="breadcrumb" style="background-color: #E6E6FA;">
      <li><a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{ route('shop.index') }}"><i class="fa fa-hospital-o"></i> Registered Shops</a></li>
      <li><a href="{{ route('NonRegisterShops')}}"><i class="fa fa-hospital-o"></i>  Non Registered Shops</a></li>
      
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
              <th>Phone</th>
              <th>Cnic</th>
              <th>Email</th>
              <th>State</th>
              <th>Address</th>
              <th>Shop Id</th>
              <th>Date</th>
            </tr>
          </thead>
          <tbody>
            
            @foreach($retailers as $retailer)
            <tr>
              <td>{{$retailer->id}}</td>
              <td>{{$retailer->name}}</td>
              <td>{{$retailer->phone}}</td>
              <td>{{$retailer->cnic}}</td>
              <td>{{$retailer->email}}</td>
              <td>@if($retailer->state==0){{'Active'}} @else {{'Not Active'}} @endif</td>
              <td>{{$retailer->address}}</td>
              <td>{{$retailer->shop_id}}</td>
              <td>{{$retailer->created_at}}</td>
            </tr>
            @endforeach
            
            
          </tbody>
          <tfoot>
            <tr>
             <th>Id.</th>
             <th>Name</th>
             <th>Phone</th>
             <th>Cnic</th>
             <th>Email</th>
             <th>State</th>
             <th>Address</th>
             <th>Shop Id</th>
             <th>Date</th>
           </tr>
         </tfoot>
       </table>
     </div> 
   </div>
 </div>
 <!-- /.box-body -->
 
 <!-- /.box-footer-->
 

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