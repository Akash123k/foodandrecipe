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
    <h1>chicken Roll recipe</h1>
 <!--saglyat varachi image ithe add keliye
     -->
       <img src="images/chicken-roll.jpg">
      </div>

<div class="design">
  <h1>ingrediunts</h1>
 <h4> 200 grams chopped into cubes chicken</h4>
<h4>1 large thinly sliced onion</h4>
<h4>1 cup shredded mozzarella cheese</h4>
<h4>2 medium chopped green chilli</h4>
<h4>Olive oil</h4>
<h4>1/2 pinch red chilli powder</h4>
<h4>2 pinches garam masala powder

  </h4>
  <h4>1 lemon wedges
1/2 cut into strips cucumber</h4><h4>
1 teaspoon tomato ketchup</h4><h4>
1/2 tablespoon chopped coriander leaves</h4><h4>
1 tablespoon green chilli sauce</h4>
</div>

<br><br>


<div class="design2">
  <h1> Instructions </h1>
  <h4>
1) For preparing this easy snack recipe, take a glass bowl and add coriander powder, black pepper, garlic paste, cumin powder, low fat yoghurt, turmeric and ginger paste in it. Mix well. Add the freshly washed chicken pieces in the bowl and marinate them with the already added ingredients. Keep aside for minimum 1 hour or more.</h4>
<h4>2)Now heat oil in a frying pan over moderate flame. Add sliced onions and sauté them on medium flame until light brown in colour. Then add chopped tomatoes and cook for 2-3 minutes. Then add the marinated chicken pieces. Mix well, cover and cook on low flame for 10 minutes. Keep stirring in between. Add ½ cup of water.</h4>

<h4>3)Cover and cook until the chicken is done, stir in between. If the chicken is drying too much, sprinkle some more water. Once done add garam masala powder. Mix well and remove from heat. Keep it aside.</h4>

<h4>4) For the dough, mix well all purpose flower, vegetable oil and salt. Now add water slowly, and knead a very smooth dough. Make 3 or 4 equal sized balls out of it. On a lightly floured surface, roll out each ball into a round paratha (the thickness should be little bit more than the regular chapatis or rotis).</h4>
<h4>5) Heat a tawa on moderate flame and cook the paratha one at a time. Flip and cook both sides without oil first (cook for a minute in total), now add 1 tbsp oil for each side. Flip and cook until light brown spot appears. Avoid too much flipping as the parathas may get hard. Remove from heat and keep the parathas aside.</h4>
<h4>6) Now on a hot paratha, arrange some cooked chicken pieces in a row (make this line little apart from the centre). Drizzle some lemon juice all over the chicken pieces, garnish with some sliced onions, cucumber and chopped coriander leaves. Add few drops of tomato ketchup and chili sauce.</h4>
<h4> 7) Roll the paratha firmly and wrap one half of the roll with tissue paper. Fold the bottom part of the tissue paper inside the roll. Your street style ‘Chicken Roll’ is ready to eat. Enjoy!</h4>
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
         <h3>Your  comment 😛</h3>
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
