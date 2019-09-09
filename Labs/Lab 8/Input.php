<!DOCTYPE html>
<?php
include("Header.php");
include("Menu.php");

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$fname = $lname = $pnum = $radio = $games = "";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  $fname = test_input($_POST["fname"]);
  $lname = test_input($_POST["lname"]);
  $pnum = test_input($_POST["pnum"]);
  $radio = test_input($_POST["radio"]);
  $games = $_POST["games"];
}
?>

  <body>
    <main>
      <div class="center">
        <?php
        echo '<div style="float:left; width:50%;">';
        echo '<form method="post">';
        /* Text Boxes */
        echo '<div class="input-group">';
        echo '<input required type="text" name="fname">';
        echo '<label for="fname">First Name</label>';
        echo '</div>';
        echo '<div class="input-group">';
        echo '<input required type="text" name="lname">';
        echo '<label for="fname">Last Name</label>';
        echo '</div>';
        echo '<div class="input-group">';
        echo '<input required type="tel" pattern="\d{3}[\-]\d{3}[\-]\d{4}" name="pnum">';
        echo '<label for="fname">Phone Number (###-###-####)</label>';
        echo '</div>';
        echo '<br>';
        /* Radio Buttons */
        echo '<div class="input-group">';
        echo '<label class="option-label">';
        echo '<input class="option-input radio" type="radio" name="radio" value="Staff" checked> Staff';
        echo '</label>';
        echo '<br>';
        echo '<label class="option-label">';
        echo '<input class="option-input radio" type="radio" name="radio" value="Student"> Student';
        echo '</label>';
        echo '<br>';
        echo '<label class="option-label">';
        echo '<input class="option-input radio" type="radio" name="radio" value="Faculty"> Faculty';
        echo '</label>';
        echo '<br>';
        echo '</div>';
        echo '<br>';
        echo '<br>';
        echo '<div class="input-group">';
        
        
        echo '<label class="option-label">';
        echo '<input class="option-input checkbox" type="checkbox" name="games[]" value="Starcraft 2"> Starcraft 2';
        echo '</label>';
        echo '<br>';
        
        echo '<label class="option-label">';
        echo '<input class="option-input checkbox" type="checkbox" name="games[]" value="Squad"> Squad';
        echo '</label>';
        echo '<br>';
        
     
        echo '<label class="option-label">';
        echo '<input class="option-input checkbox" type="checkbox" name="games[]" value="Command And Conquer Tiberian Sun"> Command And Conquer Tiberian Sun';
        echo '</label>';
        echo '<br>';
        
        
        echo '<label class="option-label">';
        echo '<input class="option-input checkbox" type="checkbox" name="games[]" value="Counter Strike: Global Offensive"> Counter Strike: Global Offensive';
        echo '</label>';
        echo '<br>';
        echo '<label class="option-label">';
        echo '<input class="option-input checkbox" type="checkbox" name="games[]" value="Starcraft 1 BroodWar"> Starcraft 1 BroodWar';
        echo '</label>';
        echo '<br>';
        echo '<label class="option-label">';
        echo '<input class="option-input checkbox" type="checkbox" name="games[]" value="Company Of Heroes 2"> Company Of Heroes 2';
        echo '</label>';
        echo '<br>';
        echo '</div>';
        /* Submit and Close Form */
        echo '<br>';
        echo '<input class="teal accent-4 white-text" type="submit" value="Submit">';
        echo '</form>';
        echo '</div>';
        echo '<br>';
        echo '<br>';
        echo '<div style="float:left; width:50%; font-size: 20px;">';
        echo 'First Name: ', $fname;
        echo '<br>';
        echo 'Last Name: ', $lname;
        echo '<br>';
        echo 'Phone Number: ', $pnum;
        echo '<br>';
        echo 'Position: ', $radio;
        echo '<br>';
        echo '<br>';
        echo '<span style="text-decoration: underline;">Games</span>';
        echo '<ul>';
        foreach ($games as $game)
        {
          echo '<li>', $game, '</li>';
        }
        echo '</ul>';
        echo '</div>';
        ?>
    </div>
    </main>
  </body>
       
  <?php   include("Footer.php");?>
  
</html>