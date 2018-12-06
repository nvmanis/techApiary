<?php
$connString = "mysql:host=localhost;dbname=techApiary";
$user = "cs310";
$pass = "cs310";

$pdo = new PDO($connString,$user,$pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$username = $_POST['username'];
$password = $_POST['password'];
$string = "SELECT `Username`, `Password` FROM `users` WHERE Username=". "'$username'" . " and Password=" . "'$password'";
$sql = $string;
$result = $pdo->query($sql);
if($result->fetchColumn()){
  echo("<script language='javascript' type='text/javascript'>window.location='home.php?username=$username'</script>");
}else{
  echo("<script language='javascript' type='text/javascript'>alert('No user found with this username and password'); window.location='login.php';</script>");
}
?>
