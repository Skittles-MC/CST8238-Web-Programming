<!DOCTYPE html>
<?php
session_start();

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$host = 'localhost';
$username = 'choycom_choy0007';
$password = 'choy0007';
$database = 'choycom_cst8238';
$_SESSION["fname"] = $_SESSION["lname"] = $_SESSION["pnum"] = $_SESSION["snum"] = $_SESSION["pass"] = $_SESSION["email"] = "";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  $_SESSION["fname"] = $fname = test_input($_POST["fname"]);
  $_SESSION["lname"] = $lname = test_input($_POST["lname"]);
  $_SESSION["pnum"] = $pnum = test_input($_POST["pnum"]);
  $_SESSION["snum"] = $snum = test_input($_POST["snum"]);
  $_SESSION["pass"] = $pass = test_input($_POST["pass"]);
  $_SESSION["email"] = $email = test_input($_POST["email"]);
  $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);
  /* DATABASE UPDATE */
  $conn = mysqli_connect($host, $username, $password, $database);
  if ($conn == FALSE)
  {
    die("Connection Failed: " . mysqli_connect_error());
  }
  $sql = "INSERT INTO Employee (FirstName, LastName, EmailAddress, TelephoneNumber, SocialInsuranceNumber, Password) VALUES('$fname', '$lname', '$email', '$pnum', '$snum', '$hashed_pass')";
  $retval = mysqli_query($conn, $sql);
  if ($retval == FALSE)
  {
    die("Error: " . $sql . "<br>" . mysqli_error($conn));
  }
  mysqli_close($conn);
  $_SESSION["valid_login"];
  header('Location: ./ViewAllEmployees.php');
}
?>

<html>
  
  <body>
    <?php include("Header.php"); 
    include("Menu.php");
    ?>
    <main>
      <div class="center">
        <?php
        echo '<div style="width:50%; margin-left: auto; display: inline-block; font-size: 20px;">';
        echo '<form method="post">';
        /* Text Boxes */
        echo '<div class="input-group">';
        echo '<input required maxlength="50" type="text" name="fname">';
        echo '<label for="fname">First Name</label>';
        echo '</div>';
        echo '<div class="input-group">';
        echo '<input required maxlength="50" type="text" name="lname">';
        echo '<label for="lname">Last Name</label>';
        echo '</div>';
        echo '<div class="input-group">';
        echo '<input required maxlength="255" type="email" name="email">';
        echo '<label for="email">Email</label>';
        echo '</div>';
        echo '<div class="input-group">';
        echo '<input required type="tel" pattern="\d{3}[\-]\d{3}[\-]\d{4}" name="pnum">';
        echo '<label for="pnum">Phone Number (###-###-####)</label>';
        echo '</div>';
        echo '<div class="input-group">';
        echo '<input required maxlength="11" type="text" name="snum">';
        echo '<label for="snum">Social Insurance Number</label>';
        echo '</div>';
        echo '<div class="input-group">';
        echo '<input required maxlength="60" type="password" name="pass">';
        echo '<label for="pass">Password</label>';
        echo '</div>';
        echo '<br>';
        /* Submit and Close Form */
        echo '<br>';
        echo '<input class="orange accent-4 white-text" type="submit" value="Submit">';
        echo '</form>';
        echo '</div>';
        ?>
    </div>
    </main>
  </body>
  <?php
   include("Footer.php");
   ?>
</html>