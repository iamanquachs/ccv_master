<?php
class VPCC extends database
{
    //vpcc thêm mới
    public function vpcc_add($ID_ADMIN, $TEN_VPCC, $diachi, $sodienthoai, $email, $website, $ANH_VPCC, $THONGTIN_VPCC, $NGAYTHANHLAP_VPCC)
    {
        $getall = $this->connect->prepare("INSERT INTO vanphongcongchung( ID_ADMIN, TEN_VPCC, diachi, sodienthoai, email, website, ANH_VPCC, THONGTIN_VPCC, NGAYTHANHLAP_VPCC)
        VALUES ( '$ID_ADMIN', '$TEN_VPCC', '$diachi', '$sodienthoai', '$email', '$website', '$ANH_VPCC', '$THONGTIN_VPCC', '$NGAYTHANHLAP_VPCC')");
        $getall->execute();
    }
    //lấy danh sách
    public function vpcc_load($ID_ADMIN)
    {
        $getall = $this->connect->prepare("SELECT * FROM vanphongcongchung where ID_ADMIN = '$ID_ADMIN'");
        $getall->setFetchMode(PDO::FETCH_OBJ);
        $getall->execute();
        return $getall->fetchAll();
    }
    // Filter danh sách VPCC
    public function vpcc_filter($TEN_VPCC, $sodienthoai, $tungay, $denngay)
    {
        $getall = $this->connect->prepare("SELECT * from vanphongcongchung where TEN_VPCC='$TEN_VPCC' or sodienthoai='$sodienthoai' or NGAYTHANHLAP_VPCC between '$tungay' and '$denngay' ");
        $getall->setFetchMode(PDO::FETCH_OBJ);
        $getall->execute();
        return $getall->fetchAll();
    }

    //Lấy danh sách trạng thái
    public function list_trangthai($id_vpcc)
    {
        $getall = $this->connect->prepare("SELECT msloai,giatri from dmphanloai where id_vpcc='$id_vpcc' and phanloai='trangthaiccv' order by msloai");
        $getall->setFetchMode(PDO::FETCH_OBJ);
        $getall->execute();
        return $getall->fetchAll();
    }
    //Lấy danh sách trạng thái chi tiết khách hàng
    public function list_trangthai_ctkh($id_vpcc)
    {
        $getall = $this->connect->prepare("SELECT msloai,giatri from dmphanloai where id_vpcc='$id_vpcc' and phanloai='trangthai_ctkh'  order by msloai");
        $getall->setFetchMode(PDO::FETCH_OBJ);
        $getall->execute();
        return $getall->fetchAll();
    }
    //Lấy danh sách lý do
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
    //Xóa
    public function vpcc_delete($ID_VPCC, $ID_ADMIN)
    {
        $getall = $this->connect->prepare("DELETE FROM vanphongcongchung where ID_ADMIN='$ID_ADMIN' and ID_VPCC='$ID_VPCC'");
        $getall->execute();
    }
    // Chỉnh sửa
    public function vpcc_edit($ID_VPCC, $TEN_VPCC, $diachi, $sodienthoai, $email, $website, $ANH_VPCC, $THONGTIN_VPCC, $NGAYTHANHLAP_VPCC)
    {
        $getall = $this->connect->prepare("UPDATE vanphongcongchung set  TEN_VPCC='$TEN_VPCC',diachi='$diachi',sodienthoai='$sodienthoai',website='$website',ANH_VPCC='$ANH_VPCC'
        ,THONGTIN_VPCC='$THONGTIN_VPCC',NGAYTHANHLAP_VPCC='$NGAYTHANHLAP_VPCC' where ID_VPCC = '$ID_VPCC'");
        $getall->execute();
    }
}
