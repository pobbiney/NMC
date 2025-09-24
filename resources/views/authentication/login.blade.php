<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from dreamspos.dreamstechnologies.com/html/template/signin-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Jul 2025 18:58:39 GMT -->
<head>

		<!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="EDNAKDATA HUB Environmental Protection Agency">
		<meta name="keywords" content="EDNAKDATA HUB  Protection Agency">
		<meta name="author" content="Speedlines Technology ">
		<meta name="robots" content="index, follow">
		<title>EDNAKDATA HUB | Login</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/fav.png')}}">

		<!-- Apple Touch Icon -->
		<link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
		
        <!-- Fontawesome CSS -->
		<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">

        <!-- Tabler Icon CSS -->
	    <link rel="stylesheet" href="{{asset('assets/plugins/tabler-icons/tabler-icons.min.css')}}">

	    <!-- Main CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
		
    </head>
    <body class="account-page bg-white">

        <div id="global-loader" >
			<div class="whirly-loader"> </div>
		</div>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
			<div class="account-content">
				<div class="row login-wrapper m-0">
                    <div class="col-lg-6 p-0">
                        <div class="login-content">
                            <form action="{{ route('authentication-process') }}" method="POST">
                                 <div style="display: flex; justify-content: center; align-items: center;">
                                    <img src="{{ asset('assets/img/logo-edk.png') }}" alt="img" width="350px">
                                </div><br/>
                                <div class="login-userset">
                                    <div class="login-logo">
                                   
                                    </div>
                                <a href="#" class="login-logo logo-white">
                                    <img src="{{asset('assets/img/logo-edk.png')}}"  alt="Img">
                                </a>

                                @if (session('login_error_message'))
                                    <p class="alert alert-danger" align="center">{{session('login_error_message')}}</p>
                                @endif
                                @csrf
                                <div class="login-userheading">
                                    <h3>Sign In</h3>
                                    <h4>Access the  EDNAKDATA HUB dashboard using your email and password.</h4>
                                </div>
                                <div class="mb-3">
                                        <label class="form-label">Email Address</label>
                                        <div class="input-group">
                                            <input type="text" value="" class="form-control border-end-0" name="email">
                                            
                                            <span class="input-group-text border-start-0">
                                                <i class="ti ti-mail"></i>
                                            
                                        </div>
                                        </span>
                                             @error('email')
                                                <small style="color:red;">{{$message}}</small>
                                             @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <div class="pass-group">
                                            <input type="password" class="pass-input form-control" name="password">
                                            <span class="ti toggle-password ti-eye-off text-gray-9"></span>
                                             @error('password')
                                              <small style="color:red;">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                <div class="form-login authentication-check">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="custom-control custom-checkbox">
                                                <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                                    <input type="checkbox">
                                                    <span class="checkmarks"></span>Remember me
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-6 text-end">
                                            <a class="forgot-link" href="forgot-password-2.html">Forgot Password?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-login">
                                    <button type="submit" class="btn btn-login"  style="background: #6e12d3;border:1px solid #6e12d3">Sign In</button>
                                </div>
                              
                                <div class="form-sociallink">
                                     
                                    <div class="my-4 d-flex justify-content-center align-items-center copyright-text">
                                        <p>Copyright &copy; 2025 Indexcom Ltd</p>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 p-0" style="background: white">
                        
                            <img src="assets/img/airtime.png" alt="img">
                        
                    </div>
                </div>
			</div>
        </div>
		<!-- /Main Wrapper -->

		<!-- jQuery -->
        <script src="{{asset('assets/js/jquery-3.7.1.min.js')}}" type="55920f5ce491673adaa565ba-text/javascript"></script>

         <!-- Feather Icon JS -->
		<script src="{{asset('assets/js/feather.min.js')}}" type="55920f5ce491673adaa565ba-text/javascript"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}" type="55920f5ce491673adaa565ba-text/javascript"></script>
		
		<!-- Custom JS -->
        <script src="{{asset('assets/js/script.js')}}" type="55920f5ce491673adaa565ba-text/javascript"></script>

    <script src="{{asset('cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js')}}" data-cf-settings="55920f5ce491673adaa565ba-|49" defer></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"961c6e5b8ac09334","version":"2025.7.0","serverTiming":{"name":{"cfExtPri":true,"cfEdge":true,"cfOrigin":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"3ca157e612a14eccbb30cf6db6691c29","b":1}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from dreamspos.dreamstechnologies.com/html/template/signin-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Jul 2025 18:58:40 GMT -->
</html>