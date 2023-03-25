@extends('users.layouts.app')

  @section('main-content')
      <div id="main">
        <div class="container-fluid">
            <form>
               <h3 style="margin-left:13px;"><strong>Profile</strong></h3>
               <hr>
                <div class="form-row">

                    <div class="form-group col-md-4">
                      <label for="inputEmail4">First Name</label>
                      <input type="text" class="form-control" id="inputEmail4" 
                      value="{{Auth::user()->name}}" readonly="">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputPassword4">Cell No</label>
                      <input type="text" class="form-control" id="inputPassword4"
                      value="{{Auth::user()->cell}}" readonly="">
                    </div>
                </div><div style="clear: both;"></div>
                
                <div class="form-row">
                    <div class="form-group col-md-8">
                      <label for="inputEmail4">CNIC</label>
                      <input type="email" class="form-control" id="inputEmail4"
                      value="{{Auth::user()->cnic}}" readonly="">
                    </div>
                  
                </div><div style="clear: both;"></div>
                
                <div class="form-row">
                    <div class="form-group col-md-8">
                      <label for="inputEmail4">Address</label>
                      <input type="text" class="form-control" id="inputEmail4"
                      value="{{Auth::user()->address}}" readonly="">
                    </div>
                </div><div style="clear: both;"></div>
                
                <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="inputEmail4">Email</label>
                      <input type="email" class="form-control" id="inputEmail4"
                      value="{{Auth::user()->email}}" readonly="">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputPassword4">Joined Date</label>
                      <input type="text" class="form-control" id="inputPassword4"
                       value="{{Auth::user()->created_at}}" readonly="">
                    </div>
                </div><div style="clear: both;"></div>
                
                <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="inputEmail4">Retailer ID</label>
                      <input type="text" class="form-control" id="inputEmail4"
                       value="{{Auth::user()->retailer_id}}" readonly="">
                    </div>
                </div>

                  <div class="form-row">

                    <div class="form-group col-md-4">
                    	<label for="inputEmail4">Edit Profile</label><br>
                      <a href="#" class="btn btn-default btn-block">Edit Profile</a>
                    </div>
                </div>
            </form>
            
        </div>
        
    </div>
  @endsection
