<?php
class Campaign_update extends CI_controller{
	function index(){ ?>

		<?php

// Include config file
include_once 'includes/db_connection.php';
include_once 'includes/constants.php';

if(isset($_POST['submit'])){


/*exit();*/

$id = intval($_GET['id']);
$title = $_POST['title'];
$description = $_POST['desciption'];
$image = $_POST['previous_image'];
$budget = $_POST['budget'];
$amount = $_POST['amount'];
$date_from = $_POST['bday'];
$date_to = $_POST['bday1'];
$barcode = $_POST['barcode'];



$temp_img = $_FILES['camp_image']['tmp_name'];
$new_img =image_path().$_FILES['camp_image']['name'];
$upload_ok=move_uploaded_file($temp_img, $new_img);


   if ($upload_ok) {
         $update_image=basename( $_FILES["camp_image"]["name"]);
        @unlink(image_path().$image);
    } else {	
        $update_image=$image;
        
    }

/*if(!empty($title) && (!empty($description)) && (!empty($new_img)) && (!empty($budget)) && (!empty($amount)) && (!empty($date_from)) && (!empty($date_to)) && (!empty($barcode)) ){*/

$sql = "UPDATE campaign SET title = '$title',  description = '$description', upload_image = '$update_image', max_budget = '$budget', amount = '$amount', date_from = '$date_from', date_to = '$date_to', generate_barcode = '$barcode' where id = '$id' ";
 $campaign_update = mysqli_query($conn ,$sql) or die (mysqli_error($conn));

            if($campaign_update){

                $_SESSION["snackbar_msg"] = "Campaign updated Successfully";
                

               echo "<script>setTimeout(\"location.href ='campaign';\",200);</script>";
              
            }else{
                header("location: campaign_creation.php");

                $_SESSION["snackbar_msg"] = "Please try again, Unable to update data.";

            }
/*
  } else {
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }*/

}
?>

<?php }
} ?>