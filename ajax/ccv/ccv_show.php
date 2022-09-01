<?php
include('../../includes/config.php');
include('../../includes/database.php');
require('../../modules/ccvClass.php');
$db_ccv = new CCV();
$id_vpcc = $_COOKIE['ID_VPCC'];
$danhsach_ccv = $db_ccv->ccv_load($id_vpcc);
$stt = 1;
foreach ($danhsach_ccv as $r) { ?>
    <tr class="isCusor" onclick="ccv_chitiet_load(this)">
        <!-- <td><?= $stt ?></td> -->
        <td class="msccv_td"><?= $r->id_msccv ?></td>
        <td class="tenccv_td"><?= $r->tenccv ?></td>
        <td><?= $r->id_vpcc ?></td>
        <td class="sobonhiem_td"><?= $r->sobonhiem ?></td>
        <td class="ngaybonhiem_td"><?= date('d/m/y H:i', strtotime($r->ngaybonhiem)) ?></td>
        <td class="ngaygianhap_td"><?= date('d/m/y H:i', strtotime($r->ngaygianhap)) ?></td>
        <td class="dienthoai_td"><?= $r->dienthoai ?></td>
        <td class="email_td"><?= $r->email ?></td>
        <td class="noihanhnghe_td"><?= $r->noihanhnghe ?></td>
        <td class="trangthai_td"></td>
        <td class="isCusor" onclick="open_ccv_edit(this)" data-target="#form_edit" data-toggle="modal"><i class="far fa-edit"></i></td>
        <?php
        if ($_COOKIE['ID_ADMIN'] == '1') { ?>
            <td class="isCusor" onclick="open_ccv_delete(this)" data-target="#form_delete" data-toggle="modal"><i class="far fa-trash-alt"></i></td>
        <?php } else {
            echo '<td></td>';
        } ?>
    </tr>
<?php $stt++;
}
