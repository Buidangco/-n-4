 @extends('layout_sanpham.layoutchung')
@section('body')
	@include('trangchu.header')
	
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('{{url('subas/login')}}/images/bg-01.jpg');width:38%;margin-left: 20%;height: 682px;"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form" method="post" action="/Home1/createlogin1">
					@csrf
					@if(count($errors)>0)
					<div class="alert alert-danger">
						@foreach($errors->all() as $err)
						{{$err}}
						@endforeach
					</div>
					@endif
					<span class="login100-form-title p-b-59">
						Sign Up
					</span>

					<div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">Full Name</span>
						<input class="input100" type="text" name="fullname" placeholder="Name...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Email addess...">
						<span class="focus-input100"></span>
					</div>

<!-- 					<div class="wrap-input100 validate-input" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Username...">
						<span class="focus-input100"></span>
					</div> -->

			
					<div class="wrap-input100 validate-input" data-validate = "Repeat Password is required">
						<span class="label-input100">SDT</span>
						<input class="input100" type="text" name="SDT" placeholder="*************">
						<span class="focus-input100"></span>
					<div class="wrap-input100 validate-input" data-validate = "Repeat Password is required">
						<span class="label-input100">Địa chỉ</span>
						<input class="input100" type="text" name="diachi" placeholder="*************">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="text" name="password" placeholder="*************">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<span class="label-input100">Re passwork</span>
						<input class="input100" type="text" name="Repasswork" placeholder="*************">
						<span class="focus-input100"></span>
					</div>
					 Giới tính:<br>Nam <input type="radio" name="phai" value="Nam">, Nữ <input type="radio" name="phai" value="Nữ"><br>
					<div class="flex-m w-full p-b-33">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								<span class="txt1">
									I agree to the
									<a href="#" class="txt2 hov1">
										Terms of User
									</a>
								</span>
							</label>
						</div>

						
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Sign Up
							</button>
						</div>
						<a style="text-align:center" href="#" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							create an account
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	@include('trangchu.footer')
@stop()