<?php
include('../../includes/config.php');
include('../../includes/database.php');
require('../../modules/vpccClass.php');

$db_vpcc = new VPCC();
// $ID_VPCC = $_COOKIE['ID_VPCC'];
$ID_ADMIN = $_COOKIE['ID_ADMIN'];
$danhsach_vpcc = $db_vpcc->vpcc_load($ID_ADMIN);
$stt = 1;
foreach ($danhsach_vpcc as $r) { ?>
    <tr>
        <td class="idvpcc_td"><?= $r->ID_VPCC ?></td>
        <td class="tenvpcc_td"><?= $r->TEN_VPCC ?></td>
        <td class="diachi_td"><?= $r->diachi ?></td>
        <td class="sodienthoai_td"><?= $r->sodienthoai ?></td>
        <td class="email_td"><?= $r->email ?></td>
        <td class="website_td"><?= $r->website ?></td>
        <td class="anh_td"><img src='<?= $r->ANH_VPCC ?>'></td>
        <td class="ngaythanhlap_td"><?= date('d/m/y H:i', strtotime($r->NGAYTHANHLAP_VPCC)) ?></td>
        <td class="thongtin_td"><?= $r->THONGTIN_VPCC ?></td>
        <td class="isCusor" onclick="open_vpcc_edit(this)" data-target="#form_edit" data-toggle="modal"><i class="far fa-edit"></i></td>
        <?php
        if ($_COOKIE['ID_ADMIN'] == '1') { ?>
            <td class="isCusor" onclick="open_vpcc_delete(this)" data-target="#form_delete" data-toggle="modal"><i class="far fa-trash-alt"></i></td>
        <?php } else {
            echo '<td></td>';
        } ?>
    </tr>
<?php $stt++;
}
