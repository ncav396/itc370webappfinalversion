<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

$users = array(
    array("username" => "03455396", "password" => "GoBears1"),
    array("username" => "03471798", "password" => "GoBears1"),
    array("username" => "03040222", "password" => "GoBears1")
);

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $valid_user = false;
    foreach ($users as $user) {
        if ($username === $user['username'] && $password === $user['password']) {
            $valid_user = true;
            break;
        }
    }

    if ($valid_user) {
        $_SESSION['logged_in'] = true;
        header("Location: home.php");
        exit;
    } else {
        $_SESSION['logged_in'] = false;
        $error = "Invalid username or password";
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
	<div class="content">
    <h1>Team 3 Project Login</h1>
    <form action="" method="post">
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" class="password">
        </div>
        <div>
            <input type="submit" name="submit" value="Login" class="button">
        </div>
    </form>
	</div>
    <?php if (isset($error)) { ?>
        <p><?php echo $error; ?></p>
    <?php } ?>
</body>

<style>

  .content {
	max-width: 270px;
	margin: auto;
  }

  h1 {
	margin-left: -25px;
    color: #5e0009;
  }
  
  label {
	width: 70px;
    color: #000000;
    font-weight: bold;
	display: inline-block;
  }
  
  input {
  margin: 3px;
  }
  
  input:focus, textarea {
  outline: none;
  }
  
  input[type="text"]:focus {
    border: 2px solid #5e0009;
    border-radius: 4px;
  }
  
  input[type="password"]:focus {
    border: 2px solid #5e0009;
    border-radius: 4px;
  }
  
  input.button {
    margin-left: 125px;
	font-weight: 700;
  }

</style>

</html>
