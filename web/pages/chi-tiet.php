<?php
	if(isset($_GET["id"])){
		$id= (int)$_GET["id"];
		if($id<= 0){
			
			header("location:index.php");
			exit();
		}else{
			$stmt=$conn->prepare("SELECT * FROM danhsach WHERE id =:id");
			$stmt->bindParam(":id",$id,PDO::PARAM_INT);
			$stmt->execute();
			$data_sp=$stmt->fetch(PDO::FETCH_ASSOC);
			// if(!isset($_COOKIE["phone"])){
			// 	$viewed = array();
			// 	$viewed[] = $data_sp["id"];
			// 	setcookie("phone",serialize($viewed),time() + 84600 * 30);
			// }else{
			// 	$review= unserialize($_COOKIE["phone"]);
			// 	if(!in_array($data_sp["id"], $review)){
			// 		array_unshift($review, $data_sp["id"]);
			// 		setcookie("phone",serialize($review),time() + 84600 * 30);
			// 	}
			// }
			if (!isset($_COOKIE['xem'])) {
				header("location:trang-chu.php");
				exit();
			}else{
				echo "xin chào";
			}
		}

?>
		<div class="sanpham">
		 <img src="admin/upload/<?php echo $data_sp["picture"];?>" />
		<h2><?php echo $data_sp["name"]; ?></h2>
		<h3><?php echo $data_sp["price"];?></h3>
		<p><?php echo $data_sp["intro"]; ?></p>
		</div>
		
		
<?php
	}
?>