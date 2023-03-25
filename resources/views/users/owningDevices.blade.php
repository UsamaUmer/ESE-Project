@extends('users.layouts.app')

  @section('main-content')
        <div id="main">
        <div class="container-fluid">
      
            
            
            <div class="row">

                <div class="col-sm-10">  
                  <h3><strong>My Devices</strong></h3><hr>
                    <table class="table table-hover">
                        <thead>
                         
                        <tr>
                         <th>Id</th>
            <th>U-CNIC</th>

            <th>Device</th>
            <th>IMEI</th>
            <th>Status</th>
            <th>Created Time</th>
                        </tr>

                        </thead>
                        
             @foreach ($mobiles as $device)
          <tr>
           <td>{{$device->id}}</td>

           <td>{{$device->user->cnic}}</td>

           <td>{{$device->device->Type}}</td>
           <td><a href="{{ route('singleMobileData',$device->id) }}">{{$device->MobileCode}}</a></td>
           @if($device->Status==1)
           <td>{{'Valid'}}</td>
           @else
           <td>{{'Stolen'}}</td>
           @endif
           <td>{{$device->created_at}}</td>


         </tr>
         {{-- expr --}}
         @endforeach
                    </table>
                  
                </div>
            </div>
        </div>
    </div> 
  @endsection
