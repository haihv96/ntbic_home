@extends('admin.layout.admin_layout')

@section('name_page')
<a href="{!!url('admin/to-chuc')!!}" class="active">Tổ chức</a>
@endsection

@section('main')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject font-dark sbold uppercase"> Tạo thông tin</span>
                </div>
            </div>
            <div class="portlet-body">
                <!-- BEGIN FORM-->
                <form action="admin/su-kien" id="form_sample_3" class="form-horizontal" method="POST" enctype="multipart/form-data">
                    <div class="form-body">
                        <div class="alert alert-danger display-hide">
                            <button class="close" data-close="alert"></button>Lỗi !!!</div>
                        <div class="alert alert-success display-hide">
                            <button class="close" data-close="alert"></button> Thành công! </div>
                            {{csrf_field()}}    
                        <div class="form-group last">
                            <label class="control-label col-md-3">Giới thiệu chung
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-9">
                                <textarea class="ckeditor form-control" name="gioi_thieu_chung" rows="6" id="editor">{{old('gioi_thieu_chung')}}</textarea>
                                <span class="required">{{$errors->first('gioi_thieu_chung')}}</span>
                            </div>
                        </div>
                        <div class="form-group last">
                            <label class="control-label col-md-3">Vị trí chức năng
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-9">
                                <textarea class="ckeditor form-control" name="vi_tri_chuc_nang" rows="6" id="editor">{{old('vi_tri_chuc_nang')}}</textarea>
                                <span class="required"> {{$errors->first('vi_tri_chuc_nang')}}</span>
                            </div>
                        </div>
                        <div class="form-group last">
                            <label class="control-label col-md-3">Sứ mệnh tầm nhìn
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-9">
                                <textarea class="ckeditor form-control" name="su_menh_tam_nhin" rows="6" id="editor">{{old('su_menh_tam_nhin')}}</textarea>
                                <span class="required"> {{$errors->first('su_menh_tam_nhin')}}</span>
                            </div>
                        </div>
                        <div class="form-group last">
                            <label class="control-label col-md-3">Cơ cấu
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-9">
                                <textarea class="ckeditor form-control" name="co_cau" rows="6" id="editor">{{old('co_cau')}}</textarea>
                                <span class="required"> {{$errors->first('co_cau')}}</span>
                            </div>
                        </div>
                         <div class="form-group last">
                            <label class="control-label col-md-3">Đội ngũ trung tâm
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-9">
                                <textarea class="ckeditor form-control" name="doi_ngu_trung_tam" rows="6" id="editor">{{old('doi_ngu_trung_tam')}}</textarea>
                                <span class="required"> {{$errors->first('doi_ngu_trung_tam')}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn green">Tạo</button>
                                <a type="button" class="btn default" href="{!!url('admin/loai-tin')!!}">Hủy</a>
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
@section('js')
    <!-- BEGIN CORE PLUGINS -->
         <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="../assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
        {{-- <script src="../assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
         <script src="../assets/global/plugins/jquery-validation/js/jquery.validate.js" type="text/javascript"></script> --}}
        <script src="../assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-markdown/lib/markdown.js" type="text/javascript"></script>
        <script src="./../assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="../assets/pages/scripts/form-validation.min.js" type="text/javascript"></script>
        <script src="../assets/pages/scripts/form-validation.js" type="text/javascript"></script>
        
        <!-- END PAGE LEVEL SCRIPTS -->
@endsection
