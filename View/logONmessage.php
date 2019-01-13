

<div class="messages" style="overflow: auto; ">

	<?php 

	$count=0;
	$postinfo=$db->displayComments();


	foreach ($postinfo as $row) {
		
		$userpost=$row['username'];
		$avapost=$row['avatar'];
		$commentpost=$row['comment'];
		?>

		<img src="<?php echo $avapost ?>" alt="img" height="40" width="40"><br>

		<?php
		echo "User : ".$userpost." "." "."<br>"."Post : ".$commentpost."<br>"."<br>";
		?>
		<hr>
		<?php
	}
	
	?>
	
</div>