<?php
class CCV extends database
{
    //ccv thêm mới
    public function ccv_add($tenccv, $id_vpcc, $ngaybonhiem, $ngaygianhap, $dienthoai, $trangthai, $noihanhnghe, $email, $sobonhiem)
    {
        $getall = $this->connect->prepare("INSERT INTO ccv(tenccv, id_vpcc,ngaybonhiem,ngaygianhap,dienthoai,noihanhnghe,trangthai,email,sobonhiem) 
        VALUES ('$tenccv','$id_vpcc','$ngaybonhiem','$ngaygianhap','$dienthoai','$noihanhnghe','$trangthai','$email','$sobonhiem')");
        $getall->execute();
    }
    public function ccv_getall()
    {
        $getall = $this->connect->prepare("SELECT * from ccv where");
        $getall->setFetchMode(PDO::FETCH_OBJ);
        $getall->execute();
        return $getall->fetchAll();
    }

    //ccv lấy danh sách 

    public function ccv_load($id_vpcc)
    {
        $getall = $this->connect->prepare("SELECT * from ccv where id_vpcc='$id_vpcc' ");
        $getall->setFetchMode(PDO::FETCH_OBJ);
        $getall->execute();
        return $getall->fetchAll();
    }
    //todo lấy danh sách trạng thái
    public function list_trangthai($id_vpcc)
    {
        $getall = $this->connect->prepare("SELECT msloai,giatri from dmphanloai where id_vpcc='$id_vpcc' and phanloai='trangthaiccv' order by msloai");
        $getall->setFetchMode(PDO::FETCH_OBJ);
        $getall->execute();
        return $getall->fetchAll();
    }
    //todo lấy danh sách trạng thái chi tiết khách hàng
    public function list_trangthai_ctkh($id_vpcc)
    {
        $getall = $this->connect->prepare("SELECT msloai,giatri from dmphanloai where id_vpcc='$id_vpcc' and phanloai='trangthai_ctkh'  order by msloai");
        $getall->setFetchMode(PDO::FETCH_OBJ);
        $getall->execute();
        return $getall->fetchAll();
    }
    //todo lấy danh sách lý do
    public function list_lydo($id_vpcc)
    {
        $getall = $this->connect->prepare("SELECT msloai,giatri from dmphanloai where id_vpcc='$id_vpcc' and phanloai='lydoccv'");
        $getall->setFetchMode(PDO::FETCH_OBJ);
        $getall->execute();
        return $getall->fetchAll();
    }
    public function list_user($id_vpcc)
    {
        $getall = $this->connect->prepare("SELECT msdn, hoten FROM hosonhanvien where id_vpcc='$id_vpcc' ");
        $getall->setFetchMode(PDO::FETCH_OBJ);
        $getall->execute();
        return $getall->fetchAll();
    }

    // Xóa
    public function ccv_delete($id_vpcc, $id_msccv)
    {
        $getall = $this->connect->prepare("DELETE FROM ccv where id_vpcc='$id_vpcc' and id_msccv='$id_msccv'");
        $getall->execute();
    }
    // Chỉnh sửa
    public function ccv_edit($id_msccv, $tenccv, $sobonhiem, $ngaybonhiem, $ngaygianhap, $dienthoai, $email, $noihanhnghe, $trangthai)
    {
        $getall = $this->connect->prepare("UPDATE ccv set id_msccv='$id_msccv' tenccv='$tenccv',sobonhiem='$sobonhiem',ngaybonhiem='$ngaybonhiem',ngaygianhap='$ngaygianhap',dienthoai='$dienthoai'
        ,email='$email',noihanhnghe='$noihanhnghe', trangthai='$trangthai' where id_msccv = '$id_msccv'");
        $getall->execute();
    }
}
