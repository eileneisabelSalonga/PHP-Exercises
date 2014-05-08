<! --
###############################################################
## PHP Beginnings Exercise 2: Create and Use Variables 		   ##
## This exercise creates and displays the value of variables ##
## Credits: phpexercise.com/php-create-use-variables.html    ##
###############################################################
-->

<html>
  <head>
  	<title>Variables</title>
  </head>

  <body>
  	<! Display as plain text--> 
  	<p> Twinkle, Twinkle little star.</p>
  	<?php 
  		//display text above by substituting the variables
  		$text1="Twinkle";
  		$text2="star";
  		echo "<p> {$text1}, {$text1} little {$text2}. </p>";

  		//display a different value of text1 and text2 variables
  		$text1="Old McDonald";
  		$text2="iyaiyayooo";
  		echo "<p> {$text1} had a farm. 
  			  <sub> {$text2} {$text2} </sub> </p>";
  	?>
  </body>
<html>