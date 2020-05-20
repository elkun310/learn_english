<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login E-learning</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="{{asset('').'backend/'}}">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="img/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('img/bg-01.jpg');">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				<form class="login100-form validate-form flex-sb flex-w" method="post" action="{{url('/login')}}">
                    @csrf
                    <span class="login100-form-title">
						ELM
                    </span>
					@if(count($errors)>0)
						<div class="m-t-20 alert alert-danger w-full">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
				            </ul>
						</div>
					@endif
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Email
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Bạn chưa điền email">
						<input class="input100" type="email" name="email" >
						<span class="focus-input100"></span>
					</div>
					<div class="p-t-13 p-b-9">
						<span class="txt1">
							Mật khẩu
						</span>
						{{-- <a href="#" class="txt2 bo1 m-l-5">
							Forgot?
						</a> --}}
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Bạn chưa điền mật khẩu">
						<input class="input100" type="password" name="password" >
						<span class="focus-input100"></span>
					</div>
					<div class="container-login100-form-btn m-t-17 m-b-25">
						<button class="login100-form-btn">
							Đăng nhập
						</button>
					</div>
                    <br>
					<a href="#" class="btn-face">
						<i class="fa fa-facebook-official"></i>
						Facebook
					</a>
					<a href="#" class="btn-google">
						<img src="img/icons/icon-google.png" alt="GOOGLE">
						Google
					</a>
					
					<div class="w-full text-center p-t-30">
						<span class="txt2">
							Chưa có tài khoản?
						</span>

						<a href="#" class="txt2 bo1">
							Đăng ký 
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

    <div id="dropDownSelect1"></div>
    
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/login.js"></script>

</body>
</html>