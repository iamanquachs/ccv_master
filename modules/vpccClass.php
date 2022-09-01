<?php
class VPCC extends database
{
    //vpcc thêm mới
    public function vpcc_add($ID_ADMIN, $ID_VPCC, $TEN_VPCC, $diachi, $sodienthoai, $email, $website, $ANH_VPCC, $THONGTIN_VPCC, $NGAYTHANHLAP_VPCC)
    {
        $getall = $this->connect->prepare("INSERT INTO vanphongcongchung( ID_ADMIN, ID_VPCC, TEN_VPCC, diachi, sodienthoai, email, website, ANH_VPCC, THONGTIN_VPCC, NGAYTHANHLAP_VPCC)
        VALUES ( '$ID_ADMIN', '$ID_VPCC', '$TEN_VPCC', '$diachi', '$sodienthoai', '$email', '$website', '$ANH_VPCC', '$THONGTIN_VPCC', '$NGAYTHANHLAP_VPCC')");
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
    // VPCC danh sách chi tiết
    public function vpcc_chitiet_load($ID_ADMIN, $ID_VPCC)
    {
        $getall = $this->connect->prepare("SELECT ID_VPCC, TEN_VPCC from vanphongcongchung where id_vpcc='$ID_VPCC' and id_admin='1';");
        $getall->setFetchMode(PDO::FETCH_OBJ);
        $getall->execute();
        return $getall->fetchAll();
    }
    // VPCC danh sách chi tiết đã chỉnh sửa
    public function vpcc_chitiet_load_exit($ID_ADMIN, $ID_VPCC)
    {
        $getall = $this->connect->prepare("SELECT ten_hientai,diachi_cu, sdt_cu from vanphongcongchung_hoatdong WHERE id_vpcc='$ID_VPCC' order BY rowid ASC limit 1;");
        $getall->setFetchMode(PDO::FETCH_OBJ);
        $getall->execute();
        return $getall->fetchAll();
    }
    //VPCC thêm mới chi tiết
    public function vpcc_chitiet_add($id_vpcc, $ten_hientai, $ten_truocdo, $diachi_cu, $sdt_cu, $ngay)
    {
        $getall = $this->connect->prepare("INSERT INTO vanphongcongchung_hoatdong(id_vpcc, ten_hientai,ten_truocdo, diachi_cu, sdt_cu, ngay) 
          VALUES ('$id_vpcc','$ten_hientai','$ten_truocdo','$diachi_cu','$sdt_cu','$ngay')");
        $getall->execute();
    }
    //VPCC thêm mới chi tiết chỉnh sửa
    public function vpcc_chitiet_add_edit($id_vpcc, $ten_hientai, $ten_truocdo, $diachi_cu, $sdt_cu, $ngay)
    {
        $getall = $this->connect->prepare("INSERT INTO vanphongcongchung_hoatdong(id_vpcc, ten_hientai,ten_truocdo, diachi_cu, sdt_cu, ngay) 
          VALUES ('$id_vpcc','$ten_hientai','$ten_truocdo','$diachi_cu','$sdt_cu','$ngay')");
        $getall->execute();
    }
    //VPCC Chi tiết hoạt động
    public function vpcc_chitiet_edit($id_vpcc, $ten_hientai, $ten_truocdo, $diachi_cu, $sdt_cu, $ngay)
    {
        $getall = $this->connect->prepare("UPDATE vanphongcongchung_hoatdong set  ten_hientai='$ten_hientai',ten_truocdo='$ten_truocdo',diachi_cu='$diachi_cu',sdt_cu='$sdt_cu',ngay='$ngay'
         where id_vpcc = '$id_vpcc'");
        $getall->execute();
    }
    //Xóa chi tiết cũ
    public function vpcc_delete_chitiet_cu($ID_VPCC, $ID_ADMIN)
    {
        $getall = $this->connect->prepare("DELETE FROM vanphongcongchung_hoatdong WHERE id_vpcc='$ID_VPCC' ORDER by rowid ASC LIMIT 1");
        $getall->execute();
    }
}
