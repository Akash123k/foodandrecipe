<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         header('location:admin_page.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         header('location:user_page.php');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>





<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="login.css">
  <link rel="stylesheet" href="style.css">
  
<link rel="stylesheet" href="css/login.css">
  
  <title></title>
</head>

<body>
  <div class="form-container">
     <form action="" method="post">

      <

      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
  <div class="cir">
    <div class="cir2"></div>
  </div>

      <div class="login">
        <h2>Sign in</h2>
        
         
<input type="email" name="email" required placeholder="enter your email">
         
         
         <h1><a href="passrecover.php">Forgot user id</a></h1>
       
       
       
   
         
<input type="password" name="password" required placeholder="enter your password">
         
         
         <a href="passrecover.php"><h1>Forgot password</a></h1>
         
         
        <div class="fo">
        <input type="submit" name="submit" placeholder="login now" class="but3"   class="form-btn">
        </div>
         <b><hr ><p>I have don't account <br><b><a href="register_form.php">register now</a>Sign UP? </a></b></p><hr></b>
         <h3>Sign up using</h3>
         
        <a href="https://github.com/signup?ref_cta=Sign+up&ref_loc=navigation+launchpad&ref_page=%2F"> 
        <img src="images/git.jpg" >
        </a>
        <a href="https://m.facebook.com/">
           <img src="images/fb.png">
           </a>
       <a href="https://accounts.google.com/SignUp?hl=en">  
       <img src="images/google.png" alt="/images/git.jpg">
       </a>
         </div>
  </form>   
       
</body>

</html>
