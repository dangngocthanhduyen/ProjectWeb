<?php
include '../controller/Duongda_Controller.php';
include '../controller/Cart_Controller.php';
$duongda=new Duongda_Controller();
$data=$duongda->duongdaAction();
$duongda_cart=new Cart_Controller();
$list=$duongda->duongdalistAction();
$duongda_cart->cartAction();
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

<?php include "header.php" ?>

<div class="clearfix"></div>

<!-- IMAGE -->
<div class="HeadBackground" style="background:url(/MVCFP/public/image/banner/trangdiem.jpg) no-repeat center top;">
	<h2>Trang Điểm</h2>
</div>


<!-- CONTENT -->
<div class=" ContentCenter">
	<div class="ProductListWrap">
		<div class="row">
			<div class="col-md-2 row-fix">
				<div class="LeftProductList">
					<h3><a class="HeadList"  >Trang điểm</a></h3>
					<ul class="List">

						<li>
							<a class="ListTitle">Trang điểm môi</a>
							<ul class="ListTitle1">
								<?php foreach ($list as $item ) { ?>
									<li>
										<a href="/MVCFP/site/view/detail.php?id=<?php echo$item['ID']?>"><?PHP ECHO $item['TenSP']?></a>
									</li>
								<?php }?>

							</ul>
						</li>

						<li>
							<a class="ListTitle" ">Trang điểm mắt</a>
							<ul class="ListTitle1">
								<?php foreach ($list as $item ) { ?>
									<li>
										<a href="/MVCFP/site/view/detail.php?id=<?php echo$item['ID']?>"><?PHP ECHO $item['TenSP']?></a>
									</li>
								<?php }?>
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
									<!-- <option value="1" selected="">Tổng Các Sản Phẩm</option>
									<option value="2">Sản phẩm hot</option> -->
									<option value="1">Giá: từ thấp lên cao</option>
									<option value="2">Giá: từ cao xuống thấp</option>
								</select>
							</div>
						</div>


						<div class="ProductList">
							<div class="row">
								<ul>
									<?php foreach ($data_duongda as $item){?>
									<li class="col-md-4 col-sm-6 col-xs-12 ">

										<div class="li-border">
											<form method="post" action="trangdiem.php?action=add&name=<?php echo $item["TenSP"]; ?>">
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
													<input type="text" name="quantity" value="1" class="btn btn-outline-success" size="2" >

													<input type="submit" value="Add to cart" class="btn btn-outline-success">

													<a class="btn btn-outline-success lienhechitiet" href='https://www.facebook.com/2mins-corner-1109281215839012/' >Liên Hệ Chi tiết
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