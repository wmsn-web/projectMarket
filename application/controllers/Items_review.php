<?php
/**
 * 
 */
class Items_review extends CI_controller
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
<?php 
$id = @intval($_GET['id']);
?>
<?php include 'includes/topheader.php';?>

<section>
	<div class="">
		<div class="row">
			<?php include 'includes/sidebar.php';?>
			<div class="col-lg-9 col-md-8 sideblock1">
				<div class="design_page">
					<div class="formtitle">
						<h5>Items Review</h5>
					</div>
					<div class="addbtn">

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
						</div>
					<table id="item_review" class="display nowrap" cellspacing="0" width="100%">     
					<thead> 
					    <tr> 
					        <th>Title</th> 
					        <th>Price</th> 
					        <th>Reason of Rejection</th>
					        <th>Action</th> 
					    </tr> 
					</thead> 
					<tbody> 
						<?php
							$sql = "SELECT * FROM items_review where camp_id = '$id'";
							$ad_result = mysqli_query($conn,$sql);
							while($row = mysqli_fetch_array($ad_result))
							{
							echo "<tr>";
							echo "<td>" . $row['title'] . "</td>";
							echo "<td>" . $row['price'] . "</td>";
							echo '<td> <input type="text" id="reason'.$row["id"].'" class="form-control review myinp" value="'.$row["rejection_reasons"].'" placeholder="Enter if you are going to click reject"></td>';
							echo '<td>
					            	<a class="btn btn-outline-primary btn-sm" href="#" role="button" data-toggle="modal" data-target="#accept'.$row["id"].'">Accept</a>
					            	<a class="btn btn-outline-danger btn-sm"  onclick="reviewfunction('.$row["id"].')" role="button" data-toggle="modal" data-target="#delebtn'.$row["id"].'">Reject</a>
					            	<a class="btn btn-outline-primary btn-sm" href="#" role="button" data-toggle="modal" data-target="#views'.$row["id"].'">View</a>
					            </td>';

					        echo '</tr>';

							
					     echo '<div class="modal fade" id="accept'.$row["id"].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Item Accept</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					        Are you sure you want to accept?
					      </div>
					      <div class="modal-footer">
					       
					        <a href="save_review?review_id='.$row["id"].'"  class="btn btn-primary review" >Yes</a> 
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
					      </div>
					    </div>
					  </div>
					</div>';


					echo '<div class="modal fade" id="delebtn'.$row["id"].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Item Reject</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					        Are you sure you want to reject?
					      </div>
					       <form method="GET" action="update_review?">
					      <div class="modal-footer">
					     
	<input type="hidden" id="rsn'.$row["id"].'" name="reason"  >  
	<input type="hidden" name="review_id" value="'.$row["id"].'">
<button type="submit"  class="btn btn-primary" >Yes</button>
					   
						<button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
					      </div>
					      </form>
					    </div>
					  </div>
					</div>';

				echo '<div class="modal fade" id="views'.$row["id"].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Item Review</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					      	<label>Title : </label>
					        <p>' . $row['title'] . ' </p>					   
					        <label>Price : </label>
					        <p>' . $row['price'] . ' </p>
					        <label>Image : </label>
					        
					        
					        <label>Rejection Reasons : </label>
					        <p>' .$row["rejection_reasons"]. ' </p>
					      </div>
					     </div>
					  </div>
					</div>';


					}
					?>
					 <!-- Are you sure you want to accept?'.$row["id"].' -->
					    </tbody> 
					</table>
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
				window.location='items_review?id=' + val;
			}
	</script>
<Script>
	function reviewfunction(val){
		var reason_data = $("#reason"+val).val();
		$("#rsn"+val).val(reason_data);
	}
</Script>
</section>
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