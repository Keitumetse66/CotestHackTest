<?php 
    include_once('php/config.php');

?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>finale</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
	<link rel="stylesheet" href="assets/css/styles2.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js">

</head>
<style>
body
{
    background-color: azure;
}



</style>

<body>
	    <div id="promos">
        
            
            
        </div>
    </div>
	

    <div>
        <nav class="navbar navbar-dark navbar-expand-md bg-danger navigation-clean-button">
            <div class="container"><a class="navbar-brand" href="#">Uneswa campus</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse"
                    id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="#">Home</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#">Second Item</a></li>
                        <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Dropdown </a>
                            <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                        </li>
                    </ul><span class="navbar-text actions"> <a href="#" class="login"></a><a class="btn btn-light action-button" role="button" href="landing.php?logout='1'">Log out</a></span></div>
            </div>
        </nav>
    </div>


	<br>
    
    <div id="events-section">
        <!-- displays the success msg to the user --->
        <?php if (isset($_SESSION['success'])):     ?>
            <h4>
                <?php 
                
                echo $_SESSION['success'];
                    unset($_SESSION['success']);
                ?>
            </h4>
        <?php endif ?>

        <!-- echoes the user's username and a welcome msg-->
            <?php if (isset($_SESSION['username'])):      ?>
                <p>Welcome<strong><?php echo $_SESSION['username']; ?></strong></p>
            <?php  endif   ?>

        <h1 style="text-align: center;">Events offered</h1>
        <br>
        <div id="empresa" style="padding:20px;margin:1px;">
            <div class="container site-location" id="trail">
                <div class="row">
                    <div class="col-sm-6 col-md-7 col-lg-7">
                        <h1>Computer Networking</h1>
                        <p>This test is designed to test your networking skills and how well your problem solving skills are. The 
                            duration of the test is half an hour. Once u cick select button you have no return button. only two tries are allowed </p>
                            <div id="site-cover"></div>
                            <button class="btn btn-primary" type=button>Take test</button>
                    </div>
                    <div class="col-sm-6 col-md-5 col-lg-5"><img src="assets/img/networking.jpg"></div>
                </div>
            </div>
        </div>
        <div id="empresa" style="padding:20px;margin:1px;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-7 col-lg-7">
                        <h1>PC Assembling</h1>
                        <p>Teams are expected to be of either one or two. Each team will be given a pc to dissasemble and reassemble the machinery with baring in mind &nbsp;&nbsp;</p>
                        <div id="site-cover"></div>
                        <button class="btn btn-primary" type=button>Take test</button>
                    </div>
                    <div class="col-sm-6 col-md-5 col-lg-5"><img src="assets/img/asseble.jpg"></div>
                </div>
            </div>
        </div>
        <div id="empresa" style="padding:20px;margin:1px;"></div>
        <div id="empresa" style="padding:20px;margin:1px;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-7 col-lg-7">
                        <h1>Computer programming</h1>
                        <p><br>Teams are expected to be of either one or two. each team will be given a pc to dissasemble and reassemble the machinnery with baring in mind<br>Teams are expected to be of either one or two. each team will be given a pc to dissasemble
                            and reassemble the machinnery with baring in mind<br>Teams are expected to be of either one or two. each team will be given a pc to dissasemble and reassemble the machinnery with baring in mind<br>Teams are expected to be of either
                            one or two. each team will be given a pc to dissasemble and reassemble the machinnery with baring in mind<br><br></p>
                            <div id="site-cover"></div>
                            <button class="btn btn-primary" type=button>Take test</button>
                        </div>
                    <div class="col-sm-6 col-md-5 col-lg-5"><img src="assets/img/asseble.jpg"></div>
                </div>
            </div>
        </div>
    

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-4 footer-navigation">
                        <h3><a href="#">UNESWA</a></h3>
                        <p class="links"><a href="#">Home</a><strong> · </strong><a href="#">Parnters &amp; Ponsors</a><strong> · </strong><a href="#">Exhibitors</a><strong> · </strong><a href="#">About</a><strong> &nbsp;· </strong><a href="#">Contact</a></p>
                        <p class="company-name">Uneswa © 2021</p>
                    </div>
                    <div class="col-sm-6 col-md-4 footer-contacts">
                        <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                            <p>Manzini, kwaluseni</p>
                        </div>
                        <div><i class="fa fa-phone footer-contacts-icon"></i>
                            <p class="footer-center-info email text-left"> +2 505 234 455</p>
                        </div>
                        <div><i class="fa fa-envelope footer-contacts-icon"></i>
                            <p> <a href="#" target="_blank">uneswa@gmail.com</a></p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-4 footer-about">
                        <h4>About the univesity</h4>
                        <p>To get more information on the university and if you want to apply for learning purposes , you should visit our main site for more information</p>
                        <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-github"></i></a></div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
	</body>
	</html>