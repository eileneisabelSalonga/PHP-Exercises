<! --
###################################################################
## PHP Control Structures Exercise 4: Nested For Loops     	  	 ##
## This exercise creates a multiplication table 				         ##
## Credits: phpexercises.com/php-nested-for-loops-exercise.html  ##
###################################################################
-->

<html>
  <head>
  	<title>Nested For Loops</title>
  </head>

  <body>
  	<h1>Multiplication Table</h1>
  	<table border='2'>
  		<?php
  		//outside loop that provides the left factor of the multiplication equation.
  		for ($Lfactor=1; $Lfactor<=9; $Lfactor++) { 
  		 echo "<tr>";
  			
  		 	//inside loop that provides the right factor of the multiplication equation.
  		 	for ($Rfactor=1, $product; $Rfactor<=9; $Rfactor++) { 
  			 $product = $Lfactor * $Rfactor;
  			 echo "<td align='center' {$product} </td>";
  			}//end of inside loop

  		 echo "</tr>";
  		}//end of outer loop
  		?>
  	<table>
  </body>
</html>