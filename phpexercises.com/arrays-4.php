<!
#######################################################################
## PHP Arrays Exercise 4: Add User Input to Array      			  	 ##
## This exercise takes user input as added value for an array  	 ##
## Credits: phpexercises.com/php-add-user-input-array-exercise.html  ##
#######################################################################
-->

<html>
  <head>
  	<title>Add User Input to Array</title>
  </head>

  <body>
  	<?php 
  	  if (!isset($_POST['btnsend'])) {
  	  	$common_travel=array("Automobile", "Jet", "Ferry", "Subway");
  	?>

  	<p>Travel takes many forms, whether across town, across the country, 
  		or around the world.<br/> Here is a list of some common modes of transportation:</p>
	<ul>
		<?php foreach ($common_travel as $travel) {
			echo "<li>{$travel}</li>";
		}?>
	</ul>
  	
  	<form action='<?php echo $_SERVER['PHP_SELF']?>' method='POST'>
  		<label>How about you, how do you travel?</label>
  		<input type='text' name='userTravel'/>

  		<?php
		//Send current travel array as hidden form data.
		foreach ($common_travel as $t){
  			echo "<input type=\"hidden\" name=\"common_travel[]\" value=\"$t\" />\n";
		} ?>

		<input type='submit' name='btnsend' value='Send'/>
  	</form>

  	<?php }//end of if statement
  	  else {
  	   	$common_travel=$_POST['common_travel'];
  	   	$user_travel=explode(',', $_POST['userTravel']);
  	   	$common_travel=array_merge($common_travel, $user_travel); ?>

  	   	<p>Here is the list of modes of travel including yours:</p>
  	   	<ul>
  	   		<?php foreach ($common_travel as $travel) {
  	   			echo "<li>{$travel}</li>";
  	   		}?>
  	   	</ul>

  	   	<form action='<?php echo $_SERVER['PHP_SELF']?>' method='POST'>
  	   		<label>Want to add more?</label><br/>
  	   		<input type='text' name='userTravel'/>
  	   		<?php foreach ($common_travel as $t){
  					echo "<input type=\"hidden\" name=\"common_travel[]\" value=\"$t\" />\n";
  	   			  }?>
  	   		<input type='submit' name='btnsend' value='Send'/>
  	   	</form>
  	<?php }//end of else statement ?>
  	
  </body>
</html>
