<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "includes/db.php";

include_once "includes/header.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){

$username=trim($_POST['username']);
$password=trim($_POST['password']);

if(!empty($username) && !empty($password)){

$hash=password_hash($password,PASSWORD_DEFAULT);

$sql="INSERT INTO users(username,password)
VALUES(:username,:password)";

$stmt=$conn->prepare($sql);

$stmt->execute([

':username'=>$username,
':password'=>$hash

]);

header("Location: login.php");
exit();

}

}

?>

<h2>Register</h2>

<form method="POST">

<input
type="text"
name="username"
placeholder="Username"
required>

<input
type="password"
name="password"
placeholder="Password"
required>

<button type="submit">

Register

</button>

</form>

<?php include_once "includes/footer.php"; ?>