<?--diffrence between server side and client side language-->
<scrit>

		//unsecurity
		for(i=1;i<=5;i++;)
		{
			document.write(i);
		}
</script>
<ht>
<?php
	
		//security
		for($i=1;$i<=5;$i++)
		{
			echo $i;
	}
?>