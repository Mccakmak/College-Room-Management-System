<!DOCTYPE html>
<html>
<head>
	<title>Reservation</title>
</head>
<body>


<form method="post" action="confirmroom.php">


	<label>Start day</label>
	<input type="text" name="start_day" required><br>


	<label>Start month</label>
	<input type="text" name="start_month" required><br>
		
	<label>Start year</label>
	<input type="text" name="start_year" required><br>
	
	<label>Start time</label>
	<input type="text" name="start_time" required><br>

	<label>End time</label>
	<input type="text" name="end_time" required><br>

	<label>Event </label>
	<input type="text" name="event" required><br>

	<label>Participant number</label>
	<input type="text" name="participant" required><br>

	<label >Title</label>
	<input type="text" name="new_title" required><br>

	<label> Projector</label>
	<input type="checkbox" value="projector" name="room_utils[]">

	<label>Microphone</label>
	<input type="checkbox" value="microphone" name="room_utils[]">

	<label>Computer</label>
	<input type="checkbox" value="computer" name="room_utils[]">

	<label>Speaker</label>
	<input type="checkbox" value="speaker" name="room_utils[]"> <br>

	<button type="submit" name="reserve_room"> Reserve</button>

</form>
</body>
</html>