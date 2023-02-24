<?php
include 'config.php';
?>
<html>
  <head>
    <title>search item </title>
    <link rel="stylesheet"    href="css/search.css">
  </head>
  <body>

<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="index.php">Home</a>
    <a href="logout.php">login-out</a>
    <a href="add_recipe.php">add recipe</a>
    <a href="vege_recipe.php">Veg-recipe</a>
    <a href="nonvege_recipe.php">nonvege-recipe</a>
    <a href="cake.php">cacke recipe</a>
   <a href="feedback.php">feedback</a>
  </div>
</div>
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
                   <td><a href="article.php?id='.$row['id'].'">
'.$row['id'].'</a></td>
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
    
    
    
    <div class="akash">
      <div class="ak"> <p>In a large mixing bowl, combine <br>the flour, salt, and sugar.In a separate small bowl,<br> dissolve the yeast in the warm water and let..... <a href="recipe_detail.php">  <span>Read more</span></a></p>
        <img src="images/f1.jpg">
        <h1>delecious pizza recipe</h1>
       
      </div>
    </div>
    
    <div class="akash">
      <div class="ak"> <p>In a large mixing bowl, combine <br>the flour, salt, and sugar.In a separate small bowl,<br> dissolve the yeast in the warm water and let.....<span>Read more</span></p>
        <img src="images/biryani.jpg">
        <h1>chicken biryani</h1>
       
      </div>
    </div>
 <div class="akash">
      <div class="ak"> <p>In a large mixing bowl, combine <br>the flour, salt, and sugar.In a separate small bowl,<br> dissolve the yeast in the warm water and let.....<span>Read more</span></p>
        <img src="images/tandur.jpg">
        <h1>chicken Tandur</h1>
       
      </div>
    </div>
 <div class="akash">
      <div class="ak"> <p>In a large mixing bowl, combine <br>the flour, salt, and sugar.In a separate small bowl,<br> dissolve the yeast in the warm water and let.....<span>Read more</span></p>
        <img src="images/dhosa.jpg">
        <h1>Dhosa</h1>
       
      </div>
    </div> 
    <div class="akash">
      <div class="ak"> <p>In a large mixing bowl, combine <br>the flour, salt, and sugar.In a separate small bowl,<br> dissolve the yeast in the warm water and let.....<span>Read more</span></p>
        <img src="images/biryani.jpg">
        <h1>chicken biryani</h1>
       
      </div>
    </div><div class="akash">
      <div class="ak"> <p>In a large mixing bowl, combine <br>the flour, salt, and sugar.In a separate small bowl,<br> dissolve the yeast in the warm water and let.....<span>Read more</span></p>
        <img src="images/dhosa.jpg">
        <h1>Dhosa</h1>
       
      </div>
    </div> 
  </body>
</html>
