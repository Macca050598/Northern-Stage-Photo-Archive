<?php php session_start();
?>
<!DOCTYPE html>
<html lang="en">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Northern Stage</title>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="style.css" rel="stylesheet" type="text/css">
<title>Northern Stage</title>

<nav>
    <div class="Logo">
        <h4>Nothern Stage</h4> </div>

    <ul class="links-nav">
        <li><a href="#">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Archive</a></li>
        <li><a href="#">Help</a></li>
    </ul>
    <div class="mobileLines">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>
</nav>


<head>


<body>
<div class="login-box">
<form action="includes/login.php" method="post">
    <div class="textbox">
        <i class="fa fa-user" aria-hidden="true"></i>
        <input type="text" name="mailuid" placeholder="UserName">
    </div>
    <div class="textbox">
        <i class="fa fa-lock" aria-hidden="true"></i>
        <input type="password" name="pwd" placeholder="Password">
    </div>
    <button type="submit" name="login-submit">Login</button>
    </form>
</div>

</body>




<footer>
    <div class="footer">
        <div class="inner-footer">
            <div class="footer-items">
                <h1>Northern Stage</h1>
                <p>Northern Stage is a registered charity.</p>
                <p>A theatre where ideas meet, and futures change - where we reach beyond the ordinary every time.</p>
            </div>


            <div class="footer-items">
                <h2>Links Regarding Northern Stage</h2>
                <div class="border">
                    <ul>
                        <a href="index.php"><li>Home</li></a>
                        <a href="about.php"><li>About us</li></a>
                        <a href="archive.php"><li>Archive</li></a>
                        <a href="help.php"><li>Help</li></a>
                        <a href="https://www.northernstage.co.uk/"><li>Northern Stages website</li></a>
                    </ul>
                </div>
            </div>



            <div class="footer-items">
                <h2>Contact us</h2>
                <div class="border">
                    <ul>
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>Northern Stage Barras Bridge, Newcastle Upon Tyne, Tyne and Wear NE1 7RH</li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i>0191 230 5151</li>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i>info@northernstage.co.uk</li>
                    </ul>

                    <div class="social-media">
                        <a href="https://www.facebook.com/northernstage/?epa=SEARCH_BOX"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="https://twitter.com/northernstage"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="https://www.youtube.com/channel/UCV0PeJD-Fr38QGRBpXyHOmA"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>

                    </div>
                </div>

            </div>

            <div class="footer-items">
                <<?php
                if  (isset($_SESSION['userId'])){

                    echo '  <h2>Admin Log in</h2>
                <div class="border">
                   <ul>
                        <a href="loginform.php"><i class="fa fa-sign-in" aria-hidden="true">Click here to log in</i></a>
                    </ul>
                </div>';
                }
                else {
                    echo  '<form action="includes/logout.php" method="post">
         					<button type="submit" name="logout-submit">Logout</button>
						</form>';
                }
                ?>
            </div>
        </div>


    </div>


</footer>





<script src="Java.js"></script>
</html>