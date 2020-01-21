<?php
class Product_EditPage extends CI_controller{
	function index(){ ?>

     <!DOCTYPE html>
<html lang="en">				
<head>
<?php 
	include_once 'includes/db_connection.php';
	include_once 'includes/constants.php';

	include 'includes/header.php';
?>
</head>
<body>

<?php include 'includes/topheader.php';?>

<section>
	<div class="row">
		<?php include 'includes/sidebar.php';?>
			<div class="col-lg-9 col-md-8 sideblock1">
				<div class="design_page">
					<div class="formtitle">
						<h5>Product Edit Page</h5>
					</div>
					<?php 
						$id = intval($_GET['id']);
						$data = "select * from product where id = $id";
						$result = $conn->query($data);

					if($result->num_rows){

							$p_data=$result->fetch_assoc();
							// print_r($p_data);
					?>
					
					<form method="POST" id="productEdit_validation" action="product_update?id=<?=$id?>">
					  <div class="row">
					    <div class="col-lg-2 pad360">
					    	<div>
						    	<label>Name</label>
						    </div>
					    </div>
					    <div class="col-lg-10 pad360">
					    	<div class="form-group">
					    		<input type="text" class="form-control" name="nme" id="name" placeholder="Enter Name" value="<?=$p_data['name']?>">
						    </div>
					    </div>
					    <div class="col-lg-2 pad360">
					    	<div>
						    	<label>Price</label>
						    </div>
					    </div>
					    <div class="col-lg-10 pad360">
					    	<div class="form-group">
					    		<input type="text" class="form-control" id="price" name="price" placeholder="Enter Price" value="<?=$p_data['price']?>">
						    </div>
					    </div>
					    <div class="col-lg-2 pad360">
					    	<div>
						    	<label>Description</label>
						    </div>
					    </div>
					    <div class="col-lg-10 pad360">
					    	<div class="form-group">
					    		<textarea class="form-control" id="desc" rows="3" name="description" placeholder="Enter Description"><?=$p_data['description']?></textarea>
						    </div>
					    </div>					    
					    <div class="col-lg-2 pad360">
						    <label for="exampleInputEmail1">Image url</label>
					    </div>
					    <div class="col-lg-10 pad360">
					    	<div class="form-group">
						    	<input type="text" class="form-control" id="imgpath" name="img" placeholder="Enter imahe url" value="<?=$p_data['image_url']?>">
						    </div>
					    </div>
					    <div class="col-lg-2 pad360">
						    <label class="form-check-label" for="exampleCheck1">Stores</label>						 	
					    </div>
					    <?php

						 $sql = "SELECT * from store order by st_id ASC";	
						$result_1 = $conn-> query($sql);


						    $edt_str= "SELECT * from strprod_detail where prod_fk='".$id."' ";
						    	 
						 	$get_mark_stores=$conn->query($edt_str);


						while($row = $result_1->fetch_assoc() ){

						?>

  						  <div class="col-lg-2 pad360">
					    	<div class="form-check">
						    	<input type="checkbox" class="form-check-input"  name="edt_store_id[]" value="<?=$row['st_id']?>" 
						    	
						<?php
						 /*	 print_r($get_mark_stores->fetch_assoc());*/

								// foreach ($get_mark_stores->fetch_assoc() as $key => $value) {
						    	while($value = $get_mark_stores->fetch_assoc()){
								// exit();
								if($value['str_fk'] == $row['st_id'])
								{
								   echo 'checked';
								   break;
								}
						 	 }
						  $get_mark_stores->data_seek(0);
						?>
						    	>
						    <label class="form-check-label" for="exampleCheck1"><?=$row['name']?></label>
						 	</div>
					    </div>
					 
						
				<?php		
						
				    }						
			    ?>	    
					    
					    <div class="col-lg-12 pad360 text-left mt-4">
					    	<input type="submit" class="btn btn-primary creat_prod" name="submit" value="Update">
					    	<a type="submit" class="btn btn-primary" href="product_inventory">Back</a>
					    </div>
					
					  </div>				  
					</form>
					<?php } else{ ?>
					<p>No Data Found</p>
				<?php }?>
				</div>
			</div>
		</div>
</section>
<div class="preshadow"></div>
<div class="preloader"></div>
<?php include 'includes/footer.php';?>
</body>
</html>

<?php } 
} ?>