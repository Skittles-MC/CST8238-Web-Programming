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
$bottle = 99;
$counter = 1;
echo "99 bottles of beer can serve even number of guests.<br/>";
$bottle --;

while ( $bottle >= 0 ) {
	
	if ($bottle % 2 == 0) {
		echo "You take $counter down from 99...<br/>";
		echo "$bottle bottles of beer can serve even number of guests.<br/><br/>";
		$counter ++;
		$bottle --;
	} else {
		echo "You take $counter down from 99...<br/>";
		
		if ($bottle == 0) {
			echo "0 bottles of beer on the wall. <br/>";
			echo "There are no more bottles of beer. <br/>";
			echo "<br/><br/><br/><br/>";
		} else {
			echo "$bottle bottles of beer can serve odd number of guests. <br/><br/>";
			$counter ++;
			$bottle --;
		}
	}
}
         
         ?>
         
         </div>
         
          <?php    
  include("footer.php");
  ?>
  
  </html>