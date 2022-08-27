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
                    <div class="card-header py-3 card_header_ccv">
                        <h6 class="m-0 font-weight-bold text-primary">Danh sách Công chứng viên</h6>
                        <button data-toggle="modal" data-target="#form_add" class="btn btn-primary">Thêm công chứng viên</button>
                    </div>
                    <div class="ccv_filter_div" style="display: flex; justify-content: center; align-items: center;">
                        <input onkeyup="ccv_search()" id="tenccv_search" class="Input_Style" type="text" placeholder="Tên, số điện thoại" autocomplete="FALSE">
                        <div id="datepicker_ccv" class="input-group date datepicker_ccv" data-date-format="dd/mm/yyyy">
                            <input class="form-control ccv_tungay" value="<?= date('d/m/Y', strtotime('-30 day', strtotime(date('Y-m-d')))); ?>" type="text"> <span class="input-group-addon"></span>

                        </div>
                        <div id="datepicker_ccv2" class="input-group date datepicker_ccv" data-date-format="dd/mm/yyyy">
                            <input class="form-control ccv_denngay" name="denngay" value="<?= date('d/m/Y'); ?>" type="text"> <span class="input-group-addon"></span>
                        </div>
                        <select class="form-control" id="trangthai_ccv_loc">
                            <option value="">Trạng thái</option>
                            <?php
                            foreach ($list_trangthai as $r) { ?>
                                <option value="<?= $r->msloai ?>"><?= $r->giatri ?></option>
                            <?php }
                            ?>
                        </select>
                        <select class="form-control" id="msdn_ccv_loc">
                            <option value="">Nhân viên</option>
                            <?php
                            foreach ($list_user as $r) { ?>
                                <option value="<?= $r->msdn ?>"><?= $r->hoten ?></option>
                            <?php }
                            ?>
                        </select>
                    </div>
                    <div class="card-body card_body_ccv">
                        <div id="ccv_table_header" class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tên công chứng viên</th>
                                        <th>Mã tổ chức</th>
                                        <th>Số bổ nhiệm</th>
                                        <th>Ngày bổ nhiệm</th>
                                        <th>Ngày gia nhập</th>
                                        <th>Điện thoại</th>
                                        <th>Email</th>
                                        <th>Nơi hành nghề</th>
                                        <th>Trạng thái</th>
                                        <th>Chỉnh</th>
                                        <th>Xóa</th>
                                    </tr>
                                </thead>
                                <tbody class="ccv_tbody">

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card-header py-3 card_header_ccv">
                        <h6 class="m-0 font-weight-bold text-primary">Hoạt động Công chứng viên</h6>
                        <button id="btn_add_chitiet" data-toggle="modal" data-target="#form_chitiet_add" class="btn btn-info hidden">Thêm nhật ký</button>
                    </div>
                    <div class="card-body card_body_ccv">
                        <div id="ccv_table_line" class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tên Công chứng viên</th>
                                        <th>Mã tổ chức</th>
                                        <th>Khen thưởng</th>
                                        <th>Kỷ luật</th>
                                        <th>Hội phí</th>
                                        <th>Ngày</th>
                                        <th>Ghi chú</th>
                                        <th>Chỉnh</th>
                                        <th>Xóa</th>
                                    </tr>
                                </thead>
                                <tbody class="chitiet_ccv_tbody">
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
                <h5 class="modal-title" id="staticBackdropLabel">Thêm mới công chứng viên</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="col-12">
                        <label class="field field_v2 width_100">
                            <input type="text" id="tenccv_add" class="field__input" placeholder="Vui lòng nhập tên khách hàng" required>
                            <span class="field__label-wrap">
                                <span class="field__label">Tên công chứng viên</span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-12">
                        <label class="field field_v2 width_100">
                            <input type="text" id="noihanhnghe_add" class="field__input" placeholder="Vui lòng nơi hành nghề" required>
                            <span class="field__label-wrap">
                                <span class="field__label">Nơi hành nghề</span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-12">
                        <label class="field field_v2 width_100">
                            <input type="text" id="sobonhiem_add" class="field__input" placeholder="Vui lòng nhập số bổ nhiệm" required>
                            <span class="field__label-wrap">
                                <span class="field__label">Số bổ nhiệm</span>
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
                            <input id="email_add" class="field__input" placeholder="Vui lòng nhập email">
                            <span class="field__label-wrap">
                                <span class="field__label">Email</span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-12">
                        <label class="field field_v2 width_100">
                            <input id="ngaygianhap_add" value="<?= date('d/m/Y') ?>" class="field__input txt_date" data-date-format="dd-mm-yy" type="text" placeholder="Ngày" data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy" data-mask="" im-insert="false">
                            <span class="field__label-wrap">
                                <span class="field__label">Ngày gia nhập</span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-12">
                        <label class="field field_v2 width_100">
                            <input id="ngaybonhiem_add" value="<?= date('d/m/Y') ?>" class="field__input txt_date" data-date-format="dd-mm-yy" type="text" placeholder="Ngày" data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy" data-mask="" im-insert="false">
                            <span class="field__label-wrap">
                                <span class="field__label">Ngày bổ nhiệm</span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-12">
                        <select class="form-control" id="trangthai_add">
                            <option value="">Chọn Trạng thái</option>
                            <?php
                            foreach ($list_trangthai as $r) { ?>
                                <option value="<?= $r->msloai ?>"><?= $r->giatri ?></option>
                            <?php }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-12">
                    <div class="control_btn">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                        <button style="margin-left: 5px;" type="button" onclick="ccv_add()" class="btn btn-success">Lưu</button>
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
                <h5 class="modal-title" id="staticBackdropLabel">Chỉnh sửa Công chứng viên</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <input type="hidden" id="msccv" class="field__input" placeholder="Vui lòng nhập mã số Công chứng viên" required>

                <div class="form-group">
                    <div class="col-12">
                        <label class="field field_v2 width_100">
                            <input type="text" id="tenccv_edit" class="field__input" placeholder="Vui lòng nhập tên Công chứng viên" required>
                            <span class="field__label-wrap">
                                <span class="field__label">Tên công chứng viên</span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-12">
                        <label class="field field_v2 width_100">
                            <!-- <input type="hidden" id="sobonhiem_edit"> -->
                            <input type="text" id="sobonhiem_edit" class="field__input" placeholder="Vui lòng nhập số bổ nhiệm" required>
                            <span class="field__label-wrap">
                                <span class="field__label">Số bổ nhiệm</span>
                            </span>
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-12">
                        <label class="field field_v2 width_100">
                            <input id="ngaybonhiem_edit" value="<?= date('d/m/Y') ?>" class="field__input txt_date" data-date-format="dd-mm-yy" type="text" placeholder="Ngày bổ nhiệm" data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy" data-mask="" im-insert="false">
                            <span class="field__label-wrap">
                                <span class="field__label">Ngày bổ nhiệm</span>
                            </span>
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-12">
                        <label class="field field_v2 width_100">
                            <input id="ngaygianhap_edit" value="<?= date('d/m/Y') ?>" class="field__input txt_date" data-date-format="dd-mm-yy" type="text" placeholder="Ngày gia nhập" data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy" data-mask="" im-insert="false">
                            <span class="field__label-wrap">
                                <span class="field__label">Ngày gia nhập</span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-12">
                        <label class="field field_v2 width_100">
                            <input id="dienthoai_edit" onkeyup="this.value = this.value.replace(/[^0-9\.\,]/g,'')" class="field__input" placeholder="Vui lòng nhập số điện thoại">
                            <span class="field__label-wrap">
                                <span class="field__label">Điện thoại</span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-12">
                        <label class="field field_v2 width_100">
                            <!-- <input type="hidden" id="mskh_edit"> -->
                            <input type="text" id="email_edit" class="field__input" placeholder="Vui lòng nhập email" required>
                            <span class="field__label-wrap">
                                <span class="field__label">Email</span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-12">
                        <label class="field field_v2 width_100">
                            <!-- <input type="hidden" id="mskh_edit"> -->
                            <input type="text" id="noihanhnghe_edit" class="field__input" placeholder="Vui lòng nhập nơi hành nghề" required>
                            <span class="field__label-wrap">
                                <span class="field__label">Nơi hành nghề</span>
                            </span>
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-12">
                        <select class="form-control" id="trangthai_ccv_edit">
                            <option value="">Chọn Trạng thái</option>
                            <?php
                            foreach ($list_trangthai as $r) { ?>
                                <option value="<?= $r->msloai ?>"><?= $r->giatri ?></option>
                            <?php }
                            ?>
                        </select>
                    </div>
                </div>
                <!-- <div class="form-group">
                    <div class="col-12">
                        <select class="form-control" id="lydo_ccv_edit">
                            <option value="">Chọn Lý do</option>
                            <?php
                            foreach ($list_lydo as $r) { ?>
                                <option value="<?= $r->msloai ?>"><?= $r->giatri ?></option>
                            <?php }
                            ?>
                        </select>
                    </div>
                </div> -->
                <div class="col-12">
                    <div class="control_btn">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                        <button style="margin-left: 5px;" type="button" onclick="ccv_edit()" class="btn btn-success">Lưu</button>
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
                <p style="margin: 0;margin-left: 10px;" id="ccv_delete"></p>
            </div>
            <div class="modal-footer">
                <input type="hidden" id="ccv_delete">
                <button data-dismiss="modal" class="btn btn-secondary">Hủy</button>
                <button onclick="ccv_delete()" class="btn btn-danger">Đồng ý</button>
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
                        <button style="margin-left: 5px;" type="button" onclick="ccv_chitiet_add()" class="btn btn-success">Lưu</button>
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
                        <button style="margin-left: 5px;" type="button" onclick="ccv_chitiet_edit()" class="btn btn-success">Lưu</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Form delete chi tiết -->
<div class="modal show" id="form_chitiet_delete" data-bs-backdrop="static" data-keyboard="false" aria-labelledby="form_add" aria-hidden="true">
    <div class="modal-dialog modal_dialog_xetnghiem">
        <div class="modal-content">
            <div style="padding:10px" class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Đồng ý xóa?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p style="margin: 0;margin-left: 10px;" id="ctccv_yeucau_delete"></p>
            </div>
            <div class="modal-footer">
                <input type="hidden" id="ctccv_mscv_delete">
                <input type="hidden" id="ctccv_msccv_delete">
                <button data-dismiss="modal" class="btn btn-secondary">Hủy</button>
                <button onclick="ctccv_delete()" class="btn btn-danger">Đồng ý</button>
            </div>
        </div>

    </div>
</div>
<script src="vendor/jquery/jquery.min.js"></script>

<script>
    $(document).ready(function() {
        ccv_load()
    });
</script>
<script src="vendor/js/ccv.js?v=<?= md5_file('vendor/js/ccv.js') ?>"></script>