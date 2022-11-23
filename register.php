<?php
require_once "config.php";
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //check if user name is empty 
    if (empty(trim($_POST["username"]))) {
        $username_err = "username is blank";
    } else {
        $sql = "SELECT id FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            //set the value of param username
            $param_username = trim($POST['username']);

            //try to execute this statement 
            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $username_err = "This username is already taken";
                } else {
                    $username =trim($_POST['username']);

                }
            } else {
                echo "something went wrong";
            }

        }
    }
    mysqli_stmt_close($stmt);



    //check for password
    if (empty(trim($_POST['password']))) {
        $password_err = "Password cannot be blank";

    } elseif (strlen(trim($_POST['password'])) < 5) {
        $password_err = "password must be more than 5 charaters";

    } else {
        $password = trim($_POST['password']);
    }

    //check for confirm password fied

    if (trim($_POST['password']) != trim($_POST['confirm_password'])) {
        $password_err = "passwords should match";
    }


    // if there were no errors, go ahead and insert into the database
    if (empty($username_err) && empty($password_err) && empty($confirm_password_err)) {
        $sql = "INSERT INTO users (username, password ) VALUES (?,?)";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

            //set the parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT);
            //try to execute the query
            if (mysqli_stmt_execute($stmt)) {
                header("location:login.php");
            } else {
                echo "something went wrong!!";
            }

        }
        mysqli_stmt_close($stmt);

    }
    mysqli_close($conn);
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

    <form action=""  method="post" style="border:1px solid #ccc" >
        <div class="container">
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>

            <label for="email"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="confirm_password" required>

            <label>
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
            </label>

            <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

            <div class="clearfix">
                <a href="login.php" type="button" class="cancelbtn">Cancel</a>
                <br>
                <button type="submit" class="signupbtn">Sign Up</button>
            </div>
        </div>
    </form>



</body>
<script src="myscripts.js"></script>
<script src="sidenav.js"></script>

</html>