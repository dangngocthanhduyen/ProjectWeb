<?php 
include 'site/controller/Home_Controller.php';
$home_Controller=new Home_Controller();
$news=$home_Controller->homeNAction();
$best=$home_Controller->homeBAction();
$discount=$home_Controller->homeDAction();
?>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css"  href="public/css/style.css">	
	<link rel="stylesheet" type="text/css"  href="public/css/bootstrap.css">
	<link rel="stylesheet" type="text/css"  href="public/css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css"  href="public/css/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css"  href="public/css/docs.theme.min.css">
	<!-- 	<link href="https://maxcdn.public/csscdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->
	<script type="text/javascript"  src="public/js/jquery-3.2.1.min.js" ></script>
	<script type="text/javascript" src="public/js/bootstrap.bundle.js"  ></script>
	<script type="text/javascript"  src="public/js/js.js" ></script>
	<script type="text/javascript" src="public/js/owl.carousel.js" ></script>
	<script type="text/javascript" src="public/js/owl.carousel.min.js" ></script>
	<script type="text/javascript" src="public/js/bootstrap.js"  ></script>
	<script src="https://use.fontawesome.com/9325ad171d.js"></script>


	<title>Shop 2min_corner</title>
	<link href="public/image/logo/logoicon.ico" rel="icon">
	<link href="public/image/logoicon.ico" rel="icon">
	<meta charset="UTF-8">
</head>
<body>
	<!-- Header task-bar -->
	<div class="navbar-top">
		<div class="container">
			<nav class="navbar navbar-expand-lg ">
				<a class="navbar-brand" href="/MVCFP/index.php">
					<img src="public/image/logo/fulllogoheader.png" style="width:160px;height:40px;" href="/MVCFP/index.php">
				</a>
				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
					<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
						<li class="nav-item ">
							<a class="nav-link" href="/MVCFP/index.php">
								&nbsp;HOME
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="site/view/duongda.php">&nbsp;DƯỠNG DA</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="site/view/mypham.php">&nbsp;MỸ PHẨM</a>
						</li>
						<li class="nav-item">
								<a class="nav-link" href="#">
									<i class="fa fa-shopping-cart" aria-hidden="true">&nbsp;(1)</i>
								</a>
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
	<!-- End header taskbar -->
	<div class="clearfix"></div>
	<!-- Star sequnse -->
	<div class="sequense">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1" class=""></li>
				<li data-target="#myCarousel" data-slide-to="2" class=""></li>
			</ol>
			<div class="carousel-inner">
				<?php foreach($discount as $key => $item) {?>
				<?php if($key==0): ?>
					<div class="carousel-item active">
						<div class=" img-responsive picture-product">	
							<img src="<?php echo $item["Hinh"]?>"" href="#">
						</div>
					</div>
				<?php else:
				?>
				<div class="carousel-item">
					<div class=" img-responsive picture-product">	
						<img src="<?php echo $item["Hinh"]?>" href="#">
					</div>
				</div>
			<?php endif; ?>
			<?php }?>
			<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	<!-- End Main product -->
</div>
</div>
<!-- end sequnse -->
<div class="clearfix"></div>
<!-- New arival -san phẩm mới -->
<div class="list-product">      <!-- css 437 -->
	<div class="new-arival">
		<div class="container">
			<div class="title-product">
				<!-- <div class="text-tille text-bold">New Arival</div> -->
				<div class="text-tille">Sản Phẩm Mới Cập Nhật</div>
<!-- 				<div class="button-more">
					<a type="button" class="bt-see-all">See All</a>
				</div> -->
			</div>
			<!-- List  -->
			<div class="carousel-1 product-relate owl-carousel owl-theme" id="owl-demo-product-hot" style="opacity: 1; display: block;"> 
				<?php foreach($news as $key => $item) {?>	
				<div class="owl-item">
					<div class="item">
						<div class="product">
							<div class="product-list">
								<div class="bt-search">
<!-- 									<div class="product-name">
										<a class="product-title product-bold"><?php echo $item["TenSP"]?></a>
									</div> -->
								</h3>
								<a href="site/view/detail.php?id=<?=$item['ID']?>" type="button" role="button" class="my-Btn btq-more">
										<i class="fa fa-search" aria-hidden="true"></i>
								</a>
								<!-- 								<div class="text-title"><?php echo $item["Gia"]?></div> -->
							</div>
						</div>
						<div class=" img-responsive picture-product">	
							<img src="<?php echo $item["Hinh"]?>" style="width:250px;height:230px;" href="#">
						</div>
					</div>
				</div>	
			</div>	
			<?php }?>
		</div>
	</div>	
</div>
</div>
<!-- End list -->
<!-- Best Seller -->
<div class="best-list">      <!-- css 437 -->
	<div class="container">
		<div class="title-product">
			<!-- <div class="text-tille text-bold">Best Seller</div> -->
			<div class="text-tille">Sản Phẩm Bán Chạy</div>
<!-- 			<div class="button-more">
				<a type="button" class="bt-see-all">See All</a>
			</div> -->
		</div>
		<!-- List  -->
		<div class="carousel-1 product-relate owl-carousel owl-theme" id="owl-demo-product-hot" style="opacity: 1; display: block;"> 
			<?php foreach ($news as $item1) {?>
			<div class="owl-item">
				<div class="item active">
					<div class="product">
						<div class="product-list">
							<div class="bt-search">
<!-- 								<div class="product-name">
									<a class="product-title product-bold"><?php echo $item["TenSP"]?></a>
								</div> -->
								<a href="site/view/detail.php?id=<?=$item1['ID']?>" type="button" role="button" class="my-Btn btq-more">
									<i class="fa fa-search" aria-hidden="true"></i>
								</a>
								<!-- <div class="text-title"><?php echo $item1["Gia"]?></div> -->
							</div>
						</div>
						<div class=" img-responsive picture-product">	
							<img src="<?php echo $item1["Hinh"]?>" style="width:250px;height:230px;" href="#">
						</div>
					</div>
				</div>	
			</div>
			<?php } ?>
		</div>
	</div>	
</div>

<!-- end Seller -->
<div class="clearfix"></div>
<div class="ins-list">      <!-- css 437 -->
	<div class="container">
		<div class="title-product">
			<div class="text-tille text-bold">2min’s corner on Instagram</div>
			<div class="text-tille">Hãy theo dõi 2min’s trên Instagram</div>
<!-- 			<div class="button-more">
				<a type="button" class="bt-see-all">See All</a>
			</div> -->
		</div>
		<!-- List  -->
		<div class="carousel-1 product-relate owl-carousel owl-theme" id="owl-demo-product-hot" style="opacity: 1; display: block;"> 
			<?php foreach ($news as $item1) {?>
			<div class="owl-item">
				<div class="item active">
					<div class="product">
						<div class="product-list">
							<div class="bt-search">
<!-- 								<div class="product-name">
									<a class="product-title product-bold"><?php echo $item["TenSP"]?></a>
								</div> -->
								<a href="site/view/detail.php?id=<?=$item1['ID']?>" type="button" role="button" class="my-Btn btq-more">
									<i class="fa fa-search" aria-hidden="true"></i>
								</a>
								<!-- <div class="text-title"><?php echo $item1["Gia"]?></div> -->
							</div>
						</div>
						<div class=" img-responsive picture-product">	
							<img src="<?php echo $item1["Hinh"]?>" style="width:250px;height:230px;" href="#">
						</div>
					</div>
				</div>	
			</div>
			<?php } ?>
		</div>
	</div>
</div>
