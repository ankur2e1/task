<?php

global $error;

// Start session

session_start();

include("connection.php");

// <!--Check user inputs-->

//   <!--Define error messages-->

$missingUsername = "<p><strong>Please enter a username!</strong><p>";

$invalidUsername = "<p><strong>username should not allow number or special character!</strong><p>";

$missingContact = "<p><strong>Please enter a contact number!</strong><p>";

$missingEmail = "<p><strong>Please enter your email address!</strong><p>";

$invalidEmail = "<p><strong>Please enter a valid email address!</strong><p>";

$missingPassword = "<p><strong>Please enter a password!</strong><p>";

$invalidPassword = "<p><strong>Your password atleast 6 character long and less than 12 characters and include one capital letter and one number!</strong><p>";

$differentPassword = "<p><strong>Password don't match!</strong><p>";

$missingPassword2 = "<p><strong>Please confirm your password!</strong><p>";


//get username

if(empty($_POST["username"])){

    $error .= $missingUsername;

}else if(!preg_match('/^[a-zA-Z\s]+$/',$_POST["username"])){
    
    $error .= $invalidUsername;
}else{
    $username = filter_var($_POST["username"],FILTER_SANITIZE_STRING);

}
//get contact
if(empty($_POST["phone"])){
    $error .= $missingContact;
}else{
    $contact = $_POST["phone"];
}

//Get email

if(empty($_POST["email"])){

    $error .= $missingEmail;

}else{

    $email = filter_var($_POST["email"],FILTER_SANITIZE_EMAIL);

    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){

        $error .= $invalidEmail;

    }

}

//Get passwords

if(empty($_POST["password"])){

    $error .= $missingPassword;

}else if(!(strlen($_POST["password"])>6 and strlen($_POST["password"])<12 and preg_match('/[A-Z]/',$_POST["password"]) and preg_match('/[0-9]/',$_POST["password"]) )){

    $error .= $invalidPassword;

}else{

    $password = filter_var($_POST["password"],FILTER_SANITIZE_STRING);

    if(empty($_POST["password2"])){

        $error .= $missingPassword2;

    }else{

        $password2 = filter_var($_POST["password2"],FILTER_SANITIZE_STRING);

        if($password !== $password2){

            $error .= $differentPassword;

        }

    }

}

//If there are any errors print error

if($error){

    $resultMessage = "<div class='alert alert-danger'>". $error ."</div>";

    echo $resultMessage;
    exit;

}



//no errors



//Prepare variables for the queries

$username = mysqli_real_escape_string($link,$username);


$email = mysqli_real_escape_string($link,$email);


//$password = md5($password);

$password = mysqli_real_escape_string($link,$password);

// $password = md5($password);
$password = hash('sha256', $password);

//128 bits -> 32 characters

//256 bits -> 64 characters

//If username exists in the users table print error

$sql = "SELECT * FROM users WHERE username = '$username' ";

$result = mysqli_query($link, $sql);

if(!$result){

    echo "<div class='alert alert-danger'>Error running the query!</div>";

    // echo "<div class='alert alert-danger'>". mysqli_error($link) ."</div>";

    exit;

    

}

$results = mysqli_num_rows($result);

if($results){

    echo "<div>That user is already registered.Do you want to log in?</div>";

    exit;

}

//    echo '<div class="alert alert-danger">' . mysqli_error($link) . '</div>';

  



//If email exists in the users table print error

$sql = "SELECT * FROM users WHERE email = '$email' ";

$result = mysqli_query($link, $sql);

if(!$result){

    echo "<div class='alert alert-danger'>Error running the query!</div>";

    exit;

    

}

$results = mysqli_num_rows($result);

if($results){

    echo "<div>That email is already registered.Do you want to log in?</div>";

    exit;

}

//Create a unique  activation code

// $activationKey = bin2hex(openssl_random_pseudo_bytes(16));

    //byte: unit of data = 8 bits

    //bit: 0 or 1

    //16 bytes = 16*8 = 128 bits

    //(2*2*2*2)*2*2*2*2*...*2

    //16*16*...*16

    //32 characters



//Insert user details and activation code in the users table

$sql = "INSERT INTO users (`username`,`contact`,`email`,`password`) VALUES ('$username','$contact','$email','$password')";

$result = mysqli_query($link,$sql);

if(!$result){

    echo "<div class='alert alert-danger'>There was an error inserting the user details in the database!</div>";

    exit;

}else{
    echo "<div class='alert alert-success'>Thank you for registering!</div>";
}



//Send the user an email with a link to activate.php with their email and activation code




    



//$projectRoot is taken from the settings.php file which is included in the connection.php file including at the top of this code.

?>