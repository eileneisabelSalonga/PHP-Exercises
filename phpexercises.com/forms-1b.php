<! --
###########################################################################
## PHP Forms Exercise 1: Simple Form with PHP Response    		 		       ##
## This exercise asks for a user input and displays it from another file ##
## this if file 2 of 2: displays favorite city from file 1				       ##
## Credits: phpexercises.com/php-simple-form-response.html  	 		       ##
###########################################################################
-->

<html>
  <head>
  	<title>Display User Input</title>
  </head>

  <body>
  	<?php
  	  echo 'Your favorite city is '.$_POST['city'].'!';
  	?>

  	<form action='forms-1a.php'>
  		<label>Not your favorite City? Input another one then!</label>
  		<input type='submit' value='OK'></input>
  	</form>
  </body>
</html>
