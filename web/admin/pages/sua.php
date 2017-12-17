<?php

	if(!isset($_GET["id"])){
		header("location:index.php");
		exit();
	}else {
		$id=(int)$_GET["id"];
		
		
		if($id <= 0){
			header("location:index.php");
			exit();
		}else{
					
					if(isset($_POST["txtsua"])){
						$errors=array();
						if(empty($_POST["txtname"])){
							$errors[]="vui lòng nhập tên";
						}
						if(empty($_POST["txtprice"])){
							$errors[]="vui lòng nhập giá";
						}

						if(empty($errors)){

							$data =array(
								"name" => $_POST["txtname"],
								"price" => $_POST["txtprice"],
								"intro" =>$_POST["txtintro"],
								"picture" => $_FILES["txtimage"]["name"],
								"created_at"=> time()
							);
							$check=$conn->prepare("SELECT * FROM danhsach WHERE name = :name");
							$check->bindParam(":name",$data["name"],PDO::PARAM_STR);
							$check->execute();
							$count=$check->rowCount();
							if($count == 0){

							$smmt=$conn->prepare("UPDATE `danhsach` SET name= :name, price= :price, intro= :intro, picture= :picture, created_at= :created_at WHERE id = :id");
							$smmt->bindParam(":id",$id,PDO::PARAM_INT);
							$smmt->bindParam(":name",$data["name"],PDO::PARAM_STR);
							$smmt->bindParam(":price",$data["price"],PDO::PARAM_INT);
							$smmt->bindParam(":intro",$data["intro"],PDO::PARAM_STR);
							$smmt->bindParam(":picture",$data["picture"],PDO::PARAM_STR);
							$smmt->bindParam(":created_at",$data["created_at"],PDO::PARAM_INT);
							$smmt->execute();
							move_uploaded_file($_FILES["txtimage"]["tmp_name"],"upload/".$_FILES["txtimage"]["name"]);
								header("location:index.php");
								exit();
							}
							else{
								$errors[]="tên này đã tồn tại. Vui lòng nhập lại!";
							}
						}
					}
					$data_edit=$conn->prepare("SELECT * FROM danhsach WHERE id= :id");
					$data_edit->bindParam(":id",$id,PDO::PARAM_INT);
					$data_edit->execute();
					$data_fetch=$data_edit->fetch(PDO::FETCH_ASSOC);
			}
			


?>



<form action="" method="POST" enctype="multipart/form-data">
		<?php
			if(!empty($errors)){
				foreach ($errors as $value) {
		?>
	<div class="error">
	
					<?php echo $value;?>
	
	</div>
	<?php
				}
			}
		?>
	<table>
		<tr>
			<td>Name product:</td>
			<td><input type="text" name="txtname" 
				value= "<?php if(isset($_POST['txtname'])){
					echo $_POST['txtname'];
				}else{
					echo $data_fetch['name'];

					}?>"></td>
				
		</tr>
		<tr>
			<td>Price:</td>
			<td><input type="text" name="txtprice" value= "<?php if(isset($_POST["txtprice"])){
					echo $_POST['txtprice'];}
					else{
						echo $data_fetch['price'];
					}

					?>"></td>
		</tr>
		<tr>
			<td>choose image:</td>
			<td><input type="file" name="txtimage" ></td>
		</tr>
		<tr>
			<td>Description:</td>
			<td><textarea name="txtintro" cols="30" rows="10"><?php if(isset($_POST["txtintro"])){
					echo $_POST['txtintro'];
				}else {
					echo $data_fetch["intro"];
				}


				?></textarea></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="txtsua" value="add"></td>
		</tr>

	</table>


</form>
<?php
}
?>