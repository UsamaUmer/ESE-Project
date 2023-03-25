@extends('admin.layouts.app')
  
  @section('heads')
   <link rel="stylesheet" type="text/css" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
  @endsection

  @section('main-content')

  <div class="content-wrapper">
        <section class="content-header" >
      <h1>
        <i class="fa fa-user"></i> Admins Record
        
      </h1>
      <ol class="breadcrumb" style="background-color: #E6E6FA;">
        <li><a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        
       <li> <a href="{{route('admin.create')}}"><i class="fa fa-plus"></i> Add New</a></li>
      </ol>
    </section>
 
     <section class="content">

      <!-- Default box -->
      <div class="box ">
     
        <div class=" box-default" >      
        @include('include1.messages')

        <div class="box-body" >
           
         <div >
           
              <table id="example1" class="table table-bordered table-striped" >
                <thead>
                <tr>
                  <th>Id.</th>
                  <th>CNIC</th>
                  <th>Name</th>
                  <th>State</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                
                @foreach($admins as $admin)
                 <tr>
                  <td>{{$admin->id}}</td>
                  <td>
                    <a href="{{route('admin.show',$admin->id)}}">{{$admin->Cnic}}</a>
                  </td>
                  <td>{{$admin->Name}}</td>
                  @if($admin->state==0)
                     <td>{{'Actice'}}</td>
                  @else
                     <td>{{'Non Actice'}}</td> 
                  @endif   
                  <td><a href="{{route('admin.edit',$admin->id)}}" class="btn btn-primary btn-xs">
                    <i class="fa fa-pencil"></i> Edit</a></td>
                  <form id="delete-form-{{$admin->id}}" action="{{route('admin.destroy',$admin->id)}}" method="post" style="display:none">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                  </form>
                  <td><a class="btn btn-danger btn-xs" href="" onclick="
                   if(confirm('Are You Sure You Want To Delete?')){
                     event.preventDefault();
                     document.getElementById('delete-form-{{$admin->id}}').submit();
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
                  <th>CNIC</th>
                  <th>Name</th>
                  <th>Role</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </tfoot>
              </table>
        </div>
        
        </div>
        <!-- /.box-body -->
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