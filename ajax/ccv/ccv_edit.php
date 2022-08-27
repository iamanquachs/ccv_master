<?php
include('../../includes/config.php');
include('../../includes/database.php');
require('../../modules/ccvClass.php');

$db = new CCV();
$id_vpcc = $_COOKIE['ID_VPCC'];
$id_msccv = $_POST['id_msccv'];
$tenccv = $_POST['tenccv'];
$sobonhiem = $_POST['sobonhiem'];
$ngaybonhiem = date("Y-m-d", strtotime(str_replace('/', '-', $_POST['ngaybonhiem'])));
$ngaygianhap = date("Y-m-d", strtotime(str_replace('/', '-', $_POST['ngaygianhap'])));
$dienthoai = $_POST['dienthoai'];
$email = $_POST['email'];
$noihanhnghe = $_POST['noihanhnghe'];
$trangthai = $_POST['trangthai'];


$db->ccv_edit($id_msccv, $tenccv, $sobonhiem, $ngaybonhiem, $ngaygianhap, $dienthoai, $email, $noihanhnghe, $trangthai);
