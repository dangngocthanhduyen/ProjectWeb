<?php
	if(isset($_GET["id"])){
		$id=(int)$_GET["id"];
		
		if($id<=0){
			header("location:index.php");
			exit();
		}else{
			$data_edit1=$conn->prepare("SELECT * FROM danhsach WHERE id=:id");
		$data_edit1->bindParam(":id",$id,PDO::PARAM_INT);
		$data_edit1->execute();
		$data_pic=$data_edit1->fetch(PDO::FETCH_ASSOC);
			if(file_exists('upload/'.$data_pic["picture"])){
				unlink('upload/'.$data_pic["picture"]);
			}
			$smmt=$conn->prepare("DELETE FROM danhsach WHERE id=:id");
			$smmt->bindParam(":id",$id,PDO::PARAM_INT);
			$smmt->execute();
			
			header("location:index.php");
			exit();
		}
	}
	
?>