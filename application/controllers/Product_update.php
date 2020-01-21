<?php
class Product_update extends CI_controller{
	function index(){ ?>

		<?php

// Include config file
include_once 'includes/db_connection.php';
include_once 'includes/constants.php';

if(isset($_POST['submit'])){

$id = intval($_GET['id']);
$name = $_POST['nme'];
$price = $_POST['price'];
$description = $_POST['description'];
$image_url = $_POST['img'];
$edit_stores = $_POST['edt_store_id'];

/*if(!empty($name) && (!empty($price)) && (!empty($description)) && (!empty($image_url))  ){*/

$sql = "UPDATE product SET name = '$name',  price = '$price', description = '$description', image_url = '$image_url' where id = '$id' ";

$data = $conn->query($sql);
		if(! $data ){
		die('Could not update data: ' . mysqli_error($conn));
		}else{


	if(is_array($edit_stores)){
		
		$del_old_stores="DELETE FROM strprod_detail WHERE prod_fk=".$id."";
		// 	print_r($del_old_stores);
		// echo "<pre>";
		$conn->query($del_old_stores);
		foreach ($edit_stores as $key => $value) {
				
				$product_id=$id;
				$store_id=$value;
					// echo 'p--'.$product_id.'-store'.$value.'<br>';

		$store_mk_sql = "INSERT INTO strprod_detail (str_fk , prod_fk) VALUES('$store_id', '$product_id')";
		 $product_update = mysqli_query($conn ,$store_mk_sql) or die (mysqli_error($conn));

            if($product_update){

                $_SESSION["snackbar_msg"] = "Product Updated Successfully";
                

               echo "<script>setTimeout(\"location.href ='product_inventory';\",200);</script>";
              
            }else{
                header('Location: ' . $_SERVER['HTTP_REFERER']);

                $_SESSION["snackbar_msg"] = "Please try again, Unable to update data.";
            }

           }
        }
    }

/*	} else {
			   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}*/	
}
?>





			

<?php } 
} ?>