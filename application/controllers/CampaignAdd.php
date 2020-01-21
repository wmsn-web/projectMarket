<?php
class CampaignAdd extends CI_controller
{
	
	function index()
	{ ?>


		<?php

// Include config file


include_once 'includes/db_connection.php';

if(isset($_POST['submit'])) {

$title = $_POST['title'];
$description = $_POST['desciption'];
//$image = $_POST['image'];
$budget = $_POST['budget'];
$amount = $_POST['amount'];
$date_from = $_POST['bday'];
$date_to = $_POST['bday1'];
$barcode = $_POST['barcode'];
$images = $_FILES['image']['name'];

/*
if(!empty($title) && (!empty($description)) && (!empty($image)) && (!empty($budget)) && (!empty($amount)) && (!empty($date_from)) && (!empty($date_to)) ){
*/
$sql = "INSERT INTO campaign (title, description, upload_image, max_budget, amount, date_from, date_to, generate_barcode) VALUES('$title', '$description', '$images', '$budget', '$amount', '$date_from', '$date_to', '$barcode')";

       $campaign_insert = mysqli_query($conn ,$sql) or die (mysqli_error($conn));

            if($campaign_insert){
                $move = "assets/images/uploads/";
            	move_uploaded_file($_FILES["image"]["tmp_name"], $move.$images);

                $_SESSION["snackbar_msg"] = "Campaign Created Successfully";
                

               echo "<script>setTimeout(\"location.href ='campaign';\",200);</script>";
              
            }else{
                header("location: home");

                $_SESSION["snackbar_msg"] = "Please try again, Unable to update data.";

            }

	/*} else {
			   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}*/
}
mysqli_close($conn);
?>


		<?php } 
	} ?>