<?php
	// get the radius from the textfield
  $radius = $_POST['radius'];
  $pi = pi();

  // calculate the volune
  $volume = 4/3 * $pi * $radius ** 3;
  $volrounded = number_format($volume, 2);
?>

<h3>Results:</h3>
The volume of the sphere is <?php echo "$volrounded"; ?> cm<sup>3</sup>.