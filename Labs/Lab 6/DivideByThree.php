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
            <p>Here is the Divide by threes 
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
         	
         	if($x%3 == 0)
         	echo "$x of beer is a multiple of 3  <br>";
         	
         	else
         		echo "$x of beer is NOT a multiple of 3 <br>";
         }
         echo "There are no more bottles of beer. <br><br>";
         ?>
         
         
         
           </div>
         
          <?php    
  include("footer.php");
  ?>
  
  </html>
         