<?php
include('../../includes/config.php');
include('../../includes/database.php');
require('../../modules/ccvClass.php');

$db = new CCV();
$id_vpcc = $_COOKIE['ID_VPCC'];
$tenccv = $_POST['tenccv'];
$id_msccv = $_POST['id_msccv'];
$ngay = date("Y-m-d", strtotime(str_replace('/', '-', $_POST['ngay'])));
$khenthuong = $_POST['khenthuong'];
$kyluat = $_POST['kyluat'];
$loaikyluat = $_POST['loaikyluat'];
$hoiphi = $_POST['hoiphi'];

$db->ccv_chitiet_add($tenccv, $id_msccv, $id_vpcc, $ngay, $khenthuong, $kyluat, $loaikyluat, $hoiphi);
