//Thêm mới
function ccv_add() {
  var tenccv = $("#tenccv_add").val(),
    dienthoai = $("#dienthoai_add").val(),
    ngaygianhap = $("#ngaygianhap_add").val(),
    ngaybonhiem = $("#ngaybonhiem_add").val(),
    sobonhiem = $("#sobonhiem_add").val(),
    email = $("#email_add").val(),
    noihanhnghe = $("#noihanhnghe_add").val();
  (trangthai = $("#trangthai_add option:selected ").val()),
    $.post(
      "ajax/ccv/ccv_add.php",
      {
        tenccv: tenccv,
        dienthoai: dienthoai,
        ngaygianhap: ngaygianhap,
        ngaybonhiem: ngaybonhiem,
        sobonhiem: sobonhiem,
        email: email,
        trangthai: trangthai,
        noihanhnghe: noihanhnghe,
      },
      function (data, textStatus, jqXHR) {
        $(
          "#tenccv_add, #dienthoai_add, #ngaygianhap_add, #ngaybonhiem_add, #email_add, #noihanhnghe_add"
        ).val("");
        $("#trangthai_add").prop("selactedIndex", 0);
        $("#form_add").modal("hide");
      }
    );
}

//Lấy danh sách
function ccv_load() {
  $.post("ajax/ccv/ccv_show.php", {}, function (data, textStatus, jqXHR) {
    $(".ccv_tbody").html(data);
  });
}

//Xóa
function open_ccv_delete(e) {
  $("#ccv_delete").val($(e).parent().find(".msccv_td").text());
  document.getElementById("ccv_delete").innerHTML = $(e)
    .parent()
    .find(".tenccv_td")
    .text();
}
function ccv_delete() {
  var id_msccv = $("#ccv_delete").val();
  $.post(
    "ajax/ccv/ccv_delete.php",
    { id_msccv: id_msccv },
    function (data, textStatus, jqXHR) {
      $("#form_delete").modal("hide");
    }
  );
}

// Chỉnh sửa
open_ccv_edit = (e) => {
  $("#msccv").val($(e).parent().find(".msccv_td").text());
  $("#tenccv_edit").val($(e).parent().find(".tenccv_td").text());
  $("#sobonhiem_edit").val($(e).parent().find(".sobonhiem_td").text());
  $("#ngaybonhiem_edit").val($(e).parent().find(".ngaybonhiem_td").text());
  $("#ngaygianhap_edit").val($(e).parent().find(".ngaygianhap_td").text());
  $("#dienthoai_edit").val($(e).parent().find(".dienthoai_td").text());
  $("#email_edit").val($(e).parent().find(".email_td").text());
  $("#noihanhnghe_edit").val($(e).parent().find(".noihanhnghe_td").text());
  $("#trangthai_ccv_edit").val($(e).parent().find(".trangthai_td").text());
};
ccv_edit = () => {
  var id_msccv = $("#msccv").val(),
    tenccv = $("#tenccv_edit").val(),
    sobonhiem = $("#sobonhiem_edit").val(),
    ngaybonhiem = $("#ngaybonhiem_edit").val(),
    ngaygianhap = $("#ngaygianhap_edit").val(),
    dienthoai = $("#dienthoai_edit").val(),
    email = $("#email_edit").val(),
    noihanhnghe = $("#noihanhnghe_edit").val(),
    trangthai = $("#trangthai_khachhang_edit option:selected").val();
  $.post(
    "ajax/ccv/ccv_edit.php",
    {
      id_msccv: id_msccv,
      tenccv: tenccv,
      sobonhiem: sobonhiem,
      ngaybonhiem: ngaybonhiem,
      ngaygianhap: ngaygianhap,
      dienthoai: dienthoai,
      email: email,
      noihanhnghe: noihanhnghe,
      trangthai: trangthai,
    },
    function (data, textStatus, jqXHR) {
      $("#form_edit").modal("hide");
    }
  );
};