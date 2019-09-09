<?php
include ("header.php");
require ("db_config.php");
session_start ();

$error = "";
$redirect = "";
$con = @mysqli_connect ( $host, $username, $password, $dbname );
if (mysqli_connect_errno ()) {
	die ( "Failed to connect to MySQL using the PHP mysqli extension: " . mysqli_connect_error () );
}

if (! (isset ( $_POST ["username"] )) || ! (isset ( $_POST ["password"] ))) {
	$error = "Please fill in all data";
} else {
	$search = 'SELECT  * FROM  adminusers WHERE Username LIKE  "' . $_POST ["username"] . '%" AND PASSWORD LIKE  "' . $_POST ["password"] . '%"';
	$count = mysqli_query ( $con, $search );
	$rows = mysqli_num_rows ( $count );
	if ($rows != 0) {
		$error = "User does not exist " . $rows;
		$_SESSION ["username"] = $_POST ["username"];
		$_SESSION ['password'] = $_POST ["password"];
		
		echo "<script type='text/javascript'>window.top.location='http://choy0007.com/CST8238/Labs/Assignments/Assignment3/internal.php';</script>";
		
		exit ();
	} else {
		
		echo "<script type='text/javascript'>alert('User Name Or Password Invalid!')</script>";
		$error = "PASSWORDS DON'T MATCH ";
	}
}
?>

<div id="content" class="clearfix">
	<aside>
		<h2>Mailing Address</h2>
		<h3>
			1385 Woodroffe Ave<br> Ottawa, ON K4C1A4
		</h3>
		<h2>Phone Number</h2>
		<h3>(613)727-4723</h3>
		<h2>Fax Number</h2>
		<h3>(613)555-1212</h3>
		<h2>Email Address</h2>
		<h3>info@wpeatery.com</h3>
	</aside>

	
	<p>Connected successfully</p>
	   <table align="center" bgcolor="#CCCCCC" border="0" cellpadding="0"
    cellspacing="1" width="300">
        <tr>
            <td>
                <form method="post" name="">
                    <table bgcolor="#ff0202" border="0" cellpadding="3"
                    cellspacing="1" width="100%">
                        <tr>
                            <td align="center" colspan="3"><strong>User
                            Login</strong></td>
                        </tr>
                        <tr>
                            <td width="78">Username</td>
                            <td width="6">:</td>
                            <td width="294"><input id="username" name=
                            "username" type="text"></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>:</td>
                            <td><input id="password" name="password" type=
                            "password"></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td><input name="submit" type="submit" value=
                            "Login"> <input name="reset" type="reset" value=
                            "reset"></td>
                        </tr>
                    </table>
                </form>
            </td>
        </tr>
    </table>
	<!-- End Main -->
</div>
<!-- End Content -->
<?php include("footer.php"); ?>
</body>
</html>
