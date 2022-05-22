
<?php
session_start();
  if(!isset($_SESSION['user_id'])){
    header('location: index.php');
  }
?>

<!doctype html>

<html lang="en">

  <head>

    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Arvo&family=Montserrat&family=Vollkorn+SC&display=swap" rel="stylesheet">
    <script src="./mynotes.js" defer></script>

    <title>My Notes</title>

    <style>

        #container{

            margin-top: 120px;

        }



        #notepad, #allnotes, #done,.delete{

            display:none;

        }



        .buttons{

            margin-bottom:  20px;

        }

        textarea{

            width:100%;

            max-width: 100%;

            font-size: 16px;

            line-height: 1.5em;

            border-left-width: 20px;

            border-color: #D353DD;

            color: #D353DD;

            background-color: #FDF1FF;

            padding: 10px

        }

        .noteheader{
          border: 1px solid grey;
          border-radius: 10px;
          margin-bottom: 10px;
          cursor: pointer;
          padding: 0 10px;
          background: linear-gradient(#FFFFFF,#ECEAE7);
        }
        .text{
          font-size: 20px;
          overflow:hidden;
          white-space: nowrap;
          text-overflow: ellipsis;
        }
        .timetext{
          overflow:hidden;
          white-space: nowrap;
          text-overflow: ellipsis;
        }

    </style>

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

              <li><a href="#">Help</a></li>

              <li><a href="#">Contact us</a></li>

              <li class="active"><a href="#" >My Notes</a></li>

            </ul>

            <ul class="nav navbar-nav navbar-right">

              <li ><a href="#" >Logged in as <b><?php echo $_SESSION['username'] ?></b></a></li>

              <li ><a href="index.php?logout=1" >Logout</a></li>

              

            </ul>



            </div>



        </div>

    </nav>

    <!--container-->

    <div class="container" id="container">
        <!--Alert message-->
        <div id="alert" class="alert alert-danger collapse">
       <a class="close" data-dismiss="alert">
         &times;
       </a> 
       <p id="alertContent"></p>  
        </div>
        <div class="row">

            <div class="col-md-offset-3 col-md-6">

                <div class="buttons">

                    <button id="addNote" type="button" class="btn btn-info btn-lg">Add Note</button>

                    <button id="edit" type="button" class="btn btn-info btn-lg pull-right">Edit</button>

                    <button id="done" type="button" class="btn green btn-lg pull-right">Done</button>

                    <button id="allnotes" type="button" class="btn btn-info btn-lg">Search All Notes</button>

                </div>

                <div id="notepad">

                    <textarea name="" id=""  rows="10"></textarea>

                </div>

                <div id="notes">

                    <!--ajax call to php file-->

                </div>

            </div>

        </div>

    </div>

   

    <!--Footer-->

  <div class="footer">

    <div class="container">

      <p>codebadiya.com copyright &copy; 2015-<?php $today=date('Y'); echo $today;?>.</p>

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