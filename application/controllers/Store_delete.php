<?php 

class Store_delete extends CI_controller
{
	
	function index()
	{ ?>

		<?php
include_once 'includes/db_connection.php';
include_once 'includes/constants.php';
/*print_r($conn);
exit();*/
if(isset($_GET['id'])){

$id = intval($_GET['id']);
	

$sql = "DELETE FROM store where st_id = '$id' ";
$data= $conn->query($sql);

if(!$data)
	{
      die('Could not delete data: ' . mysqli_error($conn));
   }
   else{
   header("location: store");
	}
}		

mysqli_close($conn);
?>


<?php
}
} ?>