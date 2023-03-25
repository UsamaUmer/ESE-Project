@extends('admin.layouts.app1')

@section('main-content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <section class="content-header">
  
 
  <ol class="breadcrumb" style="margin-left:-20px;">
    <li><a href="{{ route('admins.home1') }}"><i class="fa fa-dashboard"></i> Home</a></li>
   
    
    

  </ol>
</section>
    
    <br><br>
    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->

      
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
             Enhanced Smart phone Eco System
            <small class="pull-right">Date: {{date('d/m/Y')}}</small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          <h4><strong>Owner Information</strong></h4>
            <p>{{$users->name}}</p>
            <p>{{$users->email}}</p>
            <p>{{$users->cnic}}</p>
            <p>{{$users->cell}}</p>
            <p>{{$users->created_at}}</p>
            <address>
             {{$users->address}}<br>
           </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <h4><strong>Mobile Information</strong></h4>
            <p><strong>IMEI : </strong> {{$users->MobileCode}}</p>
            <p> <strong>Status : </strong> @if($users->Status == 0) {{'Stolen'}} @else {{'Valid'}}@endif</p>
            <p><strong>Recapture : </strong> {{$users->Recapture}}</p>
            <p><strong>Ownership : </strong> {{$users->Ownership}}</p>
            <p><strong>Brand : </strong> {{$users->Brand}}</p>
            
            <strong>Time : </strong> {{$users->updated_at}}<br>
           
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <h4><strong>Shop Information</strong></h4>
            <p>{{$users->Name}}</p>
            <p>{{$users->City}}</p>
            <p>{{$users->Phone}}</p>
            <p>{{$users->Province}}</p>
            <p>{{$users->created_at}}</p>
            <address>
             {{$users->Address}}<br>
           </address>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    

 

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
    <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i>
     Print</button>
  
        </div>
      </div>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>

@endsection