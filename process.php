<?php
 
require 'database.php';

print_r($_POST);

$conn    = Connect();

print_r($_POST);
$full_name    = $conn->real_escape_string($_POST['full_name']);
$email   = $conn->real_escape_string($_POST['email']);
$location    = $conn->real_escape_string($_POST['location']);
$recipe_name = $conn->real_escape_string($_POST['recipe_name']);

$traditional_name = $conn->real_escape_string($_POST['traditional_name']);
$description = $conn->real_escape_string($_POST['description']);
$servings = $conn->real_escape_string($_POST['servings']);
$prep_time = $conn->real_escape_string($_POST['prep_time']);

$cooking_time = $conn->real_escape_string($_POST['cooking_time']);
$category = $conn->real_escape_string($_POST['category']);
$special_1 = $conn->real_escape_string($_POST['special_1']);

$imagename=$_FILES["myimage"]["name"]; 
//Get the content of the image and then add slashes to it 
$imagetmp=addslashes (file_get_contents($_FILES['myimage']['tmp_name']));

$ingredients = $conn->real_escape_string($_POST['ingredients']);

$method = $conn->real_escape_string($_POST['method']);

$query   = "INSERT into recipes (full_name,email,location,recipe_name,traditional_name,description,servings,prep_time,cooking_time,category,special_1,imagetmp,ingredients,method) VALUES('" . $full_name . "','" . $email . "','" . $location . "','" . $recipe_name . "','" . $traditional_name . "','". $description . "','" . $servings . "','" . $prep_time . "','" . $cooking_time . "','" . $category . "','" . $special_1 . "','" . $imagetmp . "','" . $ingredients . "','" . $method . "')";
$success = $conn->query($query);
 
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
 
}


 
header('Location: thank_you.html');
exit; 

 
?>
