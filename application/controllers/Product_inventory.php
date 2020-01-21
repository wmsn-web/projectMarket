<?php
class Product_inventory extends CI_controller{
	function index(){ ?>


		<!DOCTYPE html>
<html>
<head>

	<?php 
	include_once 'includes/db_connection.php';
	include 'includes/header.php';?>
</head>
<body>

<?php include 'includes/topheader.php';?>

<section>
	<div class="">
		<div class="row">
			<?php include 'includes/sidebar.php';?>
			<div class="col-lg-9 col-md-8 sideblock1">
				<div class="design_page">
					<div class="formtitle">
						<h5>Product Inventory</h5>
					</div>
					<div class="addbtn">
						<a class="btn btn-outline-primary" href="product_creation" role="button">+ Add Product</a>
							<button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#uploadcv">Upload CSV</button>
				
					<form method="POST" id="download_csv" action="export" style="display: inline-block;">
						<input type="submit" name="product_csv" class="btn btn-outline-primary" value=" Download CSV">
					</form>

					</div>
					<table id="prod_inventory" class="display nowrap" cellspacing="0" width="100%">     
					<thead> 
					    <tr> 
					        <th>Name</th> 
					        <th>Price</th> 
					        <th>Description</th>
					        <th>Action</th> 
					    </tr> 
					</thead> 
					<tbody> 

					   <?php 
					
					$sql = "SELECT id ,name ,price, description from product ORDER BY id ASC";	
					$result = $conn-> query($sql);
       			
       				
					while($row = $result->fetch_assoc()){


					echo "<tr>";
					echo "<td>" . $row['name'] . "</td>";
					echo "<td>" . $row['price'] . "</td>";
					echo "<td>" . $row['description'] . "</td>";
					echo '<td><a class="btn btn-outline-primary btn-sm" href="product_EditPage?id='.$row["id"].'" name="edit" role="button">Edit</a>
						  	<a class="btn btn-outline-danger btn-sm" href="product_delete?id='.$row["id"].'"" role="button" data-toggle="modal" data-target="#delebtn'.$row["id"].'">Delete</a></td>';
					echo '</tr>';

					echo '<div class="modal fade" id="delebtn'.$row["id"].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Product Delete</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					        Are you sure you want to delete?
					      </div>
					      <div class="modal-footer">
					       <a class="btn btn-primary"  href="product_delete?id='.$row["id"].'">Yes</a>
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
					      </div>
					    </div>
					  </div>
					</div>';
					}
					
			    ?>

					    </tbody> 
					</table>

					<div class="modal fade" id="uploadcv" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Upload CSV File</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>

					      <div class="modal-body">
					    <form method="POST" action="import" enctype="multipart/form-data">
					      	
							<div class="image-file">
							   <input type="file" name="file" class="form-control-file border" >
							  
							</div>							
					      </div>
					      <div class="modal-footer">
					         <input type="submit"  name="product_import" value="Yes" class="btn btn-primary"/>
					         <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
					      </div>
					    </form>

						</div>
					 </div>
				  </div>
					<?php
					if(!empty($_SESSION["snackbar_msg"])){?>

					<div class="col-lg-12 pad360 text-left" >
					    <div class="snackbar_msg" ><?=$_SESSION["snackbar_msg"]?></div>
					 </div>

						<?php	
 						unset($_SESSION["snackbar_msg"]);}
 					   ?>	

					

				</div>
			</div>
		</div>
	</div>
</section>
<?php include 'includes/footer.php';?>
<div class="preshadow"></div>
<div class="preloader"></div>
<script type="text/javascript">

		    $(".snackbar_msg").fadeIn(); 
		    setTimeout(function(){
		        $(".snackbar_msg").fadeOut();
		     }, 3000);
		</script>

<script type="text/javascript">
	setTimeout(function(){        
	$(".preloader").fadeOut();
	  }, 5000);
	setTimeout(function(){
	 $(".preshadow").fadeOut();
		}, 5000);
</script>
</body>
</html>









<?php	}
} ?>