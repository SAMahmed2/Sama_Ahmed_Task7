<?php

require_once "includes/db.php";
include_once "includes/header.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){

$username=trim($_POST['username']);
$password=trim($_POST['password']);

$sql="SELECT * FROM users
WHERE username=:username";

$stmt=$conn->prepare($sql);

$stmt->execute([

':username'=>$username

]);

$user=$stmt->fetch(PDO::FETCH_ASSOC);

if($user){

if(password_verify($password,$user['password'])){

$_SESSION['username']=$user['username'];

header("Location: profile.php");

exit();

}else{

echo "<p style='color:red;'>Wrong Password</p>";

}

}else{

echo "<p style='color:red;'>User Not Found</p>";

}

}

?>

<h2>Login</h2>

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

Login

</button>

</form>

<?php include_once "includes/footer.php"; ?>