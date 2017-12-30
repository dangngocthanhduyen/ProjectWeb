<?php 
include '../controller/Detail_Controller.php';
$detail_Controller=new Detail_Controller();
$detail=$detail_Controller->detailAction();
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css"  href= "http://localhost/MVCFP/public/css/style.css">
	<link rel="stylesheet" type="text/css"  href= "http://localhost/MVCFP/public/css/ss.css">	
	<link rel="stylesheet" type="text/css"  href= "http://localhost/MVCFP//public/css/bootstrap.css">
	<!-- 	<link href="https://maxcdn.public/csscdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->
	<script type="text/javascript"  src="http://localhost/MVCFP/public/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="http://localhost/MVCFP/public/js/bootstrap.js"  ></script>
	<script type="text/javascript"  src="http://localhost/MVCFP/public/js/js.js" ></script>
	<script src="https://use.fontawesome.com/9325ad171d.js"></script>
</head>
<body>
	<div class="wrapper">
		<div class="navbar-top">
			<div class="container">
				<nav class="navbar navbar-expand-lg ">
					<a class="navbar-brand" href="/MVCFP/index.php">
						<img src="http://localhost/MVCFP/public/image/logo/fulllogoheader.png" style="width:160px;height:40px;" href="#">
					</a>
					<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
						<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
							<li class="nav-item">
								<a class="nav-link" href="/MVCFP/index.php">
									&nbsp;HOME
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="duongda.php">&nbsp;DƯỠNG DA</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="mypham.php">&nbsp;MỸ PHẨM</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="../home/about/index.html">&nbsp;CONTACT</a>
							</li>

						</ul>
						<form class="form-inline my-2 my-lg-0">
							<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
							<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
						</form>
					</div>
				</nav>
			</div>
		</div>              
		<div class="clearfix"></div>
		<div class="container_fullwidth container-product">
			<div class="container">
				<div class="row">
					<div class="col-md-10 product-row">
						<div class="products-details">
							<div class="preview_image">
								<div>
									<img src="http://localhost/MVCFP/<?=$detail['4']?>" style="width:300px;height:300px;position: relative;
									margin: 4%;">
								</div>
							</div>
							<div class="products-description">
								<h5 class="name">
									<?=$detail[2]?>
								</h5>
<!-- 								<p>
									<img alt="" src="images/star.png">
									<a class="review_num" href="#">
										02 Review(s)
									</a>
								</p> -->
								<p>
									Availability: 
									<span class=" light-red">
										In Stock
									</span>
								</p>
								<p>
									<?=$detail[5]?>
								</p>
								<hr class="border">
								<div class="price">
									Price : 
									<span class="new_price">
										<?=$detail[3]?>
										<sup>
											VND
										</sup>
									</span>
<!-- 									<span class="old_price">
										450.00
										<sup>
											$
										</sup>
									</span> -->
								</div>
								<hr class="border">
								<div class="wided">
									<div class="button_group">
										<a class="button" href='https://www.facebook.com/2mins-corner-1109281215839012/' >
											Add Cart.
										</a>
										<a class="button bt-right" href='https://www.facebook.com/2mins-corner-1109281215839012/' >
											Liên Hệ Chi tiết.
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include 'footer.php'?>