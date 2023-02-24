<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>Hello user  <span>Thank you for visit</span></h3>
      <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>this is an user page</p>
      
      <a href="user_after_login.php" class="btn">click her to view recipe</a>
      <a href="logout.php" class="btn">logout</a>
   



    <style>
      .profile {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: 50px;
      }
      img {
        width: 200px;
        height: 200px;
        border-radius: 50%;
      }
       p {
        font-size: 18px;
        margin-top: 10px;
      }
      .line{
        background-color: skyblue;
        height: 5px;
        width: 1000px;
        margin-top: 20px;
      }
    </style>
  </head>
  <body>
    <div class="profile">
      <img src="images/profile.jpg" alt="Logo">
  <div class="line"></div>
  <p>    
   <?php 
   echo $_SESSION['user_email']
   ?></p>
  
  <div class="line"></div>
  <p>
<?php echo $_SESSION['user_name'] ?></span></p>
<div class="line"></div>
    </div>
    </div></div>
  </body>
</html>

<footer>
    <div class="foot">
      <h1> Akash Gautam kamble</h1>
 <h1> Roll number 12151</h1>
 <h1>PRN No 13203210046</h1>
 <h1>@all right reserved for Ak</h1>
    </div></footer>
</body>
</html>