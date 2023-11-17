<?php get_header(); ?>
  <?php
  if (have_posts()):
  	while (have_posts()): the_post();
  	?>
  	<div style="background-color:orange; font-size: 26px;">
  		<a href="<?php the_permalink(); ?>">
  			<?php the_title(); ?> </a>
  	</div><br>
  	<div style="border: 5px solid pink; background-color:yellow;">
  		<?php the_content(); ?><br>
  		date: <?php the_date(); ?><br>
  	 	time: <?php the_time(); ?><br>
  	 	Author name: <?php the_author(); ?>
  	</div><br>
  	<span><?php previous_post_link(); ?></span>
  <?php endwhile;
else:
	echo wpautop('sorry no post found');
endif;
?>

