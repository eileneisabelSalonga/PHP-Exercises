<!
################################################################################
## PHP Functions Exercise 3: Function for HTML 		 	  	   		  		  ##
## This exercise creates a function identifies the number of days in a month  ##
## and displays the value that the user selected  	 			  	   		  ##
## Credits: phpexercises.com/php-function-html-exercise.html 		  		  ##
################################################################################
-->

<?php
$months=array(
  'January'=>31,
  'February'=>'28 days, if leap year 29',
  'March'=>31,
  'April'=>30,
  'May'=>31,
  'June'=>30,
  'July'=>31,
  'August'=>31,
  'September'=>30,
  'October'=>31,
  'November'=>30,
  'December'=>31
);
 
//function definition
function option($str){
  echo "<option value=\"$str\">" .ucfirst($str). "</option>\n";
}
 
?>
 
<html>
  <head>
	<title>Days in a Month</title>
  </head>
 
  <body>
	<?php
	if(!isset ($_POST['submit'])){
	?>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
	  <p>Please choose a month.</p>
	  <select name="month">
		<?php
		//Create options using the array and the function.
  		foreach ($months as $k => $v){
    	  option($k);
  		}
		?>
	  </select>  
	 <p/>
	 <input type="submit" name="submit" value="Go" />
	</form>

	<?php
	}
	else {
	//Retrieve user input.
  	$month = $_POST['month'];
	//Allow for February using a conditional statement.  
  	if ($month == 'February'){
      echo "The month of February has " . $months['February'] . ".";
  	} else{
       echo "The month of $month has $months[$month] days.";
  	  } 
	}
?>
 
</body>
</html>