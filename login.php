<?php
global $errors;
//Start session
session_start();
//Connect to the database
include("connection.php");
//Check user inputs
    //Define error messages
    
$missingEmail = '<p><stong>Please enter your email address!</strong></p>';
$missingPassword = '<p><stong>Please enter your password!</strong></p>'; 
    //Get email and password
    //Store errors in errors variable
if(empty($_POST["loginEmail"])){
    $errors .= $missingEmail;   
}else{
    $email = filter_var($_POST["loginEmail"], FILTER_SANITIZE_EMAIL);
}
if(empty($_POST["loginPassword"])){
    $errors .= $missingPassword;   
}else{
    $password = filter_var($_POST["loginPassword"], FILTER_SANITIZE_STRING);
}
    //If there are any errors
if($errors){
    //print error message
    $resultMessage = '<div class="alert alert-danger">' . $errors .'</div>';
    echo $resultMessage;   
}else{
    //else: No errors
    //Prepare variables for the query
    $email = mysqli_real_escape_string($link, $email);
    
    $password = mysqli_real_escape_string($link, $password);
    $password = hash('sha256', $password);
        //Run query: Check combinaton of email & password exists
$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = mysqli_query($link, $sql);

if(!$result){
    echo '<div class="alert alert-danger">Error running the query!</div>';
    exit;
}
       
$count = mysqli_num_rows($result);



if($count !== 1){
     //If email & password don't match print error
    echo '<div class="alert alert-danger">Wrong Username or Password</div>';
}
else {
    //log the user in: Set session variables
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $_SESSION['user_id']=$row['user_id'];
    $_SESSION['username']=$row['username'];
    $_SESSION['email']=$row['email']; 
    echo "success";   
    }
}
    

            //else
                //Create two variables $authentificator1 and $authentificator2
                //Store them in a cookie
                //Run query to store them in rememberme table
                //If query unsuccessful
                    //print error
                //else
                    //print "success"
                    ?>