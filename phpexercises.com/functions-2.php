<!
################################################################################
## PHP Functions Exercise 2: Arguments from User Input 		 	  	   		  ##
## This exercise creates a function that computes for the area of a rectangle ##
## and displays the value that the user selected  	 			  	   		  ##
## Credits: phpexercises.com/php-arguments-user-input-exercise.html 		  ##
################################################################################
-->

<?php
  //function definition
  function rectangleArea($length, $width){
  	$area = $length * $width;
  	return $area;
  }
?>
 
<html>
  <head>
	<title>Functions with User Input</title>
  </head>
 
  <body>
	<?php
	if(!isset ($_POST['submit'])){
	?>
	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
	  <p>Please enter the values of the length and width of your rectangle.</p>
	  <p>Length:  <input type="text" name="length" size="5" /> 
	  <p>Width:  <input type="text" name="width" size="5" /></p>
	  <input type="submit" name="submit" value="Go" />
	</form>

	<?php
	} //end of if statement
	else {
	//Retrieve user values.
	$length = $_POST['length'];
	$width = $_POST['width'];
	//Use function with user values in statement.
	echo "The area of a rectangle with length $length and width $width is " . rectangleArea($length, $width). "."; 
	}//end of else statement
?>
 
</body>
</html>