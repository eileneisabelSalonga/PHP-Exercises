<! --
############################################################################
## PHP Forms Exercise 2: Interactive Form with If-Else Statement          ##
## This exercise asks for a user input and displays it from the same file ##
## Credits: phpexercises.com/php-form-if-else-exercise.html               ##
############################################################################
-->
 
  <?php
  //if form not submitted, display form
  if (!isset($_POST['btnsend'])) {
  ?>

<html>
  <head>
    <title>Self Processing Form</title>
  </head>

  <body>
    <form action='<?php echo $_SERVER['PHP_SELF']?>' method='POST'>
      <label>What is your name?</label>
      <input type='text' name='username'></input>
      <input type='submit' value='Send' name='btnsend'> </input>
    </form>
 
  <?php
  //if form submitted, process input.
  }
  else{
   //Retrieve string from form submission.
   echo "Hello there ".$_POST['username']."!";
  }
  ?>

  </body>
</html>