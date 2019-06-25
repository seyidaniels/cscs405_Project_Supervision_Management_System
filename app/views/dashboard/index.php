<!doctype html>
<html lang="en">
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="<?php echo root() .'fonts/feather/feather.min.css' ?>">

    <!-- Theme CSS -->
      
    <link rel="stylesheet" href="<?php echo root() .'css/theme.min.css" id="stylesheetLight' ?>">
    


    <title>Dashboard</title>
  </head>
  <body>

      <?php include('includes/navbar.php')  ?>


      <?php

      if (Auth::usertype() == 'supervisor') {
        require('supervisor.php');
      }else {
        require('student.php');
      }

      ?>
    

  

    <!-- JAVASCRIPT
    ================================================== -->
    <!-- Libs JS -->
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Theme JS -->
    <script src="<?php root().'assets/js/theme.min.js' ?>"></script>

    <script>
    $(document).on("click", ".message_supervisor", function () {
     var  appointment_id = $(this).data('appointment_id');
     $("#appointment_id").val(appointment_id);
});

    </script>

    <script>
      $(document).ready(function(){
        $(".collapsed").click(function(){
          $("#icons").toggleClass("fe-plus fe-minus");
        });
      });
    </script>

    <script>
      $(function () {
        $('[data-toggle="tooltip"]').tooltip()
      })
    </script>
    

  </body>
</html>