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
            <p>Here is the RNG
            </p>
            <br/>
            <hr>
            <hr>
            <hr>
            <br/>
         </div>
         
         
         <div class="page-intro">
         
         
         <?php
         
if (isset($_POST['submit']))       {
	
	$value1 =$_POST['value1'];
	$value2 =$_POST['value2'];
	
	$random;
	rand(value1, value2) = $random;
	
	echo '<br>';
	echo "The Web Server has selected the random number $random from the range $value1 to $value2";
	
	
}
         
         ?>
         <form action="Random.php" method="post">
  Range 1:   <input type="text" name="value1" value="" />
  Range 2:	<input type="text" name="value2"><br>
     <input type="submit" name="submit value="Submit" />
</form>

         
           </div>
         
         
         
          <?php    
  include("footer.php");
  ?>
  
  </html>
