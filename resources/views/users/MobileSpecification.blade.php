@extends('users.layouts.app')

  @section('main-content')
         <div id="main">
        <div class="container-fluid">
            <form>
               
                <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="inputEmail4">Mobile Id</label>
                      <input type="text" class="form-control" id="inputEmail4" 
                      value="{{$mobile->id}}" readonly="">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputPassword4">Device</label>
                      <input type="text" class="form-control" id="inputPassword4"
                      value="{{$mobile->device->Type}}" readonly="">
                    </div>
                </div><div style="clear: both;"></div>
                
                <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="inputEmail4">Mobile Code</label>
                      <input type="text" class="form-control" id="inputEmail4"
                      value="{{$mobile->MobileCode}}" readonly="">
                    </div>

                    <div class="form-group col-md-4">
                      <label for="inputEmail4">Status</label>
                      @if($mobile->Status==1)
                      <input type="text" class="form-control" id="inputEmail4"
                      value="{{'Valid'}}" readonly="">
                      @else
                      <input type="text" class="form-control" id="inputEmail4"
                      value="{{'Stolen'}}" readonly="">
                      @endif
                    </div>
                  
                </div><div style="clear: both;"></div>
                
                <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="inputEmail4">Brand</label>
                      <input type="text" class="form-control" id="inputEmail4"
                       value="{{$mobile->Brand}}" readonly="">
                    </div>

                     <div class="form-group col-md-4">
                      <label for="inputEmail4">Recapture</label>
                      <input type="text" class="form-control" id="inputEmail4"
                      value="{{$mobile->Recapture}}" readonly="">
                    </div>

                </div><div style="clear: both;"></div>
                
                <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="inputEmail4">OwnerShip</label>
                      <input type="email" class="form-control" id="inputEmail4"
                      value="{{$mobile->Ownership}}" readonly="">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputPassword4">Retailer Cnic</label>
                      <input type="text" class="form-control" id="inputPassword4"
                      value="{{$mobile->retailer->cnic}}" readonly="">
                    </div>
                </div><div style="clear: both;"></div>
                
                <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="inputEmail4">User Cnic</label>
                      <input type="text" class="form-control" id="inputEmail4"
                       value="{{$mobile->user->cnic}}" readonly="">
                    </div>
                </div>

                  <div class="form-row">

                    <div class="form-group col-md-4">
                      <label for="inputEmail4">Created Time</label>
                      
                      <input type="text" class="form-control" id="inputEmail4"
                       value="{{$mobile->created_at}}" readonly="">
                      
                    </div>

                 
                </div>
            </form>
            
        </div>
        
    </div>
  @endsection
