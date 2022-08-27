<?php
$id_vpcc = $_COOKIE['ID_VPCC'];
$ID_ADMIN = $_COOKIE['ID_ADMIN'];
$filename = 'vpcc';
require('modules/vpccClass.php');
$db = new VPCC();
$list = $db->vpcc_load($ID_ADMIN);
