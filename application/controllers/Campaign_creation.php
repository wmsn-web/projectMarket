<?php
class Campaign_creation extends CI_controller
{
	
	function index()
	{ ?>
		
<!DOCTYPE html>
<html lang="en">				
<head>
	<?php include 'includes/header.php';?>
</head>
<body>

<?php include 'includes/topheader.php';?>

<section>
	<div class="row">
		<?php include 'includes/sidebar.php';?>
			<div class="col-lg-9 col-md-8 sideblock1">
				<div class="design_page">
					<div class="formtitle">
						<h5>Campaign Creation</h5>
					</div>
					<p><span class="error">* All Fields Are Required</span></p>
					
					<form method="POST" id="campaign_validate" action="campaignAdd" enctype="multipart/form-data">
					  <div class="row">
					    <div class="col-lg-2 pad360">
					    	<label>Title</label>
					    </div>
					    <div class="col-lg-10 pad360">
					    	<div class="form-group">
					    		<input type="text" class="form-control" id="name"  name="title" placeholder="Enter Title">
						    </div>
					    </div>
					    <div class="col-lg-2 pad360">
					    	<label>Description</label>
					    	
					    </div>
					    <div class="col-lg-10 pad360">
					    	<div class="form-group">
					    		<textarea class="form-control" id="desc" rows="3" name="desciption" placeholder="Enter Description"></textarea>
						    </div>
					    </div>					    
					    <div class="col-lg-2 pad360">
						    <label for="exampleInputEmail1">Upload Image</label>
					    </div>
					    <div class="col-lg-10 pad360">
					    	<div class="form-group">
					    		 <input type="file" class="form-control-file" name="image">
						    </div>
					    </div>
					    <div class="col-lg-2 pad360">
						    <label for="exampleCheck1">Max Budget</label>						 	
					    </div>		
					    <div class="col-lg-10 pad360">
					    	<div class="form-group">
					    		<input type="text" class="form-control"  name="budget" placeholder="Enter Max Budget">
						    </div>
					    </div>
					    <div class="col-lg-2 pad360">
						    <label for="exampleCheck1">Amount </label>						 	
					    </div>		
					    <div class="col-lg-10 pad360">
					    	<div class="form-group">
					    		<input type="text" class="form-control"  name="amount" placeholder="Enter Amount Per Person">
						    </div>
					    </div>
					    <div class="col-lg-2 pad360">
						    <label for="exampleCheck1">Duration </label>						 	
					    </div>		

					    <div class="col-lg-5 pad360">
						    <label for="exampleCheck1">From </label>
					    	<div class="form-group">
					    		<input type="date" name="bday" id="bday" class="form-control">
						    </div>
					    </div>

					    <div class="col-lg-5 pad360">
						    <label for="exampleCheck1">To </label>
					    	<div class="form-group">
					    		<input type="date" name="bday1" id="bday1" class="form-control">
						    </div>
					    </div>

					    <div class="col-lg-2 pad360">
						    <label for="exampleCheck1"> Barcode  </label>						 	
					    </div>		
					    <div class="col-lg-8 pad360">
					    	<div class="form-group">
					    		<input type="text" class="form-control" id="name" name="barcode" placeholder="Enter Barcode">
						    </div>
					    </div>		
					    <div class="col-lg-2 pad360">
					    	<div class="form-group">
					    		<button type="submit" class="btn btn-primary">Generate</button>
						    </div>
					    </div>	    
					    <div class="col-lg-12 pad360 text-left mtop">
					    	<input type="submit" class="btn btn-primary creat_prod" name="submit" value="Create">
					    	<a type="submit" class="btn btn-primary" href="campaign.php">Back</a>
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
}