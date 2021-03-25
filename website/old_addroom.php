<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Room</title>
</head>
<body>

<form method="post" action="addroom.php">
	<label>
		Room number: 
		<input type="text" name="room_id" required> <br>
	</label>

	<label>
		Room floor:
		<input type="text" name="room_floor" required><br>
	</label>

	<label>
		Capacity:
		<input type="text" name="room_capacity" required><br>
	</label>

	<label>
		Room utilities: <br>
		<input type="checkbox" name="room_util[]" value="projector"> Projector <br>
		<input type="checkbox" name="room_util[]" value="microphone" > Microphone <br>
		<input type="checkbox" name="room_util[]" value="computer"> Computer <br>
		<input type="checkbox" name="room_util[]" value="speaker"> Speaker <br>
	</label>

	<button class="submit" name="room_create">Create Room</button>

</form>

</body>
</html>