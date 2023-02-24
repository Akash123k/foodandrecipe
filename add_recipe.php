<?php
include 'config.php';

if(isset($_POST['submit'])){

   $recipe = mysqli_real_escape_string($conn, $_POST['recipe']);
   $shape = mysqli_real_escape_string($conn, $_POST['shape']);
   $ingredient = mysqli_real_escape_string($conn, $_POST['ingredient']);
   $procedure = mysqli_real_escape_string($conn, $_POST['procedure_recipe']);
   $calorie = mysqli_real_escape_string($conn, $_POST['calorie']);

   $select = "SELECT * FROM add_recipe WHERE recipe = '$recipe' && shape = '$shape' && ingredient = '$ingredient' && procedure_recipe = '$procedure' && calorie = '$calorie'";

   $result = mysqli_query($conn, $select);

  /* if(mysqli_num_rows($result) > 0) {
      echo "Recipe already exists in the database.";
   } e*/
      $insert = "INSERT INTO add_recipe (recipe, shape, ingredient, procedure_recipe, calorie) VALUES ('$recipe', '$shape', '$ingredient', '$procedure', '$calorie')";
      mysqli_query($conn, $insert);
      echo "Recipe added successfully.";
   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>add recipe</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/recipe_add.css">

</head>
<body>

<div class="form-container">

   <form action="" method="post">
      <h3>add recipe</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         }
      }
      ?>
      <input type="text" name="recipe" required placeholder="recipe name">
      <input type="text" name="shape" required placeholder="shape name">
      <input type="text" name="ingredient" required placeholder="ingredient name">
      <input type="text" name="procedure_recipe" required placeholder="procedure stape wise">
      <input type="text" name="calorie" required placeholder="calorie">
      <input type="submit" name="submit" value="add now" class="form-btn">
      
      
   </form>

</div>

</body>
</html>
