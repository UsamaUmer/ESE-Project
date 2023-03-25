@extends('user.app')

  @section('main-content')
  
  
    <div style="height: 113px;"></div>

    <div class="unit-5 overlay" style="background-image: url('{{asset('user/images/hero_1.jpg')}}');">
      <div class="container text-center">
        <h2 class="mb-0">Black Listed Mobile Imformation</h2>
        <p class="mb-0 unit-6"><a href="{{ route('/') }}">Home</a> <span class="sep">></span> <span>Stolen Mobile</span></p>
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
                <th> Time</th>
              </tr>
            </thead>
            <tbody>
           
              <tr>
                <td>{{$mobile->id}}</td>

                <td>{{$mobile->MobileCode}}</td>
                @if($mobile->Status==0)
                <td>{{'Stolen'}}</td>
                @else
                <td>{{'Valid'}}</td>
                @endif
                <td>{{$mobile->updated_at}}</td>

              </tr>
            

            </tbody>
          </table>
         
          </div>
          </div>
        </div>
      </div>
      <br><br><br><br><br><br><br><br><br>
    </div>

  @endsection