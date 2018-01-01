<?php
include '../model/Detail_Model.php';
	Class Detail_Controller
	{
		function detailAction()
		{
			$id=$_GET['ID'];
			$detail_Model= new Detail_Model();
			$detail_Controller=$detail_Model->getDetail($id);
			return $detail_Controller;
		}
	}
?>