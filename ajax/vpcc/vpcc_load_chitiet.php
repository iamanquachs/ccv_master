<?php
include('../../includes/config.php');
include('../../includes/database.php');
require('../../modules/vpccClass.php');

$db_vpcc = new VPCC();
$ID_VPCC = $_POST['ID_VPCC'];
$ID_ADMIN = $_COOKIE['ID_ADMIN'];
$danhsach_vpcc = $db_vpcc->vpcc_chitiet_load($ID_ADMIN, $ID_VPCC);
$danhsach_vpcc_exit = $db_vpcc->vpcc_chitiet_load_exit($ID_ADMIN, $ID_VPCC);
foreach ($danhsach_vpcc as $r) { ?>
    <tr>
        <td class="idvpcc_td"><?= $r->ID_VPCC ?></td>
        <td class="tenvpcc_td"><?= $r->TEN_VPCC ?></td>
        <?php foreach ($danhsach_vpcc_exit as $row) ?>
        <td class="ten_CU"><?= $row->ten_hientai ?></td>
        <td class="diachi_cu"><?= $row->diachi_cu ?></td>
        <td class="sdt_cu"><?= $row->sdt_cu ?></td>
        <td class="ngay"></td>

    </tr>
<?php
}
