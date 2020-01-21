<?php
class Product_delete extends CI_controller{
	function index(){ ?>

<?php
include_once 'includes/db_connection.php';
include_once 'includes/constants.php';
/*print_r($conn);
exit();*/
if(isset($_GET['id'])){

$id = intval($_GET['id']);
	

$sql = "DELETE FROM product where id = '$id' ";
$data= $conn->query($sql);

if(!$data)
	{
      die('Could not delete data: ' . mysqli_error($conn));
   }
   else{
   header("location: product_inventory");
	}
}		

mysqli_close($conn);
?>


<?php } } ?>