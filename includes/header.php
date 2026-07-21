<?php
session_start();
?>

<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<title>PHP Task</title>

<style>

body{
    font-family: Arial, sans-serif;
    margin: 0;
    background: #f5f7fb;
}

nav{
    background: white;
    padding: 18px 40px;
    display: flex;
    justify-content: flex-end;
    align-items: center;
    gap: 25px;
    box-shadow: 0 2px 10px rgba(0,0,0,.08);
}

nav a{
    text-decoration: none;
    color: #5c5470;
    font-weight: bold;
    transition: .3s;
    padding: 8px 15px;
    border-radius: 8px;
}

nav a:hover{
    background: #e8eaf6;
    color: #3f3d56;
}

nav span{
    color: #3f3d56;
    font-weight: bold;
    background: #ece7ff;
    padding: 8px 15px;
    border-radius: 8px;
}

.container{
    width: 400px;
    margin: 70px auto;
    background: white;
    padding: 35px;
    border-radius: 15px;
    box-shadow: 0 8px 20px rgba(0,0,0,.08);
}

h2{
    text-align: center;
    color: #3f3d56;
    margin-bottom: 25px;
}

input{
    width: 100%;
    padding: 12px;
    margin-bottom: 18px;
    border: 1px solid #dcdcdc;
    border-radius: 8px;
    outline: none;
    transition: .3s;
    font-size: 15px;
}

input:focus{
    border-color: #8e8ffa;
    box-shadow: 0 0 8px rgba(142,143,250,.3);
}

button{
    width: 100%;
    padding: 12px;
    background: #8e8ffa;
    color: white;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-size: 15px;
    font-weight: bold;
    transition: .3s;
}

button:hover{
    background: #7476f3;
    transform: translateY(-2px);
}

button:active{
    transform: scale(.98);
}

p{
    text-align: center;
    color: green;
}
</style>

</head>

<body>

<nav>

<a href="index.php">Home</a>

<?php if(isset($_SESSION['username'])){ ?>

<span><?php echo $_SESSION['username']; ?></span>

<a href="logout.php">Logout</a>

<?php } else { ?>

<a href="register.php">Register</a>

<a href="login.php">Login</a>

<?php } ?>

</nav>

<div class="container">
