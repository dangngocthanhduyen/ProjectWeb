<?php 
include 'site/controller/Home_Controller.php';
$home_Controller=new Home_Controller();
$news=$home_Controller->homeNAction();
$best=$home_Controller->homeBAction();
$discount=$home_Controller->homeDAction();
?>
<?php include "header.php" ?>
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
								<a href="site/view/detail.php?ID=<?=$item['ID']?>" type="button" role="button" class="my-Btn btq-more">
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
									<i class="fa fa-heart" aria-hidden="true"></i>
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
									<i class="fa fa-instagram" aria-hidden="true"></i>
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

<!-- scroll top-->
	<button href="#" class="scrollToTop">Top</button>

	<script>
	$(document).ready(function(){
	
	//Check to see if the window is top if not then display button
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
	});
	
	//Click event to scroll to top
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
	});
	</script>
<!-- end scroll top-->

<?php include "footer.php" ?>