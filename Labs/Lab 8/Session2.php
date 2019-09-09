<?php
session_start();
include("Header.php");
include("Menu.php");
?>

<!DOCTYPE html>
<html>
  <body>
    <main>
      <div class="center">
      <?php
      echo '<div style="width:50%; margin-left: auto; display: inline-block; font-size: 20px;">';
      echo 'First Name: ', $_SESSION['fname'];
      echo '<br>';
      echo 'Last Name: ', $_SESSION['lname'];
      echo '<br>';
      echo 'Phone Number: ',$_SESSION['pnum'];
      echo '<br>';
      echo 'Position: ', $_SESSION['radio'];
      echo '<br>';
      echo '<br>';
      echo '<span style="text-decoration: underline;">Games</span>';
      echo '<ul>';
      foreach ($_SESSION['games'] as $game)
      {
        echo '<li>', $game, '</li>';
      }
      echo '</ul>';
      echo '</div>';
      ?>
    </div>
    </main>
  </body>
   <?php    
  include("Footer.php");
  ?>
</html>