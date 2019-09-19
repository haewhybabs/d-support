<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from fox-admin-templates.multipurposethemes.com/foxadmin-minimal/pages/examples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 May 2019 09:57:54 GMT -->
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('admin/images/favicon.ico')}}">

    <title>D-Support - Log in </title>

	<!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor_components/bootstrap/dist/css/bootstrap.min.css') }} ">

    <link rel="stylesheet" href="{{ asset('admin/assets/vendor_components/bootstrap/dist/css/main.css') }} ">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{ asset('admin/assets/vendor_components/font-awesome/css/font-awesome.min.css') }} ">

	<!-- Ionicons -->
	<link rel="stylesheet" href="{{ asset('admin/assets/vendor_components/Ionicons/css/ionicons.min.css') }} ">

	<!-- Theme style -->
	<link rel="stylesheet" href="{{ asset('admin/css/master_style.css') }} ">

	<!-- foxadmin Skins. Choose a skin from the css/skins
	   folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="{{ asset('admin/css/skins/_all-skins.css') }} ">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js') }}"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js') }}"></script>
	<![endif]-->

	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

</head>
<body class="hold-transition login-page" style="background:url({{ asset('admin/images/login-register.jpg') }}); background-size:cover; height:100%; width:100%; position:fixed;">
<div class="login-box">
  <div class="login-logo">
    <a href="index.html"><b>D-</b>Support</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
        @if (count($errors)> 0)
            @foreach($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    {{$error}}

                </div>
            @endforeach
        @endif

        @if(session('success'))
            <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                {{session('success')}}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                {{session('error')}}
            </div>
        @endif

    <form action="{{ route('login') }}" method="post" class="form-element">
        @csrf
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="email">
        @if ($errors->has('email'))
            <span class="form-warning">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
        <span class="ion ion-email form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password">
        @if ($errors->has('password'))
            <span class="form-warning">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
        <span class="ion ion-locked form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-6">
          <div class="checkbox">
            <input type="checkbox" id="basic_checkbox_1" >
			<label for="basic_checkbox_1">Remember Me</label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-6">
         <div class="fog-pwd">
          	<a href="javascript:void(0)"><i class="ion ion-locked"></i> Forgot pwd?</a><br>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-12 text-center">
          <button type="submit" class="btn btn-info btn-block btn-flat margin-top-10">SIGN IN</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-social-icon btn-circle btn-facebook"><i class="fa fa-facebook"></i></a>
      <a href="#" class="btn btn-social-icon btn-circle btn-google"><i class="fa fa-google-plus"></i></a>
    </div>
    <!-- /.social-auth-links -->

    <div class="margin-top-30 text-center">
    	<p>Don't have an account? <a href="register.html" class="text-info m-l-5">Sign Up</a></p>
    </div>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->


	<!-- jQuery 3 -->
	<script src="{{ asset('admin/assets/vendor_components/jquery/dist/jquery.min.js') }}"></script>

	<!-- popper -->
	<script src="{{ asset('admin/assets/vendor_components/popper/dist/popper.min.js') }}"></script>

	<!-- Bootstrap 4.0-->
	<script src="{{ asset('admin/assets/vendor_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

</body>

<!-- Mirrored from fox-admin-templates.multipurposethemes.com/foxadmin-minimal/pages/examples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 May 2019 09:57:54 GMT -->
</html>
