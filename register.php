
<?php
require_once ("dbconnect.php");

/* Getting variables from $_POST array into local variables (to prevent bad scenarios in case hosting does not support global variables).*/

if (isset($_POST["r_email"]))
	{
	$r_email = $_POST["r_email"];
	}

// using sha1 encryption to transfer password

if (isset($_POST["r_password"]))
	{
	$r_password = sha1($_POST["r_password"]);
	}

if (isset($_POST["r_send"]))
	{
	$r_send = $_POST["r_send"];
	}

/* Check if "register" button has been pressed. If yes - execute SQL query, else the user accessed the page via an external link, redirect him to redirect.php*/

if (isset($r_send))
	{
	if (filter_var($_POST["r_email"], FILTER_VALIDATE_EMAIL))
		{
		/* forming an sql query and preparing statement to prevent sql injection */
		$query = $mysqli->prepare("INSERT INTO users (`email`, `password`) VALUES (?, ?)");
		$query->bind_param('ss', $r_email, $r_password);
		$query->execute();
		$result = $query->get_result();
		/*handling of the duplicate entry error (if email already exists in DB)*/
		if ($mysqli->errno == 1062)
			{
			header("location:index.php?email=2");
			}
		  else
		if ($mysqli->errno)
			{
			die(mysql_error());
			}

		// If all went well-redirecting

		  else
		if ($result == 0)
			{
			header("location:registered.php");
			exit();
			}
		}
	  else
		{
		header("location:index.php?email=1");
		exit();
		}
	}
  else
	{
	header("location:redirect.php");
	}

?>

