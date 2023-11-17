<div style="margin:0 auto;width:90%;padding:10px;box-shadow: 2px 3px 10px 5px;">
<form role="search" method="get" class="search-form" action=">
<?php echo home_url('/');?>">
<label>
	<span class="screen-reader-text" style="color:red;font-size: 1.4em;text-shadow: 2px,3px,3px;">search here<br>
	</span>
	<input type="search" class="search-field" placeholder="search...">
	<value="<?php echo get_search_query();?>" name="s" style="padding:10px;width:70%;">
</label>
</div>