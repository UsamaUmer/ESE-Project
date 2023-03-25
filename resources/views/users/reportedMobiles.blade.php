@extends('users.layouts.app')

  @section('main-content')
        <div id="main">
        <div class="container-fluid">
      
            
            
            <div class="row">

                <div class="col-sm-10">  
                  <h3><strong>Reported Devices</strong></h3>
                  <hr>
                    <table class="table table-hover">
                        <thead>
                         
                        <tr>
                       <th>Id.</th>
                  
                  
                  <th>IMEI</th>
                  <th>Pta Email</th>
                  <th>R-Cnic</th>
                  <th>Status</th>
                  <th>Created Time</th>
                        </tr>

                        </thead>
                        
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
                   <td>{{$pta->created_at}}</td>
                  
                {{--   <td><a href="{{ route('pta.edit',$pta->id) }}" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Edit</a></td>
                  <td>optional</td> --}}
                </tr>
            @endforeach
                    </table>
                  
                </div>
            </div>
        </div>
    </div> 
  @endsection
