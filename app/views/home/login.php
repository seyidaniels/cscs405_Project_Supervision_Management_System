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


	<!-- web-fonts -->
	<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">


</head>

<body>
    
    <form action="<?php echo root().'auth/login'; ?>" method="post">
        <h1>Sign In</h1>
        <?php include('message.php') ?>
        <fieldset>
            <div class="input">
                <span class="fe fe-mail" aria-hidden="true"></span>
                <input type="email" placeholder="Email Address" name="email" required />
            </div>
        
            <div class="mx-15">
                <span>Who are you logging in as?</span><br>
                <input type="radio" placeholder="Supervisor" name="type" value="supervisor" id="supervisor"  />
                <span>Supervisor</span>
                <input type="radio" placeholder="Student" name="type" value="student" id="student"  />
                <span>Student</span>
            </div> 


            <div class="input">
                <span class="fe fe-eye-off" aria-hidden="true"></span>
                <input type="password" placeholder="Password" name="password" required />
            </div> 
                                      
            <div class="form-group">
                <button type="submit" class="btn submit">Login</button>
            </div>   

            <p class="text-center mt-5">
                Don't have account? &nbsp; <a href="register">Register</a>
            </p>
        </fieldset>
        
    </form>


</body>

</html>