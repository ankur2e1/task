<?php
session_start();
include('connection.php');
//logout
include('logout.php');
?>
<!doctype html>

<html lang="en">

  <head>

    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="styling.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Arvo&family=Montserrat&family=Vollkorn+SC&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="./index.js" defer></script>

    <title>Online Notes</title>

  </head>

  <body>

    <!--Navigation bar-->

    <nav role="navigation" class="navbar navbar-custom navbar-fixed-top">

        <div class="container-fluid">

            <div class="navbar-header">

      <a class="navbar-brand">Online Notes</a>

      <button type="button" class="navbar-toggle" data-target="#navbarCollapse" data-toggle="collapse">

      <span class="icon-bar"></span>

      <span class="icon-bar"></span>

      <span class="icon-bar"></span>

     

      </button>

            </div>

            <div class="collapse navbar-collapse" id="navbarCollapse">

            <ul class="nav navbar-nav">

              <li class="active"><a href="#">Home</a></li>

              <li><a href="#">Help</a></li>

              <li><a href="#">Contact us</a></li>

            </ul>

            <ul class="nav navbar-nav navbar-right">

              <li ><a href="#loginModal" data-toggle="modal">Login</a></li>

              

            </ul>



            </div>



        </div>

    </nav>

    <!--Jumbotron with sign-up button-->

    <div class="jumbotron" id="mycontainer">

      <h1>Notes App</h1>

      <p>Your notes with you wherever you go.</p>

      <p>Easy to use,protects all your notes!</p>

      <button type="button" class="btn btn-lg green signup" data-target="#signupModal" data-toggle="modal">Sign up-It's free</button>

    </div>



    

    <!--Login Form-->

    <form method="post" id="loginForm">

    <div id="loginModal" class="modal" role="dialog" aria-labelledby="mymodalLabel" aria-hidden="true">

  <div class="modal-dialog">



    <!-- Modal content-->

    <div class="modal-content">

      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal">&times;</button>

        <h4 class="modal-title">Login:</h4>

      </div>

      <div class="modal-body">

        <!--login message from php file-->

        <div id="loginMessage"></div>

       

       <div class="form-group">

         <label for="loginEmail" class="sr-only">Email:</label>

         <input type="email" name="loginEmail" id="loginEmail" placeholder="Email " maxlength="50" class="form-control">

       </div>

       <div class="form-group">

         <label for="loginPassword" class="sr-only">Password:</label>

         <input type="password" name="loginPassword" id="loginPassword" placeholder="Password" maxlength="30" class="form-control">

       </div> 

      </div>

      <div class="modal-footer">

        <input class="btn green"   name="login" type="submit" value="Login">

        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>

        <button type="button" class="btn btn-default pull-left" data-dismiss="modal" data-target="#signupModal" data-toggle="modal">Register</button>

        

      </div>

    </div>



  </div>

</div>



    </form>

    <!--Sign-up form-->

    <form method="post" id="signupForm">

    <div id="signupModal" class="modal" role="dialog" aria-labelledby="mymodalLabel" aria-hidden="true">

  <div class="modal-dialog">



    <!-- Modal content-->

    <div class="modal-content">

      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal">&times;</button>

        <h4 class="modal-title">Sign up today and Start using our Online Notes App!</h4>

      </div>

      <div class="modal-body">

        <!--Signup message from php file-->

        <div id="signupMessage"></div>

       <div class="form-group">

         <label for="username" class="sr-only">Username:</label>

         <input type="text" name="username" id="username" placeholder="Username" maxlength="30" class="form-control">

       </div>
       <div class="form-group">

         <label for="phone" class="sr-only">contact:</label>

         <input type="tel" name="phone" id="phone" placeholder="Conatact number" maxlength="10" pattern="[0-9]{10}" class="form-control">

       </div>

       <div class="form-group">

         <label for="email" class="sr-only">Email:</label>

         <input type="email" name="email" id="email" placeholder="Email address" maxlength="50" class="form-control">

       </div>

       <div class="form-group">

         <label for="password" class="sr-only">Choose a password:</label>

         <input type="password" name="password" id="password" placeholder="Choose a password" maxlength="30" class="form-control">

       </div>

       <div class="form-group">

         <label for="password2" class="sr-only">Confirm password:</label>

         <input type="password" name="password2"   id="password2" placeholder="Confirm password" maxlength="30" class="form-control">

       </div>

      </div>

      <div class="modal-footer">

        <input  class="btn green"  name="signup" type="submit" value="Sign up">

        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>

        

      </div>

    </div>



  </div>

</div>



    </form>



    <!--Forget Password Form-->

    
    <!--Footer-->

  <div class="footer">

    <div class="container">

      <p> copyright &copy; 2021-<?php $today=date('Y'); echo $today;?>.</p>

    </div>

  </div>

    <!-- Optional JavaScript; choose one of the two! -->



    <!-- Option 1: Bootstrap Bundle with Popper -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



<!-- Latest compiled JavaScript -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <!--

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    -->



  </body>

</html>
