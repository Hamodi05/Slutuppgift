<!DOCTYPE html>
<html>
	<head>
	<link rel="shortcut icon" type="image" href="moin-logo2.png"/>
    	<title>Moin</title>
	</head>

	<body>
    	<form  action="Database.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br><br>

        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>

        <input type="submit" value="Submit" mehtod="POST">
   	</form>
	</body>
</html>