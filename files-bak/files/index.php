<?php
session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("Location: homepage.php");
    exit;
}

$username = $password = "";
$username_err = $password_err = "";

// Define an array of allowed users
$allowedUsers = [
  [
    'username' => 'user1',
    'password' => 'password1'
  ],
  [
    'username' => 'user2',
    'password' => 'password2'
  ]
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Retrieve the form data
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  // Check if the entered credentials match any of the allowed users
  foreach ($allowedUsers as $user) {
    if ($user['username'] == $username && $user['password'] == $password) {
      $_SESSION["loggedin"] = true;
      // Login successful, redirect to the protected page
      header('Location: homepage.php');
      exit;
    }
  }
  
  // Login failed, show an error message
  echo '<p>Incorrect username or password. Please try again.</p>';
}
?>


<!DOCTYPE HTML>
<html>
<head>Log In To Proceed:</head>
<body>
<form action="index.php" method="post">
  <label for="username">Username:</label>
  <input type="text" id="username" name="username">
  
  <label for="password">Password:</label>
  <input type="password" id="password" name="password">
  
  <input type="submit" value="Submit">
</form>
</body>
</html>
