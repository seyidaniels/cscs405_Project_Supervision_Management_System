<!DOCTYPE HTML>
<html lang="zxx">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<title>Sign up</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Triple Forms Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />

	<!-- CSS files -->
	<link rel="stylesheet" href="<?php echo root().'css/forms.css' ?>" type="text/css" media="all" />

	<!-- Style-CSS -->
	<link rel="stylesheet" href="<?php echo root().'fonts/feather/feather.min.css' ?>">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- web-fonts -->
	<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">


</head>

<body>
    <!-- Sign in form -->

    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Sign in</h2>

                    <?php include('message.php') ?>

                    <form action="<?php echo root().'auth/login'; ?>" method="post" class="register-form" id="register-form">
                        <!-- <div class="form-row">
                            <div class="col">
                                <div class="input">
                                    <span class="fe fe-user" aria-hidden="true"></span>
                                    <input type="text" placeholder="Firstname" name="firstname"  />
                                </div>
                            </div>
                            <div class="col">
                                <div class="input">
                                    <span class="fe fe-user" aria-hidden="true"></span>
                                    <input type="text" placeholder="Lastname" name="lastname"  />
                                </div>
                            </div>
                        </div> -->
                        <div class="form-group">
                            <div class="input">
                                <span class="fe fe-mail" aria-hidden="true"></span>
                                <input type="email" placeholder="Email Address" name="email" required />
                            </div>
                        </div>
                        <div class="mx-15">
                            <span>Who are you logging in as?</span><br>
                            <input type="radio" placeholder="Supervisor" name="type" value="supervisor" id="supervisor"  />
                            <span>Supervisor</span>
                            <input type="radio" placeholder="Student" name="type" value="student" id="student"  />
                            <span>Student</span>
                        </div>

                        <div class="form-group">
                            <div class="input">
                                <span class="fe fe-eye-off" aria-hidden="true"></span>
                                <input type="password" placeholder="Password" name="password" required />
                            </div> 
                        </div>

                        <div class="form-group form-button">
                            <div class="form-group">
                                <button type="submit" class="submit">Login</button>
                            </div> 
                        </div>
                        <p class="text-center mt-5">
                            Don't have account? &nbsp; <a href="<?php echo root() . 'home/register'; ?>">Register</a>
                        </p>
                    </form>
                </div>
                <div class="signup-image">
                    <figure>
                        <img src="../images/sitting-8@2x.png" alt="sing up image">
                    </figure>
                </div>
            </div>
        </div>
    </section>


</body>

</html>