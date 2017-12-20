<?php
include '../config/DB.php';
	Class Duongda_Model extends DB
	{
		public function getProduct()
		{
			$db=new DB();
			$db->connect_DB();
			$query="SELECT * FROM chitietsp c INNER JOIN loaisp p ON c.IDSP=p.IDLoaiSp WHERE c.IDSP=1";
			$data=$db->get_All_Row($query);
			return $data;
		}
	}
?>