<?php ?>
<!DOCTYPE html>
<html>    
    <head>
        <title>Classy Furnish a Interior and Furniture Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
        <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Classy, Bootstrap" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //for-mobile-apps -->
        <link href="./css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="./css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link rel="stylesheet" href="./css/flexslider.css" type="text/css" media="screen" property="" />
        <!-- js -->
        <script type="text/javascript" src="./js/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="./js/move-top.js"></script>
        <script type="text/javascript" src="./js/easing.js"></script>
        <script defer src="./js/jquery.flexslider.js"></script>
        <script defer src="./js/index.js"></script>
    </head>
    <body>  
        <div class="header_top">
            <div class="header">
                <div class="wthree_menu">
                    <nav class="nav-west">              
                        <ul>
                            <li class="active">
                                <a href="index-2.html"><i class="glyphicon glyphicon-home" aria-hidden="true"></i><span>Home</span></a>
                            </li>
                            <li>
                                <a href="about.html"><i class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></i><span>About</span></a>
                            </li>
                            <li>
                                <a href="short-codes.html"><i class="glyphicon glyphicon-text-size" aria-hidden="true"></i><span>Short Codes</span></a>
                            </li>
                            <li>
                                <?php
                                if (MOBILE) {
                                    echo '<a href="#" onclick="loadPage(2)"><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><span>Galeria</span></a>';
                                } else if (DESKTOP) {
                                    echo '<a href="mail.html"><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><span>Galeria</span></a>';
                                }
                                ?>                                
                            </li>
                            <li>
                                <a href="mail.html"><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><span>Mail Us</span></a>
                            </li>
                        </ul>
                    </nav>
                    <div class="menu-icon"><span></span></div>
                </div>
                <div class="agile_logo">
                    <h1><a href="index-2.html"><span>C</span><i>Furnish</i></a></h1>
                </div>
                <div class="w3ls_search">
                    <form action="#" method="post">
                        <input type="text" name="Name" placeholder="Type to search..." required="">
                        <input type="submit" value=" ">
                    </form>
                </div>
                <?php
                if (DESKTOP) {
                    echo '<div class="agileits_mail_phone">';
                    echo '<ul>';
                    echo '<li><a href="mailto:info@example.com">info@example.com</a><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></li>';
                    echo '<li>(+000) 1234 423 23<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></li>';
                    echo '</ul>';
                    echo '</div>';
                }
                ?>
                <div class="clearfix"> </div>
            </div>
        </div>
