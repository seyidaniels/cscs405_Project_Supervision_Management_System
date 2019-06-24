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

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

	<!-- web-fonts -->
	<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">

</head>

<body>
    
    <form action="<?php echo root().'auth/register'; ?>" method="post" >
        
        <h1>Sign Up</h1>

                <?php include('message.php') ?>
        <fieldset>
            <div class="input">
                <span class="fe fe-user" aria-hidden="true"></span>
                <input type="text" placeholder="Firstname" name="firstname"  />
            </div>
        
            <div class="input">
                <span class="fe fe-user" aria-hidden="true"></span>
                <input type="text" placeholder="Lastname" name="lastname"  />
            </div>

            <div class="input">
                <span class="fe fe-mail" aria-hidden="true"></span>
                <input type="email" placeholder="Email Address" name="email"  />
            </div>

             <div class="input">
                <span class="fe fe-phone" aria-hidden="true"></span>
                <input type="phone" placeholder="Phone Number" name="phone"  />
            </div>
        
            <div class="mx-15">
                <span>Who are you registering as?</span><br><br>
                <input type="radio" placeholder="Supervisor" value="supervisor" name="type" id="supervisor"  />
                <span>Supervisor</span>
                <input type="radio" placeholder="Student" name="type" value="student" id="student"  />
                <span>Student</span>
            </div> 

            <!-- Supervisor -->
            <div class="supervisor" style="display: none;">
                <div class="input">
                    <select class="form-control" name="title" id="">
                        <option value="0" selected>Select your title</option>
                        <option value="Mr.">Mr</option>
                        <option value="Miss.">Miss</option>
                        <option value="Mrs.">Mrs</option>
                        <option value="Dr.">Dr</option>
                        <option value="Prof.">Prof</option>
                    </select>
                </div>
                <div class="input">
                    <input type="text" placeholder="Staff Id" name="staff_id"  />
                </div>
            </div> 

            <!-- Student -->
            <div class="student" style="display: none;">
                <div class="input">
                    <input type="text" placeholder="Matric Number" name="matric_number"  />
                </div>
            </div> 


            <div class="input">
                <span class="fe fe-eye-off" aria-hidden="true"></span>
                <input type="password" placeholder="Password" name="password"  />
            </div> 


            <div class="input">
                <span class="fe fe-eye-off" aria-hidden="true"></span>
                <input type="password" placeholder="Confirm Password" name="password_confirmation"  />
            </div>    

            <div class="form-group">
                <button type="submit" class="btn submit">Register</button>
            </div>   

            <p class="text-center mt-5">
                Already have account? &nbsp; <a href="<?php echo root() . 'register'; ?>">Login</a>
            </p>
        </fieldset>
        
    </form>



    


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