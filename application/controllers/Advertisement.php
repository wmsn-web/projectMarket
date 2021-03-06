<?php
/**
 * 
 */
class Advertisement extends CI_controller
{
	
	function index()
	{ ?>

		<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
	include_once 'includes/db_connection.php';
	include 'includes/header.php';?>
</head>
<body>
<!-- FOR EXPORT CSV -->
<?php 
$id = @intval($_GET['id']);

?>

<section>
	<div class="">
		<div class="row">
			<?php include 'includes/sidebar.php';?>
			<div class="col-lg-9 col-md-8 sideblock1">
				<div class="design_page">
					<div class="formtitle">
						<h5>Advertisement</h5>
					</div>
					<div class="addbtn text-center">

			<form method="POST" id="download_csv" action="export?id=<?=$id?>">
						<!-- FOR SELECT ONCHANGE FUNCTION START-->

					<?php 
						$query1 = "SELECT id ,title  from campaign ORDER BY id ASC";
						$result = $conn->query($query1);
					?>

						<select class="btn btn-outline-primary" onchange="myfunction(this.value)">
							  <option value="" disabled selected >Select Campaign</option>
								<?php	 
								 if($result->num_rows){
								while($sel_row = $result->fetch_assoc()){ ?>

								<option value="<?=$sel_row['id']?>" 

									<?php if( $id == $sel_row['id']) { echo 'selected'; } ?>
									>
									<?=$sel_row['title']?></option>;
									<?php }
									} 
								?>
							<!-- FOR SELECT ONCHANGE FUNCTION END -->
							  
							</select>

							<button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#uploadcv">Upload CSV</button>

			<input type="submit" name="advertisement_csv" class="btn btn-outline-primary" value="Download CSV">
			</form>

						</div>
					<table id="adv_page01" cellspacing="0" width="100%">     
					<thead>
					    <tr> 
					        <th>Title</th> 
					        <th>Price</th>
					       
					        <th>Action</th> 
					    </tr> 
					</thead> 
					<tbody> 
					     
							<?php
							$sql = "SELECT * FROM advertisement where camp_id = '$id'";
							$ad_result = mysqli_query($conn,$sql);
							while($row = mysqli_fetch_array($ad_result))
							{
								// echo '<pre>';
								// print_r($row);
							echo "<tr>";
							echo "<td>" . $row['title'] . "</td>";
							echo "<td>$" . $row['price'] . "</td>";
						
							echo '<td><a class="btn btn-outline-primary btn-sm" href="#" role="button" data-toggle="modal" data-target="#views'.$row['ad_id'].'">View</a></td>';
						
					echo '<div class="modal fade" id="views'.$row['ad_id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Advertisement View</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					      	<label>Title :</label>
							<p>' . $row['title'] . ' </p>

					        <label>Price : </label>
					        <p>$' . $row['price'] . ' </p>
					        <label>Image : </label>
					        <div class="imgpopup"><img src="'.$row['image_path'].'" class="w-100" /></div>
					        <label>Description : </label>
					        <p>' . $row['description'] . ' </p>
					      </div>
					      /
					    </div>
					  </div>
					</div>';
 echo '</tr>';
					
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

					<form method="POST" action="import?id=<?=$id?>" enctype="multipart/form-data">
				
							  <div class="image-file">
							    <input type="file" name="file" class="form-control-file border"/>
							  </div>
						
					      </div>
					      <div class="modal-footer">
					        <input type="submit"  name="advertisement_import" value="Yes" class="btn btn-primary"/>
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

<script type="text/javascript">
	function myfunction(val){
		window.location='advertisement?id=' + val;
	}
</script>

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
}
?>