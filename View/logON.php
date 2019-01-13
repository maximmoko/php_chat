
<form method="post" action="Controller/out.php" enctype="multipart/form-data">
	<div>
		<?php echo "WELLCOME<br>"."<br>";?>
		<?php echo $_SESSION['username']."<br>"."<br>";?>
		<img src="<?php echo $_SESSION['file'] ?>" alt="img" height="80" width="80">
		<input type="submit" name="logout" id="submit" value="Logout" class="submit_btn" />
	</div>
</form>