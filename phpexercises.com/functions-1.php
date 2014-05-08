<!
################################################################################
## PHP Functions Exercise 1: Arguments Return Value Exercise  	  	   		  ##
## This exercise creates a function that computes for the area of a rectangle ##
## and displays the value that the user selected  	 			  	   		  ##
## Credits: phpexercises.com/php-arguments-return-value-exercise.html 		  ##
################################################################################
-->

<html>
  <head>
  	<title>Return Value of Function</title>
  </head>

  <body>
	<?php
	//function definition
	function rectangleArea($length, $width){
  		$area = $length * $width;
  		echo "A rectangle of length $length and width $width has an area of $area.";
	}
 
	//function call
	rectangleArea(2, 4);
	?>
 </body>
</html>