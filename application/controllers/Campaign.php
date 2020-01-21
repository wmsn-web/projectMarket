<?php
class Campaign extends CI_controller
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

<?php include 'includes/topheader.php';?>

<section>
	<div class="">
		<div class="row">
			<?php include 'includes/sidebar.php';?>
			<div class="col-lg-9 col-md-8 sideblock1">
				<div class="design_page">
					<div class="formtitle">
						<h5>Campaign</h5>
					</div>
					<div class="addbtn">
						<a class="btn btn-outline-primary" href="<?php echo base_url()."campaign_creation"; ?>" role="button">+ Add Campaign</a>
					</div>
					<div class="table-responsive">
					<table id="Campaign_page" class="display nowrap" cellspacing="0" width="100%">     
					<thead> 
					    <tr> 
					        <th>Title</th> 
					        <th>Code</th> 
					        <th>Max Budget</th> 
					        <th>From</th> 
					        <th>To</th> 
					        <th>Action</th> 
					    </tr> 
					</thead> 
					<tbody> 
					        
					<?php 
					
					$sql = "SELECT id ,title, generate_barcode, max_budget, date_from, date_to from campaign ORDER BY id ASC";	
					$result = $conn-> query($sql);
       			
       				
					while($row = $result->fetch_assoc()){
						/*echo "<pre>";
						print_r($row['id']);*/
						/*$row['id'];*/
				
					echo "<tr>";
					echo "<td>" . $row['title'] . "</td>";
					echo "<td>" . $row['generate_barcode'] . "</td>";
					echo "<td>" . $row['max_budget'] . "</td>";
					echo "<td>" . date("d-m-Y", strtotime($row['date_from'])). "</td>";
					echo "<td>" . date("d-m-Y", strtotime($row['date_to'])) . "</td>";
					echo '<td><a class="btn btn-outline-primary btn-sm" href="campaign_EditPage?id='.$row["id"].'" name="edit" role="button">Edit</a>
					            	<a class="btn btn-outline-success btn-sm" href="#" role="button">Generate Barcode</a>
					            	<a class="btn btn-outline-danger btn-sm" href="#" role="button" data-toggle="modal" data-target="#delebtn'.$row["id"].'">Delete</a></td>';
					echo '</tr>';

					echo '<div class="modal fade" id="delebtn'.$row["id"].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Campaign</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					        Are you sure you want to Delete?
					      </div>
					      <div class="modal-footer">
					        <a class="btn btn-primary"  href="campaign_delete?id='.$row["id"].'">Yes</a>
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
					      </div>
					    </div>
					  </div>
					</div>';
			
					}
					
					
				    ?>

					      
					    </tbody> 
					</table>
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
<script type="text/javascript">

    $(".snackbar_msg").fadeIn(); 
    setTimeout(function(){
        $(".snackbar_msg").fadeOut();
     }, 3000);
</script>
</body>
</html>

<?php } 
} ?>