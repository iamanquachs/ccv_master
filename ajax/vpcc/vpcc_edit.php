<?php
include('../../includes/config.php');
include('../../includes/database.php');
require('../../modules/vpccClass.php');

$db = new VPCC();
$ID_VPCC = $_POST['ID_VPCC'];
$TEN_VPCC = $_POST['TEN_VPCC'];
$diachi = $_POST['diachi'];
$sodienthoai = $_POST['sodienthoai'];
$ANH_VPCC = $_POST['ANH_VPCC'];
$NGAYTHANHLAP_VPCC = date("Y-m-d", strtotime(str_replace('/', '-', $_POST['NGAYTHANHLAP_VPCC'])));
$email = $_POST['email'];
$website = $_POST['website'];
$THONGTIN_VPCC = $_POST['THONGTIN_VPCC'];


$db->vpcc_edit($ID_VPCC, $TEN_VPCC, $diachi, $sodienthoai, $email, $website, $ANH_VPCC, $THONGTIN_VPCC, $NGAYTHANHLAP_VPCC);
