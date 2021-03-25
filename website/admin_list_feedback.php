<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>T.C. ISTANBUL MEDIPOL UNIVERSITY </title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="manifest" href="site.webmanifest">
  <link rel="shortcut icon" type="image/x-icon" href="images/logo.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/list_style.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="footer.css">
  <link rel="stylesheet" href="all-reservation-bora.css">

</head>

<body>

	<?php 

//$cur_user_email = $_SESSION['email'];
//$cur_user_name = $_SESSION['name'];


$query = "SELECT * FROM feedback";


$results = mysqli_query($db, $query);
//room_no start_day start_month start_year start_time end_time event participant title

//$all_emails = mysqli_fetch_array($results);


 ?>
            <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
          <div class="custom-menu">
            <button type="button" id="sidebarCollapse" class="btn btn-primary">
            </button>
          </div>
          <div class="img bg-wrap text-center py-4" style="background-image: url(images/download.jfif);">
            <div class="user-logo">
              <div class="img" style="background-image: url(images/admin.png);"></div>
              <h3><?php echo $_SESSION['name']?></h3>
            </div>
          </div>
          <ul class="list-unstyled components mb-5">
            <li class="active">
              <a href="AdminPage.php"><span class="fa fa-home mr-3"></span> Home</a>
            </li>
            <li>
              <a href="admin_list_reservation.php"><span class="fa fa-list mr-3"></span> Reservation List</a>
            </li>

            <li>
              <a href="admin_list_feedback.php"><span class="fa fa-list mr-3"></span> Feedback List</a>
            </li>


            <li>
              <a href="addroom.php"><span class="fa fa-plus-circle mr-3"></span> Add New Rooms</a>
            </li>

            <li>
              <a href="modifyroom.php"><span class="fa fa-plus-circle mr-3"></span> Modify Rooms</a>
            </li>


            <li>
              <a href="login.php"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
            </li>
          </ul>
  
        </nav>
       
          <table>

          	<caption>All User Feedbacks</caption>

            <tr>
              <th>Reservation Title</th>
              <th>Reserver</th>
              <th>Feedback</th>
            </tr>
                                              



      <?php if(mysqli_num_rows($results) !=0)?> 
      
        <?php { while($row = mysqli_fetch_array($results))
      {?>
        
        <tr>
          <td><?php 
            echo $row['title'];?>
          </td>
          <td><?php 
            $find_email=$row['email'];
            $name_query = "SELECT DISTINCT name FROM visitor WHERE email='$find_email' ";
            $user_name = mysqli_query($db, $name_query);
            $name=mysqli_fetch_array($user_name);
            echo $name['name'];?>
          </td>  
          <td><?php 
            echo $row['feedback'];?>
          </td>
                             
        </tr> 

      <?php  }}  ?>
      

                       
            </table>


                        
    
        </div>   
 
  </div>
      
 
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
</body>
</html>
