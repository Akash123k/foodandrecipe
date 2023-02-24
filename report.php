<?php
include 'config.php';

$sql = "SELECT id, recipe, shape, ingredient, procedure_recipe, calorie FROM add_recipe";
$result = mysqli_query($conn, $sql);

if ($result === false) {
    // Print the error message and exit
    echo "Error: " . mysqli_error($conn);
    exit;
}

if (mysqli_num_rows($result) > 0) {
    // Start the table
    echo "<table >";
    echo "<tr><th>Recipe</th><th>ID</th><th>Shape</th><th>Ingredient</th><th>Procedure</th><th>Calorie</th></tr>";
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        // Create a new table row for each record
        echo "<tr><td>" . $row["recipe"] . "</td><td>" . $row["id"] . "</td><td>" . $row["shape"] . "</td><td>" . $row["ingredient"] . "</td><td>" . $row["procedure_recipe"] . "</td><td>" . $row["calorie"] . "</td></tr>";
    }
    // End the table
    echo "</table>";
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
