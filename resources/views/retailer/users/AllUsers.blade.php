@extends('admin.layouts.app1')
  
  @section('heads')
   <link rel="stylesheet" type="text/css" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
  @endsection

  @section('main-content')

  <div class="content-wrapper">
     <section class="content-header" >
      <h1>
        <i class="fa fa-user"></i> Registerd Users
        
      </h1>
      <ol class="breadcrumb" style="background-color: #E6E6FA;">
        <li><a href="{{ route('admins.home1') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        
       <li> <a href="{{route('rel.create')}}"><i class="fa fa-plus"></i> Add New</a></li>
       <li> <a href="{{route('devicelesss')}}"><i class="fa fa-user"></i> DevicesLess Users</a></li>
      </ol>
    </section>
     <section class="content">

      <!-- Default box -->
      <div class="box">

        

       @include('include1.messages')

        
       
        <div class="box-body">
             
           
           <div >
            
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id.</th>
                  
                  <th>Name</th>
                  <th>Cnic</th>
                  <th>Email</th>
                  <th>Status</th>
                  <th>State</th>
                  <th>Total Devices</th>
                  <th>Edit</th>
                  
                 {{--  <th>Delete</th> --}}
                </tr>
                </thead>
                <tbody>
                
                @foreach($users as $user)
                 <tr>
                  <td><a href="{{ route('rel.show',$user->id) }}">{{$user->id}}</a></td>
                  <td>
                    {{$user->name}}
                  </td>
                   <td><a href="{{ route('rel.show',$user->id) }}">{{$user->cnic}}</a></td>
                  <td>{{$user->email}}</td>
                    @if($user->status==1)
                      <td>{{'Having Device'}}</td>
                    @endif
                    <td>@if($user->state==0) {{'Active'}} @else {{'Not Active'}} @endif</td>
                   
                    <?php $counter=0;?>
                   <td>
                  
                   @foreach($mobiles as $mobile)
                      @if($user->id == $mobile->user_id)
                        <?php $counter=$counter+1?>
                      @endif
                   @endforeach
                   <?php echo $counter;?>
                   </td>

                   <td><a href="{{ route('rel.edit',$user->id) }}" class="btn btn-primary btn-xs">
                    <i class="fa fa-pencil"></i> Edit</a></td>
                 
              {{--     <form id="delete-form-{{$user->id}}" action="{{route('user.destroy',$user->id)}}" method="post" style="display:none">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                  </form>
                  <td><a href="" onclick="
                   if(confirm('Are You Sure You Want To Delete?')){
                     event.preventDefault();
                     document.getElementById('delete-form-{{$user->id}}').submit();
                   }
                   else{
                     event.preventDefault();
                   } " class=" btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</a></td> --}}
                </tr>
                @endforeach
            
               
                </tbody>
                <tfoot>
                <tr>
                <th>Id.</th>
                  
                  <th>Name</th>
                  <th>Cnic</th>
                  <th>Email</th>
                  <th>Status</th>
                  <th>State</th>
                  <th>Total Devices</th>
                  <th>Edit</th>
                  
                 {{--  <th>Delete</th> --}}
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