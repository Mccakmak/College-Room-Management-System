<?php include('server.php') ?>

<?php 
	
	$db = mysqli_connect('localhost', 'root', '', 'dbmedipol');	
	if(isset($_POST['reserve_room']))
	{  ?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Select Room</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<link rel="shortcut icon" type="image/x-icon" href="reservation/assets/img/medipol.png">
    <link rel="stylesheet" href="reservation/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="reservation/assets/css/slicknav.css"><!--mobil için-->
    <link rel="stylesheet" href="reservation/assets/css/style.css">
    <link rel="stylesheet" href="reservation/footer.css">
	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="reservation/css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="reservation/css/style.css" />

	
</head>


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
                                  <a href="index.html"><img src="reservation/assets/img/logo/logo.png" alt=""width="152" height="55"></a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-8 col-md-7 col-sm-5">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>                                                
                                        <ul id="navigation">                                                                                                
                                                                                      <li><a href="../new_navbar/index.html">Home</a></li>
                                            <li><a href="../contact/rooms.html">Rooms</a></li>
                                            <li class="hot"><a href="../new_navbar/index.html">Floor Plans</a></li>
                                            <li><a href="#">Syllabus</a>
                                                <ul class="submenu">
                                                    <li><a href="#">2019-2020 Fall</a></li>
                                                    <li><a href="#">2019-2020 Spring</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Floors</a>
                                                <ul class="submenu">
                                                    <li><a href="../webTableplan/GroundFloor.html">Ground Floor</a></li>
                                                    <li><a href="../webTableplan/FirstFloor.html">Floor 1</a></li>
                                                    <li><a href="../webTableplan/SecondFloor.html">Floor 2</a></li>
                                                    <li><a href="../webTableplan/ThirdFloor.html">Floor 3</a></li>
                                                    <li><a href="../webTableplan/ForthFloor.html">Floor 4</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="../contact/contact.html">Contact</a></li>
                                            <li><a href="../reservation/index.html">Reservation</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div> 
                            <div class="col-xl-5 col-lg-3 col-md-3 col-sm-3 fix-card">
                                <ul class="header-right f-right d-none d-lg-block d-flex justify-content-between">
                                    <li class="d-none d-xl-block">
                                        <div class="form-box f-right ">
                                            <input type="text" name="Search" placeholder="Search..">
                                            <div class="search-icon">
                                                <i class="fas fa-search special-tag"></i>
                                            </div>
                                        </div>
                                     </li>
                                   <li class="d-none d-lg-block"> <a href="#" class="btn header-btn">Profile</a></li>
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
<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-push-5">
						<div class="booking-cta">
							<h1>Make your reservation</h1>
							
						</div>
					</div>
					<div class="col-md-4 col-md-pull-7">
						<div class="booking-form" style="height: 350px">


			
	  <?php 

	  $reservable_room = array();
	  $unreservable_room = array();

	  $start_day = mysqli_real_escape_string($db, $_POST['start_day']);
	  $start_month = mysqli_real_escape_string($db, $_POST['start_month']);
	  $start_year = mysqli_real_escape_string($db, $_POST['start_year']);
	  $start_time = mysqli_real_escape_string($db, $_POST['start_time']);
	  $end_time = mysqli_real_escape_string($db, $_POST['end_time']);
	  $event = mysqli_real_escape_string($db, $_POST['event']);
	  $participant = mysqli_real_escape_string($db, $_POST['participant']);
	  $title = mysqli_real_escape_string($db, $_POST['title']);

	  if(isset($_POST['room_utils']))
	  {
	  	 $room_utils = $_POST['room_utils'];
	  	 $util_num =count($room_utils);
	  }


	  $current_user_email = $_SESSION['email'];

	  $current_user_name = "SELECT DISTINCT name FROM visitor WHERE email = '$current_user_email' ";


	  $_SESSION['current_user_name']= $current_user_name;


	  $_SESSION['start_day'] = $start_day;
	  $_SESSION['start_month'] = $start_month;
	  $_SESSION['start_year'] = $start_year;
	  $_SESSION['start_time'] = $start_time;
	  $_SESSION['end_time'] = $end_time;
	  $_SESSION['event'] = $event;
	  $_SESSION['participant'] = $participant;
	  $_SESSION['title'] = $title;
	  if(isset($_POST['room_utils']))
	  {
	  	$_SESSION['room_utils'] = $room_utils;
	  }
	  
	 
	  $time_room = array();
	  $not_time_room = array();
	  $conflict_room = array();


	  if($end_time < $start_time)
  	  {
      	echo "<script type='text/javascript'>alert('End time must be after the start time!'); 
      	window.location.href='reservation/reservation.php'; </script>";
      }
	  
	  $room_check_query = "SELECT * FROM reservation WHERE start_day = '$start_day'  AND start_month = '$start_month' AND start_year = '$start_year'    ";
	  $results = mysqli_query($db, $room_check_query);
	  $room_check_query2 = "SELECT DISTINCT room_no FROM reservation ";
	  $results2 = mysqli_query($db, $room_check_query2);

	  if(mysqli_num_rows($results) == 0 or mysqli_num_rows($results2)==0)		// if reservation empty
	  {

		$room_check_query = "SELECT DISTINCT room_no FROM room ";
		$results = mysqli_query($db, $room_check_query);

		while($row = mysqli_fetch_array($results))
		{
			array_push($time_room, $row['room_no']);          // added all rooms from room database
		}		

	  }

	  else
	  {	
	  	 while($row = mysqli_fetch_array($results))		//check is there any conflict
	  	 {
	  	 	
		  	 if($end_time <=$row['start_time'])
		  	 {

		  	 }
		  	 
		  	 elseif($start_time >= $row['end_time'])
		  	 {

		  	 }
		  	 else
		  	 {
		  	 	array_push($conflict_room, $row['room_no']);

		  	 }	  		
		 }

		 if(count($conflict_room) == 0)				// no conflict return all rooms
		 {

		  	$room_check_query = "SELECT DISTINCT room_no FROM room ";
		  	$results = mysqli_query($db, $room_check_query);	  	
		  	while($row = mysqli_fetch_array($results))
		  	{
		  		array_push($time_room, $row['room_no']);		
		  	}


		 }
		 else                            // return all minus conflict one
		 { 
		  	$room_check_query = "SELECT DISTINCT room_no FROM room ";
		  	$results = mysqli_query($db, $room_check_query);
		 	
		 	foreach($conflict_room as $conf_room)
		 	{
		 		$results = mysqli_query($db, $room_check_query);
		  		while($row = mysqli_fetch_array($results))
		  		{
		  			
		  			if($row['room_no'] == $conf_room)
		  			{
		  				array_push($not_time_room, $row['room_no']);
		  				
		  			}
		  			/*
		  			else
		  			{
		  				if(count($time_room)==0)
		  				{
		  					array_push($time_room, $row['room_no']);
		  				}
		  				else
		  				{
			  				foreach($time_room as $t_room)
			  				{
			  					$not_in = True;
			  					if($t_room == $row['room_no'])
			  					{
			  						$not_in =  False;	  					
			  					}		  					
			  				}
			  				if($not_in == True)
			  				{
			  					array_push($time_room, $row['room_no']);
			  				}		  					
		  				}


		  			}*/
		  		}

		 	}	

		  	$room_check_query = "SELECT DISTINCT room_no FROM room ";
		  	$results = mysqli_query($db, $room_check_query);


		  	while($row = mysqli_fetch_array($results))
		  	{
		  		$add_to_time = True;
		 		foreach($conflict_room as $conf_room)
		 		{
		  			if($conf_room == $row['room_no'])
		  			{
		  				$add_to_time = False;
		  			}

		  		}
		  		if($add_to_time == True)
		  		{

		  			array_push($time_room, $row['room_no']);
		  		}
		  	}

		 }	
	  }

												
	  $room_check_query = "SELECT * FROM room";
	  $results = mysqli_query($db, $room_check_query);
	  $candidate = array();


	  


	  $current_util_num =0 ;
	  $candidate_unres = array();
	  while($row = mysqli_fetch_array($results))
	  { 

	  	  if(isset($_POST['room_utils']))
	  	  {
	  	  	$add_to_unres = False;
	  	  }
	  	  else
	  	  {
	  	  	$add_to_unres = True;
	  	  }

		  foreach($time_room as $time)
		  { 
		  	if($row['usability']=='available' and $row['room_no'] == $time and  $row['room_capacity'] >=$participant and $row['room_capacity']<=($participant*2)){												// capacity must be bigger than from input capacity and at least half of them should be fill in

			  		if(isset($_POST['room_utils']))
			  		{
				  		foreach($room_utils as $util)
				  		{

							if($util == $row['room_util'])
							{
								array_push($candidate, $row['room_no']);
								$current_util_num = $current_util_num + 1;		  					
							}		  			
				  		}		  			
			  		}
			  		else
			  		{
			  			$add_to_unres = False;	
		  				$not_in = True;
		  				foreach($reservable_room as $r_room)
		  				{
		  					if($row['room_no'] == $r_room)
		  					{
		  						$not_in =  False;
		  					
		  					}		  					
		  				}
		  				if($not_in == True)
		  				{

							$bool = True;
							foreach($unreservable_room as $unres_room)
							{
								if($unres_room == $row['room_no'])
								{
									$bool = False;
								}
							}
							if($bool == True)
							{
								array_push($reservable_room, $row['room_no']);

							}  		  					
		  				}			  			
			  		}


		  		}



		}

		if(isset($_POST['room_utils']))
		{
			if($current_util_num != $util_num)
			{
				if(count($candidate_unres) == 0)
				{
					array_push($candidate_unres, $row['room_no']);				
				}
				else
				{
					if(end($candidate_unres) != $row['room_no'])
					{
						$current_util_num = 0;
					}				
					$not_in = True;
					foreach($candidate_unres as $can_ur)
					{
						if($can_ur == $row['room_no'])
						{
							$not_in=False;
						}
					}
					if($not_in == True)
					{

						array_push($candidate_unres, $row['room_no']);
					}				
				}

			}

			else
			{

				if(count($reservable_room)==0)
				{		
					if(end($candidate_unres) == $row['room_no'])
					{
						array_push($reservable_room, end($candidate_unres));				
					}

				}
				else
				{
					if(end($candidate_unres) == $row['room_no'])
					{					
						$not_in = True;
						foreach($reservable_room as $r_room)
						{
							if(end($candidate_unres) == $r_room)
							{
								$not_in =  False;
							
							}		  					
						}
				  		if($not_in == True)
				  		{
				  			array_push($reservable_room, end($candidate_unres));

						}
					}
				}
			
	
			}

		}



		
		if(isset($_POST['room_utils']) )
		{	

			$bool2 = False;
			foreach($candidate as $candi)
			{
				if($row['room_no'] == $candi)
				{

					$bool2 =  True;
				
				}		  					
			}
			if($bool2 == False)
			{

				$not_in = True;
				foreach($unreservable_room as $ur_room)
				{
					if($row['room_no'] == $ur_room)
					{
						$not_in =  False;
					
					}		  					
				}
		  		if($not_in == True)
		  		{

					$bool  = True;
					foreach($reservable_room as $res_room)
					{
						if($res_room == $row['room_no'])
						{
							$bool = False;
						}
					}
					if($bool == True)
					{
						array_push($unreservable_room, $row['room_no']);
					}  

		  		}
		
			}

		}
		
	



			if($add_to_unres == True)
			{
  				if(count($unreservable_room) !=0)
  				{
	  				$not_in = True;  					
	  				foreach($unreservable_room as $ur_room)
	  				{
	  					if($row['room_no'] == $ur_room)
	  					{
	  						$not_in =  False;	  					
	  					}		  					
	  				}
	  				if($not_in == True)
	  				{
	  					$bool = True;
	  					foreach($reservable_room as $res_room)
	  					{
	  						if($res_room == $row['room_no'])
	  						{
	  							$bool = False;
	  						}
	  					}
	  					if($bool == True)
	  					{
	  						array_push($unreservable_room, $row['room_no']);

	  					}
	  				}		  						
  				}
  				else
  				{
  					$bool = True;
  					foreach($reservable_room as $res_room)
  					{
  						if($res_room == $row['room_no'])
  						{
  							$bool = False;
  						}
  					}
  					if($bool == True)
  					{
  						array_push($unreservable_room, $row['room_no']);

  					}  					
				}
			}
		   
	  } 

	  	$counter = 0;
		foreach($candidate as $can)
		{
			foreach($candidate as $c)
			{
				if($can==$c)
				{
					$counter = $counter + 1;
				}
			}

			if($counter == $util_num)
			{  		
				$not_in = True;		
				foreach($reservable_room as $r_room)
  				{
  					if($can == $r_room)
  					{
  						$not_in =  False;	  					
  					}		  					
  				}
  				if($not_in == True)
  				{
  					$bool = True;
  					foreach($unreservable_room as $unres_room)
  					{
  						if($unres_room == $can)
  						{
  							$bool = False;
  						}
  					}
  					if($bool == True)
  					{
  						array_push($reservable_room, $can);
  					}    					
  				}	
			}
			else
			{
  				$not_in = True;  					
  				foreach($unreservable_room as $ur_room)
  				{
  					if($can == $ur_room)
  					{
  						$not_in =  False;	  					
  					}		  					
  				}
  				if($not_in == True)
  				{

  					$bool = True;
  					foreach($reservable_room as $res_room)
  					{
  						if($res_room == $can)
  						{
  							$bool = False;
  						}
  					}
  					if($bool == True)
  					{
  						array_push($unreservable_room, $can);
  					}  
  				}	
			}

			$counter=0;
		}
	  

	  	$room_check_query = "SELECT DISTINCT room_no, usability FROM room";
	  	$results = mysqli_query($db, $room_check_query);
	  	while($row = mysqli_fetch_array($results))
	  	{ 
	  		if(count($not_time_room) == 0)
	  		{
	  			if($row['usability']=='unavailable')
	  			{
	  				$not_in = True;
	  				foreach($unreservable_room as $ur_room)
	  				{  					
	  					if($row['room_no'] == $ur_room)
	  					{

	  						$not_in =  False;	  					
	  					}		  					
	  				}
	  				if($not_in == True)
	  				{
						$bool = True;
						foreach($reservable_room as $res_room)
						{
							if($res_room == $row['room_no'])
							{
								$bool = False;
							}
						}
						if($bool == True)
						{
							array_push($unreservable_room, $row['room_no']);
						}  	  					
	  				}	
	  			}
	  		}
	  		else
	  		{

		  		foreach($not_time_room as $not_time)
		  		{ 
		  			if($row['usability']=='unavailable' or $row['room_no'] == $not_time)
		  			{ 
		  				if(count($unreservable_room) !=0)
		  				{
			  				$not_in = True;		  					
			  				foreach($unreservable_room as $ur_room)
			  				{
			  					if($row['room_no'] == $ur_room)
			  					{
			  						$not_in =  False;	  					
			  					}		  					
			  				}
			  				if($not_in == True)
			  				{
								$bool = True;
								foreach($reservable_room as $res_room)
								{
									if($res_room == $row['room_no'])
									{
										$bool = False;
									}
								}
								if($bool == True)
								{
									array_push($unreservable_room, $row['room_no']);
								}  			  				
			  				}		  						
		  				}
		  				else
		  				{
							$bool = True;
							foreach($reservable_room as $res_room)
							{
								if($res_room == $row['room_no'])
								{
									$bool = False;
								}
							}
							if($bool == True)
							{
								array_push($unreservable_room, $row['room_no']);
							}  		  					
		  				}
	
		  			}
		  		}
	  			  			
	  		}


	  	 }
	} 
	  
	if(count($reservable_room) !=0)
	{
		foreach($reservable_room as $res)
		{
			foreach($unreservable_room as $unres)
			{
				if($res == $unres )
				{
					$key = array_search($unres, $unreservable_room);
					unset($unreservable_room[$key]);
				}
			}
		}		
	}

	?>


	<form method="post" action="confirmroom.php">
								
		<div class="row">
			<div class="col-lg-12">
				<div class="form-group">
					<span class="form-label" style="font-size: 20px"  >Select Room</span>
	                <select name="room_id" class="form-control" style="font-size: 20px" >

	                <option></option>
					<optgroup label="Available Rooms">
					<?php foreach($reservable_room as $res_room){ ?>
					<option><?php echo $res_room;} ?></option>	
					 ?>
					</optgroup>

					<optgroup label="Unavailable Rooms">
					<?php foreach($unreservable_room as $unres_room){ ?>
					<option disabled><?php echo $unres_room;} ?></option>	
					 ?>
					</optgroup>


	                </select>
	                <span class="select-arrow"></span>
				</div>
			</div>
	<div class="col-lg-12">
		<div class="form-btn" style="margin-top: 50px">
			<?php if(count($reservable_room) != 0){ ?>
			<button name="select_room" class="submit-btn" style="font-size: 20px">Reserve</button>
			<?php } ?>
		</div>
	</div>
	<div class="col-lg-12">
		<div class="form-btn" style="margin-top: 50px">,
			<?php if(count($reservable_room) == 0){ ?>
			<button name="change_room" class="submit-btn" style="font-size: 20px">Change Time</button>
			<?php } ?>
		</div>
	</div>

	</form>

</body>
</html>