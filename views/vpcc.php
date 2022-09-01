<!-- Main Content -->
<div id="content">
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h5 mb-2 text-gray-800" style="text-align: center; margin: 10px 0px; padding-bottom: 7px; border-bottom: solid 1px #d1d1d1;">CRM</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-2">
            <div class="row">
                <div class="col-12">
                    <div class="card-header py-3 card_header_vpcc">
                        <h6 class="m-0 font-weight-bold text-primary">Danh sách Khách hàng</h6>
                        <button data-toggle="modal" data-target="#form_add" class="btn btn-primary">Thêm tổ chức</button>
                    </div>
                    <div id="form_filter">
                        <div class="vpcc_filter_div" style="display: flex; justify-content: center; align-items: center;">
                            <input id="tenvpcc_search" class="Input_Style" type="text" placeholder="Tên" autocomplete="FALSE">
                            <input id="dienthoai_search" class="Input_Style" type="text" placeholder="Số điện thoại" autocomplete="FALSE">
                            <div class="input-group date datepicker_vpcc" data-date-format="dd/mm/yyyy">
                                <input id="tungay" class="form-control vpcc_tungay" placeholder="Từ ngày" value="<?= date('d/m/Y', strtotime('-30 day', strtotime(date('Y-m-d')))); ?>" type="text"> <span class="input-group-addon"></span>

                            </div>
                            <div class="input-group date datepicker_vpcc" data-date-format="dd/mm/yyyy">
                                <input id="denngay" class="form-control vpcc_denngay" placeholder="Đến Ngày" name="denngay" value="<?= date('d/m/Y'); ?>" type="text"> <span class="input-group-addon"></span>
                            </div>
                            <button onclick="vpcc_filter()" class="btn btn-primary">Tìm kiếm</button>

                        </div>
                    </div>

                    <div class="card-body card_body_vpcc">
                        <div id="vpcc_table_header" class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ID VPCC</th>
                                        <th>Tên tổ chức</th>
                                        <th>Địa chỉ</th>
                                        <th>Số điện thoại</th>
                                        <th>Email</th>
                                        <th>Website</th>
                                        <th>Ảnh</th>
                                        <th>Ngày thành lập</th>
                                        <th>Thông tin</th>
                                        <th>Chỉnh</th>
                                        <th>Xóa</th>
                                    </tr>
                                </thead>
                                <tbody class="vpcc_tbody">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card-header py-3 card_header_vpcc">
                        <h6 id='ten_vpcc_h6' class="m-0 font-weight-bold text-primary">Hoạt động tổ chức công chứng</h6>
                        <input type="hidden" id="chitiet_id_vpcc_td">
                        <!-- <button id="btn_add_chitiet" data-toggle="modal" data-target="#form_chitiet_add" class="btn btn-info hidden">Thêm nhật ký</button> -->
                    </div>
                    <div class="card-body card_body_vpcc">
                        <div id="vpcc_table_line" class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ID VPCC</th>
                                        <th>Tên hiện tại</th>
                                        <th>Tên trước đó</th>
                                        <th>Địa chỉ trước đó</th>
                                        <th>Số điện thoại trước đó</th>
                                        <th>Ngày thay đổi</th>
                                    </tr>
                                </thead>
                                <tbody class="chitiet_vpcc_tbody">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>


</div>
<!-- Form Add -->
<div class="modal fade" id="form_add" data-bs-backdrop="static" data-keyboard="false" aria-labelledby="form_add" aria-hidden="true">
    <div class="modal-dialog modal_dialog_xetnghiem">
        <div class="modal-content">
            <div style="padding:10px" class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Thêm mới tổ chức</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="col-12">
                        <label class="field field_v2 width_100">
                            <input type="text" id="idvpcc_add" class="field__input" placeholder="Vui lòng nhập ID tổ chức công chứng" required>
                            <span class="field__label-wrap">
                                <span class="field__label">ID tổ chức công chứng</span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-12">
                        <label class="field field_v2 width_100">
                            <input type="text" id="tenvpcc_add" class="field__input" placeholder="Vui lòng nhập tên văn phòng công chứng" required>
                            <span class="field__label-wrap">
                                <span class="field__label">Tên tổ chức</span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-12">
                        <label class="field field_v2 width_100">
                            <input type="text" id="emailvpcc_add" class="field__input" placeholder="Vui lòng nhập Email" required>
                            <span class="field__label-wrap">
                                <span class="field__label">Email</span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-12">
                        <label class="field field_v2 width_100">
                            <input id="dienthoai_add" onkeyup="this.value = this.value.replace(/[^0-9\.\,]/g,'')" class="field__input" placeholder="Vui lòng nhập số điện thoại">
                            <span class="field__label-wrap">
                                <span class="field__label">Điện thoại</span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-12">
                        <label class="field field_v2 width_100">
                            <input id="diachi_add" class="field__input" placeholder="Vui lòng nhập địa chỉ">
                            <span class="field__label-wrap">
                                <span class="field__label">Địa chỉ</span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-12">
                        <label class="field field_v2 width_100">
                            <input type="text" id="websitevpcc_add" class="field__input" placeholder="Vui lòng nhập tên website" required>
                            <span class="field__label-wrap">
                                <span class="field__label">Website</span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-12">
                        <label class="field field_v2 width_100">
                            <input id="ngaythanhlap_add" value="<?= date('d/m/Y') ?>" class="field__input txt_date" data-date-format="dd-mm-yy" type="text" placeholder="Ngày" data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy" data-mask="" im-insert="false">
                            <span class="field__label-wrap">
                                <span class="field__label">Ngày thành lập</span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-12">
                        <label class="field field_v2 width_100">
                            <textarea row="5" cols="50" style="height:100px" type="text" id="thongtinvpcc_add" class="field__input" placeholder="Vui lòng nhập thông tin" required></textarea>
                            <span class="field__label-wrap">
                                <span class="field__label">Thông tin văn phòng</span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-12">
                        <label class="field field_v2 width_100">
                            <input type="file" id="anhvpcc_add" class="field__input" placeholder="Vui lòng nhập thông tin" required>
                            <span class="field__label-wrap">
                                <span class="field__label">Ảnh</span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="col-12">
                    <div class="control_btn">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                        <button style="margin-left: 5px;" type="button" onclick="vpcc_add(), vpcc_chitiet_add()" class="btn btn-success">Lưu</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Form Edit -->
<div class="modal fade" id="form_edit" data-bs-backdrop="static" data-keyboard="false" aria-labelledby="form_add" aria-hidden="true">
    <div class="modal-dialog modal_dialog_xetnghiem">
        <div class="modal-content">
            <div style="padding:10px" class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Chỉnh sửa Tổ chức</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <input type="hidden" id="id_vpcc">
            <div class="modal-body">
                <div class="form-group">
                    <div class="col-12">
                        <label class="field field_v2 width_100">
                            <input type="text" id="tentc_edit" class="field__input" placeholder="Vui lòng nhập tên tổ chức" required>
                            <span class="field__label-wrap">
                                <span class="field__label">Tên tổ chức</span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-12">
                        <label class="field field_v2 width_100">
                            <input type="text" id="diachi_edit" class="field__input" placeholder="Vui lòng nhập địa chỉ" required>
                            <span class="field__label-wrap">
                                <span class="field__label">Địa chỉ</span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-12">
                        <label class="field field_v2 width_100">
                            <input id="sodienthoai_edit" onkeyup="this.value = this.value.replace(/[^0-9\.\,]/g,'')" class="field__input" placeholder="Vui lòng nhập số điện thoại">
                            <span class="field__label-wrap">
                                <span class="field__label">Số điện thoại</span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-12">
                        <label class="field field_v2 width_100">
                            <input type="text" id="email_edit" class="field__input" placeholder="Vui lòng nhập Email" required>
                            <span class="field__label-wrap">
                                <span class="field__label">Email</span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-12">
                        <label class="field field_v2 width_100">
                            <input type="text" id="website_edit" class="field__input" placeholder="Vui lòng nhập website" required>
                            <span class="field__label-wrap">
                                <span class="field__label">Website</span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-12">
                        <label class="field field_v2 width_100">
                            <input type="file" id="anh_edit" class="field__input" required>
                            <span class="field__label-wrap">
                                <span class="field__label">Ảnh</span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-12">
                        <label class="field field_v2 width_100">
                            <input id="ngaythanhlap_edit" value="<?= date('d/m/Y') ?>" class="field__input txt_date" data-date-format="dd-mm-yy" type="text" placeholder="Ngày thành lập" data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy" data-mask="" im-insert="false">
                            <span class="field__label-wrap">
                                <span class="field__label">Ngày thành lập</span>
                            </span>
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-12">
                        <label class="field field_v2 width_100">
                            <input id="thongtin_edit" class="field__input" placeholder="Vui lòng nhập thông tin">
                            <span class="field__label-wrap">
                                <span class="field__label">Thông tin</span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="col-12">
                    <div class="control_btn">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                        <button style="margin-left: 5px;" type="button" onclick="vpcc_edit(), vpcc_chitiet_add_edit(), vpcc_delete_chitiet_cu()" class="btn btn-success">Lưu</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Form delete -->
<div class="modal fade" id="form_delete" data-bs-backdrop="static" data-keyboard="false" aria-labelledby="form_add" aria-hidden="true">
    <div class="modal-dialog modal_dialog_xetnghiem">
        <div class="modal-content">
            <div style="padding:10px" class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Đồng ý xóa?</h5>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> -->
            </div>
            <div class="modal-body">
                <p style="margin: 0;margin-left: 10px;" id="vpcc_delete"></p>
            </div>
            <div class="modal-footer">
                <input type="hidden" id="vpcc_delete">
                <button data-dismiss="modal" class="btn btn-secondary">Hủy</button>
                <button onclick="vpcc_delete()" class="btn btn-danger">Đồng ý</button>
            </div>
        </div>

    </div>
</div>
<!-- Form Add chi tiết -->
<div class="modal fade" id="form_chitiet_add" data-bs-backdrop="static" data-keyboard="false" aria-labelledby="form_add" aria-hidden="true">
    <div class="modal-dialog modal_dialog_xetnghiem">
        <div class="modal-content">
            <div style="padding:10px" class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Thêm mới chi tiết</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="col-12">
                        <label class="field field_v2 width_100">
                            <input type="hidden" id="ctkh_mskh">
                            <input type="hidden" id="ctkh_tenkh">
                            <input id="ctkh_ngay_add" value="<?= date('d/m/Y') ?>" class="field__input txt_date" data-date-format="dd-mm-yy" type="text" placeholder="Ngày" data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy" data-mask="" im-insert="false">
                            <span class="field__label-wrap">
                                <span class="field__label">Ngày</span>
                            </span>
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-12">
                        <label class="field field_v2 width_100">
                            <input id="ctkh_yeucau_add" class="field__input" placeholder="Vui lòng nhập Yêu cầu">
                            <span class="field__label-wrap">
                                <span class="field__label">Yêu cầu</span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-12">
                        <label class="field field_v2 width_100">
                            <input id="ctkh_gia_add" class="field__input" onkeyup="this.value = this.value.replace(/[^0-9\.\,-]/g,'');_ChangeFormat(this)" type="text" placeholder="Vui lòng nhập Giá">
                            <span class="field__label-wrap">
                                <span class="field__label">Giá</span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-12">
                        <label class="field field_v2 width_100">
                            <input id="ctkh_note_add" class="field__input" placeholder="Vui lòng nhập Ghi chú">
                            <span class="field__label-wrap">
                                <span class="field__label">Ghi chú</span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-12">
                        <label class="field field_v2 width_100">
                            <input id="ctkh_link_add" class="field__input" placeholder="Vui lòng nhập Link tài liệu">
                            <span class="field__label-wrap">
                                <span class="field__label">Link tài liệu</span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-12">
                        <select class="form-control" id="trangthai_ctkh_add">
                            <option value="">Chọn Trạng thái</option>
                            <?php
                            foreach ($list_trangthai_ctkh as $r) { ?>
                                <option value="<?= $r->msloai ?>"><?= $r->giatri ?></option>
                            <?php }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="col-12">
                    <div class="control_btn">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                        <button style="margin-left: 5px;" type="button" onclick="vpcc_chitiet_add()" class="btn btn-success">Lưu</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Form edit chi tiết -->
<div class="modal fade" id="form_chitiet_edit" data-bs-backdrop="static" data-keyboard="false" aria-labelledby="form_add" aria-hidden="true">
    <div class="modal-dialog modal_dialog_xetnghiem">
        <div class="modal-content">
            <div style="padding:10px" class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Chỉnh sửa chi tiết</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="col-12">
                        <label class="field field_v2 width_100">
                            <input type="hidden" id="ctkh_mskh_edit">
                            <input type="hidden" id="ctkh_msct_edit">
                            <input id="ctkh_ngay_edit" value="<?= date('d/m/Y') ?>" class="field__input txt_date" data-date-format="dd-mm-yy" type="text" placeholder="Ngày" data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy" data-mask="" im-insert="false">
                            <span class="field__label-wrap">
                                <span class="field__label">Ngày</span>
                            </span>
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-12">
                        <label class="field field_v2 width_100">
                            <input id="ctkh_yeucau_edit" class="field__input" placeholder="Vui lòng nhập Yêu cầu">
                            <span class="field__label-wrap">
                                <span class="field__label">Yêu cầu</span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-12">
                        <label class="field field_v2 width_100">
                            <input id="ctkh_gia_edit" class="field__input" onkeyup="this.value = this.value.replace(/[^0-9\.\,-]/g,'');_ChangeFormat(this)" type="text" placeholder="Vui lòng nhập Giá">
                            <span class="field__label-wrap">
                                <span class="field__label">Giá</span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-12">
                        <label class="field field_v2 width_100">
                            <input id="ctkh_note_edit" class="field__input" placeholder="Vui lòng nhập Ghi chú">
                            <span class="field__label-wrap">
                                <span class="field__label">Ghi chú</span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-12">
                        <label class="field field_v2 width_100">
                            <input id="ctkh_link_edit" class="field__input" placeholder="Vui lòng nhập Link tài liệu">
                            <span class="field__label-wrap">
                                <span class="field__label">Link tài liệu</span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-12">
                        <select class="form-control" id="trangthai_ctkh_edit">
                            <option value="">Chọn Trạng thái</option>
                            <?php
                            foreach ($list_trangthai_ctkh as $r) { ?>
                                <option value="<?= $r->msloai ?>"><?= $r->giatri ?></option>
                            <?php }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="col-12">
                    <div class="control_btn">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                        <button style="margin-left: 5px;" type="button" onclick="vpcc_chitiet_edit()" class="btn btn-success">Lưu</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Form delete chi tiết -->
<div class="modal fade" id="form_chitiet_delete" data-bs-backdrop="static" data-keyboard="false" aria-labelledby="form_add" aria-hidden="true">
    <div class="modal-dialog modal_dialog_xetnghiem">
        <div class="modal-content">
            <div style="padding:10px" class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Đồng ý xóa?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p style="margin: 0;margin-left: 10px;" id="ctkh_yeucau_delete"></p>
            </div>
            <div class="modal-footer">
                <input type="hidden" id="ctkh_mskh_delete">
                <input type="hidden" id="ctkh_msct_delete">
                <button data-dismiss="modal" class="btn btn-secondary">Hủy</button>
                <button onclick="ctkh_delete()" class="btn btn-danger">Đồng ý</button>
            </div>
        </div>

    </div>
</div>
<script src="vendor/jquery/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        vpcc_load()
    });
</script>
<script src="vendor/js/vpcc.js?v=<?= md5_file('vendor/js/vpcc.js') ?>"></script>