@extends('layouts.new_app')

@section('content')

 <div class="login login-4 login-signin-on d-flex flex-column flex-lg-row flex-row-fluid bg-white" id="kt_login">
				<!--begin::Aside-->
				<div class="login-aside order-2 order-lg-1 d-flex flex-column-fluid flex-lg-row-auto bgi-size-cover bgi-no-repeat p-7 p-lg-10">
					<!--begin: Aside Container-->
					<div class="d-flex flex-row-fluid flex-column justify-content-between">
						<!--begin::Aside body-->
						<div class="d-flex flex-column-fluid flex-column flex-center mt-5 mt-lg-0">
							<a href="#" class="mb-15 text-center">
								<img src="{{asset('assets/media/logos/logo-letter-1.png')}}" class="max-h-75px" alt="" />
							</a>
							<!--begin::Signin-->
							<div class="login-form login-signin">
								<div class="text-center mb-10 mb-lg-20">
									<h2 class="font-weight-bold">Sign In</h2>
									<p class="text-muted font-weight-bold">Enter your username and password</p>
								</div>
								<!--begin::Form-->
                                @include('auth.validation')
								<form class="form" method='post' action='{{route("login")}}' novalidate="novalidate" id="kt_login_signin_form">
													
									@csrf
                                    <div class="form-group py-3 m-0">
										<input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="Email" placeholder="Email" name="email" autocomplete="off" />
									</div>
									<div class="form-group py-3 border-top m-0">
										<input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="Password" placeholder="Password" name="password" />
									</div>
									<div class="form-group d-flex flex-wrap justify-content-between align-items-center mt-3">
										<label class="checkbox checkbox-outline m-0 text-muted">
										<input type="checkbox" name="remember" />Remember me
										<span></span></label>
										<a href="javascript:;" id="kt_login_forgot" class="text-muted text-hover-primary">Forgot Password ?</a>
									</div>
									<div class="form-group d-flex flex-wrap justify-content-between align-items-center mt-2">
										<div class="my-3 mr-2">
											<span class="text-muted mr-2">Don't have an account?</span>
											<a href="javascript:;" id="kt_login_signup" class="font-weight-bold">Signup</a>
										</div>
										<button id="kt_login_signin_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3">Sign In</button>
									</div>
								</form>
								<!--end::Form-->
							</div>
							<!--end::Signin-->
							<!--begin::Signup-->
							<div class="login-form login-signup">
								<div class="text-center mb-10 mb-lg-20">
									<h3 class="">Sign Up</h3>
									<p class="text-muted font-weight-bold">Enter your details to create your account</p>
								</div>
								<!--begin::Form-->
								@include('auth.validation')
								<form class="form" novalidate="novalidate" id="kt_login_signup_form" action='{{route("login")}}'>
									<div class="form-group py-3 m-0">
										<input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="text" placeholder="Fullname" name="fullname" autocomplete="off" />
									</div>
									<div class="form-group py-3 border-top m-0">
										<input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="password" placeholder="Email" name="email" autocomplete="off" />
									</div>
									<div class="form-group py-3 border-top m-0">
										<input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="password" placeholder="Password" name="password" autocomplete="off" />
									</div>
									<div class="form-group py-3 border-top m-0">
										<input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="password" placeholder="Confirm password" name="cpassword" autocomplete="off" />
									</div>
									<div class="form-group mt-5">
										<label class="checkbox checkbox-outline">
										<input type="checkbox" name="agree" />I Agree the
										<a href="#">terms and conditions</a>.
										<span></span></label>
									</div>
									<div class="form-group d-flex flex-wrap flex-center">
										<button id="kt_login_signup_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-2">Submit</button>
										<button id="kt_login_signup_cancel" class="btn btn-outline-primary font-weight-bold px-9 py-4 my-3 mx-2">Cancel</button>
									</div>
								</form>
								<!--end::Form-->
							</div>
							<!--end::Signup-->
							<!--begin::Forgot-->
							<div class="login-form login-forgot">
								<div class="text-center mb-10 mb-lg-20">
									<h3 class="">Forgotten Password ?</h3>
									<p class="text-muted font-weight-bold">Enter your email to reset your password</p>
								</div>
								<!--begin::Form-->
								<form class="form" novalidate="novalidate" id="kt_login_forgot_form">
									<div class="form-group py-3 border-bottom mb-10">
										<input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="email" placeholder="Email" name="email" autocomplete="off" />
									</div>
									<div class="form-group d-flex flex-wrap flex-center">
										<button id="kt_login_forgot_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-2">Submit</button>
										<button id="kt_login_forgot_cancel" class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-2">Cancel</button>
									</div>
								</form>
								<!--end::Form-->
							</div>
							<!--end::Forgot-->
						</div>
						<!--end::Aside body-->
					
					</div>
					<!--end: Aside Container-->
				</div>
				<!--begin::Aside-->
				<!--begin::Content-->
				<div class="order-1 order-lg-2 flex-column-auto flex-lg-row-fluid d-flex flex-column p-7" style="background-image: url({{asset('assets/media/stock-600x400/img-56.jpg')}}); background-repeat: no-repeat; background-size: cover;" >
				
				<!--begin::Content body-->
					<div class="d-flex flex-column-fluid flex-lg-center">
						<div class="d-flex flex-column justify-content-center">
							<h3 class="display-3 font-weight-bold my-7 text-white">Welcome to School Syetem!</h3>
							
						
						</div>
					</div>
					<!--end::Content body-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Login-->
@endsection
