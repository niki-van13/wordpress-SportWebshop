<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Sportringen</title>
</head>
<body>
<?php

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">


		<?php
		if ( have_posts() ) :

			get_template_part( 'loop' );

		else :

			get_template_part( 'content', 'none' );

		endif;
		?>

		</main>
	</div>

<?php
get_footer();

?>


</body>
</html>