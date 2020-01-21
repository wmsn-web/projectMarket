<?php
class Campaign_EditPage extends CI_controller
{
	
	function index()
	{ ?>

		<!DOCTYPE html>
<html lang="en">				
<head>
	
</head>
<body>
<?php
	include_once 'includes/db_connection.php';
	include_once 'includes/constants.php';

	include 'includes/header.php';

?>
<?php include 'includes/topheader.php';?>

<section>
	<div class="row">
		<?php include 'includes/sidebar.php';?>
			<div class="col-lg-9 col-md-8 sideblock1">
				<div class="design_page">
					<div class="formtitle">
						<h5>Campaign Edit Page</h5>
					</div>
					
					<?php 
						$id = intval($_GET['id']);
						$query1 = "select * from campaign where id = $id";
						$result = $conn->query($query1);

					if($result->num_rows){

							$p_data=$result->fetch_assoc();
					/*print_r($p_data);*/

					?>
					<form method="POST" id="campaignEdit_validate" action="campaign_update?id=<?=$id?>" enctype="multipart/form-data">
					  <div class="row">
					    <div class="col-lg-2 pad360">
					    	<label>Title </label>
					    </div>
					    <div class="col-lg-10 pad360">
					    	<div class="form-group">
					    		<input type="text" class="form-control"  name="title" placeholder="Enter Title" value="<?=$p_data['title']?>">
						    </div>
					    </div>
					    <div class="col-lg-2 pad360">
					    	<label>Description</label>
					    </div>
					    <div class="col-lg-10 pad360">
					    	<div class="form-group">
					    		<textarea class="form-control" id="desc" rows="3" name="desciption" placeholder="Enter Description"><?=$p_data['description']?></textarea>
						    </div>
					    </div>					    
					    <div class="col-lg-2 pad360">
						    <label for="exampleInputEmail1">Upload Image</label>
					    </div>
					    <div class="col-lg-10 pad360">
					    	<div class="form-group">
					    		 <input type="text"  name="previous_image" value="<?=$p_data['upload_image']?>">
					    		 <input type="file" class="form-control-file" name="camp_image">
					    		 <img src="<?=image_path().$p_data['upload_image']?>" width="50" height="50" />
						    </div> 
					    </div>
					    <div class="col-lg-2 pad360">
						    <label for="exampleCheck1">Max Budget</label>						 	
					    </div>		
					    <div class="col-lg-10 pad360">
					    	<div class="form-group">
					    		<input type="text" class="form-control"  name="budget" placeholder="Enter Max Budget" value="<?=$p_data['max_budget']?>">
						    </div>
					    </div>
					    <div class="col-lg-2 pad360">
						    <label for="exampleCheck1">Amount </label>						 	
					    </div>		
					    <div class="col-lg-10 pad360">
					    	<div class="form-group">
					    		<input type="text" class="form-control"  name="amount" placeholder="Enter Amount Per Person" value="<?=$p_data['amount']?>">
						    </div>
					    </div>
					    <div class="col-lg-2 pad360">
						    <label for="exampleCheck1">Duration </label>						 	
					    </div>		

					    <div class="col-lg-5 pad360">
						    <label for="exampleCheck1">From </label>
					    	<div class="form-group">
					    		<input type="date" name="bday" id="bday" class="form-control" value="<?=$p_data['date_from']?>">
						    </div>
					    </div>

					    <div class="col-lg-5 pad360">
						    <label for="exampleCheck1">To </label>
					    	<div class="form-group">
					    		<input type="date" name="bday1" class="form-control" value="<?=$p_data['date_to']?>">
						    </div>
					    </div>

					    <div class="col-lg-2 pad360">
						    <label for="exampleCheck1"> Barcode  </label>						 	
					    </div>		
					    <div class="col-lg-8 pad360">
					    	<div class="form-group">
					    		<input type="text" class="form-control" id="" name="barcode" placeholder="Enter Barcode" value="<?=$p_data['generate_barcode']?>">
						    </div>
					    </div>		
					    <div class="col-lg-2 pad360">
					    	<div class="form-group">
					    		<button type="submit" class="btn btn-primary">Download</button>
						    </div>
					    </div>	    
					    <div class="col-lg-12 pad360 text-left mtop">
					    	<input type="submit" class="btn btn-primary creat_prod" name="submit" value="Update">
					    	<a type="submit" class="btn btn-primary" href="campaign.php">Back</a>
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
		
<?php	}
}