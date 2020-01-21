<?php
class Product_creation extends CI_controller{
	function index(){ ?>

		<!DOCTYPE html>
<html lang="en">				
<head>
	<?php 
	include_once 'includes/db_connection.php';
	include 'includes/header.php';?>
</head>
<body>

<?php include 'includes/topheader.php';?>

<section>
	<div class="row">
		<?php include 'includes/sidebar.php';?>
			<div class="col-lg-9 col-md-8 sideblock1">
				<div class="design_page">
					<div class="formtitle">
						<h5>Product Creation</h5>
					</div>
					
					<form method="POST" id="product_validation" action="product_add">
					  <div class="row">
					    <div class="col-lg-2 pad360">
					    	<div>
						    	<label>Name</label>
						    </div>
					    </div>
					    <div class="col-lg-10 pad360">
					    	<div class="form-group">
					    		<input type="text" class="form-control" name="nme" id="name" placeholder="Enter Name">
						    </div>
					    </div>
					    <div class="col-lg-2 pad360">
					    	<div>
						    	<label>Price</label>
						    </div>
					    </div>
					    <div class="col-lg-10 pad360">
					    	<div class="form-group">
					    		<input type="text" class="form-control" id="price" name="price" placeholder="Enter Price">
						    </div>
					    </div>
					    <div class="col-lg-2 pad360">
					    	<div>
						    	<label>Description</label>
						    </div>
					    </div>
					    <div class="col-lg-10 pad360">
					    	<div class="form-group">
					    		<textarea class="form-control" id="description" rows="3" name="description" placeholder="Enter Description"></textarea>
						    </div>
					    </div>					    
					    <div class="col-lg-2 pad360">
						    <label for="exampleInputEmail1">Image url</label>
					    </div>
					    <div class="col-lg-10 pad360">
					    	<div class="form-group">
						    	<input type="text" class="form-control" id="imgpath" name="img" placeholder="Enter imahe url">
						    </div>
					    </div>
					    <div class="col-lg-2 pad360">
						    <label class="form-check-label" for="exampleCheck1">Stores</label>						 	
					    </div> 
					    <?php

					
						/*if (isset($_POST['store'])){
						echo $_POST['store'];*/
						 $sql = "SELECT * from store";	
						$result = $conn-> query($sql);
       			
       				
					while($row = $result->fetch_assoc()){ 
						?>
						<!-- print_r($row); -->

  						 <div class="col-lg-2 pad360">
					    	<div class="form-check">
						    	<input type="checkbox" class="form-check-input"  name="store_id[]" value="<?=$row['st_id']?>">
						    	<label class="form-check-label" for="exampleCheck1"><?=$row['name']?></label>
						 	</div>
					    </div>
					 
						
				<?php		}						
					    ?>
					   
									    
					    <div class="col-lg-12 pad360 text-left mt-4">
					    	<input type="submit" class="btn btn-primary creat_prod" name="submit" value="Create">
					    	<a type="submit" class="btn btn-primary" href="product_inventory">Back</a>
					    </div>
					    
					  </div>				  
					</form>
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