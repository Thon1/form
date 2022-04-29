<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>registration form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form action="server.php" method="POST" class="form">
	<label for="first">First name:</label>
	<input type="text" name="first" id="first" * required><br><br>
	<label for="last">Last name:</label>
	<input type="text" name="last" id="last" * required><br><br>
	<label for="email">Enter email:</label>
	<input type="email" name="email" id="email" * required><br><br>
	<input type="radio" name="gender" id="male" value="male">Male
	<input type="radio" name="gender" id="female" value="female">Female
	<input type="radio" name="gender" id="other" value="other">Other<br><br>
	<label for="password">Password:</label>
	<input type="password" name="password" id="password" * required><br><br>
	<label for="msg">Please comment:</label><br>
	<textarea cols="" rows="5" name="msg"></textarea><br>
	<button type="submit" name="submit">submit form</button>
</form>
</body>
</html>