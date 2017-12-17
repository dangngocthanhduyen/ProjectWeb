<?php
session_start();
if(isset($_SESSION["tk_user"])){
	header("location:index.php");
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
	<title>login</title>
	<link type="text/css" rel="stylesheet" href="template/css/mycss.css">
</head>
<body>
	<?php
	$error=array();
		if(isset($_POST["txtlogin"])){
			
			if(empty($_POST["txtname"])){
				$error[]= "vui lòng nhập username";
			}
			if(empty($_POST["txtpass"])){
				$error[]="vui lòng nhập PassWord";
			}
			$data=array(
				"name"=>$_POST["txtname"],
				"pass"=>md5($_POST["txtpass"])
			);
			$stmt=$conn->prepare("SELECT * FROM user WHERE username =:username AND password =:password");
			$stmt->bindParam(":username",$data["name"],PDO::PARAM_STR);
			$stmt->bindParam(":password",$data["pass"],PDO::PARAM_STR);
			$stmt->execute();
			$countsql=$stmt->rowCount();
			if($countsql<=0){
				$error[]="tài khoản không tổn tại!";
			}else{
				$data_user=$stmt->fetch(PDO::FETCH_ASSOC);
				$_SESSION["tk_user"]= $data_user["username"];
				$_SESSION["tk_level"]=$data_user["level"];
				header("location:index.php");
				exit();
			}

		}
	?>
	
	<fieldset>
		<legend>Login</legend>
		<?php 
			foreach ($error as $value) {
				?>
	<div class="ERROR" >
		
				<?php echo $value;?>
		
	</div>
		<?php }
		?>
	<form method="POST" action="">
		<table class="login">
			<tr>
				<td>Username:</td>
				<td><input type="text" name="txtname" ></td>
			</tr>
			<tr>
				<td>PassWord:</td>
				<td><input type="password" name="txtpass"></td>
			</tr>
			<tr><td><input type="submit" name="txtlogin" value="login"></td></tr>
		</table>
	</form>

	</fieldset>
</body>
</html>