<?php
session_start();
if (!isset($_SESSION["loggedin"]) || ($_SESSION["loggedin"]) == false) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
My name is Jacob Renkoski and my favorite quote at the moment is:
<p> “To recommend thrift to the poor is both grotesque and insulting. It is like advising a man who is starving to eat less.”</p>
<p> - Oscar Wilde</p>
<p> My hometown is a small farming town in the southwest corner of Missouri called Wheaton.</p>
<br>
<a href="logout.php">Log Out</a>
</html>
