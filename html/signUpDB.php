<?php
$connString = "mysql:host=localhost;dbname=techApiary";
$user = "cs310";
$pass = "cs310";

$pdo = new PDO($connString,$user,$pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$username = $_POST['username'];
$password = $_POST['password'];
$string = "SELECT `Username` FROM `users` WHERE Username=". "'$username'";
$sql = $string;
$result = $pdo->query($sql);
if($result->fetchColumn()){
  echo("<script language='javascript' type='text/javascript'>alert('There is already a user with that username and password please try again.'); window.location='signUp.php';</script>");
}else{
  $string = "INSERT INTO `users`(`Username`, `Password`) VALUES (" . "'$username'" . "," . "'$password'" . ")";
  $sql = $string;
  $pdo->exec($sql);
  echo("<script language='javascript' type='text/javascript'>window.location='home.php?username=$username'</script>");
}
?>
