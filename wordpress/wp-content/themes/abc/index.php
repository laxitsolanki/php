
<?php get_header (); ?>

<hr>
  <?php
  if (have_posts()):
  	while (have_posts ()): the_post();
  	?>
  	 	<div style="background:orange; font-size:24px; font-family: Cooper Std; color:yellow;">
  	 	<a href="<?php the_permalink (); ?>"> <?php the_title(); ?></a>
  	 </div>
  	  
  	 <?php if(strlen(get_the_excerpt())>20)
  	 {
  	 ?>
  	 <div style="background-color: pink; font-size:24px; font-family:Cooper Std; color:yellow;">
  	 	<?php echo substr(get_the_excerpt(),0,20);
  	 	 ?>
  	 	<span>...</span> <a href="<?php the_permalink(); ?>"> read more</a>
  	 	<br>
  	 	date: <?php the_date(); ?><br>
  	 	time: <?php the_time(); ?>><br>
  	 	Author name: <?php the_author(); ?>
  	 </div>
  	 <?php 
  	}
  	else{
  		?>
  		<div style="background-color: pink; font-size: 24px; font-family: Cooper Std; color:yellow;"> 
  			<?php echo get_the_excerpt(); ?> </div>
  			<?php 
  		} ?>
<?php endwhile;
else:
	echo "aya koi post malti nathi";
endif;
?>
<?php get_footer(); ?>
