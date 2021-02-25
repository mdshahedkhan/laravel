<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from codervent.com/syndash/demo/vertical/authentication-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Feb 2021 08:24:53 GMT -->
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>Syndash - Bootstrap4 Admin Template</title>
	<!--favicon-->
	<link rel="icon" href="{{ asset('assets/backend') }}/assets/images/favicon-32x32.png" type="image/png" />
	<!-- loader-->
	<link href="{{ asset('assets/backend') }}/assets/css/pace.min.css" rel="stylesheet" />
	<script src="{{ asset('assets/backend') }}/assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('assets/backend') }}/assets/css/bootstrap.min.css" />
	<!-- Icons CSS -->
	<link rel="stylesheet" href="{{ asset('assets/backend') }}/assets/css/icons.css" />
	<!-- App CSS -->
	<link rel="stylesheet" href="{{ asset('assets/backend') }}/assets/css/app.css" />
</head>

<body class="bg-login">
	<!-- wrapper -->
	<div class="wrapper">
		<div class="section-authentication-login d-flex align-items-center justify-content-center">
			<div class="row">
				<div class="col-12 col-lg-10 mx-auto">
					<div class="card radius-15">
						<div class="row no-gutters">
							<div class="col-lg-6">
								<form action="{{ route('login') }}" method="post">
                                    @csrf
                                    <div class="card-body p-md-5">
                                        <div class="text-center">
                                            <img src="assets/images/logo-icon.png" width="80" alt="">
                                            <h3 class="mt-4 font-weight-bold">Welcome Back</h3>
                                        </div>
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach($errors->all() as $error)
                                                        <li>
                                                            {{ $error }}
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        <div class="form-group mt-4">
                                            <label>Email Address</label>
                                            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter your email address" />
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control @error('password') is-invalid @enderror " name="password" placeholder="Enter your password" />
                                        </div>
                                        <div class="btn-group mt-3 w-100">
                                            <button type="submit" class="btn btn-primary btn-block">Log In</button>
                                        </div>
                                    </div>
                                </form>
							</div>
							<div class="col-lg-6">
								<img src="{{ asset('assets/backend') }}/assets/images/login-images/login-frent-img.jpg" class="card-img login-img h-100" alt="...">
							</div>
						</div>
						<!--end row-->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end wrapper -->
</body>
<!-- Mirrored from codervent.com/syndash/demo/vertical/authentication-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Feb 2021 08:24:53 GMT -->
</html>
