@extends('admin.layouts.app')
  
  @section('heads')
   <link rel="stylesheet" type="text/css" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
  @endsection

  @section('main-content')


  <div class="content-wrapper">

        <section class="content-header">
  <h1>
    <i class="fa fa-hospital-o"></i> Registerd Shops
  </h1>
  
  <ol class="breadcrumb" style="background-color: #E6E6FA;">
    <li><a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="{{ route('NonRegisterShops')}}"><i class="fa fa-hospital-o"></i>  Shops Requests <span class="badge badge-light">  {{$count}}</span></a></li>
    
  </ol>
</section>
 
     <section class="content">

      <!-- Default box -->
      <div class="box">
   
        
        <div class="box-body" >
           
           <div> 
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id.</th>
                  
                  <th>Shop Name</th>
                  
                  <th>City</th>
                  <th>Status</th>
                  <th>State</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                
                @foreach($shops as $shop)
                 <tr>
                  <td><a href="{{route('shop.show',$shop->id)}}">{{$shop->id}}</a></td>
                  <td>
                    <a href="{{route('shop.show',$shop->id)}}">{{$shop->Name}}</a>
                  </td>
                  <td>{{$shop->City}}</td>
                  @if($shop->Status=="1")
                   <td>Register</td>
                  @endif

                    @if($shop->state==0)
                   <td>Active</td>
                  @endif
                 
                  <form id="delete-form-{{$shop->id}}" action="{{route('shopdel.destroy',$shop->id)}}" method="post" style="display:none">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                  </form>
                  <td><a class="btn btn-xs btn-danger" href="" onclick="
                   if(confirm('Are You Sure You Want To Delete?')){
                     event.preventDefault();
                     document.getElementById('delete-form-{{$shop->id}}').submit();
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
                  
                  <th>Shop Name</th>
                  
                  <th>City</th>
                  <th>Status</th>
                  <th>State</th>
                  <th>Delete</th>
                </tr>
                </tfoot>
              </table>
           </div>
        </div>
        <!-- /.box-body -->
      </div>
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