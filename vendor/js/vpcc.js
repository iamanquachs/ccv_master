// Thêm mới
function vpcc_add() {
  var TEN_VPCC = $("#tenvpcc_add").val(),
    ID_VPCC = $("#idvpcc_add").val(),
    diachi = $("#diachi_add").val(),
    sodienthoai = $("#dienthoai_add").val(),
    email = $("#emailvpcc_add").val(),
    website = $("#websitevpcc_add").val(),
    NGAYTHANHLAP_VPCC = $("#ngaythanhlap_add").val(),
    THONGTIN_VPCC = $("#thongtinvpcc_add").val(),
    ANH_VPCC = $("#anhvpcc_add").val();

  $.post(
    "ajax/vpcc/vpcc_add.php",
    {
      TEN_VPCC: TEN_VPCC,
      ID_VPCC: ID_VPCC,
      diachi: diachi,
      sodienthoai: sodienthoai,
      email: email,
      website: website,
      THONGTIN_VPCC: THONGTIN_VPCC,
      NGAYTHANHLAP_VPCC: NGAYTHANHLAP_VPCC,
      ANH_VPCC: ANH_VPCC,
    },
    function (data, textStatus, jqXHR) {
      $(
        "#tenvpcc_add",
        "#idvpcc_add",
        "#diachi_add",
        "#dienthoai_add",
        "#emailvpcc_add",
        "#websitevpcc_add",
        "#thongtinvpcc_add",
        "#ngaythanhlap_add",
        "#anhvpcc_add"
      ).val("");
      $("#form_add").modal("hide");
    }
  );
}

// Hiển thị
function vpcc_load() {
  $.post("ajax/vpcc/vpcc_load.php", {}, function (data, textStatus, jqXHR) {
    // alert(data);
    $(".vpcc_tbody").html(data);
  });
}

// Xóa
function open_vpcc_delete(e) {
  $("#vpcc_delete").val($(e).parent().find(".idvpcc_td").text());
  document.getElementById("vpcc_delete").innerHTML = $(e)
    .parent()
    .find(".tenvpcc_td")
    .text();
}
function vpcc_delete() {
  var ID_VPCC = $("#vpcc_delete").val();
  $.post(
    "ajax/vpcc/vpcc_delete.php",
    { ID_VPCC: ID_VPCC },
    function (data, textStatus, jqXHR) {
      $("#form_delete").modal("hide");
    }
  );
}

// Chỉnh sửa
open_vpcc_edit = (e) => {
  $("#id_vpcc").val($(e).parent().find(".idvpcc_td").text());
  $("#tentc_edit").val($(e).parent().find(".tenvpcc_td").text());
  $("#diachi_edit").val($(e).parent().find(".diachi_td").text());
  $("#sodienthoai_edit").val($(e).parent().find(".sodienthoai_td").text());
  $("#email_edit").val($(e).parent().find(".email_td").text());
  $("#website_edit").val($(e).parent().find(".website_td").text());
  $("#anh_edit").val($(e).parent().find(".anh_td").text());
  $("#ngaythanhlap_edit").val($(e).parent().find(".ngaythanhlap_td").text());
  $("#thongtin_edit").val($(e).parent().find(".thongtin_td").text());
};
vpcc_edit = () => {
  var ID_VPCC = $("#id_vpcc").val(),
    TEN_VPCC = $("#tentc_edit").val(),
    diachi = $("#diachi_edit").val(),
    sodienthoai = $("#sodienthoai_edit").val(),
    email = $("#email_edit").val(),
    website = $("#website_edit").val(),
    ANH_VPCC = $("#anh_edit").val(),
    NGAYTHANHLAP_VPCC = $("#ngaythanhlap_edit").val(),
    THONGTIN_VPCC = $("#thongtin_edit").val();
  $.post(
    "ajax/vpcc/vpcc_edit.php",
    {
      ID_VPCC: ID_VPCC,
      TEN_VPCC: TEN_VPCC,
      diachi: diachi,
      sodienthoai: sodienthoai,
      email: email,
      website: website,
      ANH_VPCC: ANH_VPCC,
      NGAYTHANHLAP_VPCC: NGAYTHANHLAP_VPCC,
      THONGTIN_VPCC: THONGTIN_VPCC,
    },
    function (data, textStatus, jqXHR) {
      $("#form_edit").modal("hide");
    }
  );
};

// Lọc vpcc
function vpcc_filter() {
  var TEN_VPCC = $("#tenvpcc_search").val(),
    sodienthoai = $("#dienthoai_search").val(),
    tungay = $("#tungay").val(),
    denngay = $("#denngay").val();
  $.post(
    "ajax/vpcc/vpcc_filter.php",
    {
      TEN_VPCC: TEN_VPCC,
      sodienthoai: sodienthoai,
      tungay: tungay,
      denngay: denngay,
    },
    function (data, textStatus, jqXHR) {
      console.log(data);
      $(".vpcc_tbody").html(data);
    }
  );
}

//--------------------------------------------------------Hoạt động VPCC---------------------------------
function vpcc_load_chitiet(e) {
  var ID_VPCC = $(e).find(".idvpcc_td").text(),
    ten_vpcc = $(e).find(".tenvpcc_td").text();
  document.getElementById("ten_vpcc_h6").innerText =
    "Hoạt động tổ chức công chứng: " + ten_vpcc;
  $("#chitiet_id_vpcc_td").val(ID_VPCC);
  $.post(
    "ajax/vpcc/vpcc_load_chitiet.php",
    { ID_VPCC: ID_VPCC },
    function (data, textStatus, jqXHR) {
      $(".chitiet_vpcc_tbody").html(data);
    }
  );
}
//Thêm mới chi tiết
function vpcc_chitiet_add() {
  var id_vpcc = $("#idvpcc_add").val(),
    ten_hientai = $("#tenvpcc_add").val(),
    ten_truocdo = $("#ten_truocdo_add").val(),
    diachi_cu = $("#diachi_add").val(),
    sdt_cu = $("#dienthoai_add").val();
  ngay = $("#ngay_add").val();
  $.post(
    "ajax/vpcc/vpcc_chitiet_add.php",
    {
      id_vpcc: id_vpcc,
      ten_hientai: ten_hientai,
      ten_truocdo: ten_truocdo,
      diachi_cu: diachi_cu,
      sdt_cu: sdt_cu,
      ngay: ngay,
    },
    function (data, textStatus, jqXHR) {
      $(
        "#idvpcc_add, #ten_hientai_add, #ten_truocdo_add,#diachi_cu_add,#diachi_cu_add, #sdt_cu_add, #ngay_add"
      ).val("");
      $("#form_chitiet_add").modal("hide");
    }
  );
}

//Thêm mới chi tiết chỉnh sửa
function vpcc_chitiet_add_edit() {
  var id_vpcc = $("#id_vpcc").val(),
    ten_hientai = $("#tentc_edit").val(),
    ten_truocdo = $("#ten_truocdo_edit").val(),
    diachi_cu = $("#diachi_edit").val(),
    sdt_cu = $("#sodienthoai_edit").val();
  ngay = $("#ngay_edit").val();
  $.post(
    "ajax/vpcc/vpcc_chitiet_add.php",
    {
      id_vpcc: id_vpcc,
      ten_hientai: ten_hientai,
      ten_truocdo: ten_truocdo,
      diachi_cu: diachi_cu,
      sdt_cu: sdt_cu,
      ngay: ngay,
    },
    function (data, textStatus, jqXHR) {
      $(
        "#id_vpcc, #tentc_edit, #ten_truocdo_edit,#diachi_edit,#sodienthoai_edit, #ngay_edit"
      ).val("");
      $("#form_edit").modal("hide");
    }
  );
}
//Xóa chi tiết cũ
function vpcc_delete_chitiet_cu() {
  var ID_VPCC = $("#id_vpcc").val();
  $.post(
    "ajax/vpcc/vpcc_delete_chitiet_cu.php",
    { ID_VPCC: ID_VPCC },
    function (data, textStatus, jqXHR) {
      $("#form_edit").modal("hide");
    }
  );
}
