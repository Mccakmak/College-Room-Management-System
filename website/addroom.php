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
  
        
<form class="form-card" method="post" action="addroom.php">
    <fieldset class="form-fieldset">
        <legend class="form-legend">Add new Room</legend>
        <div class="form-element form-input">
            <input id="field1" class="form-element-field" name="room_id" placeholder="Please fill here!" type="input" required/>
            <div class="form-element-bar"></div>
            <label class="form-element-label" for="field1">Room Number</label>
        </div>
        <div class="form-element form-input">
            <input id="field2" class="form-element-field" name="room_floor" placeholder="Please fill here!" type="input" required/>
            <div class="form-element-bar"></div>
            <label class="form-element-label" for="field2">Room Floor</label>
        </div>
        <div class="form-element form-input">
            <input id="field3" class="form-element-field" name="room_capacity" placeholder="Please fill here!" type="input" required/>
            <div class="form-element-bar"></div>
            <label class="form-element-label" for="field3">Capacity</label>
        </div>
        <div class="form-checkbox form-checkbox-inline">
            <div class="form-checkbox-legend">Room Utilities:</div>
            <br>
            <label class="form-checkbox-label">
                <input name="room_util[]" value="projector" class="form-checkbox-field" type="checkbox" />
                <i class="form-checkbox-button"></i>
                <span>Projector</span>
            </label>
            <br>
            <label class="form-checkbox-label">
                <input name="room_util[]" value="microphone" class="form-checkbox-field" type="checkbox" />
                <i class="form-checkbox-button"></i>
                <span>Microphone</span>
            </label>
            <br>
            <label class="form-checkbox-label">
                <input name="room_util[]" value="computer" class="form-checkbox-field" type="checkbox" />
                <i class="form-checkbox-button"></i>
                <span>Computer</span>
            </label>
            <br>
            <label class="form-checkbox-label">
                <input name="room_util[]" value="speaker" class="form-checkbox-field" type="checkbox" />
                <i class="form-checkbox-button"></i>
                <span>Speaker</span>
            </label>
        </div>
    </fieldset>
    <div class="form-actions">
        <button class="form-btn" name="room_create" type="submit">Add a Room</button>
        <button class="form-btn-cancel -nooutline" type="reset">Cancel</button>
    </div>
    
</form>
<script  src="script.js"></script>

</body>
</html>
