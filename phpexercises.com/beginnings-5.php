<! --
#####################################################################
## PHP Beginnings Exercise 5: Variable Content and Destruction     ##
## This exercise compares output of var_dump and print_r 		       ##
## and the difference between unset() and NULL                     ##
## Credits: phpexercise.com/php-variable-content-destruction.html  ##
#####################################################################
-->

<html>
  <head>
  	<title>var_dump() and print_r()</title>
  </head>

  <body>
  	<?php
  		$name='Eilene';
      $age=20;
    ?>
      
     <!a table comparing outputs of var_dump() and print_r()--> 
    <table>
     <tr>
       <td></td>
       <td>var_dump:</td>
       <td>print_r:</td>
     </tr>
     
     <!display value of name-->
     <tr>
       <td>$name</td>
       <td><?php var_dump($name);?> </td>
       <td><?php print_r($name); ?> </td>
     </tr>

     <!display value of age-->
     <tr>
       <td>$age</td>        
       <td><?php var_dump($age); ?> </td>
       <td><?php print_r($age)   ?> </td>
     </tr>

     <!assign NULL and display value of both variables-->
     <tr>
       <td>Assigning NULL</td>
           <?php $name=NULL; $age=NULL;           ?>
       <td><?php var_dump($name); var_dump($age); ?> </td>
       <td><?php print_r($name); print($age);     ?> </td>
     </tr>

     <!unset and display value of both variables-->
      <tr>
       <td>Using unset()</td>
           <?php unset($name); unset($age);      ?>
       <td><?php var_dump($name); var_dump($age);?>  </td>
       <td><?php print_r($name); print_r($age);  ?>  </td>
     </tr>
    	
  </body>
</html>