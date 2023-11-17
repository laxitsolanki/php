<?php
if(function_exists('register_sidebar'))
{
		$sidebar1 = array
		(
			'before_title'=>'<h2>',
			'after_title'=>'</h2>',
			'name'=>_( 'footer' ));
		
}
		register_sidebar($sidebar1);
?>