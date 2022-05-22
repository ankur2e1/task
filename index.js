//Ajax Call for the sign up form 

//Once the form is submitted

$("#signupForm").submit(function(event){

    //prevent default php processing
   
       event.preventDefault();
   
        //collect user inputs
   
        var datatopost = $(this).serializeArray();
   
       
   
       //  console.log(datatopost);
   
   
   
        //send them to signup.php using AJAX
   
       $.ajax({
   
           url: "signup.php",
   
           type: "POST",
   
           data: datatopost,
   
           success: function(data){
   
               if(data){
   
                   $("#signupMessage").html(data);
   
               }
   
           },
   
           error: function(){
   
               $("#signupMessage").html("<div class='alert alert-danger'>There was an error with the Ajax call.please try again later.</div>");
   
           }
   
           });
   
       });
   
   //Ajax Call for the login form
   
   //Once the form is submitted
   
   $("#loginForm").submit(function(event){
   
       //prevent default php processing
      
          event.preventDefault();
      
           //collect user inputs
      
           var datatopost = $(this).serializeArray();
      
           // console.log(datatopost);
      
           //send them to signup.php using AJAX
      
          $.ajax({
      
              url: "login.php",
      
              type: "POST",
      
              data: datatopost,
      
              success: function(data){
      
                  if(data == "success"){
                   
                      window.location = "mainpageloggedin.php"
      
                  }else{
                      $("#loginMessage").html(data);
                  }
      
              },
      
              error: function(){
      
                  $("#loginMessage").html("<div class='alert alert-danger'>There was an error with the Ajax call.please try again later.</div>");
                   }
    
              });
      
          });
   
   
   //Ajax Call for the forgot password form
   
   //Once the form is submitted
   
  
   
       //prevent default php processing
   
       
   
       //collect user inputs
   
      
   
   //    console.log(datatopost);
   
       //send them to signup.php using AJAX
   
      //ajax call successfull: show error or success message
   
       //ajax calls fails: show ajax call error