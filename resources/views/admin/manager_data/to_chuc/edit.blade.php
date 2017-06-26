@extends('admin.layout.admin_layout')

@section('name_page')
Tổ chức
@endsection

@section('main')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject font-dark sbold uppercase">Bảng Tổ chức Bộ Khoa học và Công nghệ</span>
                </div>
            </div>
            <div class="portlet-body">
                <!-- BEGIN FORM-->
                <form action="#" id="form_sample_3" class="form-horizontal">
                    <div class="form-body">
                        <div class="alert alert-danger display-hide">
                            <button class="close" data-close="alert"></button>Lỗi !!!</div>
                        <div class="alert alert-success display-hide">
                            <button class="close" data-close="alert"></button> Thành công! </div>
                        <div class="form-group last">
                            <label class="control-label col-md-3">Giới thiệu chung
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-9">
                                <textarea class="ckeditor form-control" name="editor2" rows="6" id="editor"></textarea>
                                <div id="editor2_error"> </div>
                            </div>
                        </div>
                        <div class="form-group last">
                            <label class="control-label col-md-3">Vị trí chức năng
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-9">
                                <textarea class="ckeditor form-control" name="editor2" rows="6" data-error-container="#editor2_error"></textarea>
                                <div id="editor2_error"> </div>
                            </div>
                        </div>
                        <div class="form-group last">
                            <label class="control-label col-md-3">Sứ mệnh tầm nhìn
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-9">
                                <textarea class="ckeditor form-control" name="editor2" rows="6" data-error-container="#editor2_error"></textarea>
                                <div id="editor2_error"> </div>
                            </div>
                        </div>
                        <div class="form-group last">
                            <label class="control-label col-md-3">Cơ cấu
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-9">
                                <textarea class="ckeditor form-control" name="editor2" rows="6" data-error-container="#editor2_error"></textarea>
                                <div id="editor2_error"> </div>
                            </div>
                        </div>
                        <div class="form-group last">
                            <label class="control-label col-md-3">Đội ngũ trung tâm
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-9">
                                <textarea class="ckeditor form-control" name="editor2" rows="6" data-error-container="#editor2_error"></textarea>
                                <div id="editor2_error"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn green">Lưu</button>
                                <button type="button" class="btn default">Hủy</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- END FORM-->
            </div>
            <!-- END VALIDATION STATES-->
        </div>
    </div>
</div>
@endsection
