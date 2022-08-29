<?php
include('../../includes/config.php');
include('../../includes/database.php');
require('../../modules/ccvClass.php');

$db = new CCV();
$id_vpcc = $_COOKIE['ID_VPCC'];
$id_msccv = $_POST['id_msccv'];
$tenccv = $_POST['tenccv'];
$khenthuong = $_POST['khenthuong'];
$loaikyluat = $_POST['loaikyluat'];
$kyluat = $_POST['kyluat'];
$hoiphi = $_POST['hoiphi'];
$ngay = date("Y-m-d", strtotime(str_replace('/', '-', $_POST['ngay'])));


$db->ccv_edit_chitiet($id_msccv, $tenccv, $khenthuong, $loaikyluat, $kyluat, $hoiphi, $ngay);
