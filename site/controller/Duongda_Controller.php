<?php
include '../model/Duongda_Model.php';
include '../config/paging.php';
	Class Duongda_Controller
	{
		function duongdaAction()
		{

			$config = array(
		    'current_page'  => isset($_GET['page']) ? $_GET['page'] : 1, // Trang hiện tại
		    'total_record'  => 100, // Tổng số record
		    'limit'         => 5,// limit
		    'link_full'     => 'index.php?page={page}',// Link full có dạng như sau: domain/com/page/{page}
		    'link_first'    => 'index.php',// Link trang đầu tiên
				);
			$paging = new Pagination();
			$paging->init($config);
			return $paging;
		}
	}
?>