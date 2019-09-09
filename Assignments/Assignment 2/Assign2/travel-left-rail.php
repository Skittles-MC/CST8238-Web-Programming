<?php
include 'travel-data.php';
?>

<div class="panel panel-default">
	<div class="panel-heading">Search</div>
	<div class="panel-body">
		<form>
			<div class="input-group">
				<input type="text" class="form-control" placeholder="search ..."> <span
					class="input-group-btn">
					<button class="btn btn-warning" type="button">
						<span class="glyphicon glyphicon-search"></span>
					</button>
				</span>
			</div>
		</form>
	</div>
</div>
<!-- end search panel -->

<div class="panel panel-info">
	<div class="panel-heading">Continents</div>
	<ul class="list-group">               
             
              <?php
														
														sort ( $continents );
														foreach ( $continents as $continent ) {
															?>
           	<li class="list-group-item"><a href="#"> <?php echo $continent ?> </a>
		</li> <?php
														}
														?>
             
           </ul>
</div>
<!-- end continents panel -->
<div class="panel panel-info">
	<div class="panel-heading">Popular Countries</div>
	<ul class="list-group">        
             
            <?php
												include 'travel-data.php';
												
												sort ( $countries );
												foreach ( $countries as $country ) {
													?>
           	<li class="list-group-item"><a href="#"> <?php echo $country ?> </a>
		</li> <?php
												}
												?>
           
              <!--  <li class="list-group-item"><a href="#">Bahamas</a></li>
              <li class="list-group-item active">Canada</li>
              <li class="list-group-item"><a href="#">Germany</a></li>
              <li class="list-group-item"><a href="#">Ghana</a></li>
              <li class="list-group-item"><a href="#">Greece</a></li>
              <li class="list-group-item"><a href="#">Hungary</a></li>
              <li class="list-group-item"><a href="#">Italy</a></li>
              <li class="list-group-item"><a href="#">Spain</a></li>
              <li class="list-group-item"><a href="#">United Kingdom</a></li>
              <li class="list-group-item"><a href="#">United States</a></li> -->
	</ul>
</div>
<!-- end countries panel -->
