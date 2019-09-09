<!DOCTYPE html>
<?php
include("Header.php");
include("Menu.php");
?>


<html>
 <div id="content">
         <div>
            <h1>Welcome! ^-^ </h1>
            <p>Here is there array!
            </p>
            <br/>
            <hr>
            <hr>
            <hr>
            <br/>
         </div>
         
         
         <div class="page-intro">
         
        

<?php



$october = array(
	"Monday" => array ("1st" => 3, "2nd" => 10, "3rd" => 17, "4th" => 24, "5th" => 31),
	"Tuesday" => array ("1st" => 4, "2nd" => 11, "3rd" => 18, "4th" => 25),
	"Wednesday" => array ("1st" => 5, "2nd" => 12, "3rd" => 19, "4th" => 26),
	"Thursday" => array ("1st" => 6, "2nd" => 13, "3rd" => 20, "4th" => 27),
	"Friday" => array ("1st" => 7, "2nd" => 14, "3rd" => 21, "4th" => 28),
	"Saturday" => array ("1st" => 8, "2nd" => 15, "3rd" => 22, "4th" => 29),
	"Sunday" => array ("1st" => 9, "2nd" => 16, "3rd" => 23, "4th" => 30),		
	);

 	echo '<h2>'. "Output-1". '</h2>'.'<br/>';
	echo '<pre>';
 	print_r($october);
 	echo '</pre>';

 	echo '<h2>'. "Output-2". '</h2>'.'<br/>';
 	foreach ($october as $days => $value){
 		foreach ($value as $key=> $dayValue){
 			echo $dayValue." is the ".$key." ".$days." in October<br/>";
 		}
 	}
 	
 	echo '<h2>'. "Output-3". '</h2>'.'<br/>';
 	$reverseOctober = array_reverse($october);
 	echo '<pre>';
 	print_r($reverseOctober);
 	echo '</pre>';
 	echo"<br/><br/><br/>";
 	
 	
 	echo '<h2>'. "Output-4". '</h2>'.'<br/>';
 	asort($reverseOctober);
 	echo '<pre>';
 	print_r($reverseOctober);
 	echo '</pre>';
	echo "<br/><br/>"; 
 			
 	echo '<h2>'. "Output-5". '</h2>'.'<br/>';
	$october['Tuesday']['5th']= 32; 
	echo '<pre>';
	print_r($october);
	echo '</pre>';
	echo "<br/><br/>";
 			
?>
           </div>
         
          <?php    
  include("Footer.php");
  ?>
  
  </html>
         