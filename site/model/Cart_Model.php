<?php
session_start();
// include "../config/DB.php";
Class Cart_Model
{
	public function get_Cart()
	{
		$db_handle = new DB();
		$db_handle->connect_DB();
		if(!empty($_GET["action"])) {
			switch($_GET["action"]) {
				case "add":
				if(!empty($_POST["quantity"])) {
					$productByID = $db_handle->get_All_Row("SELECT * FROM chitietsp WHERE ID='" . $_GET["ID"] . "'");
					$itemArray = array($productByID[0]["ID"]=>array('name'=>$productByID[0]["TenSP"], 'quantity'=>$_POST["quantity"], 'price'=>$productByID[0]["Gia"]));
					if(!empty($_SESSION["cart_item"])) {
						if(in_array($productByID[0]["ID"],array_keys($_SESSION["cart_item"]))) {
							foreach($_SESSION["cart_item"] as $k => $v) {
								if($productByID[0]["ID"] == $k) {
									if(empty($_SESSION["cart_item"][$k]["quantity"])) {
										$_SESSION["cart_item"][$k]["quantity"] = 0;
									}
									$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
								}
							}
						} else {
							$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
						}
					} else {
						$_SESSION["cart_item"] = $itemArray;
					}
			// return $_SESSION["cart_item"];
				}
				break;
				case "remove":
				if(!empty($_SESSION["cart_item"])) {
					foreach($_SESSION["cart_item"] as $k => $v) {
						if($_GET["ID"] == $k)
							unset($_SESSION["cart_item"][$k]);				
						if(empty($_SESSION["cart_item"]))
							unset($_SESSION["cart_item"]);
					}
				}
				break;
				case "empty":
				unset($_SESSION["cart_item"]);

				case "checkout":
				unset($_SESSION["cart_item"]);
				header('Location:/MVCFP/index.php');
				break;	
			}

		}
	}
}

?>