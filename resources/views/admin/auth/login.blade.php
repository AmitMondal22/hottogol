<!DOCTYPE html>
<html lang="en">

<head>

	<title>Flat Able - Premium Admin Template by Phoenixcoded</title>
	<!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />
	<!-- Favicon icon -->
	<link rel="icon" href="{{asset('public/public_view')}}/assets/images/favicon.ico" type="image/x-icon">

	<!-- vendor css -->
	<link rel="stylesheet" href="{{asset('public/public_view')}}/assets/css/style.css">


<style>
    .error{
        color: red;
    }
</style>

</head>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
	<div class="auth-content text-center">
		<img src="{{asset('public/public_view')}}/assets/images/logo.png" alt="" class="img-fluid mb-4">
		<div class="card borderless">
			<div class="row align-items-center ">
				<div class="col-md-12">
					<div class="card-body">
						<h4 class="mb-3 f-w-400">Log In</h4>
						<hr>
                        <form action="{{route('admin.login')}}" method="post" id="myform">
                            @csrf
						<div class="form-group mb-3">
							<input type="email" class="form-control" id="email" placeholder="Email address" name="email">
						</div>
						<div class="form-group mb-4">
							<input type="password" class="form-control" id="password" placeholder="Password" name="password">
						</div>
						<button type="submit" class="btn btn-block btn-primary mb-4">Log In</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="{{asset('public/public_view')}}/assets/js/vendor-all.min.js"></script>
<script src="{{asset('public/public_view')}}/assets/js/plugins/bootstrap.min.js"></script>

<!-- <script src="{{asset('public/public_view')}}/assets/js/pcoded.min.js"></script> -->

<!-- jQuery Validate library -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
<!--end jQuery Validate library  -->
<script>

  $("#myform").validate({
    rules: {
        email: {
        required: true,
        email: true
      },
      password: {
        required: true,
        minlength: 8
      }
    },
    messages: {
        email: {
        required: "Please enter an email address",
        email: "Please enter a valid email address"
      },
      password: {
        required: "Please enter a password",
        minlength: "Password must be at least 8 characters long"
      }

    }
  });
</script>

</body>

</html>
