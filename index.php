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
    <a href="login_form.php">login</a>
    <a href="vege_recipe.php">Veg-recipe</a>
    <a href="nonvege_recipe.php">nonvege-recipe</a>
    <a href="cake.php">cacke recipe</a>
    <a href="feedback.php">Contact</a>
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
    
    <div class="backd">
       
    <div class="akash">
      <div class="ak"> <p>In a large mixing bowl, combine <br>the flour, salt, and sugar.In a separate small bowl,<br> dissolve the yeast in the warm water and let..... <a href="recipe_detail.php">  <span>Read more</span></a></p>
        <img src="images/f1.jpg">
        <h1>delecious pizza recipe</h1>
       
      </div>
    </div>
    
    <div class="akash">
      <div class="ak"> <p>Heat ghee in a pan, and add <br>cinnamon, cloves, green cardamom, <br>star anise, whole peppercorns and black cardamom......<a href="1ng-biryani.php"><span>Read more</span></a></p>
        <img src="images/biryani.jpg">
        <h1>chicken biryani</h1>
       
      </div>
    </div>
 <div class="akash">
      <div class="ak"> <p>IFoil the Tandoor plate and grease<br> it with butter. Preheat tandoor <br>for 2 to 3 minutes at 210<br> degrees Fahrenheit or 100 degrees Celsius.....<a href="3ng_tandur.php"><span>Read more</span></a></p>
        <img src="images/tandur.jpg">
        <h1>chicken Tandur</h1>
       
      </div>
    </div>
 <div class="akash">
      <div class="ak"> <p>In a large mixing bowl, combine <br>the flour, salt, and sugar.In a separate small bowl,<br> dissolve the yeast in the warm water and let.....<a href="1c_stobary.php"><span>Read more</span></p>
        <img src="images/stobary.jpg">
        <h1>stobary cake</h1>
       
      </div>
    </div> 
    <div class="akash">
      <div class="ak"> <p>For preparing this easy snack recipe, take a glass bowl and add coriander powder, black pepper, garlic paste, cumin powder, low fat yoghurt, turmeric and ....<span>Read more</span></p>
        <img src="images/chicken-roll.jpg">
        <h1>chicken Roll</h1>
       
      </div>
    </div>
    
    
    </div><div class="akash">
      <div class="ak"> <p>In a large mixing bowl, combine <br>the flour, salt, and sugar.In a separate small bowl,<br> dissolve the yeast in the warm water and let.....<a href="2c_chocolate.php"><span>Read more</span></a></p>
        <img src="images/chocolate.jpg">
        <h1>chocolate</h1>
       
      </div>
    </div>
    
<div class="akash">
      <div class="ak"> <p>In a large mixing bowl, combine <br>the flour, salt, and sugar.In a separate small bowl,<br> dissolve the yeast in the warm water and let.....<a href="2ng_chicken_roll.php"><span>Read more</span></a></p>
        <img src="images/chicken-roll.jpg">
        <h1>chicken-roll</h1>
       
      </div>
    </div>
    
<div class="akash">
      <div class="ak"> <p>In a large mixing bowl, combine <br>the flour, salt, and sugar.In a separate small bowl,<br> dissolve the yeast in the warm water and let.....<a href="2veg_biryani.php"><span>Read more</span></a></p>
        <img src="images/veg_biryani.jpg">
        <h1>veg biryani</h1>
       
      </div>
    </div>
    
    
<div class="akash">
      <div class="ak"> <p>In a large mixing bowl, combine <br>the flour, salt, and sugar.In a separate small bowl,<br> dissolve the yeast in the warm water and let.....<a href="3c_vanela.php"><span>Read more</span></a></p>
        <img src="images/vanela.jpg">
        <h1>vanela cake</h1>
       
      </div>
    </div>
<div class="akash">
      <div class="ak"> <p>In a large mixing bowl, combine <br>the flour, salt, and sugar.In a separate small bowl,<br> dissolve the yeast in the warm water and let.....<a href="3ng_tandur.php"><span>Read more</span></a></p>
        <img src="images/tandur.jpg">
        <h1>Tandur</h1>
       
      </div>
    </div>
<div class="akash">
      <div class="ak"> <p>In a large mixing bowl, combine <br>the flour, salt, and sugar.In a separate small bowl,<br> dissolve the yeast in the warm water and let.....<a href="3veg_pulav.php"><span>Read more</span></a></p>
        <img src="images/chocolate.jpg">
        <h1>Veg pulav</h1>
       
      </div>
    </div><div class="akash">
      <div class="ak"> <p>In a large mixing bowl, combine <br>the flour, salt, and sugar.In a separate small bowl,<br> dissolve the yeast in the warm water and let.....<a href="4c_banana.php"><span>Read more</span></a></p>
        <img src="images/banana.jpg">
        <h1>banana cake</h1>
       
      </div>
    </div>
    
<div class="akash">
      <div class="ak"> <p>In a large mixing bowl, combine <br>the flour, salt, and sugar.In a separate small bowl,<br> dissolve the yeast in the warm water and let.....<a href="4ng_eggbiryani.php"><span>Read more</span></a></p>
        <img src="images/egg.jpg">
        <h1>egg biryani</h1>
       
      </div>
    </div><div class="akash">
      <div class="ak"> <p>In a large mixing bowl, combine <br>the flour, salt, and sugar.In a separate small bowl,<br> dissolve the yeast in the warm water and let.....<a href="4veg_idali.php"><span>Read more</span></a></p>
        <img src="images/idali.jpg">
        <h1>idali</h1>
       
      </div>
    </div>
    
<div class="akash">
      <div class="ak"> <p>In a large mixing bowl, combine <br>the flour, salt, and sugar.In a separate small bowl,<br> dissolve the yeast in the warm water and let.....<a href="5c_pineapple.php"><span>Read more</span></a></p>
        <img src="images/chocolate.jpg">
        <h1>pineapple cake</h1>
       
      </div>
    </div>
    
<div class="akash">
      <div class="ak"> <p>In a large mixing bowl, combine <br>the flour, salt, and sugar.In a separate small bowl,<br> dissolve the yeast in the warm water and let.....<a href="5ng_fishfry.php"><span>Read more</span></a></p>
        <img src="images/fish.jpg">
        <h1>fish fry</h1>
       
      </div>
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
