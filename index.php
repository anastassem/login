<?php
session_start();

if (isset($_SESSION["id"]))
{
?>

    <!DOCTYPE html>
    <html>
    <head>
    	<title>Welcome</title>
    	<link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
    	<h1>Welcome, <?php echo $_SESSION["username"]; ?>!</h1>
    	<a href="profile.php">Profile</a>
    	<a href="includes/logout.inc.php">Logout</a>
    </body>
    </html>

<?php
}
else
{
?>

 	<!DOCTYPE html>
    <html>
    <head>
    	<title>Welcome</title>
    	<link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
    	<a href="register.php">Sign Up</a>
    	<a href="login.php">Login</a>
    </body>
    </html>

<?php   
}
?>