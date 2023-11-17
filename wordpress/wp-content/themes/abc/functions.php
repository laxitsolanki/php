<?php
if (function_exists('register_sidebar'))

$sidebar1=array(
		'defore_title'=>'<h1>',
		'after_title'=>'</h2>',
		'name' =>_('sidemenu'));

register_sidebar($sidebar1);
?>