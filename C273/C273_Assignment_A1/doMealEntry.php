<?php
session_start();
include './dbFunctions.php';

$username = $_SESSION['username'];
$food = $_POST['food'];
$calorie = $_POST['calorie'];
$fat = $_POST['fats'];

$query = "SELECT id FROM user WHERE username=$username";
$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);
$id = $row['id'];

$query = "INSERT INTO food_entry(food_id, user_id, calorie, fat_in_gram)
VALUES ($food, $id, $calorie, $fat)";
$result = mysqli_query($link, $query);

if ($result == 1) {
  echo "success";
  echo "<meta http-equiv='refresh' content='2; url=./index.php'/>";
} else {
  echo "failure";
  echo "<meta http-equiv='refresh' content='2; url=./mealEntry.php'/>";
}
?>
