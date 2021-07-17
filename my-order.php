<?php 
include 'config/config.php';


?>
<!DOCTYPE html>
<html lang="en">

<?php include 'includes/css.php' ?>
<body>

<?php include 'includes/full-header.php' ?>

<?php 
$userId = null;
if(isset($_SESSION['user_id'])){
	$userId = $_SESSION['user_id'];
}
?>








<?php include 'includes/fotter.php'; ?>

<?php include 'includes/js.php'; ?>
</body>
<script type="text/javascript">

</script>
</html>