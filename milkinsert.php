<?php

  if(! isset($_COOKIE["username"]))
           header("location:login-user.php");
?>
<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="design.css">
</head>
<body>
<?php
session_start();
$username = "root";
$password = "";
$database = $_COOKIE["username"];

$mysqli = new mysqli("localhost", $username, $password, $database);

$lit = $_POST['field2'];
$field1 = $mysqli->real_escape_string($_POST['field1']);
$field2 = $mysqli->real_escape_string($lit);

$original_date = "$field1";

$timestamp = strtotime($original_date);

$new_date = date("y-m-d", $timestamp);

$query = "INSERT INTO milkdata (day_date,litter)
          VALUES ('{$new_date}','{$field2}')";

$result = $mysqli->query($query);

if(!$result)
{

$_SESSION['milkdel'] = "  Record with same date already exist !";


}
if($result)
{

$_SESSION['milkinsert'] = "  Successfully inserted !";


}


$mysqli->close();

header('Location: milk.php');
?>
</body>
</html>