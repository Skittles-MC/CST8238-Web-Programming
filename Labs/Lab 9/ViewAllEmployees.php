<!DOCTYPE html>
<?php
session_start();
include("Header.php");
include("Menu.php");
function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if ($_SESSION["valid_login"] == False)
{
  header('Location: ./Login.php');
}
$host = 'localhost';
$username = 'choycom_choy0007';
$password = 'choy0007';
$database = 'choycom_cst8238';
/* DATABASE*/
$conn = mysqli_connect($host, $username, $password, $database);
if ($conn == FALSE)
{
  die("Connection Failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM Employee";
$result = mysqli_query($conn, $sql);
if ($result == FALSE)
{
  die("Error: " . $sql . "<br>" . mysqli_error($conn));
}
mysqli_close($conn);
?>


  <body>
    
    <main>
      <div class="center">
        <?php
        echo '<h1>SAVED SESSION</h1>';
        echo 'First Name: ' . $_SESSION["fname"];
        echo '<br>';
        echo 'Last Name: ' . $_SESSION["lname"];
        echo '<br>';
        echo 'Email: ' . $_SESSION["email"];
        echo '<br>';
        echo 'Telephone: ' . $_SESSION["pnum"];
        echo '<br>';
        echo 'SIN: ' . $_SESSION["snum"];
        echo '<br>';
        echo 'Password: ' . $_SESSION["pass"];
        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo '<h1>HTML TABLE OF DATABASE</h1>';
        echo '<table border="1" width=100%>';
        echo '<tr>';
        echo '<th>EmployeeId</th>';
        echo '<th>FIRST NAME</th>';
        echo '<th>LAST NAME</th>';
        echo '<th>EmailAddress</th>';
        echo '<th>Telephone Number</th>';
        echo '<th>Social Insurance Number</th>';
        echo '<th>Password</th>';
        echo '</tr>';
        if (mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_assoc($result))
          {
            echo '<tr>';
            echo '<td>' . $row["EmployeeId"] . '</td>';
            echo '<td>' . $row["FirstName"] . '</td>';
            echo '<td>' . $row["LastName"] . '</td>';
            echo '<td>' . $row["EmailAddress"] . '</td>';
            echo '<td>' . $row["TelephoneNumber"] . '</td>';
            echo '<td>' . $row["SocialInsuranceNumber"] . '</td>';
            echo '<td>' . $row["Password"] . '</td>';
            echo '</tr>';
          }
        }
        echo '</table>';
        ?>
    </div>
    </main>
  </body>
  <?php include("Footer.php");?>
</html>