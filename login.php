<?php
require_once('database.php');
?>


<?php
    if (!isset($_SESSION)) {
        session_start();
    }
?> <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf8">
    <title>Log In</title>
    <link rel="icon" href="images/favicon.ico">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="contact_us.css">
</head>

<body>
    <div id="main">
        <img id="icon" src="images/icon.png">
        <a href="home.php"><img id="title_logo" src="images/title.png"></a><br>
        <!--Start Navigation Bar-->
        <nav id="text_nav" class="top_nav">
            <ul>
                <li class="li_left"><a href="home.php">Home</a></li>
                <li class="li_left"><a href="about_us.php">About Us</a></li>
                <li class="li_left"><a href="contact_us.php">Contact Us</a></li>
                <li class="li_right"><img id="pfp" src="images/profilepic.png">
                    <ul>
                        <?php 
                            if(!isset($_SESSION['first'])){?>
                            <?php 
                            if(!isset($_SESSION['first'])){?>
                            <li><a href="login.php">Sign Up/Log In</a></li> <!-- when logged in should be deactivated -->
                            <?php } ?>
                            <?php } ?>
                        <?php 
                            if(isset($_SESSION['first'])){?><li><a href="myAccount.php">My Account</a></li><?php } ?>
                        <?php 
                            if(isset($_SESSION['first'])){?>
                            <li><a href="logout.php">Log Out</a></li>
                            <?php } ?>
                    </ul>
                </li>
                <?php 
                            if(isset($_SESSION['first'])){?><li class="li_right"><a href="cart.php"><img id="cart" src="images/cart.png"></a></li><?php } ?>
            </ul>
        </nav>
        <!--End Navigation Bar-->
        
        <div id="contact_us">
            <div class="center">
                <img id="icon2" src="images/icon.png">
                <h1 class ="black no_top_margin">Welcome to Smoke Games</h1>
            </div>

                <form method="POST" action="process_login.php">
                <fieldset id="login_fieldset">
                    <div class="center_div">
                        <div class="name_div">
                            <input class="login_input" type="text" name="email" required autofocus placeholder="Email"> <br> 
                        </div><br>
                        <div class="name_div">
                            <input class="login_input" type="text" name="password" required placeholder="Password"> <br>
                        </div><br>
                        <div class="name_div">
                        <button class="login_button" type="submit" id="submit">Log In </button>
                        </div>
                        <br>
                        <?php 
                            if(@$_GET['Invalid']==true) { ?>
                                <div class="red"><?php echo $_GET['Invalid'];

                            }

                        ?></div>
                        <a href="registration.php" style="text-decoration:none;">  <p class="slategrey bold">Not a member yet? Sign up </p> </a>
                    </div><br>
            </fieldset>
            </form>
            <div id="social_media">
            <a href="#" ><img class="social_media" src="images/discord.png"></a>
            <a href="#" ><img class="social_media" src="images/reddit.png"></a>
            <a href="#" ><img class="social_media" src="images/twitter.png"></a>
            <a href="#" ><img class="social_media" src="images/instagram.png"></a>
            <br>
            <p>&copy; Smoke Games</p>
        </div>
        </div>      
    </div>

</body>
</html>