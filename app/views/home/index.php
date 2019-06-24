<!DOCTYPE HTML>
<html lang="zxx">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<title>Sign up / Sign in</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Triple Forms Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />

	<!-- CSS files -->
	<link rel="stylesheet" href="<?php echo $_SERVER['REQUEST_URI'].'css/forms.css' ?>" type="text/css" media="all" />

	<!-- Style-CSS -->
	<link rel="stylesheet" href="<?php echo $_SERVER['REQUEST_URI'].'fonts/feather/feather.min.css' ?>">

	<!-- web-fonts -->
	<link href="http://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext"
	 rel="stylesheet">

</head>

<body>
	<div class="main-bg">
		<!-- title -->
		<h1></h1>
		<!-- //title -->

		<div class="sub-main-w3">
			<!-- <div class="image-style">

			</div> -->
			<!-- vertical tabs -->
			<div class="vertical-tab">
				<div id="section1" class="section-w3ls">
					<input type="radio" name="sections" id="option1" checked>
					<label for="option1" class="icon-left-w3pvt"><span class="fe fe-user" aria-hidden="true"></span>Login</label>
					<article>
						<form action="auth/login" method="post">

							<h3 class="legend">Login Here</h3>
							<div class="alert alert-danger" role="alert">
							<?php if (isset($data['error'])) echo $data['error']; ?>
							<?php if (isset($data['validation_errors'])) {
								echo "<ul>";
									foreach($data['validation_errors'] as $error) {
										echo "<li>".$error."</li>";
									}
								echo "</ul>";
							}
							
							?>
							</div>
							<div class="input">
								<span class="fe fe-mail" aria-hidden="true"></span>
								<input type="email" placeholder="Email" name="email" required />
							</div>
							<div class="input">
								<span class="fe fe-eye-off" aria-hidden="true"></span>
								<input type="password" placeholder="Password" name="password" required />
							</div>
							<div class="input">
								<input type="radio" value="supervisor" placeholder="Supervisor" name="type" id="supervisor"  />
								<span>Supervisor</span>
								<input type="radio" value="student" placeholder="Student" name="type" id="student"  />
								<span>Student</span>
							</div>
							<input type="submit" class="btn submit" value="login">
							<a href="#" class="bottom-text-w3ls">Forgot Password?</a>
						</form>
					</article>
				</div>
				<div id="section2" class="section-w3ls">
					<input type="radio" name="sections" id="option2">
					<label for="option2" class="icon-left-w3pvt"><span class="fe fe-edit" aria-hidden="true"></span>Register</label>
					<article>
						<form action="auth/register" method="post">
							<h3 class="legend">Register Here</h3>
							<div class="alert alert-danger">
							<?php if (isset($data['error'])) echo $data['error']; ?>
							<?php if (isset($data['validation_errors'])) {
								echo "<ul>";
									foreach($data['validation_errors'] as $error) {
										echo "<li>".$error."</li>";
									}
								echo "</ul>";
							}
							
							?>
							</div>
							<div class="input">
								<span class="fe fe-user" aria-hidden="true"></span>
								<input type="text" placeholder="firstname" name="firstname" required />
							</div>
							<div class="mx-15">
								<span>What are you registering as?</span><br>
								<input type="radio" placeholder="Supervisor" name="radio1" id="supervisor" required />
								<span>Supervisor</span>
								<input type="radio" placeholder="Student" name="radio1" id="student" required />
								<span>Student</span>
							</div>

							<!-- Supervisor -->
							<div class="supervisor" style="display: none;">
								<div class="input">
									<span class="fe fe-eye-off" aria-hidden="true"></span>
									<input type="password" placeholder="Supervisor Password" name="password" required />
								</div>
								<div class="input">
									<span class="fe fe-eye-off" aria-hidden="true"></span>
									<input type="password" placeholder="Supervisor Confirm Password" name="password_confirmation" required />
								</div>
							</div>


							<div class="input">
								<span class="fe fe-eye-off" aria-hidden="true"></span>
								<input type="password" placeholder="Password" name="password" required />
							</div>
							<div class="input">
								<span class="fe fe-eye-off" aria-hidden="true"></span>
								<input type="password" placeholder="Confirm Password" name="password_confirmation" required />
							</div>
							<button type="submit" class="btn submit">Register</button>
						</form>
					</article>
				</div>
				<div id="section3" class="section-w3ls">
					<input type="radio" name="sections" id="option3">
					<label for="option3" class="icon-left-w3pvt"><span class="fe fe-lock" aria-hidden="true"></span>Forgot Password?</label>
					<article>
						<form action="#" method="post">
							<h3 class="legend last">Reset Password</h3>
							<p class="para-style">Enter your email address below and we'll send you an email with instructions.</p>
							<p class="para-style-2"><strong>Need Help?</strong> Learn more about how to <a href="#">retrieve an existing
									account.</a></p>
							<div class="input">
								<span class="fe fe-mail" aria-hidden="true"></span>
								<input type="email" placeholder="Email" name="email" required />
							</div>
							<button type="submit" class="btn submit last-btn">Reset</button>
						</form>
					</article>
				</div>
			</div>
			<!-- //vertical tabs -->
			<div class="clear"></div>
		</div>

		<!-- copyright -->
		<div class="copyright"></div>
		<!-- //copyright -->

	</div>

<script>
var supervisor = document.getElementById("supervisor");
var student = document.getElementById("student");
var supervisor_section = document.querySelector(".supervisor");
var student_section = document.querySelector(".student");

supervisor.addEventListener("click", function () {
	student_section.style.display = "none";
	supervisor_section.style.display = "block";
});

student.addEventListener("click", function () {
	supervisor_section.style.display = "none";
	student_section.style.display = "block";
});

</script>

</body>

</html>