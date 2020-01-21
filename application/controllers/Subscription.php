<?php
class Subscription extends CI_controller{
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
							<h5>Product Subscription</h5>
						</div>					
						<div class="">
							<div class="row">
								<div class="col-lg-3 col-md-6">
									<div class="inner_plan">
										<div class="sub_box1">
											<span class="pric_lbl">Free</span>
											<ul class="sign_ul1">
												<li><i class="fa fa-check" aria-hidden="true"></i> Quisque At metus Diam</li>
												<li><i class="fa fa-check" aria-hidden="true"></i> Aenean venenatis lobortis</li>
												<li><i class="fa fa-check" aria-hidden="true"></i> mauris sagitis arcu</li>
												<li><i class="fa fa-check" aria-hidden="true"></i> dignissim et majris</li>
											</ul>
										</div>
										<div class="sub_box2 pack1">
											<div><span class="rup_sign"><i class="fa fa-usd" aria-hidden="true"></i>10</span><span class="pri_txt">Per Month</span></div>
											<button class="sub_btn2">Subscribe</button>
										</div>
										
									</div>
								</div>
								<div class="col-lg-3 col-md-6">
									<div class="inner_plan">
										<div class="sub_box1">
											<span class="pric_lbl pric_lbl--lbl1">Normal</span>
											<ul class="sign_ul2">
												<li><i class="fa fa-check" aria-hidden="true"></i> Quisque At metus Diam</li>
												<li><i class="fa fa-check" aria-hidden="true"></i> Aenean venenatis lobortis</li>
												<li><i class="fa fa-check" aria-hidden="true"></i> mauris sagitis arcu</li>
												<li><i class="fa fa-check" aria-hidden="true"></i> dignissim et majris</li>
											</ul>
										</div>
										<div class="sub_box2 pack2">
											<div><span class="rup_sign"><i class="fa fa-usd" aria-hidden="true"></i>30</span><span class="pri_txt">Per Month</span></div>
											<button class="sub_btn2 sub_btn--btn2">Subscribe</button>
										</div>
										
									</div>
								</div>
								<div class="col-lg-3 col-md-6">
									<div class="inner_plan">
										<div class="sub_box1">
											<span class="pric_lbl pric_lbl--lbl2">Pro</span>
											<ul class="sign_ul3">
												<li><i class="fa fa-check" aria-hidden="true"></i> Quisque At metus Diam</li>
												<li><i class="fa fa-check" aria-hidden="true"></i> Aenean venenatis lobortis</li>
												<li><i class="fa fa-check" aria-hidden="true"></i> mauris sagitis arcu</li>
												<li><i class="fa fa-check" aria-hidden="true"></i> dignissimg et majris</li>
											</ul>
										</div>
										<div class="sub_box2 pack3">
											<div><span class="rup_sign"><i class="fa fa-usd" aria-hidden="true"></i>50</span><span class="pri_txt">Per Month</span></div>
											<button class="sub_btn2 sub_btn--btn3">Subscribe</button>
										</div>
										
									</div>
								</div>
								<div class="col-lg-3 col-md-6">
									<div class="inner_plan">
										<div class="sub_box1">
											<span class="pric_lbl pric_lbl--lbl3">Advance Pro</span>
											<ul class="sign_ul4">
												<li><i class="fa fa-check" aria-hidden="true"></i> Quisque At metus Diam</li>
												<li><i class="fa fa-check" aria-hidden="true"></i> Aenean venenatis lobortis</li>
												<li><i class="fa fa-check" aria-hidden="true"></i> mauris sagitis arcu</li>
												<li><i class="fa fa-check" aria-hidden="true"></i> dignissimg et majris</li>
											</ul>
										</div>
										<div class="sub_box2 pack4">
											<div><span class="rup_sign"><i class="fa fa-usd" aria-hidden="true"></i>80</span><span class="pri_txt">Per Month</span></div>
											<button class="sub_btn2 sub_btn--btn4">Subscribe</button>
										</div>
										
									</div>
								</div>
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