<?php
include('../../includes/config.php');
include('../../includes/database.php');
require('../../modules/ccvClass.php');
$db = new CCV();
$id_vpcc = $_COOKIE['ID_VPCC'];
$id_msccv = $_POST['id_msccv'];
$db->ccv_delete($id_vpcc, $id_msccv);
