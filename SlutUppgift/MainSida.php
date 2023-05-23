<html>
   	<head>

    	<link rel="stylesheet" href="MainSidaCss1.css">
     	<link rel="shortcut icon" type="image" href="moin-logo2.png"/>

     	<title>
      	Moin
    	</title>

   	</head>

  	<header>
      	<div>
	<h1 class="headerText1">M.O.I.N</h1>
      	</div>
   	</header>

      	<img src="moin-logo2.png" alt="Hemsidsloga" class="Image">

 	<body>

	<div class="WhiteSpace">
	<a href="MakeAcc.php" >
	<h2 class="MakeAcc">Registrera Dig</h2>
	</a>

	


        <?php

      	// Check if the form is submitted
       	if ($_SERVER['REQUEST_METHOD'] === 'POST') 
	{
       	// Retrieve user input from the form
       	$username = $_POST['username'];
        $password = $_POST['password'];
        // SQLite database connection
        $db = new SQLite3('userdata.db');

      	// Prepare the SQL statement
       	$stmt = $db->prepare('SELECT * FROM users WHERE username = :username');
       	$stmt->bindValue(':username', $username, SQLITE3_TEXT);

       	// Execute the statement
       	$result = $stmt->execute();

       	// Fetch the row
       	$row = $result->fetchArray(SQLITE3_ASSOC);

       	// Verify the password
      	if ($row && password_verify($password, $row['password'])) 
	{
       	// Password is correct, user is authenticated

      	// Close the database connection
       	$db->close();

       	// Redirect to a welcome page
      	header('Location: Post.php');
      	exit();
       	} else 

	{
      	// Invalid username or password
      	echo '<p class="error">Invalid username or password. Please try again.</p>';
        }

        }
        ?>
	
	<div class="Login">
        <h1>Login</h1>
	</div>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	
	<div class="Username">
     	<label for="username">Username:</label>
	</div>
	<div class="Username2">
	<input type="text" name="username" id="username" required>
	</div>
    	
	
   	<div class="Password">
    	<label for="password">Password:</label>
	</div>

	<div class="Password2">
   	<input type="password" name="password" id="password" required>
	</div>
	
	
	
	<div class="Button">
       	<input type="submit" value="Logga In">
	</div>
        </form>
    	   	

 	</body>
	
</html>













