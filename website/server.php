<?php
session_start();

// initializing variables
$name = "";
$email = "";
$error = False; 


// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'dbmedipol');
// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $acc_type = mysqli_real_escape_string($db, $_POST['acc_type']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  
  /* 

  if (empty($name)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
  array_push($errors, "The two passwords do not match");
  }
  if (empty($phone)) { array_push($errors, "Phone is required"); }
  */


  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM visitor WHERE name='$name' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  

  /*

    if ($user) { // if user exists
    if ($user['name'] === $name) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }
  */

    if ($user) { // if user exists

      if ($user['email'] === $email) {
        $register_message = "The user already registered the system!";
        echo "<script type='text/javascript'>alert('$register_message');</script>";
        $error=True;
    }
  }



  // Finally, register user if there are no errors in the form
  if ($error == False) {
    $password = md5($password_1);//encrypt the password before saving in the database

    $query = "INSERT INTO visitor (name, email, password, phone, type) 
          VALUES('$name', '$email', '$password', '$phone', '$acc_type')";
    mysqli_query($db, $query);
    //$_SESSION['name'] = $name;
    //$_SESSION['success'] = "You are now logged in";
    echo "<script type='text/javascript'>alert('Successfully registered'); 
    window.location.href='login.php'; </script>";
  }
}

// LOGIN USER

if (isset($_POST['log_user'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  /*
  if (empty($name)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  */

  $_SESSION['email'] = $email;
  
  $password = md5($password);
  $query = "SELECT * FROM visitor WHERE email='$email'";
  $results = mysqli_query($db, $query);
  

  if (mysqli_num_rows($results)==0)
  {
     echo "<script type='text/javascript'>alert('User not found!');</script>";
  }
  else if (isset($email) and isset($password) )
  {

    $row = mysqli_fetch_array($results); 
    $username = $row['name']; // Print a single column data
    //echo print_r($row);       // Print the entire row data
    $_SESSION['name'] = $username;
    
    //$_SESSION['success'] = "You are now logged in";
    //echo "<script type='text/javascript'>alert('$login_message');window.location.href="new_navbar/index.html";</script>";    
    
    if($password != $row['password'])
    {
      echo "<script type='text/javascript'>alert('Password is wrong, Please try again!');</script>";
    }
    else
    {
          echo "<script type='text/javascript'>alert('Login Success, Welcome ' + '$username'); 
          window.location.href='new_navbar/index.php'; </script>";
    }
    //header('location: new_navbar/index.html');

  }

  
}

if (isset($_POST['log_admin']))           // Admin login
{

  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  $password = md5($password);
  $query = "SELECT * FROM visitor WHERE email='$email'";
  $results = mysqli_query($db, $query);


  if(mysqli_num_rows($results) == 0)
  {

    echo "<script type='text/javascript'>alert('User not found!');</script>";

  }
  else if (isset($email) and isset($password) )
  {

    $row = mysqli_fetch_array($results); 
    $username = $row['name']; // Print a single column data
    //echo print_r($row);       // Print the entire row data

    $account_type = $row['type'];


    if($password != $row['password'])
    {
      echo "<script type='text/javascript'>alert('Password is wrong, Please try again!');</script>";
    }
    else if($account_type == 'admin' and $password == $row['password'])
    {
      $_SESSION['name'] = $username;
    
      echo "<script type='text/javascript'>alert('Login Success, Welcome ' + '$username'); 
      window.location.href='AdminPage.php'; </script>";
    }
    else
    {
      echo "<script type='text/javascript'>alert('The account type is not admin!');</script>";
    }

    
  }
  else 
  {
    $login_message = "You entered the wrong email or wrong password!";
    echo "<script type='text/javascript'>alert('$login_message');</script>";
  }

}




if (isset($_POST['room_create']))   // Create Room
{
  $room_id = mysqli_real_escape_string($db, $_POST['room_id']);
  $room_floor = mysqli_real_escape_string($db, $_POST['room_floor']);
  $room_capacity = mysqli_real_escape_string($db, $_POST['room_capacity']);
  if (isset($_POST['room_util'])) {
    $room_util = $_POST['room_util'] ;
  }
  


  $room_check_query = "SELECT * FROM room WHERE room_no='$room_id' LIMIT 1 ";
  $results = mysqli_query($db, $room_check_query);
  $room = mysqli_fetch_assoc($results);

  if ($room) { // if room exists
    $message = "The room already created in the system!";
    echo "<script type='text/javascript'>alert('$message');</script>";
    
  }
  else
  {
    if (isset($_POST['room_util']))
    {
      foreach ($room_util as $util)
      {
        $query = "INSERT INTO room (room_no, room_floor, room_capacity, room_util, usability, comment)
        VALUES('$room_id', '$room_floor', '$room_capacity', '$util', 'available', 'NULL')";
        mysqli_query($db, $query);
      }
      echo "<script type='text/javascript'>alert('Room created successfully!');</script>"; 
    }
    else
    {
        $query = "INSERT INTO room (room_no, room_floor, room_capacity, room_util, usability, comment)
        VALUES('$room_id', '$room_floor', '$room_capacity', 'NULL', 'available', 'NULL')";
        mysqli_query($db, $query);

        echo "<script type='text/javascript'>alert('Room created successfully!');</script>";
    }
    
  }

}


if (isset($_POST['delete_room']))
{

$room_id = mysqli_real_escape_string($db, $_POST['room_id']);

$query = "DELETE FROM room WHERE room_no='$room_id'";
mysqli_query($db, $query);

echo "<script type='text/javascript'>alert('The room has been deleted successfully!');</script>";

}


if (isset($_POST['modify_room']))      //modify room
{

  $room_id = mysqli_real_escape_string($db, $_POST['room_id']);

  $room_check_query = "SELECT * FROM room WHERE room_no='$room_id'";
  $results = mysqli_query($db, $room_check_query);
  $room = mysqli_fetch_assoc($results);

  if($room)
  {
      if (isset($_POST['room_floor']) and $_POST['room_floor']!=0) {
      $room_floor = $_POST['room_floor'] ;
      $new = "UPDATE room SET room_floor='$room_floor' WHERE room_no='$room_id'";
      mysqli_query($db, $new);
    }

    if (isset($_POST['room_capacity']) and $_POST['room_capacity']!=0 ) {
      $room_capacity = $_POST['room_capacity'];
      $new = "UPDATE room SET room_capacity='$room_capacity' WHERE room_no='$room_id'";
      mysqli_query($db, $new);
    }

    if (isset($_POST['usability'])) {
      $usability = mysqli_real_escape_string($db, $_POST['usability']);
      $new = "UPDATE room SET usability='$usability' WHERE room_no='$room_id'";
      mysqli_query($db, $new);
    }
    
    if (isset($_POST['comment']) and $_POST['comment']!="") {
      $comment = $_POST['comment'] ;
      $new = "UPDATE room SET comment='$comment' WHERE room_no='$room_id'";
      mysqli_query($db, $new);
    }

    $room_check_query = "SELECT * FROM room WHERE room_no='$room_id'";
    $results = mysqli_query($db, $room_check_query);

    if (isset($_POST['room_util'])) 
    {  
      $room_util = $_POST['room_util'];
      while($row = mysqli_fetch_array($results))
      {

        $keep_row = False;
        foreach ($room_util as $util)
        {
          $row_util = $row['room_util'];
          //echo $row_util;   
          if($row_util == $util)
          {
            $keep_row = True;
            break;
          }

        }
        if($keep_row == False)     // delete row
        {
          
          $deleted_util = $row['room_util']; 
          
          $query = "DELETE FROM room WHERE room_no='$room_id' AND room_util = '$deleted_util'";
          mysqli_query($db, $query);                 
        }
      }
      
      $room_check_query = "SELECT * FROM room WHERE room_no='$room_id'";
      $results = mysqli_query($db, $room_check_query);
      $row = mysqli_fetch_array($results);

      foreach ($room_util as $util)
      {

        $update = True;
        while($row = mysqli_fetch_array($results))
        {
          if($row['room_util'] == $util)
          {
            $update = False;
            break;
          }

        }
        if($update == True)     // add row
        {
          $results = mysqli_query($db, $room_check_query);
          $row = mysqli_fetch_array($results);
          $same_floor = $row['room_floor'];
          $same_capacity = $row['room_capacity'];
          $same_usability = $row['usability'];
          $same_comment = $row['comment'];

          $query = "INSERT INTO room (room_no, room_floor, room_capacity, room_util, usability, comment)
          VALUES('$room_id', '$same_floor', '$same_capacity', '$util', '$same_usability', '$same_comment' )";
          mysqli_query($db, $query);                       
        }
      }
      
    } 

    echo "<script type='text/javascript'>alert('The room has been modified successfully!');</script>";

  }

  else
  {
    echo "<script type='text/javascript'>alert('The room did not found. Please create the room first!');</script>";
  }

}

if(isset($_POST['select_room']))
{

  $room_id = mysqli_real_escape_string($db, $_POST['room_id']);

  //$room_check_query = "SELECT * FROM reservation";
  //$results = mysqli_query($db, $room_check_query);
  //$row = mysqli_fetch_array($results);

  $start_day = $_SESSION['start_day']; 
  $start_month = $_SESSION['start_month'];
  $start_year = $_SESSION['start_year'] ;
  $start_time = $_SESSION['start_time'] ;
  $end_time = $_SESSION['end_time'] ;
  $event = $_SESSION['event'] ;
  $participant = $_SESSION['participant'] ;
  $title = $_SESSION['title'] ;

  $user_email = $_SESSION['email'];



  $query = "INSERT INTO reservation (room_no, start_day, start_month, start_year, start_time, end_time, event, participant, title, user_email)
  VALUES('$room_id', '$start_day', '$start_month', '$start_year', '$start_time', '$end_time', '$event', '$participant', '$title', '$user_email')";
  mysqli_query($db, $query);     

  echo "<script type='text/javascript'>alert('Reservation has been done successfully!'); 
  window.location.href='reservation/reservation.php'; </script>";
}



if(isset($_POST['change_room']))

{
  echo "<script type='text/javascript'> 
  window.location.href='reservation/reservation.php'; </script>";
}


if(isset($_POST['send_feedback']))
{

  $feedback = mysqli_real_escape_string($db, $_POST['feedback']);
  $title = mysqli_real_escape_string($db, $_POST['selected_title']);

  $email = $_SESSION['email'];

  $query = "INSERT INTO feedback (title, email, feedback)
  VALUES('$title', '$email', '$feedback')";
  mysqli_query($db, $query);


  echo "<script type='text/javascript'>alert('Feedback has been sent successfully!'); 
  window.location.href='feedback.php'; </script>";


}


if(isset($_POST['modify_reservation']))
{
  $title = mysqli_real_escape_string($db, $_POST['title']);
  $curr_user_email = $_SESSION['email'];

  $query = "SELECT * FROM reservation WHERE title = '$title' AND user_email = '$curr_user_email'";
  $results=mysqli_query($db, $query);

  $room_no =mysqli_fetch_array($results);
  $room_id = $room_no['room_no'];

  $query = "SELECT room_capacity FROM room WHERE room_no = '$room_id'";
  $results=mysqli_query($db, $query);

  $capacity_no =mysqli_fetch_array($results);
  $capacity = $capacity_no['room_capacity'];

  if(isset($_POST['participant'])==False)
  {
    if (isset($_POST['start_day']) and $_POST['start_day']!=0 ) {
      $start_day = mysqli_real_escape_string($db, $_POST['start_day']);
      $new = "UPDATE reservation SET start_day='$start_day' WHERE title='$title' AND user_email = '$curr_user_email'";
      mysqli_query($db, $new);
    }

    if (isset($_POST['start_month']) and $_POST['start_month']!=0 ) {
      $start_month = mysqli_real_escape_string($db, $_POST['start_month']);
      $new = "UPDATE reservation SET start_month='$start_month' WHERE title='$title' AND user_email = '$curr_user_email'";
      mysqli_query($db, $new);
    }

    if (isset($_POST['start_year']) and $_POST['start_year']!=0) {
      $start_year = mysqli_real_escape_string($db, $_POST['start_year']);
      $new = "UPDATE reservation SET start_year='$start_year' WHERE title='$title' AND user_email = '$curr_user_email'";
      mysqli_query($db, $new);
    }

      if (isset($_POST['new_title']) and $_POST['new_title']!="")  {
      $new_title = mysqli_real_escape_string($db, $_POST['new_title']);
      $new = "UPDATE reservation SET title='$new_title' WHERE title='$title' AND user_email = '$curr_user_email'";
      mysqli_query($db, $new);
    }

    if (isset($_POST['event']) and $_POST['event']!="") {
      $event = mysqli_real_escape_string($db, $_POST['event']);
      $new = "UPDATE reservation SET event='$event' WHERE title='$title' AND user_email = '$curr_user_email'";
      mysqli_query($db, $new);

                echo "<script type='text/javascript'>alert('The reservation modified!'); 
          window.location.href='modify_reservation.php'; </script>";
    }
  } 

    if(isset($_POST['participant']) and ($_POST['participant']<=$capacity) and ($_POST['participant']*2 >= $capacity) and ($_POST['participant']!=0) )
    {
       echo "hello3";
      $participant = mysqli_real_escape_string($db, $_POST['participant']);
      $new = "UPDATE reservation SET participant='$participant' WHERE title='$title'  AND user_email = '$curr_user_email'";
      mysqli_query($db, $new);

        if (isset($_POST['start_day']) and $_POST['start_day']!=0 ) {
          $start_day = mysqli_real_escape_string($db, $_POST['start_day']);
          $new = "UPDATE reservation SET start_day='$start_day' WHERE title='$title' AND user_email = '$curr_user_email'";
          mysqli_query($db, $new);
        }

        if (isset($_POST['start_month']) and $_POST['start_month']!=0 ) {
          $start_month = mysqli_real_escape_string($db, $_POST['start_month']);
          $new = "UPDATE reservation SET start_month='$start_month' WHERE title='$title' AND user_email = '$curr_user_email'";
          mysqli_query($db, $new);
        }

        if (isset($_POST['start_year']) and $_POST['start_year']!=0) {
          $start_year = mysqli_real_escape_string($db, $_POST['start_year']);
          $new = "UPDATE reservation SET start_year='$start_year' WHERE title='$title' AND user_email = '$curr_user_email'";
          mysqli_query($db, $new);
        }

          if (isset($_POST['new_title']) and $_POST['new_title']!="")  {
          $new_title = mysqli_real_escape_string($db, $_POST['new_title']);
          $new = "UPDATE reservation SET title='$new_title' WHERE title='$title' AND user_email = '$curr_user_email'";
          mysqli_query($db, $new);
        }

        if (isset($_POST['event']) and $_POST['event']!="") {
          $event = mysqli_real_escape_string($db, $_POST['event']);
          $new = "UPDATE reservation SET event='$event' WHERE title='$title' AND user_email = '$curr_user_email'";
          mysqli_query($db, $new);
        }

          echo "<script type='text/javascript'>alert('The reservation modified!'); 
          window.location.href='modify_reservation.php'; </script>";
      
        }
    else
    {
      echo "<script type='text/javascript'>alert('The reservation could not modified! Make sure that participant number is correct'); 
      window.location.href='modify_reservation.php'; </script>";
    }

}

if(isset($_POST['cancel_reservation']))
{

  $title = mysqli_real_escape_string($db, $_POST['title']);
  $curr_user_email = $_SESSION['email'];

  $query = "DELETE FROM reservation WHERE title='$title' AND user_email = '$curr_user_email' ";
  mysqli_query($db, $query);

  echo "<script type='text/javascript'>alert('The reservation cancelled!'); 
  window.location.href='modify_reservation.php'; </script>";

}

?>