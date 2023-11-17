<body style="background:skyblue;margin: 0px;">
<?php get_header(); ?>
<div style="list-style-type: none;">	
<div class="menu">
	<?php 
wp_nav_menu();
	?>
	
</div>
</div>
<table border="7" align="center" height="100%" width="90%">
	<tr>
		<td width="70%" align="left" bgcolor="gold">
			<?php 
					if(have_posts()):
					while(have_posts()):the_post();
			?>
						<div style="background:skyblue;">
						<a href="<?php the_permalink(); ?>"><?php the_title();?></a></div>
						<div style="border: 1px red;">
						<?php the_content(); 
		endwhile;
	else:
		echo"sorry,no post are available at here........" ;
	endif;
				?>
			</td>
<td width="30%" align="center" bgcolor="red" >	
<div style="list-style-type: none;">
	<?php dynamic_sidebar(); ?>
			</div>
		</td>
	</tr>	
</table>
<br><br>
<?php get_footer()  ?>
</body>