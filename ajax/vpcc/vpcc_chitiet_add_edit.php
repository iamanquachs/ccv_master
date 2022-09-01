<?php
include("../../includes/config.php");
include("../../includes/database.php");
require("../../modules/vpccClass.php");

$db = new VPCC();
$ID_ADMIN = $_COOKIE['ID_ADMIN'];
$id_vpcc = $_POST['id_vpcc'];
$ten_hientai = $_POST['ten_hientai'];
$ten_truocdo = $_POST['ten_truocdo'];
$diachi_cu = $_POST['diachi_cu'];
$sdt_cu = $_POST['sdt_cu'];
$ngay = $_POST['ngay'];

$db->vpcc_chitiet_add_edit($id_vpcc, $ten_hientai, $ten_truocdo, $diachi_cu, $sdt_cu, $ngay);
