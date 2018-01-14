<?php

include '../controller/Duongda_Controller.php';
include '../controller/Cart_Controller.php';
$duongda=new Duongda_Controller();
$duongda_cart=new Cart_Controller();
//$data=$duongda->duongdaAction();
$list=$duongda->duongdalistAction();
$pagination=new Pagination();



$data=$duongda->duongdaAction();
$_config = array(
	        'current_page'  => $data['tranghientai'], // Trang hiện tại
	        'total_record'  => $data['total_record'], // Tổng số record
	        'limit'         => $data['limit'],
	            'link_full'     => 'duongda.php?page={page}',// Link full có dạng như sau: domain/com/page/{page}
	        'link_first'    => 'duongda.php'// limit// limit
	    );
$pagination->init($_config);
$data=$data['data'];
$total=$_config['total_record'];
// -------------------------------------

$low=$duongda->priceslow();
$_config = array(
	        'current_page'  => $low['tranghientai'], // Trang hiện tại
	        'total_record'  => $low['total_record'], // Tổng số record
	        'limit'         => $low['limit'],
	            'link_full'     => 'duongda.php?page={page}',// Link full có dạng như sau: domain/com/page/{page}
	        'link_first'    => 'duongda.php'// limit// limit
	    );
$pagination->init($_config);
$data_low=$low['data'];
$total=$_config['total_record'];
// -------------------------------------
$high=$duongda->priceshigh();
$_config = array(
	        'current_page'  => $high['tranghientai'], // Trang hiện tại
	        'total_record'  => $high['total_record'], // Tổng số record
	        'limit'         => $high['limit'],
	            'link_full'     => 'duongda.php?page={page}',// Link full có dạng như sau: domain/com/page/{page}
	        'link_first'    => 'duongda.php'// limit// limit
	    );

$pagination->init($_config);
$data_high=$high['data'];
$total=$_config['total_record'];
// -------------------------------------
$duongda_cart->cartAction();
?>
<!DOCTYPE html>
<?php include "header.php" ?>
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
					<h3><a class="HeadList" >Dưỡng da</a></h3>
					<ul class="List">

						<li>
							<a class="ListTitle" >Làm sạch</a>
							<ul class="ListTitle1">
								<?php foreach ($list as $item ) { ?>
								<li>
									<a href="/MVCFP/site/view/detail.php?id=<?php echo$item['ID']?>"><?PHP ECHO $item['TenSP']?></a>
								</li>
								<?php }?>
							</ul>
						</li>

						<li>
							<a class="ListTitle" >Mặt nạ</a>
							<ul class="ListTitle1">
								<?php foreach ($list as $item ) { ?>
								<li>
									<a href="/MVCFP/site/view/detail.php?id=<?php echo$item['ID']?>"><?PHP ECHO $item['TenSP']?></a>
								</li>
								<?php }?>
							</ul>
						</li>

						<li>
							<a class="ListTitle" >Xịt khoáng</a>
							<ul class="ListTitle1">
								<?php foreach ($list as $item ) { ?>
								<li>
									<a href="/MVCFP/site/view/detail.php?id=<?php echo$item['ID']?>"><?PHP ECHO $item['TenSP']?></a>
								</li>
								<?php }?>
							</ul>
						</li>

						<li>
							<a class="ListTitle" >Chống nắng</a>
							<ul class="ListTitle1">
								<?php foreach ($list as $item ) { ?>
								<li>
									<a href="/MVCFP/site/view/detail.php?id=<?php echo$item['ID']?>"><?PHP ECHO $item['TenSP']?></a>
								</li>
								<?php }?>
							</ul>
						</li>

					</ul>
				</div>
			</div>
			<script language="javascript"> 

				function fnSort(val) 
				{ 
					for(i=1;i<=3;i++) 
					{ 
						if(i==val) 
						{

							document.getElementById("ProductList"+i).style.display = "block"; 
						}
						else 
						{

							document.getElementById("ProductList"+i).style.display = "none"; 
						}
					} 
				} 
			</script>
			<div class="col-md-10 ">
				<div class="BodyProductList">
					<div class="ResultSort">
						<p class="ResultNum"><strong><?=$total?></strong> Kết quả</p>
						<form method="POST" name="form">
							<div class="Sort">
								<select class="Select" id="option" name="option" onchange="fnSort(this.value);">
									<option value="1" selected="">Tổng Các Sản Phẩm</option>
									<option value="2" >Giá: từ thấp lên cao</option>
									<option value="3" >Giá: từ cao xuống thấp</option>
								</select>
							</div>

						</form>
					</div>
					<div id="ProductList1" class="ProductList">
						<div class="row">
							<ul>
								<?php foreach ($data as $item){?>

								<li class="col-md-4 col-sm-6 col-xs-12 ">

									<div class="li-border">
										<form method="POST" action="duongda.php?action=add&name=<?php echo $item["TenSP"]; ?>">
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
												<input type="submit" value="Add to cart" class="btn btn-outline-success ">
												<a class="btn btn-outline-success lienhechitiet" href='https://www.facebook.com/2mins-corner-1109281215839012/' >
													Liên Hệ Chi tiết
												</a>
											</div>
										</form>
									</div>
								</li>		
								<?php } ?>
							</ul>
						</div>
					</div> 
					<div id="ProductList2" class="ProductList" style="display:none;">
						<div class="row">
							<ul>
								<?php foreach ($data_low as $item){?>

								<li class="col-md-4 col-sm-6 col-xs-12 ">

									<div class="li-border">
										<form method="POST" action="duongda.php?action=add&name=<?php echo $item["TenSP"]; ?>">
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
												<input type="submit" value="Add to cart" class="btn btn-outline-success ">
												<a class="btn btn-outline-success lienhechitiet" href='https://www.facebook.com/2mins-corner-1109281215839012/' >
													Liên Hệ Chi tiết
												</a>
											</div>
										</form>
									</div>
								</li>		
								<?php } ?>
							</ul>
						</div>
					</div>
					<div id="ProductList3" class="ProductList" style="display:none;">
						<div class="row">
							<ul>
								<?php foreach ($data_high as $item){?>

								<li class="col-md-4 col-sm-6 col-xs-12 ">

									<div class="li-border">
										<form method="POST" action="duongda.php?action=add&name=<?php echo $item["TenSP"]; ?>">
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
												<input type="submit" value="Add to cart" class="btn btn-outline-success ">
												<a class="btn btn-outline-success lienhechitiet" href='https://www.facebook.com/2mins-corner-1109281215839012/' >
													Liên Hệ Chi tiết
												</a>
											</div>
										</form>
									</div>	
								</li>		
								<?php } ?>
							</ul>
						</div>
					</div>
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

<!-- FOOTER -->
<?php include 'footer.php' ?>