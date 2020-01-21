<?php
class Dashboard extends CI_controller{
	function index(){ ?>
     
     <!DOCTYPE html>
<html lang="en">				
<head>
	<?php include 'includes/header.php';?>
</head>
<body>

<?php include 'includes/topheader.php';?>

<section>
	<div class="">
		<div class="row">
			
				<?php include 'includes/sidebar.php';?>			
				<div class="col-lg-9 col-md-8 sideblock1">
				<section>
					<div class="design_page">
						<div class="formtitle">
							<h5>Welcome To</h5>
						</div>					
						<div class="row">
							<div class="col-md-12">
								<h1 align="center">Demand Market</h1>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
</section>

<?php include 'includes/footer.php';?>
</body>
</html>


<?php } } ?>