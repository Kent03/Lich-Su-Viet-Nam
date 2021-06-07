<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>signUp + signIn</title>
	<link rel="stylesheet" type="text/css" href="signUp-signIn.css">
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap');
/*div
{
	border:0.4px solid red;
}*/
*{
	margin: 0 ;
	padding: 0 ;
	box-sizing: border-box;
	font-family: 'Poppins' , sans-serif;
}
section{
	position: relative;
	min-height: 100vh;
	background: #e4c09c;
	display: flex;
	justify-content: center;
	align-items: center;
	padding: 20px;
	transition: 0.5s;
}
section.active{
	background: #c8eaeb;
}
section .container{
	position: relative;
	width: 900px;
	height: 500px;
	background: #fff;
	box-shadow:  0 15px 50px rgba(0,0,0,0.1);
	overflow: hidden;
	margin: -150px 0px 0px -99px;
}
section .container .user{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	display: flex;
}
section .container .user .imgBx{
	position: relative;
	width: 50%;
	height: 100%;
	transition: 0.5;				/*sdk*/
}
section .container .user .arrowImg{
	width: 13px;
	/*height: 100%;*/		/*sdk*/
}
section .container .user .imgBx img{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	object-fit: cover;
}
section .container .user .formBx{
	position: relative;
	width: 50%;
	height: 100%;
	background: #fff;
	display: flex;
	justify-content: center;
	align-items: center;
	padding: 40px;
	transition: 0.5s;
}

section .container .user .formBx h2{
	font-size: 18px;
	font-weight: 600;
	text-transform: uppercase;
	letter-spacing: 2px;
	text-align: center;
	width: 100%;
	margin-bottom: 10px;
	
}
section .container .user .formBx input{
	width: 100%;
	padding: 10px;
	background: #f5f5f5;
	color: #333;
	border:none;
	outline: none;
	box-shadow: none;
	font-size: 14px;
	margin: 8px 0;
	letter-spacing: 1px;
	font-weight: 300;
}
section .container .user .formBx input[type="submit"]
{
	max-width: 130px;
	background: #677eff;
	color: #fff;
	cursor: pointer;
	font-size: 14px;
	font-weight: 500;
	letter-spacing: 1px;
	transition: 0.5s;
}
section .container .user.signupBx .formBx input[type="submit"]{
	background: #e73e49;
}
section .container .user .formBx .signup{
	position: relative;
	margin-top: 20px;
	font-size: 12px;
	letter-spacing: 1px;
	color: #555;
	text-transform: uppercase;
	font-weight: 300;
}

section .container .user .formBx .back{
	position: relative;
	margin-top: 20px;
	font-size: 9px;
	letter-spacing: 1px;
	color: #555;
	text-transform: uppercase;
	font-weight: 300;
}
section .container .user .formBx .arrow{
	padding: 15px 5px 0 0;
}

section .container .user .formBx .back a{
	font-weight: 600;
	text-decoration: none;
	color: #555;
}
section .container .user .formBx .back a:hover{
	text-decoration: underline;
}

section .container .user .formBx .signup a{
	font-weight: 600;
	text-decoration: none;
	color: #577eff;
}
/*section .container .user .formBx .signupBx{
	display: none;
}*/
section .container .signupBx{
	pointer-events: none;
}
section .container.active .signupBx{
	pointer-events: initial;
}
section .container .signupBx .formBx{
	top: 100%;
}
section .container.active .signupBx .formBx{
	top: 0;
}
section .container .signupBx .imgBx{
	top: -100%;
	transition: 0.5s;
}
section .container.active .signupBx .imgBx{
	top: 0;
}



section .container .signinBx .formBx{
	top: 0;
}
section .container.active .signinBx .formBx{
	top: 100%;
}



section .container .signinBx .imgBx{
	top: 0;
	transition: 0.5s;
}
section .container.active .signinBx .imgBx{
	top: -100%;
}


@media(max-width: 991px){
	section .container{
		max-width: 400px;
	}
	section .container .imgBx{
		display: none;
	}
	section .container .user .formBx{
		width: 100%;
	}
	section .container.active .signinBx .formBx{
	top: -100%;
}
}
.footer{
	justify-content: center;
	height: 50px;
	margin: 657px 0px 0px -790px;
}
.f1{
	height: 20px;
	display: flex;	
	/*padding: 40px;*/
}
.f2{
	height: 30px;
	display: flex;
}
.f3{
	height: 40px;
}
.cont{
	font-size: 12px;
	margin-left: 20px;
}
.cont1{
	padding-top: 5px;
	font-size: 12px;
}
.cont12{
	margin-left: 98px;
}
.cont13{
	margin-left: 30px;
}
.cont2{
	color: #555;
	text-align: center;
	padding-top: 10px;
	font-size: 12px;
	margin-left: 20px;
}.footer a{
	text-decoration: none;
	color: #555;
}

	</style>
</head>
<body>
	<section>
		<div class="container">
			<div class="user signinBx">
				<div class="imgBx"><img src="../images/slide1.png" ></div>
				<div class="formBx">
					<form action="" method="POST">
						<h2><a href="#" class="backMain" style="text-decoration: none;color: #feb518;">lịch sử việt nam</a></h2>
						<div style="font-size: 10px;font-weight: bold;margin: -15px 0px 0px 165px ;color: #feb518;">Admin</div>
						<input type="email" name="email" placeholder="Tên đăng nhập">
						<input type="password" placeholder="Mật khẩu" name="password">
						<input type="submit" value="ĐĂNG NHẬP" name="">
						<p class="signup">bạn chưa có tài khoản? <a href="#" onclick="toggleForm();">đăng ký ngay.</a></p>
						<div style="display: flex;">
							<div class="arrow"><img class="arrowImg" src="../images/left-arrow.png"></div>
							<div class="back"><a href="../index.html" >trang chủ</a></div>
						</div>
					</form>
				</div>
			</div>

			<div class="user signupBx">
				
				<div class="formBx">
					<form>
						<h2>tạo tài khoản</h2>
						<input type="text" name="" placeholder="Tên đăng nhập">
						<input type="text" name="" placeholder="Email">
						<input type="password" placeholder="Mật khẩu" name="">
						<input type="password" placeholder="Nhập lại mật khẩu" name="">
						<input type="submit" value="ĐĂNG KÝ" name="">
						<p class="signup">chào mừng đến với lịch sử việt nam <a href="#" onclick="toggleForm();">đăng nhập.</a></p>
					</form>
				</div>
				<div class="imgBx"><img src="../images/slide3.png" ></div>
			</div>
		</div>
		<div class="footer">
			<div class="f1">
				<div class="cont"><a href="#">Giới thiệu</a></div>
				<div class="cont"><a href="#">Blog</a></div>
				<div class="cont"><a href="#">Trợ giúp</a></div>
				<div class="cont"><a href="#">Cookie</a></div>
				<div class="cont"><a href="#">Lựa chọn quảng cáo</a></div>
				<div class="cont"><a href="#">Đăng ký/Đăng nhập</a></div>
				<div class="cont"><a href="#">Email: lhkhoi@gmail.com</a></div>
			</div>
			<div class="f2">
				<div class="cont1 cont12"><a href="#">Địa chỉ : 470 Trần Đại Nghĩa, Ngũ Hành Sơn, Đà Nẵng</a></div>
				<div class="cont1 cont13"><a href="#">Phone : (+84) 000 00000000</a></div>
			</div>
			<div class="f3">
				<div class="cont2">Bản quyền thuộc về Team BWD-VKU.</div>
			</div>
		</div>
	</section>

	<script type="text/javascript">
		function toggleForm(){
			section = document.querySelector('section');
			container = document.querySelector('.container');
			container.classList.toggle('active');
			section.classList.toggle('active');
		}
	</script>
</body>
</html>