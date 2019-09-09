<!DOCTYPE html>
<?php
include("Header.php");
include("topMenu.php");
include("sideMenu.php");
?>

<html>
 <div id="content">
         <div>
            <h1>Welcome! ^-^ </h1>
            <p>Here is the All.php display with echos.
            </p>
            <br/>
            <hr>
            <hr>
            <hr>
            <br/>
         </div>
         
         
         <div class="page-intro">
         
         <?php
         
         for ($x = 99; $x > 0; $x--) {
         	echo "$x bottles of beer on the wall... <br>";
         	echo "$x bottles of beer.. <br>";
         	echo "You take one down, you pass it around... <br>";
         	echo ($x - 1) . " bottles of beer on the wall. <br><br>";
         }
         echo "There are no more bottles of beer. <br><br>";
         ?>
         
         </div>
         
          <?php    
  include("footer.php");
  ?>
  
  </html>