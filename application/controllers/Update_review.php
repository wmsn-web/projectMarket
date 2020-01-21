<?php
/**
 * 
 */
class Update_review extends CI_controller
{
	
	function index()
	{ ?>

		<?php
include_once 'includes/db_connection.php';
/*print_r($_GET);*/
if(isset($_GET["reason"])){


$rejection_reasons = $_GET["reason"];

	if(!empty($rejection_reasons) && ($rejection_reasons !='') ){

	$sql1 = "UPDATE items_review SET rejection_reasons = '$rejection_reasons' where id =".$_GET['review_id']."";

	$item_result = mysqli_query($conn ,$sql1) or die (mysqli_error($conn));

	if($item_result){

            $_SESSION["snackbar_msg"] = "Review Updated Successfully.";
              header('Location: ' . $_SERVER['HTTP_REFERER']);
 
	} else {
		 $_SESSION["snackbar_msg"] = "Please Enter Rejection Reasons.";
		  header('Location: ' . $_SERVER['HTTP_REFERER']);
	
	}
	
}else{
	$_SESSION["snackbar_msg"] = "Please Enter Rejection Reasons.";
		  header('Location: ' . $_SERVER['HTTP_REFERER']);
}
}

?>
<!-- $item_result = $conn->query($sql1);
	echo "<script>alert('Thank uhh...');</script>";
	echo "<script>setTimeout(window.history.back(),100);</script>"; -->
		
<?php	}
}