<?php
include 'config.php';
?>
<html>
  <head>
    <title>search item </title>
    <link rel="stylesheet"    href="css/search.css">
    
 <link rel="stylesheet"    href="css/search.css">
    
<link rel="stylesheet"    href="css/recipe_details.css">
  </head>
  <body>

<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="index.php">Home</a>
    <a href="login_form.php">login</a>
    <a href="vege_recipe.php">Veg-recipe</a>
    <a href="nonvege_recipe.php">nonvege-recipe</a>
    <a href="cake.php">cacke recipe</a>
   <a href="feedback.php">feedback</a>
  </div></div>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>

<script>
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>
     
    

   
    <div class="container">
      <form method="post">
        <input type="text" name="search" placeholder="search here">
        <button name="submit">search</button>
        <?php

if (isset($_POST['submit'])) {
    $search = $_POST['search'];

    // Establish a connection to the MySQL database using the MySQLi extension
    $mysqli = new mysqli("localhost", "root", "", "user_db");

    // Check if the connection was successful
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    // Escape the search input to prevent SQL injection
    $search = $mysqli->real_escape_string($search);

    // Execute a query to retrieve the data from the MySQL database
    $sql = "SELECT * FROM searchdata WHERE id = '$search' OR recipe_name = '$search' OR shape_name = '$search' OR recipe_type = '$search'";
    $result = $mysqli->query($sql);

    // Check if any rows were returned by the query
    if ($result->num_rows > 0) {
        // Output the results in an HTML table
        
        
        
        echo '<table text-align="center" position="relative " hight="20px" width="650px" right="100px" border="2px">
                <thead  >
                  <tr >
                    <th>number</th>
                    <th>recipe name</th>
                    <th>shape name</th>
                    <th>recipe type</th>
                  </tr>
                </thead>
                <tbody>';
                
        while ($row = $result->fetch_assoc()) {
            echo '<tr>
                    <td><a href="search_link.php">'.$row['id'].'</a></td>
                    <td>'.$row['recipe_name'].'</td>
                    <td>'.$row['shape_name'].'</td>
                    <td>'.$row['recipe_type'].'</td>
                  </tr>';
                  
        }
        echo '</tbody></table>';
    } else {
        echo '<h1>data not found</h1>';
    }

    // Close the connection
    $mysqli->close();
}
?>
      </form>
    </div>
    
    
    <style>

.image img  {
  height: 30%;
  width: 80%;
  position: relative;
  left: 100px;
  top: 60px;
 box-shadow: 0px 10px 50px 0px;
  border-radius: 20px;
  
}
      .image h1{
        position: relative;
        text-align: center;
        font-size: 70px;
        font-family: Times New Roman;
        color: red;
        text-shadow: 20px 0px 20px black;
      }
    </style>
     <!--Heading recipe  -->
      <div class="image">
    <h1>Biryani Recipe</h1>
 <!--saglyat varachi image ithe add keliye
     -->
       <img src="images/biryani.jpg">
      </div>

<div class="design">
  <h1>ingrediunts</h1>
 <h4> 
3 Cubes
MAGGI Magic Cubes Chicken (Crumbled)
 <br>
4
Tablespoons
Ghee
 <br>
2
Cinnamon (1 Inch Pieces)
 <br>
6
 
Cloves (Coarsely Crushed)
 <br>
2
 
Green Cardamom (Coarsely Crushed)
 <br>
1
 
Star Anise (Coarsely Crushed)
 <br>
1
 
Teaspoon
Whole Peppercorns (Coarsely Cushed)
 <br>
1
 
Black Cardamom (Coarsely Crushed)
 <br>
2
 
Onion (Sliced)
 <br>
1
 
Teaspoon   
Ginger-Garlic Paste
 <br>
1
 
Teaspoon
Red Chilli Powder
 <br>
0.5
 
Teaspoon
Turmeric Powder
 <br>
4
 
Teaspoons
Coriander Powder
 <br>
2
 
Tomato (Sliced) <br>
500


gms
Chicken (Cut Into Small Pieces) <br>
3.5
 
Cups
Water <br>
1.35
 
Cups
Rice <br>
1
 
Pinch
Salt <br>
3
 
Tablespoons
Coriander Leaves (Chopped) <br>
3
 
Tablespoons
Mint Leaves (Chopped)
  </h4>
</div>

<br><br>


<div class="design2">
  <h1> Instructions </h1>
  <h4>
1) Prepare ingredients as mentioned in the list.</h4>
<h4>2)Heat ghee in a pan, and add cinnamon, cloves, green cardamom, star anise, whole peppercorns and black cardamom. Then, add onions and sauté till golden-brown.</h4>

<h4>3) Add the ginger-garlic paste and sauté till the raw smell is gone. Add the red chilli powder, turmeric powder and coriander powder. Sauté for a minute</h4>
<h4>4) Add tomatoes and sauté till they are well-cooked. Then, add the chicken pieces and sauté for 5 minutess.</h4>
<h4>5) Add water, crumbled MAGGI Magic Cubes (Chicken), mint leaves and coriander leaves. Mix well and add salt to taste. Add the rice when the water starts to boil.</h4>
<h4> 6) Lower the flame, cover and cook till the rice and chicken are done.<br>
7) Serve hot with raita.</h4>
</div>





   
   <br> <br> <br> <br><br> <br><br><br><br>
   <?php
   
   
include 'config.php';

$error = array();

if(isset($_POST['submit'])){
   $comment = mysqli_real_escape_string($conn, $_POST['comment']);

   if(empty($comment)){
      $error[] = 'Please enter a comment';
   } else {
      $insert = "INSERT INTO user_comment (comment) VALUES ('$comment')";
      mysqli_query($conn, $insert);
     // header('Location: login_form.php');
   }

   
      // Fetch comments from database and display them
      $query = "SELECT * FROM user_comment ORDER BY id DESC";
      $result = mysqli_query($conn, $query);

      if(mysqli_num_rows($result) > 0) {
         echo '<div class="comment-container">';
         while($row = mysqli_fetch_assoc($result)) {
            echo '<div class="comment">'.htmlspecialchars($row['comment']).'</div>';
         }
         echo '</div>';
      }
}
   ?>
   <div class="ak-comment">
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
         <h3>Your Anmol comment 😛</h3>
         <?php
            if(!empty($error)) {
               foreach($error as $msg) {
                  echo '<span class="error-msg">'.$msg.'</span>';
               }
            }
         ?>
         <input type="text" name="comment" required placeholder="Enter your comment">
         <button name="submit" class="form-com"> submit</button>
         
      </form>
   </div>

   
   
<footer>
    <div class="foot">
      <h1> Akash Gautam kamble</h1>
 <h1> Roll number 12151</h1>
 <h1>PRN No 13203210046</h1>
 <h1>@all right reserved for Ak</h1>
    </div></footer>
  </body>
</html>
