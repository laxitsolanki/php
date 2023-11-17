<?php get_header();?>
<?php
if(have_posts()):
	while(have_posts()):the_post();
?>
<div style="background-color:yellow;">
<a href="<?php the_permalink();?>"><?php the_title();?></a>
</div><br>
<div style="border:1px solid blue;">
	date:<?php the_date();?>
	time:<?php the_time();?>
	author name:<?php the_author();?>
</div>
<span>
	<?php previous_post_link();?>
</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><?php next_post_link();?></span>
<?php endwhile;
else:
	echo wpautop('sorry, no post avaliable....');
endif;
?>
<?php get_footer();?>