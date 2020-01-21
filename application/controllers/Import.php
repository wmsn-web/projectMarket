<?php
/**
 * 
 */
class Import extends CI_controller
{
	
	function index()
	{ ?>
		
          <?php 
include_once 'includes/db_connection.php';
$id = @$_GET['id'];

if(isset($_POST["advertisement_import"]))
{
if($_FILES['file']['name'])
 {

  $filename = explode(".", $_FILES['file']['name']);
  if($filename[1] == 'csv')
  {
    $fp = file($_FILES['file']['tmp_name'], FILE_SKIP_EMPTY_LINES);
    if(count($fp)>1)
    {
   $handle = fopen($_FILES['file']['tmp_name'], "r");
   fgetcsv($handle, 10000, ",");

                 $query = "delete from advertisement where camp_id=$id";
                 
                mysqli_query($conn, $query);
                  /*  echo "<pre>";  
                    print_r( $query);*/
   while(($data = fgetcsv($handle, 10000, ",")) !== FALSE)
   {

                 //$ad_id = mysqli_real_escape_string($conn, $data[0] );  
                 $title = mysqli_real_escape_string($conn, $data[0]);  
                 $price = mysqli_real_escape_string($conn, $data[1]);
                 $image_path = mysqli_real_escape_string($conn, $data[2]);  
                 $description = mysqli_real_escape_string($conn, $data[3]);

 $query = "INSERT into advertisement (camp_id, title, price, image_path, description) values('$id', '$title', '$price','$image_path', '$description')";

  $adv_import = mysqli_query($conn ,$query) or die (mysqli_error($conn));
        
   }
fclose($handle);

    if($adv_import){
       $_SESSION["snackbar_msg"] = "Import Done Successfully";
  
      echo "<script>setTimeout(\"location.href = 'advertisement?id=$id';\",300);</script>";
      }else{
         $_SESSION["snackbar_msg"] = "Couldn't Import Data ! please try agin...!!!";
          echo "<script>setTimeout(\"location.href = 'advertisement?id=$id';\",300);</script>";
      }
 }
  else{
    $_SESSION["snackbar_msg"] = "Empty Csv File..!!!";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
 }   
 }
 else{
       $_SESSION["snackbar_msg"] = "Please select csv file format only.!";
       header('Location: ' . $_SERVER['HTTP_REFERER']);
   }  
}
}
/*ADVERTISEMENT IMPORT CSV END*/


/*ITEM IMPORT CSV START*/

if(isset($_POST["item_import"]))
{
if($_FILES['file']['name'])
 {
  $filename = explode(".", $_FILES['file']['name']);
  if($filename[1] == 'csv')
  {
  $fp = file($_FILES['file']['tmp_name'], FILE_SKIP_EMPTY_LINES);
    if(count($fp)>1)
    {
   $handle = fopen($_FILES['file']['tmp_name'], "r");
   fgetcsv($handle, 10000, ",");
  $query = "delete from items where camp_id=$id";
                 
                mysqli_query($conn, $query);


   while(($data = fgetcsv($handle, 10000, ",")) !== FALSE)
   {

                 //$item_id = mysqli_real_escape_string($conn, $data[0] );  
                 //$camp_id = mysqli_real_escape_string($conn, $data[1]);
                 $title = mysqli_real_escape_string($conn, $data[0]);  
                 $price = mysqli_real_escape_string($conn, $data[1]);
                 $image_url = mysqli_real_escape_string($conn, $data[2]);  
                 $description = mysqli_real_escape_string($conn, $data[3]);

$query = "INSERT into items (camp_id, title, price, image_url, description) values('$id', '$title', '$price', '$image_url', '$description')";
                 
        $item_import = mysqli_query($conn ,$query) or die (mysqli_error($conn));
      
}
  
fclose($handle);

    if($item_import){
       $_SESSION["snackbar_msg"] = "Import Done Successfully";
      echo "<script>setTimeout(\"location.href = 'items?id=$id';\",500);</script>";
     }else{
         $_SESSION["snackbar_msg"] = "Couldn't Import Data ! please try agin...!!!";
          echo "<script>setTimeout(\"location.href = 'advertisement?id=$id';\",300);</script>";
      }
}
else
{
   $_SESSION["snackbar_msg"] = "Empty Csv File..!!!";
   header('Location: ' . $_SERVER['HTTP_REFERER']);  
}
}else{
      $_SESSION["snackbar_msg"] = "Please select csv file format only.!";
      header('Location: ' . $_SERVER['HTTP_REFERER']);
   
  }  
}
}
/*ITEM IMPORT CSV END*/

/*product IMPORT CSV start*/
  
if(isset($_POST["product_import"]))
{
  // echo "string";
if($_FILES['file']['name'])
 {

  $filename = explode(".", $_FILES['file']['name']);
  if($filename[1] == 'csv')
  {
     $fp = file($_FILES['file']['tmp_name'], FILE_SKIP_EMPTY_LINES);
    if(count($fp)>1)
    {
   $handle = fopen($_FILES['file']['tmp_name'], "r");
   fgetcsv($handle, 10000, ",");

   $q1 = "delete from product";
        $del_prd = mysqli_query($conn ,$q1);

   
   while(($data = fgetcsv($handle, 10000, ",")) !== FALSE)
   { 
                 $name = mysqli_real_escape_string($conn, $data[0]);
                 $price = mysqli_real_escape_string($conn, $data[1]);
                 $description = mysqli_real_escape_string($conn, $data[2]);
                 $img_url = mysqli_real_escape_string($conn, $data[3]);
                 $stores = mysqli_real_escape_string($conn, $data[4]); 
       
       if ($del_prd) {
                $q2 = "INSERT into product ( name, price, description, image_url) values('$name','$price', '$description', '$img_url')";
               
               if (mysqli_query($conn, $q2)) {
                  $update_new_stores=explode(',', $stores);
                  $last_insert_id = mysqli_insert_id($conn);
 
              if(is_array($update_new_stores)){
                  foreach ($update_new_stores as $key => $value) {
                      $product_id=$last_insert_id;
                      $store_uniq_id=$value; 

                  $store_mk_sql = "INSERT INTO strprod_detail (str_fk , prod_fk)  select st_id,$product_id from store where store_uniq_id='$store_uniq_id'";
                   $prdct_import = mysqli_query($conn ,$store_mk_sql) or die (mysqli_error($conn));
                  }
                }
              }
            }
       }          
          
fclose($handle);

      if($prdct_import){
       $_SESSION["snackbar_msg"] = "Import Done Successfully";
      echo "<script>setTimeout(\"location.href = 'product_inventory';\",500);</script>";
      }else{
         $_SESSION["snackbar_msg"] = "Couldn't Import Data ! please try agin...!!!";
          echo "<script>setTimeout(\"location.href = 'product_inventory';\",500);</script>"; 
      }
  
}
else
{
   $_SESSION["snackbar_msg"] = "Empty Csv File..!!!";
   header('Location: ' . $_SERVER['HTTP_REFERER']);  
}
  }else{
      $_SESSION["snackbar_msg"] = "Please select csv file format only.!";
      header('Location: ' . $_SERVER['HTTP_REFERER']);
  }
}
}

/*product IMPORT CSV end*/

?>

<?php	}
}