<?php
/**
 * 
 */
class Export extends CI_controller
{
	
	function index()
	{ ?>
		
          <?php 
include_once 'includes/db_connection.php';

/*ADVERTISEMENT PAGE*/
// print_r($_POST);
// exit();
      if(isset($_POST["advertisement_csv"]))  
      {  
            $id = $_GET['id'];
            $query = "SELECT  * from campaign where id = '$id'";  
    
      $result = mysqli_query($conn, $query);  
      $row = mysqli_fetch_assoc($result);
/*print_r($_POST);
exit();*/
            /*$id = $_GET['id'];*/
      $filename = $row["title"]."_ads".date("d-M").".csv";
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename="'.$filename.'"');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('Title', 'Price','Image URL','Description'));  
      $query = "SELECT title, price,image_path, description from advertisement where camp_id = '$id'";  
    
      $result = mysqli_query($conn, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
     

      } 
       
/*ITEMS_UPLOAD PAGE*/

      if(isset($_POST["items_csv"]))  
      {
      $id = $_GET['id'];
       $id = $_GET['id'];
            $query = "SELECT  * from campaign where id = '$id'";  
    
      $result = mysqli_query($conn, $query);  
      $row = mysqli_fetch_assoc($result);
      $filename =  $row["title"]."_items".date("d-M").".csv";
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename="'.$filename.'"');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('Title','Price', 'Image_url','Description')); 
      $query = "SELECT title,price,image_url,description from items where camp_id = '$id'";  
      $result = mysqli_query($conn, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
      }  

       /*PRODUCT_UPLOAD PAGE  start here  */

      if(isset($_POST["product_csv"]))  
      {
      $filename = "product_list_".date("d-M").".csv";
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename="'.$filename.'"');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('Product Name', 'Product Price','Product Description','Image Url','Store ids'));  
      $query = "SELECT  name as 'Product Name', price as 'Product Price',  description as 'Product Description', image_url as 'Image Url', (select GROUP_CONCAT(store.store_uniq_id) FROM strprod_detail join store on strprod_detail.str_fk=store.st_id where strprod_detail.prod_fk=id ) as stores from product";  
      $result = mysqli_query($conn, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
      }        
       /*PRODUCT_UPLOAD PAGE end here  */


?>

<?php	}
}