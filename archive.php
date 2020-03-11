[php]<?php include ‘connection.php’; ?>
<!DOCTYPE html>
<html lang="en">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Northern Stage</title>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="style.css" rel="stylesheet" type="text/css">
<link href="sb-admin-2.css" rel="stylesheet" type="text/css">
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


<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dashboard</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-instagram fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php

                                include "connect.php";
                                $result = mysqli_query("select count(*) as total from tbl_album where status='process'");
                                $data=mysqli_fetch_assoc($result);
                                echo $data['total'];
                                ?></div>
                            <div>Albums</div>
                        </div>
                    </div>
                </div>
                <a href="viewallalbums.php">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-file-photo-o fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">
                                <?php

                                include "connect.php";
                                $result = mysqli_query("select count(*) as total from tbl_gallery where status='process'");
                                $data=mysqli_fetch_assoc($result);
                                echo $data['total'];
                                ?></div>
                            <div>Gallery Images</div>
                        </div>
                    </div>
                </div>
                <a href="viewallgallery.php">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>

        <!-- /.row -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery Version 1.11.0 -->
<script src="js/jquery-1.11.0.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="js/plugins/metisMenu/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/sb-admin-2.js"></script>


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