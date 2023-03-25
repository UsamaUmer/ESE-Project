@extends('admin.layouts.app')
  
  @section('heads')
   <link rel="stylesheet" type="text/css" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
  @endsection

  @section('main-content')

  <div class="content-wrapper">
    <section class="content-header">
  <h1>
    <i class="fa fa-hospital-o"></i> Shops Requests
  </h1>
  
  <ol class="breadcrumb" style="background-color: #E6E6FA;">
    <li><a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="{{ route('shop.index') }}"><i class="fa fa-hospital-o"></i> Registered Shops</a></li>
    
  </ol>
</section>
 
     <section class="content">

      <!-- Default box -->
      <div class="box">
     
        
          
        @include('include1.messages')
        <div class="box-body" >
        <div >
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id.</th>
                  
                  <th>Shop Name</th>
                  
                  <th>City</th>
                  <th>Status</th>
                  
                  <th>Approve</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                
                @foreach($shops as $shop)
                 <tr>
                  <td>{{$shop->id}}</td>
                  <td>
                    {{$shop->Name}}
                  </td>
                  <td>{{$shop->City}}</td>
                  @if($shop->Status=="0")
                   <td>Non Register</td>
                  @endif
                 
                  <td><a class="btn btn-primary btn-xs" href="{{route('shop.edit',$shop->id)}}"><i class="fa fa-check"></i> Approve</a></td>
                  <form id="delete-form-{{$shop->id}}" action="{{route('shop.destroy',$shop->id)}}" method="post" style="display:none">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                  </form>
                  <td><a class="btn btn-danger btn-xs" href="" onclick="
                   if(confirm('Are You Sure You Want To Delete?')){
                     event.preventDefault();
                     document.getElementById('delete-form-{{$shop->id}}').submit();
                   }
                   else{
                     event.preventDefault();
                   } "><i class="fa fa-remove"></i> Delete</a></td>
                </tr>
                @endforeach
            
               
                </tbody>
                <tfoot>
                <tr>
                  <th>Id.</th>
                  
                  <th>Shop Name</th>
                  
                  <th>City</th>
                  <th>Status</th>
                  
                  <th>Approve</th>
                  <th>Delete</th>
                </tr>
                </tfoot>
              </table>
        </div>  
        </div>
        </div>
        <!-- /.box-body -->
      


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