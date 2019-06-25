<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo root() . 'css/style.css'; ?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Font CSS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins|Quicksand&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,800" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body id="page-top" data-spy="scroll" data-target=".navbar">
    
    <div class="header-bg" >
        <!-- ftco-navbar-light -->
        <nav id="mainNav" class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="../../../csc405/public">ProjectConn</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section-1">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section-2">How it works</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section-3">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link get-started" href="<?php echo root() . 'home/register'; ?>">Get Started</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    
        <div class="masthead">
            <div class="intro">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 order-sm-12 ml-auto">
                            <img class="bg-col-img" src="https://image.freepik.com/free-vector/organization-flat-icon_1262-18775.jpg" alt="">
                        </div>
                        <div class="col-lg-6 order-sm-1 mx-auto bg-col-intro">
                            <h1 class="brand-heading text-black">Simple application for the academic world</h1>
                            <p class="text-black text-desc mt-3">Are you a <span class="type"></span>? <br> ProjectConn is designed for you. Submission and Review of Projects made easy with ProjectConn. It's Free give it a trial today.</p>
                            <p class="btn-link mt-5">
                                <a class="btn btn-small btn-mi" role="button" href="#">Get Started</a>
                            </p>
                        </div>
                    </div>
                    <div class="arrow bounce">
                        <a href="#">
                            <img src="../assets/images/arrow-down.svg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="under_header" id="section-1">
            <div class="big_text">
                <div class="divider"></div>
                <p>
                    ProjectConn eases your project submission. It is powered with a multi-channel API, the complete toolbox for
                    Lecturer and student equipped with no third-party integration to ease your submission and review process.
                </p>
            </div>
        </div>


        <section class="section-1">
            <div class="services">
                <div class="container services-container">
                    <div class="services-panel">
                        <div class="hdr">
                            <img src="https://amio.io/img/for-managers.cd734867.svg" alt="for-developers" width="133px" height="110px">
                            <div class="headline">
                                For Lecturers
                                <div class="sub">Reduce Project Review Stress</div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="headline">
                                One Lecturer, Many Students
                            </div>
                            <div class="points">
                                <div class="tick tick-center-left">
                                    Easy validation of students project chapters. 
                                </div>
                                <div class="tick tick-center-left">
                                    Real time appointment location approval.
                                </div>
                                <div class="tick tick-center-left">
                                    Less stress of attending to project students onsite.
                                </div>
                            </div>
                        </div>
                        <div class="cta">
                            <a href="#" target="_blank" class="button mt-3 mb-5">
                                Explore App
                            </a>
                        </div>
                    </div>
                    <div class="services-panel">
                        <div class="hdr">
                            <img src="https://amio.io/img/for-managers.cd734867.svg" alt="for-developers" width="133px" height="110px">
                            <div class="headline">
                                For Students
                                <div class="sub">Reduce Project Submission Stress</div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="headline">
                                One Student, Many Lecturer
                            </div>
                            <div class="points">
                                <div class="tick tick-center-left">
                                    Easy access and communication with supervisor.
                                </div>
                                <div class="tick tick-center-left">
                                    Real time project chapter correction.
                                </div>
                                <div class="tick tick-center-left">
                                    Flexible appointment booking and cancellation.
                                </div>
                            </div>
                        </div>
                        <div class="cta">
                            <a href="#" target="_blank" class="button mt-3 mb-5">
                                Explore App
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="section-2" id="section-2">
            <div class="ht-works">
                <div class="container">
                    <div class="tab-head">
                        <h1 class="text-center">How it works</h1>
                    </div>
                    <div class="tab-line">
                        <ul class="nav nav-tabs hw-nav mb-5 pb-5" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Next gen app</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Perfomance</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Effectiveness</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent" style="padding-bottom: 7rem;">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-md-6 order-sm-1">
                                        <div class="align-self-center one-forth">
                                            <img src="https://colorlib.com/preview/theme/raptor/images/dashboard_full_1.jpg" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-sm-12">
                                        <div class="one-half ml-md-5 mt-5 text-left">
                                            <h2 class="mb-4">Next gen App</h2>
                                            <p>Far far away, beyond the revolution of onsite appointment between project students and their respective supervisor, ProjectConn is the next generation web platform to reform project supervision in institutions.</p>
                                            <p>Because it involves real time information between students and supervisor in the booking of appointment, updating project chapters, resource sharing and so on. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row">
                                    <div class="col-md-6 order-sm-12">
                                        <div class="align-self-center one-forth">
                                            <img src="https://colorlib.com/preview/theme/raptor/images/dashboard_full_1.jpg" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-sm-1">
                                        <div class="one-half ml-md-5 mt-5 text-left">
                                            <h2 class="mb-4">Performance App</h2>
                                            <p>ProjectConn's architecture is based on a multi-platform design that cut across several operating systems.</p>
                                            <p>It provides the best, high quality interaction between the parties involved.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="row">
                                    <div class="col-md-6 order-sm-1">
                                        <div class="align-self-center one-forth">
                                            <img src="https://colorlib.com/preview/theme/raptor/images/dashboard_full_1.jpg" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-sm-12">
                                        <div class="one-half ml-md-5 mt-5 text-left">
                                            <h2 class="mb-4">Effective App</h2>
                                            <p>It analyses the efficiency and evaluates the platform perform performance including all the functionalities included.</p>
                                            <p>Hence, ProjectConn delivers high ranked user requirements to make a successful project interaction between students and their supervisor.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="section-3" id="section-3">
            <div class="blog">
                <div class="container">
                    <div class="row justify-content-center mb-5 pb-5">
                        <div class="col-md-7 blog-head text-center">
                            <h1>Blog</h1>
                            <p class="mb-3">
                                Far far away, behind the word mountains, 
                                far from the countries Vokalia and Consonantia, 
                                there live the blind texts. Separated they live in
                            </p>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-5" style="width: 100%;">
                                <img src="<?php echo root() . 'images/image_1.jpg'; ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <a href="#" class="text-left">
                                        <h5 class="card-title">What are Static Site Generation?</h5>
                                        <p class="card-text">A new trend is emerging in the development world – static site generators (SSGs). For many years, developing, publishing and editing content on a website required HTML authoring skills, putting these processes beyond the capabilities of the average user.</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-5" style="width: 100%;">
                                <img src="<?php echo root() . 'images/image_2.jpg';?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <a href="#" class="text-left">
                                        <h5 class="card-title">10 Things to Remember When Starting a Career as an IT Project Manager.</h5>
                                        <p class="card-text">Time flies, and I don’t even know when 10 months in Netguru have passed. From the professional point of view, it was the most challenging and exciting time in my career.</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-5" style="width: 100%;">
                                <img src="<?php echo root() . 'images/image_3.jpg'; ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <a href="#" class="text-left">
                                        <h5 class="card-title">How User Research Can Improve Internal Communication</h5>
                                        <p class="card-text">User research is the foundation of building new products or updating existing ones. It’s a powerful tool to better understand the market, the users, and their needs.</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <footer class="footer">
            <div class="footer__section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 mt-40">
                            <div class="desc__text">
                                <h2>ProjectConn.</h2>
                                <p>
                                    Far far away, behind the word mountains, 
                                    far from the countries Vokalia and Consonantia, 
                                    there live the blind texts.
                                </p>
                                <p class="btn-link_ mt-5">
                                    <a class="btn btn-small btn-white" role="button" href="#">Get Started</a>
                                </p>
                            </div>
                        </div>
                        <!-- <div class="col-md-3 mt-40">
                            <div class="desc__text">
                                <h2>Useful links</h2>
                                <ul>
                                    <li>
                                        <a href="#">
                                            link 1
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            link 2
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            link 3
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            link 4
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div> -->
                        <div class="col-md-4 mt-40">
                             <div class="desc__text column-2">
                                <h2>Navigational</h2>
                                <ul>
                                    <li>
                                        <a href="#">
                                            Home
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Services
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            How it Works
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Blog
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 mt-40">
                             <div class="desc__text">
                                <h2>Social</h2>
                                <div>
                                    <ul>
                                        <li>
                                            <a href="#" class="info" style="color: rgba(255, 255, 255, 0.7);">
                                                <span class="fa fa-envelope"></span>
                                                info@ProjectConn.com
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <ul class="social">
                                    <li>
                                        <a href="#">
                                            <span class="social-icon fa fa-twitter"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="social-icon fa fa-facebook"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="social-icon fa fa-instagram"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>


    

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="<?php echo root() . 'plugins/typed/lib/typed.js'; ?>"></script>
    <script>
        //==============  TYPED TEXT  ===================
        var typed = new Typed(".type", {
            strings: [
            "Lecturer",
            "Student"
            ],
            // Optionally use an HTML element to grab strings from (must wrap each string in a <p>)
                stringsElement: null,
                // typing speed
                typeSpeed: 100,
                // time before typing starts
                startDelay: 1200,
                // backspacing speed
                backSpeed: 50,
                // time before backspacing
                backDelay: 1200,
                // loop
                loop: true,
                // show cursor
                showCursor: true,
                // character for cursor
                cursorChar: "|"
        // Default value
        });

    // Initialize Animate On Scroll
        AOS.init();
    </script>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("mainNav").style.background = " #fff";
                document.getElementById("mainNav").style.boxShadow = "-5px -4px 15px 4px #ccc";
                document.getElementById("mainNav").style.padding = "20px";
                document.getElementById("mainNav").style.transition = "all 2s";
            } else {
                document.getElementById("mainNav").style.background = " transparent";
                document.getElementById("mainNav").style.boxShadow = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }
    </script>
</body>
</html>