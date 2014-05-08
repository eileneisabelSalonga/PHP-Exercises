<!
##############################################################
## PHP Arrays Exercise 1: Simple Array	             		##
## This exercise creates an array and displays its values 	##
## Credits: phpexercises.com/php-simple-array-exercise.html ##
##############################################################
-->

<html>
  <head>
  	<title>Simple Array</title>
  	<h1>How was the weather?</h1>
  </head>

  <body>
  	<?php
  	  //an array of the different weather conditions
  	  $weather = array("rain", "sunshine", "clouds", "hail", "sleet", "snow", "wind");

  	  //separate echos for each sentence.
  	  echo "<p> We've seen all kinds of weather this month. </p>";
  	  echo "<p> At the beginning of the month, we had {$weather[5]} and {$weather[6]}. </p>";
  	  echo "<p> Then came {$weather[1]} with a few {$weather[2]} and some {$weather[0]}. </p>";
  	  echo "<p> At least we didn't get any {$weather[3]} or {$weather[4]}";
  	?>
  </body>
</html>