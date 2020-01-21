<?php
class StoreUpdateSave extends CI_controller
{
	
	function index()
	{ ?>

		<?php
include_once 'includes/db_connection.php';
include_once 'includes/constants.php';

// print_r($_POST);

if(isset($_POST['submit'])){


$id = intval($_GET['edit_id']);

$name = $_POST['st_name'];
$address = $_POST['address'];
$image_path = $_POST['img_url'];
$store_uniq_id = $_POST['store_uniq_id'];
$lat = $_POST['latitude'];
$lng = $_POST['longitude'];
$description = $_POST['desc'];

		$query = "select st_id from store where store_uniq_id ='".$store_uniq_id."'";
		$compare_id = mysqli_query($conn ,$query);
$row=mysqli_fetch_object($compare_id);
if(!$compare_id->num_rows || $row->st_id==$id){

	if(!empty($name) && (!empty($store_uniq_id))){

$sql = "UPDATE store SET name = '$name',  address = '$address', image_path = '$image_path', store_uniq_id = '$store_uniq_id', lat='$lat', lng='$lng', description='$description' where st_id = '$id' ";

$store_upload = mysqli_query($conn ,$sql) or die (mysqli_error($conn));

            if($store_upload){

                $_SESSION["snackbar_msg"] = "Store Updated Successfully";
                

               echo "<script>setTimeout(\"location.href ='store';\",200);</script>";
              
            }else{
                
            	header('Location: ' . $_SERVER['HTTP_REFERER']);
                $_SESSION["snackbar_msg"] = "Please try again, Unable to update data.";
			 }

	} else {
			   echo "Store Name And Store Id Can't Be Blank...";
			}
}else{
	echo "With this store id already exists";
}

}	mysqli_close($conn);
?>

<?php }
}
?>