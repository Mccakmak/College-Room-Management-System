<?php include('server.php') ?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->



	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<link rel="shortcut icon" type="image/x-icon" href="new_navbar/assets/img/medipol.png">
    <link rel="stylesheet" href="new_navbar/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="new_navbar/assets/css/slicknav.css"><!--mobil için-->
    <link rel="stylesheet" href="assets_list/css/style.css">
    <link rel="stylesheet" href="footer.css">
	<!-- Bootstrap -->
	    <link type="text/css" rel="stylesheet" href="new_navbar/css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="reservation/css/style.css" />
    <title>T.C. ISTANBUL MEDIPOL UNIVERSITY </title>
    <link rel="stylesheet" href="list.css">


    
</head>
<body>

	<?php 

$cur_user_email = $_SESSION['email'];
$cur_user_name = $_SESSION['name'];



$query = "SELECT * FROM reservation WHERE user_email='$cur_user_email' ";

$results = mysqli_query($db, $query);
//room_no start_day start_month start_year start_time end_time event participant title


 ?>

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
    <h2 style="text-align: center; margin-left: 100px; color: #000066"><?php echo $cur_user_name;?>'s Past Reservations</h2> 
            <div class="back" style="margin-left: 300px; margin-bottom: 100px; margin-top: 50px;" >
   
            <table> 
               
                                      
    <tr> 
	<th>Room No </th>
	<th>Day </th> 
	<th>Month </th> 
	<th>Year </th> 
	<th>Start time</th> 
	<th>End time </th> 
	<th>Event </th> 
	<th>Participant Number</th>
	<th>Event Title </th> 
	</tr>

	<?php 


		while($row = mysqli_fetch_array($results))
		{?>
			
			<tr>
				<td><?php 
					echo $row['room_no'];?>
				</td>
				<td><?php 
					echo $row['start_day'];?>
				</td>
				<td><?php

                    if($row['start_month']==1)
                    {
                        echo "January";
                    }

                    if($row['start_month']==2)
                    {
                        echo "February";
                    }

                    if($row['start_month']==3)
                    {
                        echo "March";
                    }

                    if($row['start_month']==4)
                    {
                        echo "April";
                    }

                    if($row['start_month']==5)
                    {
                        echo "May";
                    }

                    if($row['start_month']==6)
                    {
                        echo "June";
                    }

                    if($row['start_month']==7)
                    {
                        echo "July";
                    }

                    if($row['start_month']==8)
                    {
                        echo "August";
                    }

                    if($row['start_month']==9)
                    {
                        echo "September";
                    }

                    if($row['start_month']==10)
                    {
                        echo "October";
                    }

                    if($row['start_month']==11)
                    {
                        echo "November";
                    }

                    if($row['start_month']==12)
                    {
                        echo "December";
                    }


					;?>
				</td>
				<td><?php 
					echo $row['start_year'];?>
				</td>
				<td><?php 
					echo $row['start_time']/60;?>
				</td>
				<td><?php 
					echo $row['end_time']/60;?>
				</td>
				<td><?php 
					echo $row['event'];?>
				</td>
				<td><?php 
					echo $row['participant'];?>
				</td>
				<td><?php 
					echo $row['title'];?>
				</td>											
			</tr>	

		<?php  } ?>
                                        
                                    </table>
                             
          	
						
			
	</div>


<!-- ##### Footer Area Start ##### -->
<footer class="footer-block">
            
    <div class="footer-left">
  <img src="https://sens.medipol.edu.tr/wp-content/uploads/2015/01/logo.png">
    
        <p class="footer-links">
            <a href="#">Home</a> |
            <a href="#">About</a> |
            <a href="#">Contact</a> |
            <a href="#">Map</a> 
        </p>

    </div>

    <div class="footer-center">
        <div>
            <i class="fa fa-map-marker"></i>
              <p><span>Kavacık Mahallesi, Ekinciler Caddesi No: 19, Kavacık Kavşağı </span>
                34810 Beykoz, İstanbul</p>
        </div>

        <div>
            <i class="fa fa-phone"></i>
            <p>444 85 44</p>
        </div>
        <div>
            <i class="fa fa-envelope"></i>
            <p><a href="mailto:support@polreserve.com">support@polreserve.com</a></p>
        </div>
    </div>
    <div class="footer-right">
        <p class="footer-company-about">
            <span>About </span>
            </p>
        <p class="footer-company-name">Copyright &copy; 2020 Istanbul Medipol University </p>
    </div>
</footer>
<!-- ##### Footer Area End ##### -->
</html>