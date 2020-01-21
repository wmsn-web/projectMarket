<?php
class product_add extends CI_controller{
	function index(){ ?>


		<?php

// Include config file
include_once 'includes/db_connection.php';

if(isset($_POST['submit'])){
/*echo "<pre>";*/


$name = $_POST['nme'];
$price = $_POST['price'];
$description = $_POST['description'];
$image_url = $_POST['img'];
$stores = $_POST['store_id'];

// if(is_array($stores)){
// $store_values = implode(',', $stores);	
// }else{
// 	$store_values=null;
// }


/*
if(!empty($name) && (!empty($price)) && (!empty($description)) && (!empty($image_url)) ){*/

$sql = "INSERT INTO product (name, price, description, image_url ) VALUES('$name', '$price', '$description', '$image_url')";

if (mysqli_query($conn, $sql)) {
				 $last_id=$conn->insert_id;

	if(is_array($stores)){
		
		foreach ($stores as $key => $value) {
				
				$product_id=$last_id;
				$store_id=$value;
					// echo 'p--'.$product_id.'-store'.$value.'<br>';
	$store_mk_sql = "INSERT INTO strprod_detail (str_fk , prod_fk) VALUES('$store_id', '$product_id')";

		$product_insert = mysqli_query($conn ,$store_mk_sql) or die (mysqli_error($conn));

            if($product_insert){

                $_SESSION["snackbar_msg"] = "Product Created Successfully";
                echo "<script>setTimeout(\"location.href ='product_inventory';\",200);</script>";
              
            } else{
            	header('Location: ' . $_SERVER['HTTP_REFERER']);
                $_SESSION["snackbar_msg"] = "Please try again, Unable to update data.";
            }
        }
    }

 /* } else {
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     	}*/
			
}
}

mysqli_close($conn);
?>


<?php
}
} ?>