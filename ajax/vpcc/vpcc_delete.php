<?php
include('../../includes/config.php');
include('../../includes/database.php');
require('../../modules/vpccClass.php');
$db = new VPCC();
$ID_ADMIN = $_COOKIE['ID_ADMIN'];
$ID_VPCC = $_POST['ID_VPCC'];
$db->vpcc_delete($ID_VPCC, $ID_ADMIN);
