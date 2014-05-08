<!
####################################################################
## PHP Arrays Exercise 5: Associative Array      			  	  ##
## This exercise creates an associative array 					  ##
## and displays the value that the user selected  	 			  ##
## Credits: phpexercises.com/php-assosiative-array-exercise.html  ##
####################################################################
-->

<html>
  <head>
  	<title>Associative Array</title>
  </head>

  <body>
  	<?php 
  		$cities=array(
  				'Japan' => 'Tokyo' , 
  				'Mexico City' => 'Mexico',
  				'USA' => 'New York City',
  				'India' => 'Mumbai',
  				'Korea' => 'Seoul',
  				'China' => 'Shanghai',
  				'Nigeria' => 'Lagos',
  				'Argentina' => 'Buenos Aires',
  				'Egypt' => 'Cairo',
  				'England' => 'London',
  				);
  		if (!isset($_POST['btnsubmit'])) {
  	?>

  	<form action='<?php echo $_SERVER['PHP_SELF']?>' method='POST'>
  		<label>Please choose a city:</label>
  		<select name='userCity'>
  			<?php foreach ($cities as $city) {
  				echo "<option value=\"$city\">$city</option>";
  			}
  			?>
  		</select>
  		<input type='submit' name='btnsubmit' value='Submit'/>
  	</form>

  	<? }//end of if statement 
  		else {
  			$userCity=$_POST['userCity'];
  			$country=array_search($userCity, $cities);  			
  			echo "{$userCity} is in {$country}.";
  		}//end of else statement ?>

  </body>
</html>