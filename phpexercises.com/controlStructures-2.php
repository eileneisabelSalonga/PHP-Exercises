<! --
###############################################################
## PHP Control Structures Exercise 2: Simple Loops      		 ##
## This exercise uses different loops  						           ##
## Credits: phpexercises.com/php-simple-loops-exercise.html  ##
###############################################################
-->

<html>
  <head>
  	<title>Simple Loops</title>
  </head>

  <body>
  	<?php 
  		$loopCounter=1;
  		
  		//while loop
  		while ($loopCounter<10) {
  			echo "abc ";
  			$loopCounter++;
  		}//end of while loop

  		echo "<br/>";
  		unset($loopCounter);

  		//do-while loop
  		do {
  			echo "xyz ";
  			$loopCounter+=1;
  		} while ($loopCounter<9);
      //end of do-while loop

  		echo "<br/>";
  		unset($loopCounter);

  		//for loop of numbers
  		for ($counter=1; $counter<10; $counter++) { 
  			echo "$counter\t";
  		}//end of for loop

  		echo "<br/>";

  		//for loop of characters
      //enclosed with ordered list tag
      echo "<ol>";
  		  for ($item='A'; $item<'G'; $item++) { 
  			 echo "<li>Item {$item} </li>";
  		  }//end of for loop
      echo "</ol>";
  	?>
  </body>
</html>