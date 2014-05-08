<! --
#######################################################################################
## PHP Control Structures Exercise 3: Simple For Loop      		 					 ##
## This exercise uses a for loop to calculate the squares of numbers chronologically ##
## Credits: phpexercises.com/php-simple-for-loop-exercise.html  					 ##
#######################################################################################
-->

<html>
  <head>
  	<title>Squares of Numbers using For Loop</title>
  </head>

  <body>
  	<?php
  		//a for loop that multiplies $number by itself to get its square value
  		for ($number=1, $square=0; $number<=12 ; $number++)  { 
  			$square=$number*$number; 								
  			echo "{$number} * {$number} = {$square}"; echo "</br>"; //displays the equation and answer
  		}//end of loop
  	?>
  </body>
</html>