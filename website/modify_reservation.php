<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Room Reservation</title>

	<!-- Google font -->
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
$titles = array();


while($row = mysqli_fetch_array($results))
{
	array_push($titles,$row['title']);	
}
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

	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-push-5">
						<div class="booking-cta">
							<h1>Modify/Cancel Reservation</h1>
							
						</div>
					</div>
					<div class="col-md-4 col-md-pull-7">
						<div class="booking-form">
							<form method="post" action="modify_reservation.php">
								
								<div class="row">



								<div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Title</span>
                                        <select name="title" class="form-control" required >
                                            <option value="" selected disabled hidden></option>
                                        	<?php foreach($titles as $title){  ?><option>
                                        		<?php echo $title; ?>
                                        		</option>
                                        		<?php } ?>
                                        </select>
                                        <span class="select-arrow"></span>
                                    </div>
                                </div>
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Day</span>
                                            <select name="start_day" class="form-control"  >
                                            	<option value="" selected disabled hidden></option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                                <option>11</option>
                                                <option>12</option>
                                                <option>13</option>
                                                <option>14</option>
                                                <option>15</option>
                                                <option>16</option>
                                                <option>17</option>
                                                <option>18</option>
                                                <option>19</option>
                                                <option>21</option>
                                                <option>22</option>
                                                <option>23</option>
                                                <option>24</option>
                                                <option>25</option>
                                                <option>26</option>
                                                <option>27</option>
                                                <option>28</option>
                                                <option>29</option>
                                                <option>30</option>
                                                <option>31</option>

                                            </select>
                                            <span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-sm-6">
                                        <div class="form-group">
                                            <span class="form-label">Month</span>
                                            <select name="start_month" class="form-control"  >
                                            	<option value="" selected disabled hidden></option>
                                                <option value="1">January</option>
                                                <option value="2">February</option>
                                                <option value="3">March</option>
                                                <option value="4">April</option>
                                                <option value="5">May</option>
                                                <option value="6">June</option>
                                                <option value="7">July</option>
                                                <option value="8">August</option>
                                                <option value="9">September</option>
                                                <option value="10">Octember</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <span class="form-label">Year</span>
                                            <select name="start_year" class="form-control"  >
                                            	<option value="" selected disabled hidden></option>
                                                <option>2020</option>
                                                <option>2021</option>
                                                <option>2022</option>
                    
                                            </select>
                                            <span class="select-arrow"></span>
                                        </div>
                                    </div>
                                    
								</div>
								<div class="row">
									
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Event</span>
											<select name="event" class="form-control" >
												<option value="" selected disabled hidden></option>
												<option>Exam</option>
												<option>Quiz</option>
												<option>Lecture</option>
												<option>Lab</option>
												<option>Recitation</option>
												<option>Conference</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label"># of Participants</span>
											<input  name="participant" class="form-control" type="number" placeholder="Enter the number of participants">		
										</div>
									</div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <span class="form-label">Title</span>
                                            <input  name="new_title" class="form-control" type="text" placeholder="Enter a title for your reservation">
                                        </div>
                                    </div>
                                    <br>
								</div>
                                <br>
								<div class="form-btn">
									<button name="modify_reservation" type="submit" class="submit-btn">Modify Reservation</button>
									<button name="cancel_reservation" type="submit" class="submit-btn">Cancel Reservation</button>

								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>






</body>
</html>