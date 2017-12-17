<?php
include 'config.php';
include 'library/connect.php';

?>
<!DOCTYPE html>
<html>
<head>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css"  href="template/css/style.css">	
	<link rel="stylesheet" type="text/css"  href="template/css/bootstrap.css">
	<link rel="stylesheet" type="text/css"  href="template/css/font-awesome.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet"   href="template/css/css-trangdiem/css/custom.css">		
	<link rel="stylesheet"  href="template/css/css-trangdiem/css/layout.css">
	<link rel="stylesheet" type="text/css"  href="template/css/css-trangdiem/css/style.css">
	<script type="text/javascript"  src="template/js/jquery-3.2.1.min.js" ></script>
	<script type="text/javascript"  src="template/js/js.js" ></script>
	<script type="text/javascript" src="template/js/bootstrap.js"  ></script>
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAtcge_9s1iP11ov0ivMxlgS9SOwyom2WY&callback=initMap"></script>

	<title>Shop 2min_corner</title>
	<link href="image/logo/logoicon.ico" rel="icon">
	<link href="image/logoicon.ico" rel="icon">
	<meta charset="UTF-8">
</head>
<body>
	<?php include 'pages/header.php' ?>
	<?php
	if(isset($_GET["p"])){
		$p=$_GET["p"];
		switch ($p) {
			case 'trang-chu':
			include'pages/trang-chu.php';
			break;
			case 'trang-diem':
			include 'pages/trang-diem.php';
			break;
			case 'duong-da':
			include 'pages/duong-da.php';
			break;
			case 'about':
			include 'pages/about.php';
			break;
			
			default:
			include 'pages/trang-chu.php';
			break;
		}
	}else{
		include 'pages/trang-chu.php';
	}
	?>
<?php include 'pages/footer.php' ?>


</div>	
</body>
</html>