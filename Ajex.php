<script>
	function showHint(str) {
		if(str.length == 0) {
			document.getElementById("txtHint").innerHTML = "";
			return;
		} else {
			var xmlhttp = new XMLHttpRequest();//ajax
			xmlhttp.onreadystatechange = function(){
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("txtHint").innerHTML = this.responseText;
				}
			};
			xmlhttp.open("GET", "result.php?q=" + str, true);
			xmlhttp.send();
		}
	}
</script>

<?php
	$c = mysqli_connect("localhost","root","","shop");
	$s = mysqli_query($c,"select distinct category from product");
?>

<select name="product" onchange="return showHint(this.value)">
<?php
	while($r = mysqli_fetch_array($s))
	{
?>	
		<option value="<?php echo $r['category']; ?>"><?php echo $r['category'];?>
	</option>
	<?php

	}
?>
</select>
<div id="txthint">Choose your product Above</div>