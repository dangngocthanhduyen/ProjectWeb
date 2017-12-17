<?php
session_start();
if(!isset($_SESSION["tk_user"])){
	header("location:login.php");
	exit();
}
include '../config.php';
include '../library/connect.php';
include '../library/function.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="icon" type="image/x-icon" href="../images/favicon.ico">
	<link type="text/css" rel="stylesheet" href="template/css/mycss.css">
	<!-- <meta http-equiv="refresh" content="5"> -->
	<title>Practice PHP</title>
	
	<script>
		function acceptRemove(){
			if(window.confirm("bạn có muốn xóa?")==true){
				return true;
			}
			else{
				return false;
			}
		}
	</script>
</head>
<body>

	<div class="container">
		<div class="tieude">Danh sách sản phẩm </div>
		<div class="admin">admin<a href="logout.php">logout</a></div>
		<div class="content">
			<?php
				if(isset($_GET["t"])){
					$t=$_GET["t"];
					switch ($t) {
						case 'danh-sach':
							include 'pages/danh-sach.php';
							break;
						case 'sua':
							include 'pages/sua.php';
							break;
						case 'xoa':
							include 'pages/xoa.php';
							break;
						case 'them':
							include 'pages/them.php';
							break; 
						
						default:
							include 'pages/danh-sach.php';
							break;
					}
				}
				else{
					include 'pages/danh-sach.php';
				}
			?>

		</div>
		
	</div>

</body>
</html>