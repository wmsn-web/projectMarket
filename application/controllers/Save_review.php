<?php
/**
 * 
 */
class save_review extends CI_controller
{
	
	function index()
	{ ?>
		
           <?php
// Include config file
include_once 'includes/db_connection.php';
/*print_r($_GET);*/

	$sql1 = "SELECT * from items_review where id =".$_GET['review_id'].""; // review_id
	$item_result = $conn->query($sql1);
	$items_reviews = $item_result->fetch_object();

	$camp_id = $items_reviews->camp_id;
	$title = $items_reviews->title;
	$price = $items_reviews->price;	

	$review_insert = "INSERT INTO  items (camp_id, title, price, image_url, description) VALUES ($camp_id,'$title', $price,null, null)";


	$review_result = $conn->query($review_insert);

if($review_result){

	$delete="DELETE FROM items_review where id =".$_GET['review_id']."";
		$review_delete = $conn->query($delete);

		if($review_delete){
			 $_SESSION["snackbar_msg"] = "Updated Successfully.";
              header('Location: ' . $_SERVER['HTTP_REFERER']);
          } else {
			$_SESSION["snackbar_msg"] = "Couldn't update data please try again.";
		  	header('Location: ' . $_SERVER['HTTP_REFERER']);
		  }
	
}else{
	echo "Error: " . $review_insert . "<br>" . mysqli_error($conn);
}

?>

<?php	}
}