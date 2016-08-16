<?php

if( class_exists('acf') ) { ?>
	<h2>Class Exists</h2>
	
	<?php
		$headerImage = the_field('header_image');
		$headerLink = the_field('header_image_link');
	?>

	<img src="<?php $headerImage ?>" alt="" />
	<p><?php $headerLink ?></p>
<?php 
}
?>			