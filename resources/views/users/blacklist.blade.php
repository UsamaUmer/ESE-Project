@extends('users.layouts.app')

  @section('main-content')
        <div id="main">
        <div class="container-fluid">
      
            
            
            <div class="row">

                <div class="col-sm-10">  
                  <h3><strong>BlackListed Devices</strong></h3>
                  <hr>
                    <table class="table table-hover">
                        <thead>
                         
                        <tr>
                                     <th>Id</th>
                <th>IMEI</th>
                <th>Status</th>
                <th>Lost Time</th>
                        </tr>

                        </thead>
                        
                             @foreach($mobiles as $mobile)
              <tr>
                <td>{{$mobile->id}}</td>

                <td>{{$mobile->MobileCode}}</td>
                @if($mobile->Status==0)
                <td>{{'Stolen'}}</td>
                @endif
                <td>{{$mobile->updated_at->diffForHumans()}}</td>

              </tr>
             @endforeach
                    </table>
                    {{ $mobiles->links() }}
                </div>
            </div>
        </div>
    </div> 
  @endsection
