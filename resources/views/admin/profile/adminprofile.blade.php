<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Enhanced Smart Phone</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('admin/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('admin/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin/dist/css/AdminLTE.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('admin/plugins/iCheck/square/blue.css')}}">
  <script>
      function hys(){
        var x = document.getElementById("myDIV");
        
          x.style.display = "none";
        
      }

      function myFunction() {
        var x = document.getElementById("myDIV");
        if (x.style.display === "none") {
          x.style.display = "block";
        } else {
          x.style.display = "none";
        }
      }
</script>
  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page" onload="hys()">
<div class="login-box" style="width:500px;">
  <div class="login-logo">
    <a href="{{route('admin.home')}}"><i class="fa fa-user"></i> <b>Update Profile</b> </a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body" style="padding: 50px;">
    <p class="login-box-msg">Update Your Profile</p>
     @include('include.errors')
    <form action="{{route('profiled.update',$admin->id)}}" method="post">
      {{csrf_field()}}
      {{method_field('put')}}
      <div class="form-group has-feedback">
        <label>Enter Email</label>
        <input type="email" class="form-control" id="email" name="email" value="{{$admin->email}}">
        <span class="fa fa-envelope form-control-feedback"></span>
      </div>
      
      <div class="form-group has-feedback" >
        <label>Enter Cell</label>
        <input type="text" class="form-control" id="cell"  name="Cell"  value="{{$admin->Cell}}">
        <span class="fa fa-mobile form-control-feedback"></span>
      </div>

     
      <div id="myDIV">

          <div class="form-group has-feedback">
            <label>New Password</label>
            <input type="password" class="form-control" id="pwd"  name="password"  value="{{$admin->password}}">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>

          <div class="form-group has-feedback">
            <label>Confirm Password</label>
            <input type="password" class="form-control" id="cpwd"  name="password_confirmation"
            placeholder="Enter Password Again">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>

      </div>

      <div class="form-group has-feedback">
        <label>Address</label>
        <textarea rows="4" class="form-control" name="Address" id="address">{{$admin->Address}}</textarea>
      
      </div>



    


        <div class="form-group ">
                            <div class="">
                                <button type="submit" class="btn btn-primary ">
                                  <b>
                                  
                                    Update Profile
                                  </b>
                                </button>

                                <a href="#" style="float:right;" onclick="myFunction()">Change Password</a>

                            </div>
                        </div>
    </form>

  
    <!-- /.social-auth-links -->

  
   

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="{{asset('admin/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- iCheck -->
<script src="{{asset('admin/plugins/iCheck/icheck.min.js')}}"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>

