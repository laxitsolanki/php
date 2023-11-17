<?php get_header();?>
<?php 
if(have_posts()):
	while(have_posts()):the_post();
?>
<div style="background-color:silver;">
<a href="<?php the_permalink();?>" style="font-size:50px;color:red">
<?php the_title();?></a>
</div>
<div style="border:2px solid blue;">
	<?php the_content();?>
</div><br>
<?php endwhile;
else:
	echo wpautop('no post avalible');
endif;
?>
<?php get_footer();?>