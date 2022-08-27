<?php
function _check_matkhau($msdn, $matkhau)
{
    $database = new database();
    $getall = $database->connect->prepare("SELECT ID_VPCC,TEN_ADMIN,ID_ADMIN from `admin`  where  EMAIL_ADMIN='$msdn' and MK_ADMIN=?");
    $getall->setFetchMode(PDO::FETCH_OBJ);
    $getall->execute(array(md5($matkhau)));
    return $getall->fetchAll();
}
