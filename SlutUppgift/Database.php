<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve user input from the form
    $username = $_POST['username'];
    $name = $_POST['name'];
    $password = $_POST['password'];

    // SQLite database connection
    $db = new SQLite3('userdata.db');

    // Create table if it doesn't exist
    $db->exec('CREATE TABLE IF NOT EXISTS users (username TEXT, name TEXT, password TEXT)');

    // Prepare the SQL statement
    $stmt = $db->prepare('INSERT INTO users (username, name, password) VALUES (:username, :name, :password)');
    $stmt->bindValue(':username', $username, SQLITE3_TEXT);
    $stmt->bindValue(':name', $name, SQLITE3_TEXT);
    $stmt->bindValue(':password', $password, SQLITE3_TEXT);

    // Execute the statement
    $stmt->execute();

    // Close the database connection
    $db->close();

    // Redirect to MainSida
    header('Location: MainSida.php');
    exit();
}
?>