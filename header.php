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
<form action="includes/login.php" method="post">
    <input type="text" name="mailuid" placeholder="UserName">
    <input type="password" name="pwd" placeholder="Password">
    <button type="submit" name="login-submit">Login</button>
    </form>

<form action="includes/logout.php" method="post">
    <button type="submit" name="logout-submit">Logout</button>
</form>
</body>

<footer>
    <div class="footer">
      <div class="inner-footer">
          <div class="footer-items">
              <h1>Footer and codes and all that shit</h1>
              <p>sdfuhdsghdshgkjhfkdsjgjkdsfhgkjshkgdfhdsjkfhgs</p>
          </div>


        <div class="footer-items">
            <h2>dsfdsfsdfdsfdsf</h2>
            <div class="border">
                <ul>
                    <a href="#"><li>Home</li></a>
                    <a href="#"><li>Home</li></a>
                    <a href="#"><li>Home</li></a>
                    <a href="#"><li>Home</li></a>
                    <a href="#"><li>Home</li></a>
                </ul>
            </div>
        </div>



        <div class="footer-items">
            <h2>Contact us</h2>
            <div class="border">
                <ul>
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i>Enter the address</li>
                    <li><i class="fa fa-phone" aria-hidden="true"></i>0784766702</li>
                    <li><i class="fa fa-envelope" aria-hidden="true"></i>mackenzie050598@gmail.com</li>
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i>Enter the address</li>
                </ul>

                <div class="social-media">
                    <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-youtube" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>

                </div>
            </div>

        </div>

            <div class="footer-items">
                <h2>Admin Log in</h2>
                <div class="border">
                    <ul>
                        <a href="#"><i class="fa fa-sign-in" aria-hidden="true">Click here to log in</i></a>

                    </ul>
                </div>
            </div>
      </div>


    </div>


</footer>



    </body>

<script src="Java.js"></script>
</html>