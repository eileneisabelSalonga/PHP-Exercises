<! --
#####################################################################
## PHP Beginnings Exercise 7: Variable Data Types     			       ##
## This exercise displays the type of data assigned to a variable  ##
## using the gettype() function.                                   ##
## Credits: phpexercises.com/php-variable-data-types-exercise.html ##
#####################################################################
-->

<html>
  <head>
  	<title>Displaying Variable Data Types</title>
  </head>

  <body>
  	<?php
  		$whatis="Hello";
  		echo 'Value is '.gettype($whatis).'.<br/>';

  		$whatis=4.29;
  		echo 'Value is '.gettype($whatis).'.<br/>';

  		$whatis=true;
  		echo 'Value is '.gettype($whatis).'.<br/>';

  		$whatis=42911;
  		echo 'Value is '.gettype($whatis).'.<br/>';

  		$whatis=NULL;
  		echo 'Value is '.gettype($whatis).'.<br/>';
  	?>
  </body>
<html>