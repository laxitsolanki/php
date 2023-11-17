<?php get_header();?>
<?php
if(have_posts()):
	while(have_posts()):the_post();
?>
<div style="background-color:red;">
<a href="<?php the_permalink();?>"><?php the_title();?></a>
</div><br>
<span>
	<?php previous_post_link();?>
</span>
<span>
	<?php next_post_link();?>
</span>
<?php endwhile;
else:
	echo wpautop('sorry, no post avaliable....');
endif;
?>
<?php get_footer();?>