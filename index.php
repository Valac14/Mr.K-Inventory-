<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo "Mr.Kancha";
        echo "Inventory"; ?>
    </title>
    <link rel="stylesheet" href="styles.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- header area -->

    <div class="header">
        <h1> Free Shipping inside Kathmandu</h1>
        <a href="#">cart</a>
        <!-- Button to open the modal login form -->
        <a><button onclick="document.getElementById('id01').style.display='block'">Login</button></a>
        <!-- The Modal -->
        <div id="id01" class="modal">
            <span onclick="document.getElementById('id01').style.display='none'" class="close"
                title="Close Modal">&times;</span>

            <!-- Modal Content -->
            <form class="modal-content animate" action="/action_page.php">
                <div class="imgcontainer">
                    <img src="img/avatar.jpg" alt="Avatar" class="avatar">
                </div>

                <div class="container">
                    <label for="uname"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="uname" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>

                    <button type="submit">Login</button>
                    <label>
                        <input type="checkbox" checked="checked" name="remember"> Remember me
                    </label>
                </div>

                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('id01').style.display='none'"
                        class="cancelbtn">Cancel</button>
                    <span class="psw">Forgot <a href="#">password?</a></span>
                </div>
            </form>
        </div>


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
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>

    <!-- End header area -->


    <!-- Slider -->

    <div class="slideshow-container">

        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="img/h4-slide.png" style="width:100%">
            <div class="text">Caption Text</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="img/h4-slide3.png" style="width:100%">
            <div class="text">Caption Two</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="img/h4-slide7.png" style="width:100%">
            <div class="text">Caption Three</div>
        </div>

        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>




    <!-- End slider area -->
    <br>

    <!-- cards area -->
    <div class="row">
        <div class="column">
            <div class="card-box1">

                <p>Free Shipping</p>
            </div>
        </div>

        <div class="column">
            <div class="card-box2">

                <p>Secure Payment</p>
            </div>
        </div>

        <div class="column">
            <div class="card-box3">

                <p>30 Days Return</p>
            </div>
        </div>

        <div class="column">
            <div class="card-box4">

                <p>New Products</p>
            </div>
        </div>
    </div>

    <!-- content  area -->
    <br>
    <h1>New Drops!!!</h1>

    <br>

    <br>
    <!-- products area -->
    <div class="row-1">


        <div class="column-1">
            <div class="card-1">
                <img src="img/product-2.jpg" alt="Jane" style="width:100%" class="slider-img" />

                <div class="container">

                    <p class="title">Iphone 8</p>
                    <p>$999</p>
                    <p><button class="button">Add To Cart</button></p>

                </div>
            </div>
        </div>

        <div class="column-1">
            <div class="card-1">
                <img src="img/product-1.jpg" alt="Mike" style="width:100%" class="slider-img">
                <div class="container">

                    <p class="title">Nokia Lumia 1320</p>
                    <p>$899</p>
                    <p><button class="button">Add To Cart</button></p>

                </div>
            </div>
        </div>

        <div class="column-1">
            <div class="card-1">
                <img src="img/product-2.jpg" alt="John" style="width:100%" class="slider-img">
                <div class="container">

                    <p class="title">LG Leon</p>
                    <p>$400</p>
                    <p><button class="button">Add To Cart</button></p>

                </div>
            </div>
        </div>

        <div class="column-1">
            <div class="card-1">
                <img src="img/product-3.jpg" alt="John" style="width:100%" class="slider-img">

                <div class="container">

                    <p class="title">Samsung galaxy s5</p>
                    <p>$700</p>
                    <p><button class="button">Add To Cart</button></p>

                </div>
            </div>
        </div>

        <div class="column-1">
            <div class="card-1">
                <img src="img/product-4.jpg" alt="John" style="width:100%" class="slider-img">
                <div class="container">

                    <p class="title">Designer</p>
                    <p>$700</p>
                    <p><button class="button">Add To Cart</button></p>

                </div>
            </div>
        </div>




    </div>


    <!-- Log In Form -->

    <!-- Button to open the modal login form -->
    <button onclick="document.getElementById('id01').style.display='block'">Login</button>

    <!-- The Modal -->
    <div id="id01" class="modal">
        <span onclick="document.getElementById('id01').style.display='none'" class="close"
            title="Close Modal">&times;</span>

        <!-- Modal Content -->
        <form class="modal-content animate" action="/action_page.php">
            <div class="imgcontainer">
                <img src="img_avatar2.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <button type="submit">Login</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id01').style.display='none'"
                    class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </form>
    </div>


</body>
<script src="myscripts.js"></script>


</html>