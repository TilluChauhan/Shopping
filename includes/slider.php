<?php 
	while($row=mysqli_fetch_array($slideresult)){
	?>
		<img  height="400px" src="<?php echo 'admin/images/slider/'.$row['image'];?>" />	
	<?php
		}
	
?>                                                                                                      