<?php 
	while($row=mysqli_fetch_array($slideresult)){
	?>
		<img   src="<?php echo 'admin/images/slider/'.$row['image'];?>" />	
	<?php
		}
	
?>                                                                                                      