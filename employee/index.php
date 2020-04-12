<?php 
session_start();
	if(isset($_SESSION['empusername']))
				{
					//echo "okey stay";
				}
			else
				{
					header('location:../');
				}
require '../dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
        <title>Welcome <?php echo $_SESSION['empusername']; ?></title>
<link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--<script src="../js/jquery.min.js"></script>-->
<script src="../js/jquery-1.8.3.js"></script>
 <!-- Custom Theme files -->
<link rel="stylesheet" type="text/css" href="../css/style2.css">
<link href="../css/style.css" rel='stylesheet' type='text/css' />
 <!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!----webfonts--->
<!--<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css' />-->
<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,900italic,900,700italic,700,500italic,500,400italic' rel='stylesheet' type='text/css' />

    </head>
<body>

<div class="header  about-head "  >
        <div class="container">

                <div class="logo">
                    <img src="../images/logo45.png" alt="Logo"  /> <a href="../index.php"><span></span>DCS</a>
                </div>
                
<div class="top-nav">
    <span class="menu"> </span>
    <ul>
        <li ><a href="index.php">Home</a></li>
        <!--<li ><a href="faq.php">FAQ</a></li>-->
        <li ><a href="../contact.php">Contact</a></li>
                <li ><a href="../login.php">Login</a></li>
        <li ><a href="../register.php">Register</a></li>
            </ul>
</div>
<div class="clearfix"> </div>
<!--- top-nav ----->
        <!----- script-for-nav ---->
<script>
        $( "span.menu" ).click(function() {
          $( ".top-nav ul" ).slideToggle( "slow", function() {
            // Animation complete.
          });
        });
</script>
<!----- script-for-nav ---->
        </div>
    </div>
<!---- header ----->
<!------ about ---->
<div class="about">
    <!--- bradcrumbs ---->
    <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs-left">
                <h1>Welcome, <?php 
                            $un=$_SESSION['empusername'];
                            $query="select * from empuserinfo where username='$un'";
                            $query_run=mysqli_query($con,$query);
                            $row = mysqli_fetch_array($query_run);
                            echo $row['pname'];
                            ?></h1>
            </div>
            <div class="breadcrumbs-right">
                <ul>
                    <li><a href="index.php">Employee</a> <label>:</label></li>
                    <li>Home</li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!--- bradcrumbs ---->
</div>
<div class="about-top-grids">
    <div class="container">
        <!---- about-grids ---->
        <div class="about-grids">
            <div class="about-grids-row1">
            
	                   <div id="abc">
							<center><h2>What are you here for?</h2></center>
							<center><img class="avatar" src="../images/avatar.jpg"></center>
							<form class="myform" action="index.php" method="post">
                                <br>
                                <a href="updateloc.php"> <input type="button" id="register-button" value="Update Location" /> </a>
                                <br>
                                <a href="addcons.php"><input type="button" name="addc" id="logout-button" value="Attend Pick Up" /></a>
								<br>
								<a href="deliver.php"> <input type="button" id="register-button" value="Deliver Item" /> </a>
                                <br>
								<input type="submit" name="logout" id="logout-button" value="Logout" />
								<br>	</form>
								<?php
								
								if(isset($_POST['logout']))
								{ 
										if(isset($_SESSION['empusername']))
											{
											$_SESSION = [];
											session_destroy();
											}
											header('location:index.php');
								}
								?>	
						</div>
            </div>
        </div>
        <!---- about-grids ---->
        
    </div>
<!------ about ---->
</div>

<div class="footer">
    <div class="top-footer">
            <div class="container">
                    <div class="top-footer-grids">
                            <div class="top-footer-grid">
                                    <h3>Contact us</h3>
                                    <ul class="address">
                                        <li><span class="map-pin"> </span><label>T.N Nagar <br>Palanipet <br>Near Railway station, Arakkonam TN (631002) </label></li>
                                        <li><span class="mob"> </span>Ph & Fax no - 044 225650, Mob- 8056320993</li>
                                        <li><span class="msg"> </span><a href="#">hello@dcs.in</a></li>
                                    </ul>
                            </div>
                            <div class="top-footer-grid">
                                    <h3>Important Links</h3>
                                    <ul class="latest-post">
                                        <li><a href="index.php">Home</a> </li>
                                         
                                        <li><a href="register.php">Register</a> </li>
                                        <li><a href="login.php">Login</a> </li>
                                    </ul>
                            </div>
                            <div class="top-footer-grid">
                                    <h3>Other Links</h3>
                                    <ul class="latest-post">
                                        <li><a href="about-us.php">About Us</a> </li>
                                        <li><a href="privacy-policy.php">Privacy Policy</a> </li>
                                        <li><a href="terms-and-condition.php">Terms & Conditions</a> </li>
                                        <li><a href="faq.php">Help & FAQs</a> </li>
                                        <li><a href="contact.php">Contact Us</a> </li>
                                    </ul>
                            </div>
                            <div class="clear"> </div>
                    </div>
            </div>
    </div>
    <!----start-bottom-footer---->
    <div class="bottom-footer">
            <div class="container"> 
                    <div class="bottom-footer-left">
                        
                             <p> &copy; 2017 DCS.in. All rights reserved | Powered by: <a href="https://www.facebook.com/profile.php?id=100012111486045" target="_blank">Hacker Technologies</a>  <a href="admin">admin</a></p>

                    </div>
                    <div class="clear"> </div>
            </div>
    </div>
    <!----//End-bottom-footer---->
</div>
	</body>
</html>
