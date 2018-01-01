<?php
include '../controller/Duongda_Controller.php';
$duongda=new Duongda_Controller();
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
?>
<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>2min's_corner | Mỹ Phẩm</title>
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
						<img src="/MVCFP/public/image/logo/fulllogoheader.png" style="width:160px;height:40px;" >
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
								<a class="nav-link" href="/MVCFP/site/view/cart.php">
									<i class="fa fa-shopping-cart" aria-hidden="true">&nbsp;</i>
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
		<h2>Mỹ Phẩm</h2>
	</div>


	<!-- CONTENT -->
	<div class=" ContentCenter">
		<div class="ProductListWrap">
			<div class="row">
				<div class="col-md-2 row-fix">
					<div class="LeftProductList">
						<h3><a class="HeadList" href="#" >Mỹ Phẩm</a></h3>
						<ul class="List">

							<li>
								<a class="ListTitle" href="#">Trang điểm mặt (23)</a>
								<ul>
									<li>
										<a href="#">Peripera SPF 50++ (9)</a>
									</li>

									<li>
										<a href="#">Ink cushion (5)</a>
									</li>

									<li>
										<a href="#">A'peiu Wonder Tension (2)</a>
									</li>

									<li>
										<a href="#">Rice Concealer Tip (3)</a>
									</li>

									<li>
										<a href="#">Others (4)</a>
									</li>

								</ul>
							</li>

							<li>
								<a class="ListTitle" href="#">Trang điểm mắt (15)</a>
								<ul>
									<li>
										<a href="#">Innisfree Concealer (5)</a>
									</li>
									<li>
										<a href="#">Auto Eyebrow Pencil (5)</a>
									</li>

									<li>
										<a href="#">Others (2)</a>
									</li>
								</ul>
							</li>

							<li>
								<a class="ListTitle" href="#">Xịt khoáng (9)</a>
								<ul>
									<li>
										<a href="#">Trang điểm môi (13)</a>
									</li>

									<li>
										<a href="#">Dear Darling Tint (3)</a>
									</li>

									<li>
										<a href="#">Moart Velvet Lipstick (4)</a>
									</li>
									<li>
										<a href="#">Others (2)</a>
									</li>
								</ul>
							</li>

						</div>
					</div>

					<div class="col-md-10 row-fix">
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
											<form method="post" action="mypham.php?action=add&ID=<?php echo $item["ID"]; ?>">
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
													<input type="text" name="quantity" value="1" size="2" />
													<input type="submit" value="Add to cart" class="button">
													<a class="button" href='https://www.facebook.com/2mins-corner-1109281215839012/' >
														Liên Hệ Chi tiết.
													</a>
												</form>
											</div>
										</div>
									</li>
									<?php } ?>
								</ul>
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
	</div>

	<!-- FOOTER -->
	<?php include 'footer.php' ?>