<?php
include('../../includes/config.php');
include('../../includes/database.php');
require('../../modules/ccvClass.php');

$db = new CCV();
$tenccv = $_POST['tenccv'];
$id_vpcc = $_COOKIE['ID_VPCC'];
$ngaybonhiem = date("Y-m-d", strtotime(str_replace('/', '-', $_POST['ngaybonhiem'])));
$ngaygianhap = date("Y-m-d", strtotime(str_replace('/', '-', $_POST['ngaygianhap'])));
$dienthoai = $_POST['dienthoai'];
$trangthai = $_POST['trangthai'];
$noihanhnghe = $_POST['noihanhnghe'];
$email = $_POST['email'];
$sobonhiem = $_POST['sobonhiem'];

$db->ccv_add($tenccv, $id_vpcc, $ngaybonhiem, $ngaygianhap, $dienthoai, $trangthai, $noihanhnghe, $email,$sobonhiem);
