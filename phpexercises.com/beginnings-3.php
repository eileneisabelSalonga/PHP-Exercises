<! --
###########################################################################
## PHP Beginnings Exercise 3: Arithmetic Operators and Variables 		     ##
## This exercise prints equations to the browser along with the answers  ##
## Credits: phpexercise.com/php-arithmetic-operators-variables.html      ##
###########################################################################
-->

<html>
  <head>
  	<title>Arithmetic Operators and Variables</title>
  </head>

  <body>
  	<?php
  		$x=10;
  		$y=7;

  		//addition operator
  		$z=$x+$y;
  		echo "$x + $y = $z <br/>";

  		//subtraction operator
  		$z=$x-$y;
  		echo "$x - $y = $z <br/>";
  		
  		//multiplication operator
  		$z=$x*$y;
  		echo "$x * $y = $z <br/>";

  		//division operator
  		$z=$x/$y;
  		echo "$x / $y = $z <br/>";

  		//modulus operator
  		$z=$x%$y;
  		echo "$x % $y = $z <br/>";
  	?>
  </body>
</html>