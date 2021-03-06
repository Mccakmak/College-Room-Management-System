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
  <link rel="stylesheet" href="css/style.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="footer.css">
</head>

<body>


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
  
          <!-- Page Content  -->
        <div style="margin-left: 300px; margin-top: 50px; " id="content" >
          <h2 style="color: #000066; margin-left: 150px;">ALL ROOMS</h2>
          <svg  id="svg"></svg> 
        </div>
      </div>
  
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/main.js"></script>
 

<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script> 
<script src='http://cdnjs.cloudflare.com/ajax/libs/snap.svg/0.3.0/snap.svg-min.js'></script> 


<?php       
    $query = "SELECT DISTINCT room_no, room_capacity, usability FROM room ";
    $results = mysqli_query($db, $query); 

    $total_capacity = 0;
    while($row = mysqli_fetch_array($results))

    {
        $total_capacity = $total_capacity + $row['room_capacity'];
    }

    $query = "SELECT DISTINCT room_no, room_capacity, usability FROM room ";
    $results = mysqli_query($db, $query);

    echo "<script> var programmingSkills = [ "; 
    while($row = mysqli_fetch_array($results))
    {

    $capacity = $row['room_capacity'];
    $room_no = $row['room_no'];
    $usability = $row['usability'];
    $string_available = "available";
    $string_unavailable = "unavailable";
    $av_color = '#99CC00';
    $unav_color = '#FF3300';
?>

<?php  
    echo "{value: ";
    echo $capacity/$total_capacity*100; echo", label: ";  echo "'$room_no'";  echo " + ' : ' + "; echo "'$capacity' + ' person'";
    if($usability == $string_unavailable)
    { echo ", color: "; echo "'$unav_color'"; } 
    if($usability == $string_available)
    { echo ", color: "; echo "'$av_color'"; }  echo "},"; } echo"];"; 
    echo "</script>";
?>


<?php 



/*
  var programmingSkills1 = [
    {
        value: 14.9,
        label: 'C-144 : 35 Person',
        color: '#99CC00'
    },
    {
        value: 17.1,
        label: 'C-143 : 40 Person',
        color: '#FF3300'
    },
    {
        value: 8.5,
        label: 'C-142 : 20 Person',
        color: '#99CC00'
    },
    {
        value: 11.5,
        label: 'C-141 : 27 Person',
        color: '#FF3300'
    },
    {
        value: 19.1,
        label: 'C-140 : 45 Person',
        color: '#99CC00'
    },
    {
        value: 3.4,
        label: 'C-134 : 8 Person',
        color: '#99CC00'
    },
    {
        value: 4.2,
        label: 'C-135 : 10 Person',
        color: '#FF3300'
    },
    {
        value: 21.3,
        label: 'Senate Room : 50 Person',
        color: '#99CC00'
    },
];

var programmingSkills2 = [
    {
        value: 8.3,
        label: 'C-244 : 30 Person',
        color: '#99CC00'
    },
    {
        value: 11.1,
        label: 'C-243 : 40 Person',
        color: '#FF3300'
    },
    {
        value: 9.7,
        label: 'C-242 : 35 Person',
        color: '#99CC00'
    },
    {
        value: 8.2,
        label: 'C-241 : 30 Person',
        color: '#FF3300'
    },
    {
        value: 11.1,
        label: 'C-240 : 40 Person',
        color: '#99CC00'
    },
    {
        value: 2.7,
        label: 'C-234 : 10 Person',
        color: '#99CC00'
    },
    {
        value: 2.7,
        label: 'C-235 : 10 Person',
        color: '#FF3300'
    },
    {
        value: 2.2,
        label: 'C-236 : 8 Person',
        color: '#99CC00'
    },
    {
        value: 2.2,
        label: 'C-232 : 8 Person',
        color: '#FF3300'
    },
    {
        value: 2.7,
        label: 'C-230 : 10 Person',
        color: '#FF3300'
    },
    {
        value: 9.6,
        label: 'C-233 : 35 Person',
        color: '#99CC00'
    },
    {
        value: 9.6,
        label: 'C-231 : 35 Person',
        color: '#99CC00'
    },
    {
        value: 11.6,
        label: 'C-237 : 42 Person',
        color: '#FF3300'
    },
    {
        value: 8.3,
        label: 'Meeting Room : 30 Person',
        color: '#99CC00'
    },
];

var programmingSkills3 = [
    {
        value: 10.6,
        label: 'C-344 : 20 Person',
        color: '#99CC00'
    },
    {
        value: 13.3,
        label: 'C-343 : 25 Person',
        color: '#FF3300'
    },
    {
        value: 10.6,
        label: 'C-342 : 20 Person',
        color: '#99CC00'
    },
    {
        value: 10.6,
        label: 'C-340 : 20 Person',
        color: '#FF3300'
    },
    {
        value: 5.3,
        label: 'C-334 : 10 Person',
        color: '#99CC00'
    },
    {
        value: 4.3,
        label: 'C-335 : 8 Person',
        color: '#99CC00'
    },
    {
        value: 2.7,
        label: 'C-330 : 5 Person',
        color: '#FF3300'
    },
    {
        value: 16,
        label: 'C-337 : 30 Person',
        color: '#99CC00'
    },
    {
        value: 26.6,
        label: 'Meeting Room : 50 Person',
        color: '#FF3300'
    },
];

var programmingSkills4 = [
    {
        value: 7.1,
        label: 'C-444 : 20 Person',
        color: '#FF3300'
    },
    {
        value: 7.1,
        label: 'C-443 : 20 Person',
        color: '#FF3300'
    },
    {
        value: 7.1,
        label: 'C-442 : 20 Person',
        color: '#99CC00'
    },
    {
        value: 7.1,
        label: 'C-441 : 20 Person',
        color: '#FF3300'
    },
    {
        value: 3.6,
        label: 'C-431 : 10 Person',
        color: '#FF3300'
    },
    {
        value: 3.6,
        label: 'C-434 : 10 Person',
        color: '#99CC00'
    },
    {
        value: 3.6,
        label: 'C-435 : 10 Person',
        color: '#FF3300'
    },
    {
        value: 3.6,
        label: 'C-436 : 10 Person',
        color: '#99CC00'
    },
    {
        value: 10.7,
        label: 'C-437 : 30 Person',
        color: '#99CC00'
    },
    {
        value: 10.7,
        label: 'C-439 : 30 Person',
        color: '#FF3300'
    },
    {
        value: 17.9,
        label: 'Meeting Room : 50 Person',
        color: '#FF3300'
    },
    {
        value: 17.9,
        label: 'Meeting Room : 50 Person',
        color: '#99CC00'
    },
    
];*/?>

<script src="js/katZchart.js"></script>
<script src="js/kat1chart.js"></script>
<script src="js/kat2chart.js"></script>
<script src="js/kat3chart.js"></script>
<script src="js/kat4chart.js"></script>
<script type="text/javascript">


</script>
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
              <p><span>Kavac??k Mahallesi, Ekinciler Caddesi No: 19, Kavac??k Kav??a???? </span>
                34810 Beykoz, ??stanbul</p>
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
