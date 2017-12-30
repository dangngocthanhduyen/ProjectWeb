<?php
include '../controller/Duongda_Controller.php';
include '../controller/Cart_Controller.php';
$duongda=new Duongda_Controller();
$duongda_cart=new Cart_Controller();
$data=$duongda->duongdaAction();
$pagination=new Pagination();
$_config = array(
        'current_page'  => $data['tranghientai'], // Trang hiện tại
        'total_record'  => $data['total_record'], // Tổng số record
        'limit'         => $data['limit'],
            'link_full'     => 'duongda.php?page={page}',// Link full có dạng như sau: domain/com/page/{page}
        'link_first'    => 'duongda.php'// limit// limit
    );
$pagination->init($_config);
$data_duongda=$data['data'];
$total_row=$_config['total_record'];

$cart=$duongda_cart->cartAction();
print_r($cart);
     
  
?>


?>
<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>2min's_corner | Dưỡng da</title>
	<link href="css/custom.css" rel="stylesheet">
	<link href="public/image/logoicon.ico" rel="icon">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css"  href= "/MVCFP/public/css/style.css">
	<link rel="stylesheet" type="text/css"  href= "/MVCFP/public/css/ss.css">	
	<link rel="stylesheet" type="text/css"  href= "/MVCFP/public/css/custom.css">	
	<link rel="stylesheet" type="text/css"  href= "/MVCFP/public/css/bootstrap.css">
	<link rel="stylesheet" type="text/css"  href="/MVCFP/public/css/owl.theme.default.min.css">
	<!-- <link rel="stylesheet" type="text/css"  href="/MVCFP/public/css/docs.theme.min.css"> -->
	<script type="text/javascript" src="/MVCFP/public/js/bootstrap.bundle.js"  ></script>
	<!-- 	<link href="https://maxcdn.public/csscdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->
	<script type="text/javascript"  src="/MVCFP/public/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="/MVCFP/public/js/bootstrap.js"  ></script>
	<script type="text/javascript"  src="/MVCFP/public/js/js.js" ></script>
	<script src="https://use.fontawesome.com/9325ad171d.js"></script>
	<title>Shop 2min_corner</title>
	<link href="/MVCFP/public/image/logo/logoicon.ico" rel="icon">
	<link href="/MVCFP/public/image/logoicon.ico" rel="icon">
	<meta charset="UTF-8">
</head>
<body>

	<!-- NEW HEADER -->
	<div class="wrapper">
		<div class="navbar-top">
			<div class="container">
				<nav class="navbar navbar-expand-lg ">
					<a class="navbar-brand" href="/MVCFP/index.php">
						<img src="/MVCFP/public/image/logo/fulllogoheader.png" style="width:160px;height:40px;" href="/MVCFP/index.php">
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
	</div>
	<div class="clearfix"></div>


	<!-- IMAGE -->
	<div class="HeadBackground" style="background:url(/MVCFP/public/image/banner/duongda.jpg) no-repeat center bottom;">
		<h2>Dưỡng da</h2>
	</div>


	<!-- CONTENT -->
	<div class=" ContentCenter">
		<div class="ProductListWrap">
			<div class="row">
				<div class="col-md-2 list-menu">
					<div class="LeftProductList">
						<h3><a class="HeadList" href="#" >Dưỡng da</a></h3>
						<ul class="List">

							<li>
								<a class="ListTitle" href="#">Làm sạch  (23)</a>
								<ul>
									<li>
										<a href="#">Etude House (9)</a>
									</li>

									<li>
										<a href="#">Mising U (2)</a>
									</li>

									<li>
										<a href="#">Herd Day Cleansing Cream (3)</a>
									</li>

									<li>
										<a href="#">Super Aqua-Missha (2)</a>
									</li>

									<li>
										<a href="#">Smooth lip scrub (5)</a>
									</li>

									<li>
										<a href="#">Others (2)</a>
									</li>

								</ul>
							</li>

							<li>
								<a class="ListTitle" href="#">Mặt nạ (15)</a>
								<ul>
									<li>
										<a href="#">Color Clay Mask (10)</a>
									</li>

									<li>
										<a href="#">Squeeze Mask (3)</a>
									</li>

									<li>
										<a href="#">Innisfree Black Berry (1)</a>
									</li>

									<li>
										<a href="#">Others (1)</a>
									</li>

								</ul>
							</li>

							<li>
								<a class="ListTitle" href="#">Xịt khoáng (9)</a>
								<ul>
									<li>
										<a href="#">Green Tea Mineral Mist (3)</a>
									</li>

									<li>
										<a href="#">Aloevera (4)</a>
									</li>

									<li>
										<a href="#">Others (2)</a>
									</li>
								</ul>
							</li>

							<li>
								<a class="ListTitle" href="#">Chống nắng (5)</a>
								<ul>
									<li>
										<a href="#">Eco safety daily sunblock (4)</a>
									</li>

									<li>
										<a href="#">Others (1)</a>
									</li>
								</ul>
							</li>

						</ul>
					</div>
				</div>

				<div class="col-md-10 ">
					<div class="BodyProductList">
						<div class="ResultSort">
							<p class="ResultNum"><strong><?=$total_row?></strong> Kết quả</p>

							<div class="Sort">
								<select class="Select" onchange="fnSort(this.value);">
									<option value="1" selected="">Tổng Các Sản Phẩm</option>
<!-- 									<option value="2">Sản phẩm hot</option>
									<option value="4">Giá: từ thấp lên cao</option>
									<option value="5">Giá: từ cao xuống thấp</option> -->
								</select>
							</div>
						</div>


						<div class="ProductList">
							<div class="row">
								<ul>
									<?php foreach ($data_duongda as $item){?>
									<li class="col-md-4 col-sm-6 col-xs-12 ">
										<div class="li-border">
											<a href="/MVCFP/site/view/detail.php?id=<?php echo$item['ID']?>">
												<div class="thumb img-responsive">
													<img class="thumbnail" src="/MVCFP//<?=$item['Hinh']?>" style="width: 150px;height:150px;">
												</div>

											</a>
											<div class="desc"><?=$item['TenSP']?></div>
											<div class="price"><?=$item['Gia']?>
												<sup>
													VND
												</sup>
											</div>
											<div class="button_group">
												<a href="duongda.php?action=add&id=<?php echo $item['ID'] ?>">Add to cart</a>
												<a class="button" href='https://www.facebook.com/2mins-corner-1109281215839012/' >
													Liên Hệ Chi tiết.
												</a>
											</div>
											<?php } ?>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="ChangePage">
		<ul>
			<?php echo $pagination->html()?>
		</ul>
	</div>
</div>
<!-- FOOTER -->
<?php include 'footer.php' ?>