<?php 

class Store extends CI_controller
{
	
	function index()
	{ ?>
		<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
	include_once 'includes/db_connection.php';
	include 'includes/header.php';
	?>
</head>
<body>

	<!-- FOR EXPORT CSV -->
<?php 
$sql = "SELECT * FROM store";
$ad_result = mysqli_query($conn,$sql);
?>

<?php include 'includes/topheader.php';?>						

<section>
	<div class="">
		<div class="row">
				
			<?php include 'includes/sidebar.php';?>
			
			<div class="col-lg-9 col-md-8 sideblock1">
				<div class="design_page">
					<div class="formtitle">
						<h5>Stores Detail</h5>
					</div>
			<div class="addbtn">
					<a class="btn btn-outline-primary" href="#" role="button" data-toggle="modal" data-target="#add_store">+ Add Store</a>
				<!-- <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#uploadcv">Upload CSV</button>
				
				<form method="POST" action="export.php">
					<input type="submit" name="store_csv" class="btn btn-outline-primary" value=" Download CSV">
				</form>	 -->
			</div>
					<table id="store_page" class="display nowrap" cellspacing="0" width="100%">     
					<thead> 
					    <tr> 
					        <th>Name</th> 
					        <th>Address</th>
					        <th>Action</th> 
					    </tr> 
					</thead> 
					<tbody> 
					        <?php 
					
					$sql = "SELECT * from store";	
					$result = $conn-> query($sql);
       			
       				
					while($row = $result->fetch_assoc()){
					// print_r($row);
				
					echo "<tr>";
					echo "<td>" . $row['name'] . "</td>";
					echo "<td>" . $row['address'] . "</td>";
					echo '<td>
					<a class="btn btn-outline-primary btn-sm" href="#" name="edit" role="button" data-toggle="modal" data-target="#editstore1'.$row["st_id"].'">Edit</a>

					  <a class="btn btn-outline-danger btn-sm" href="store_delete?id='.$row["st_id"].'" role="button" data-toggle="modal" data-target="#delebtn'.$row["st_id"].'">Delete</a></td>';
					echo '</tr>';
					echo '<div class="modal fade" id="editstore1'.$row["st_id"].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Store Edit Campaign</h5>
					       
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">

					        <form method="POST" id="storeEdit_validation" action="./storeUpdateSave?edit_id='.$row["st_id"].'">
							  <div class="form-group row">
							    <label class="col-lg-3 col-form-label col-form-label-sm pad360">Name</label>
							    <div class="col-lg-9 pad360">
							      <input type="text" name="st_name" class="form-control form-control-sm" placeholder="Enter Name" value="'.$row["name"].'">
							    </div>
							  </div>
							  <div class="form-group row">
							    <label class="col-lg-3 col-form-label col-form-label-sm pad360">Address</label>
							    <div class="col-lg-9 pad360">
							      <textarea class="form-control rm-focontrol-sm" rows="3" placeholder="Enter Address" name="address">'.$row["address"].'</textarea>
							    </div>
							  </div>
							  <div class="form-group row">
							    <label class="col-lg-3 col-form-label col-form-label-sm pad360">Image Url</label>
							    <div class="col-lg-9 pad360">
							      <input type="text" class="form-control form-control-sm" placeholder="Enter Image Url" name="img_url" value="'.$row["image_path"].'">
							    </div>
							  </div>
							  <div class="form-group row">
							    <label class="col-lg-3 col-form-label col-form-label-sm pad360">Store Unique Id</label>
							    <div class="col-lg-9 pad360">
							      <input type="text" class="form-control form-control-sm" placeholder="Enter Stores Unique Id" name="store_uniq_id" value="'.$row["store_uniq_id"].'">
							    </div>
							  </div>
							  <div class="form-group row">
							    <label class="col-lg-3 col-form-label col-form-label-sm pad360">Store Latitude</label>
							    <div class="col-lg-9 pad360">
							      <input type="text" class="form-control form-control-sm" placeholder="Enter Latitude" name="latitude" value="'.$row["lat"].'">
							    </div>
							  </div>
							  <div class="form-group row">
							    <label class="col-lg-3 col-form-label col-form-label-sm pad360">Store Longitude</label>
							    <div class="col-lg-9 pad360">
							      <input type="text" class="form-control form-control-sm" placeholder="Enter Longitude" name="longitude" value="'.$row["lng"].'">
							    </div>
							  </div>
							  <div class="form-group row">
							    <label class="col-lg-3 col-form-label col-form-label-sm pad360">Description</label>
							    <div class="col-lg-9 pad360">
							      <textarea class="form-control rm-focontrol-sm" rows="3" placeholder="Enter Store Description" name="desc">'.$row["description"].'</textarea>
							    </div>
							  </div>
							   
							   <input type="submit" class="btn btn-primary" name="submit" value="Save">
							</form>	
						  </div>
					      <div class="modal-footer">
					     
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					      </div>
					    </div>
					  </div>
					</div>';

					echo '<div class="modal fade" id="delebtn'.$row["st_id"].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Store Campaign</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					        Are you sure you want to Delete?
					      </div>
					      <div class="modal-footer">
					        <a class="btn btn-primary"  href="store_delete?id='.$row["st_id"].'">Yes</a>
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
					      </div>
					    </div>
					  </div>
					</div>';

				}
					?>
					     
					    </tbody> 
					</table>

					

					<div class="modal fade" id="add_store" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Store Campaign</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">

					        <form method="POST" action="store_add" id="store_validation">
							  <div class="form-group row">
							    <label class="col-lg-3 col-form-label col-form-label-sm pad360">Name</label>
							    <div class="col-lg-9 pad360">
							      <input type="text" name="nme" class="form-control form-control-sm" placeholder="Enter Name">
							    </div>
							  </div>
							  <div class="form-group row">
							    <label class="col-lg-3 col-form-label col-form-label-sm pad360">Address</label>
							    <div class="col-lg-9 pad360">
							      <textarea class="form-control rm-focontrol-sm" rows="3" placeholder="Enter Address" name="address"></textarea>
							    </div>
							  </div>
							  <div class="form-group row">
							    <label class="col-lg-3 col-form-label col-form-label-sm pad360">Image Url</label>
							    <div class="col-lg-9 pad360">
							      <input type="text" class="form-control form-control-sm" placeholder="Enter Image Url" name="img_url">
							    </div>
							  </div>
							   <div class="form-group row">
							    <label class="col-lg-3 col-form-label col-form-label-sm pad360">Store Unique Id</label>
							    <div class="col-lg-9 pad360">
							      <input type="text" class="form-control form-control-sm" placeholder="Enter Store Id" name="store_uniq_id">
							    </div>
							  </div>
							   <div class="form-group row">
							    <label class="col-lg-3 col-form-label col-form-label-sm pad360">Store Latitude</label>
							    <div class="col-lg-9 pad360">
							      <input type="text" class="form-control form-control-sm" placeholder="Enter Latitude" name="latitude">
							    </div>
							  </div>
							   <div class="form-group row">
							    <label class="col-lg-3 col-form-label col-form-label-sm pad360">Store Longitude</label>
							    <div class="col-lg-9 pad360">
							      <input type="text" class="form-control form-control-sm" placeholder="Enter Longitude" name="longitude">
							    </div>
							  </div>
							  <div class="form-group row">
							    <label class="col-lg-3 col-form-label col-form-label-sm pad360">Description</label>
							    <div class="col-lg-9 pad360">
							      <textarea class="form-control rm-focontrol-sm" rows="3" placeholder="Enter Store Description" name="desc"></textarea>
							    </div>
							  </div>
							   <input type="submit" class="btn btn-primary"  name="submit" value="Save">
							</form>	
						  </div>
					      <div class="modal-footer">
					     
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
					      </div>
					    </div>
					  </div>
					</div>


				<div class="modal fade" id="uploadcv" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Upload CSV File</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					    <form method="POST" action="import" enctype="multipart/form-data">
					      <div class="modal-body">
							<div class="custom-file">
							   <input type="file" name="file" class="custom-file-input">
							   <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
							</div>							
					      </div>
					      <div class="modal-footer">
					         <input type="submit"  name="items_import" value="Yes" class="btn btn-primary"/>
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
<div class="preshadow"></div>
<div class="preloader"></div>
<?php include 'includes/footer.php';?>
<script type="text/javascript">

    $(".snackbar_msg").fadeIn(); 
    setTimeout(function(){
        $(".snackbar_msg").fadeOut();
     }, 3000);
</script>
</body>
</html>
		
<?php	}
}