<! --
################################################################################
## PHP Control Structures Exercise 1: If-Else Statement  		   			          ##
## This exercise gets the date and displays something based on the condition  ##
## Credits: phpexercises.com/php-if-else-statement-exercise.html   			      ##
################################################################################
-->

<html>
  <head>
  	<title>If-Else Statement</title>
  </head>

  <body>
  	<?php
  		//fetch date from server and select only the month
  		$currentMonth=date('F',time());
  		
  		if ($currentMonth =='May') {
  			echo "<h1> It's summer, so it's really hot. </h1>";
  		}
  		else
  			echo "<h1> Not May, so at least not in the peak of the heat. </h1>";
  	?>
  </body>
</html>