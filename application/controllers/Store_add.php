<?php
class Store_add extends CI_controller
{
	
	function index()
	{ ?>

         <?php
include_once 'includes/db_connection.php';
// print_r($_POST);
// exit();

if(isset($_POST['submit'])){

$name = $_POST['nme'];
$address = $_POST['address'];
$image_path = $_POST['img_url'];
$store_uniq_id = $_POST['store_uniq_id'];
$lat = $_POST['latitude'];
$lng = $_POST['longitude'];

	$query = "select st_id from store where store_uniq_id ='".$store_uniq_id."'";
	$compare_id = mysqli_query($conn ,$query);
	
	// print_r($compare_id);
	// exit();

if(!$compare_id->num_rows){
if(!empty($name) && (!empty($address)) && (!empty($image_path)) && (!empty($store_uniq_id))){
	$sql = "INSERT INTO store (name, address, image_path, store_uniq_id, lat, lng) VALUES('$name', '$address', '$image_path', '$store_uniq_id', '$lat', '$lng')";
 $store_insert = mysqli_query($conn ,$sql) or die (mysqli_error($conn));

            if($store_insert){

                $_SESSION["snackbar_msg"] = "Store Add Successfully";
                

               echo "<script>setTimeout(\"location.href ='store';\",200);</script>";
              
            }else{
                
            	header('Location: ' . $_SERVER['HTTP_REFERER']);
                $_SESSION["snackbar_msg"] = "Please try again, Unable to update data.";
			 }

	} else {
			   echo "All field are required";
			}
}else{
	echo "With this store id already exists";
}

}	
mysqli_close($conn);
?>



		
<?php	}
}