<!
######################################################################################
## PHP Arrays Exercise 2: Simple Array Loop            								##
## This exercise creates an array and displays its values by using different loops 	##
## Credits: phpexercises.com/php-simple-array-loop-exercise.html 					##
######################################################################################
-->

<html>
  <head>
  	<title>Simple Array Loop</title>
  </head>

  <body>
  	<?php
  	  $TopCities = array(
  	  				"Tokyo",
  	  				"Mexico City",
  	  				"New York City",
  	  				"Mumbai",
  	  				"Seoul",
  	  				"Shanghai",
  	  				"Lagos",
  	  				"Buenos Aires",
  	  				"Cairo",
  	  				"London");
  	  
  	  echo "Here is an unsorted list of the Top Cities:<br/>";
  	  foreach ($TopCities as $city) {
  	  	echo "{$city}<br/> ";
  	  }

  	  sort($TopCities);
  	  echo "<br/>Here is a sorted list of the Top Cities:<br/>";
  	  echo "<ul>";
  	    foreach ($TopCities as $city) {
  	    	echo "<li>{$city}</li>";
  	    }
  	  echo "</ul>";

  	  array_push($TopCities, "Los Angeles","Calcutta", "Osaka", "Beijing");
  	  sort($TopCities);
  	  echo "<br/>Here is a sorted list of the Top Cities including newly added cities:<br/>";
  	  echo "<ul>";
  	    foreach ($TopCities as $city) {
  	    	echo "<li>{$city}</li>";
  	    }
  	  echo "</ul>";
  	?>
  </body>
</html>