<!DOCTYPE html>
<?php
session_start ();
include("Header.php");
include("Menu.php");

function test_input($data) {
	$data = trim ( $data );
	$data = stripslashes ( $data );
	$data = htmlspecialchars ( $data );
	return $data;
}
$host = 'localhost';
$username = 'choycom_choy0007';
$password = 'choy0007';
$database = 'choycom_cst8238';
$invalid_login = False;
$_SESSION ["valid_login"] = False;
$_SESSION ["fname"] = $_SESSION ["lname"] = $_SESSION ["pnum"] = $_SESSION ["snum"] = $_SESSION ["pass"] = $_SESSION ["email"] = "";
if ($_SERVER ["REQUEST_METHOD"] == "POST") {
	$_SESSION ["email"] = $email = test_input ( $_POST ["email"] );
	$_SESSION ["pass"] = $pass = test_input ( $_POST ["pass"] );
	/* DATABASE CHECK */
	$conn = mysqli_connect ( $host, $username, $password, $database );
	if ($conn == FALSE) {
		die ( "Connection Failed: " . mysqli_connect_error () );
	}
	$sql = "SELECT * FROM Employee WHERE (EmailAddress = '$email')";
	$result = mysqli_query ( $conn, $sql );
	$row = mysqli_fetch_assoc ( $result );
	if (mysqli_num_rows ( $result ) == 0) {
		$invalid_login = True;
	} else if ($row ["EmailAddress"] == $email) {
		if (password_verify ( $pass, $row ["Password"] )) {
			$_SESSION ["valid_login"] = True;
		} else {
			$invalid_login = True;
		}
	}
	mysqli_close ( $conn );
	if ($_SESSION ["valid_login"]) {
		header ( 'Location: ./ViewAllEmployees.php' );
	}
}
?>

<html>
<body>
 
    <main>
	<div class="center">
        <?php
								echo '<div style="width:50%; margin-left: auto; display: inline-block; font-size: 20px;">';
								echo '<form method="post">';
								/* Text Boxes */
								echo '<div class="input-group">';
								echo '<input required maxlength="255" type="email" name="email">';
								echo '<label for="email">Email</label>';
								echo '</div>';
								echo '<div class="input-group">';
								echo '<input required maxlength="60" type="password" name="pass">';
								echo '<label for="pass">Password</label>';
								echo '</div>';
								echo '<br>';
								/* Submit and Close Form */
								echo '<br>';
								echo '<input class="orange accent-4 white-text" type="submit" value="Login">';
								echo '<br>';
								echo '<br>';
// 								echo '<button class="orange accent-3 white-text" type="button" onClick="location.href="http://choy0007.com/CST8238/Labs/Lab9/CreateAccount.php">Create Account</button>';
								echo("<button onclick=\"location.href='http://choy0007.com/CST8238/Labs/Lab9/CreateAccount.php'\">Create Account</button>");
								echo '</form>';
								if ($invalid_login) {
									echo '<br>';
									echo '<span class="red-text">Invalid Email/Password</span>';
								}
								echo '</div>';
								?>
    </div>
	</main>
</body>
  <?php include("Footer.php");?>
</html>