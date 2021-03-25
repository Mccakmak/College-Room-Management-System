<?php include('server.php') ?>


</form>

</body>
</html>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Send feedback</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/medipol.png">
    <link rel="stylesheet" href="new_navbar/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="new_navbar/assets/css/slicknav.css"><!--mobil için-->
    <link rel="stylesheet" href="new_navbar/assets/css/style.css">
    <link rel="stylesheet" href="reservation/footer.css">
    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="new_navbar/css/bootstrap.min.css" />

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="reservation/css/style.css" />

	
</head>
<body>


<?php 

$cur_user_email = $_SESSION['email'];
$cur_user_name = $_SESSION['name'];


$query = "SELECT * FROM reservation WHERE user_email='$cur_user_email' ";

$results = mysqli_query($db, $query);

?>

<?php  

$titles = array();

while($row = mysqli_fetch_array($results))
{

	array_push($titles,$row['title']);
} ?>

        <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header ">
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-3">
                                <div class="logo">
                                    <a href="index.html"><img src="new_navbar/assets/img/logo/logo.png" alt="" width="152"
                                            height="55"></a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-8 col-md-7 col-sm-5">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="new_navbar/index.php">Home</a></li>
                                            <li><a href="reservation/reservation.php">Reservation</a></li>
                                            <li><a href="modify_reservation.php">Modify Reservations</a></li>
                                            <li><a href="list_reservation.php">Past Reservations</a></li>
                                            <li><a href="feedback.php">Send Feedback</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-3 col-md-3 col-sm-3 fix-card">
                                <ul class="header-right f-right d-none d-lg-block d-flex justify-content-between">
                                    <li class="d-none d-xl-block">
                                        <div class="form-box f-right ">
                                            
                                        </div>
                                    </li>
                                    <li><p style="margin-top: 10px; margin-right: 20px;"><?php echo $_SESSION['name']; ?><p></li>
                                        <a style="margin-top: 10px; color: #000000" href="contact/contact.php">Contact</a>
                                    <li class="d-none d-lg-block"> <a href="login.php" class="btn header-btn">Sign Out</a></li>
                                </ul>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>

	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-push-7">
						<div class="booking-cta">
							<h1>Send Feedback</h1>
							
						</div>
					</div>
					<div class="col-md-4 col-md-pull-7">
						<div class="booking-form"style="width:700px">
							<form method="post" action="feedback.php">
								
								<div class="row" style="height: 500px;">
                                    <div class="col-sm-12">
									    
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                            <span class="form-label" style="font-size: 20px"  >Select Your Past Reservation</span>
                                            <select name="selected_title" class="form-control" style="font-size: 20px" >
                                            <option></option>
                                            <optgroup label="Select Title">

                                                <?php  foreach($titles as $title){?><option><?php 
                                                    echo $title;    
                                                }   ?></option>
                                            </optgroup>

                                            </select>


                                            <span class="select-arrow"></span>
                                            </div>
                                        </div>  
                                    </div>      
                                    </div>
									<div class="col-sm-12">    
                                        <div class="form-group">
                                            <span class="form-label"style="font-size: 20px">Your feedback:</span>
                                            <textarea class="form-control" required  name="feedback" style="font-size: 17px;height:200px" placeholder="Please write your feedbacks"  ></textarea>
                                        </div>   
                                    </div>
                                    
                                    <br>   
                                <div class="col-sm-12 ">
								    <div class="form-btn">
									<button name="send_feedback" class="submit-btn"style="font-size: 20px">Send Feedback</button>
                                    </div>
								</div>
                             </form>  
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

    

     <!-- Jquery, Popper, Bootstrap -->
    <script src="reservation/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="reservation/assets/js/popper.min.js"></script>
    <script src="reservation/assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="reservation/assets/js/jquery.slicknav.min.js"></script>  
    <!-- Jquery Plugins, main Jquery -->    
    <script src="reservation/assets/js/plugins.js"></script>
    <script src="reservation/assets/js/main.js"></script>	
    </body>


</html>