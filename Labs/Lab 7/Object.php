<!DOCTYPE html>
<?php
include("Header.php");
include("Menu.php");
?>



<html>
 <div id="content">
         <div>
            <h1>Welcome! ^-^ </h1>
            <p>Here is there's a object script here!
            </p>
            <br/>
            <hr>
            <hr>
            <hr>
            <br/>
         </div>
         
         
         <div class="page-intro">
<?php



class Vehicle {
	protected $make;
	protected $model;	
	protected $price;
	protected $year;
	
	function __construct($make, $model, $year, $price) {
		$this->make = $make;
		$this->model = $model;
		$this->year = $year;
		$this->price = $price;
	}
	
	function displayObject(){
		echo "Make:".$this->make.",   Model:".$this->model.",   Year:".$this->year.",   Price:".$this->price;
	}
}

class LandVehicle extends Vehicle{
	private $maxSpeed;
	
	function __construct($make, $model, $year, $price, $maxSpeed){
		parent::__construct($make, $model, $year, $price);
		$this->maxSpeed=$maxSpeed;
	}
	
	function displayObject(){
		echo parent::displayObject().",   Speed Limit:".$this->maxSpeed."<br/>";
	}
}

class WaterVehicle extends Vehicle{
	private $boatCapacity;

	function __construct($make, $model, $year, $price, $boatCapacity){
		parent::__construct($make, $model, $year, $price);
		$this->boatCapacity=$boatCapacity;
	}

	function displayObject(){
		echo parent::displayObject().",   Boat Capacity:".$this->boatCapacity."<br/>";
	}
}

$toyota= new LandVehicle("Toyota", "Camry", "1992", "9000", "200");
$hyundai= new LandVehicle("Hyundai", "Elantra", "2014", "18000", "200");
$mitsubishi= new LandVehicle("Mitsubishi", "Lancer Evolution", "2012", "25000", "220");

$toyota->displayObject();
$hyundai->displayObject();
$mitsubishi->displayObject();

echo"<br/><br/>";

$cHawk= new WaterVehicle("C-Hawk", "", "2016", "24826", "12");
$cDory= new WaterVehicle("C-Dory", "Tomcat 255 Pilothouse", "2011", "50000", "8");
$caribiana= new WaterVehicle("Caribiana", "Caribiana 23'", "2013", "40000", "15");

$cHawk->displayObject();
$cDory->displayObject();
$caribiana->displayObject();


?>


       </div>
         
          <?php    
  include("Footer.php");
  ?>
  
  </html>