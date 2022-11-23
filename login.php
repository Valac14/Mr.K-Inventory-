<?php
//this script will handle login
session_start();

//check if the user is already logged in
if(isset($_SESSION['username'])){
    header("location: index.php");

}

require_once "config.php";
$username = $password = "";
$username_err = $password_err = "";

//if request method is post 
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(empty(trim($_POST['username'])) ||empty(trim($_POST['password']))){
        $err = "please enter username + password";

    }
    else{
        $username=trim($_POST['username']);
        $password=trim($_POST['password']);

    }
    if(empty($err)){
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn,$sql);
        mysqli_stmt_bind_param($stmt, "s", $param_username);
        $param_username= $username;

        //try to execute this statement
        if(mysqli_stmt_execute($stmt)){
            mysqli_stmt_store_result($stmt);
            if (mysqli_stmt_num_rows($stmt) == 1) {
                mysqli_stmt_bind_result($stmt,$id,$username,$hashed_password );
                if(mysqli_stmt_fetch($stmt)){
                    if(password_verify($password,$hashed_password)){
                        //password is correct allow user to log in. start sessions
                        session_start();
                        $_SESSION["username"]= $username;
                        $_SESSION["id"]= $id;
                        $_SESSION["loggedin"]= true;
                        

                        //redirect user to index page
                        header("location: index.php");
                    }
                }
            } 


        }

    }
}




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mr.K Inventory </title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="loginPage.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- header area -->

    <div class="header">
        <h1> Free Shipping inside Kathmandu</h1>
        <a href="#">cart</a>
        <a href="#">Log In</a>

    </div>


    <div class="topnav">
        <a class="active" href="#home">Home</a>
        <a href="#">Shop</a>
        <a href="#">My Cart</a>
        <a href="#">Checkout</a>
        <a href="#">About Us</a>
        <a href="#">Contact Us</a>

        <div class="search-container">
            <form action="/action_page.php">
                <input type="text" placeholder="Search.." name="search">


            </form>
        </div>
    </div>

    <!-- End header area -->

    <!-- log in form -->

    <form action="" method="post">
        <div class="imgcontainer">
            <img src="" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <button type="submit">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <a href="register.php" type="button" class="cancelbtn">Register</a>
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
    </form>



</body>
<script src="myscripts.js"></script>
<script src="sidenav.js"></script>

</html>