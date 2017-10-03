	<?php
	
	$cat_sql = "SELECT name FROM tbl_category";
	$cat_query = mysqli_query($dbconnect,$cat_sql);
	$cat_rs = mysqli_fetch_row($cat_query);
	

	if(mysqli_num_rows($cat_query) == 0 ){
		echo "Sorry, we have no items currently in stock";
	} else {
			do{
			?>
			<div class="item">
			<p><?php echo $cat_rs[0]; ?></p>



			<?php
		}while($cat_rs = mysqli_fetch_row($cat_query));
		?>
	<?php
	}

	?>
