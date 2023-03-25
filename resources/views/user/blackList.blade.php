@extends('user.app')

  @section('main-content')
  
  
    <div style="height: 113px;"></div>

    <div class="unit-5 overlay" style="background-image: url('{{asset('user/images/hero_1.jpg')}}');">
      <div class="container text-center">
        <h2 class="mb-0">Black Listed Mobiles</h2>
        <p class="mb-0 unit-6"><a href="{{ route('/') }}">Home</a> <span class="sep">></span> <span>Stolen Mobiles</span></p>
      </div>
    </div>


    <div class=" bg-light" >
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 " >
            <div class="container-fluid bg-white" style="padding: 50px;margin-top: 50px;border-radius: 5px;">
              
            
           <table class="table  table-striped table-condensed table-hover" >
            <thead>
              <tr>
                <th>Id</th>
                <th>IMEI</th>
                <th>Status</th>
                <th>Lost Time</th>
              </tr>
            </thead>
            <tbody>
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

            </tbody>
          </table>
          {{$mobiles->links()}}
          </div>
          </div>
        </div>
      </div>
      <br><br><br><br><br><br><br><br><br>
    </div>

  @endsection