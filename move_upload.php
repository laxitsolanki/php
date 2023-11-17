<form method="POST" enctyppe="multipart/form-data">
<input type="file" name="f"><input type="submit" name="s" value="upload">
</form>
<?php
if (isset($_POST['s']))
 {
	move_uploaded_file($_FILES['f']['tmp_name'], $_FILES['f']['name']);
	echo "file uploaded successfully.....";
}
?>