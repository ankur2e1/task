<?php

//connect to the database

$host = "localhost";

$user = "root";

$password = "";

$db = "robotronix_mynote";

$link = mysqli_connect($host,$user,$password,$db);

if(mysqli_connect_error()){

    die("Error: unable to connect".mysqli_connect_error());

    

}


?>