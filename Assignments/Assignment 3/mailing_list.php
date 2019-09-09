<?php include("header.php");
      include("db_config.php");
?>

            <div id="content" class="clearfix">
                <p>&nbsp;</p>
                <h1>Mailing List</h1>
                <table border="1" width=80%>

                  <tr>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Phone Number</th>
                  </tr>

                  <!-- Display content in table -->
                  <?php
                  if ($result = $conn->query("SELECT * FROM mailingList"))
                  echo '<!-- TABLE QUERIED-->';
                  {
                    if ($result->num_rows > 0)
                    {
                      while ($row = $result->fetch_assoc())
                      {
                        echo '<tr>';
                        echo '<td>' . $row['firstName'] . ' ' . $row['lastName'] .  '</td>';
                        echo '<td>' . $row['emailAddress'] . '</td>';
                        echo '<td>' . $row['username'] . '</td>';
                        echo '<td>' . $row['phoneNumber'] . '</td>';
                        echo '</tr>';
                      }
                    }
                  }
                  ?>

                </table>
            </div><!-- End Content -->
<?php include("footer.php"); ?>