<?php
include('../../includes/config.php');
include('../../includes/database.php');
require('../../modules/ccvClass.php');
$db_ccv = new CCV();
$id_vpcc = $_COOKIE['ID_VPCC'];
$id_msccv = $_POST['id_msccv'];
$danhsach_ccv = $db_ccv->ccv_load_chitiet($id_vpcc, $id_msccv);
foreach ($danhsach_ccv as $r) { ?>
    <tr>
        <!-- <td><?= $stt ?></td> -->
        <td class="msccv_chitiet_td"><?= $r->id_msccv ?></td>
        <td class="tenccv_chitiet_td"><?= $r->tenccv ?></td>
        <td class="id_vpcc_chitiet_td"><?= $id_vpcc ?></td>
        <td class="khenthuong_chitiet_td"><?= $r->khenthuong ?></td>
        <td class="kyluat_chitiet_td"><?= $r->kyluat ?></td>
        <td class="loaikyluat_chitiet_td"><?= $r->loaikyluat ?></td>
        <td class="hoiphi_chitiet_td"><?= $r->hoiphi ?></td>
        <td class="ngay_chitiet_td"><?= date('d/m/y H:i', strtotime($r->ngay)) ?></td>
        <td class="isCusor" onclick="open_ccv_add_chitiet(this)" data-target="#form_chitiet_add" data-toggle="modal"><i class="far fa-edit"></i></td>

    </tr>
<?php
}
