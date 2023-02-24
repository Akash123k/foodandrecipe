<?php
include 'config.php';
?>
<html>
  <head>
    <title>search item </title>
    <link rel="stylesheet"    href="css/search.css">
<link rel="stylesheet"    href="css/recipe_details.css"> <link rel="stylesheet"    href="css/search.css">
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
    <h1> Stobary cake</h1>
 <!--saglyat varachi image ithe add keliye
     -->
       <img src="images/stobary.jpg">
      </div>

<div class="design">
  <h1>ingrediunts</h1>
 <h4>500g of fish fillets (any firm white fish such as cod, tilapia, or catfish)</h4>
<h4>1/2 teaspoon turmeric powder,</h4>
<h4>1 teaspoon red chili powder
<h4>1 teaspoon cumin powder</h4>
<h4>1 teaspoon coriander powder</h4>
<h4>1/4 cup rice flour or corn flour
Oil for frying</h4>
<h4>Lemon wedges, for garnish
  </h4>
  <h4> Fresh coriander leaves, for garnish
</h4>

</div>

<br><br>


<div class="design2">
  <h1> Instructions </h1>
  <h4>Clean the fish fillets and pat them dry with a paper towel.</h4>
<h4>2)In a small bowl, mix together the turmeric powder, red chili powder, cumin powder, coriander powder, garlic powder, ginger powder, and salt.</h4>

<h4>3)Sprinkle the spice mix over the fish fillets and rub it in with your fingers.</h4>

<h4>4) Let the fish marinate for 15-20 minutes.</h4>
<h4>5) Heat oil in a frying pan or a deep fryer over medium heat.</h4>
<h4>Spread the rice flour or corn flour on a plate.</h4>
<h4>Coat each fish fillet with the flour, making sure it is well coated on both sides.</h4>

<h4>When the oil is hot, carefully place the fish fillets in the oil and fry them until golden brown and crispy, turning them over once in between. This should take about 5-6 minutes.</h4>
<h4>Once the fish is cooked, remove them from the oil and place them on a paper towel-lined plate to drain excess oil</h4>
<h4>Serve the fish fry hot with lemon wedges and fresh coriander leaves. Enjoy!



</h4>
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
