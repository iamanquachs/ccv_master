// Thêm mới
function vpcc_add() {
  var TEN_VPCC = $("#tenvpcc_add").val(),
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