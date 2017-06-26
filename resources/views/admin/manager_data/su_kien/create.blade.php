@extends('admin.layout.admin_layout')

@section('name_page')
<a href="{!!url('su_kien')!!}" class="active">Sự kiện</a>
@endsection

@section('main')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject font-dark sbold uppercase"> Thêm sự kiện</span>
                </div>
            </div>
            <div class="portlet-body">
                <!-- BEGIN FORM-->
                <form action="#" id="createForm" class="form-horizontal" method="POST" enctype="multipart/form-data">
                    <div class="form-body">
                        <div class="alert alert-danger display-hide">
                            <button class="close" data-close="alert"></button>Lỗi !!!</div>
                        <div class="alert alert-success display-hide">
                            <button class="close" data-close="alert"></button> Thành công! </div>
                            {{csrf_field()}}
                        <div class="form-group">
                            <label class="control-label col-md-3">Sự kiện
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="ten" data-required="1" class="form-control" value="{{old('ten')}}" /> 
                                <span class="required"> {{$errors->first('ten')}}</span>
                            </div>
                        </div>
                        <div class="form-group last">
                            <label class="control-label col-md-3">Nội dung
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-9">
                                <textarea class="ckeditor form-control" name="noi_dung" rows="6" id="editor">{{old('noi_dung')}}</textarea>
                                <span class="required">{{$errors->first('noi_dung')}}</span>
                            </div>
                        </div>
                        <div class="form-group last">
                            <label class="control-label col-md-3">Tóm tắt
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-9">
                                <textarea class="ckeditor form-control" name="tom_tat" rows="6" id="editor">{{old('tom_tat')}}</textarea>
                                <span class="required"> {{$errors->first('tom_tat')}}</span>
                            </div>
                        </div>
                        <div class="form-group">
                                <label for="exampleInputFile" class="col-md-3 control-label">Hình ảnh</label>
                                <div class="col-md-9">
                                    <input type="file" name="hinh_anh" class="form-control" value="{{old('hinh_anh')}}">
                                    <span class="required"> {{$errors->first('hinh_anh')}}</span>
                                </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Ngày bắt đầu
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-4">
                                <div class="input-group date date-picker" data-date-format="dd-mm-yyyy">
                                    <input type="text" class="form-control" readonly name="ngay_bat_dau" value="{{old('ngay_bat_dau')}}">
                                    <span class="input-group-btn">
                                        <button class="btn default" type="button">
                                            <i class="fa fa-calendar"></i>
                                        </button>
                                    </span>
                                </div>
                                <span class="required"> {{$errors->first('ngay_bat_dau')}}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Ngày kết thúc
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-4">
                                <div class="input-group date date-picker" data-date-format="dd-mm-yyyy">
                                    <input type="text" class="form-control" readonly name="ngay_ket_thuc" value="{{old('ngay_ket_thuc')}}">
                                    <span class="input-group-btn">
                                        <button class="btn default" type="button">
                                            <i class="fa fa-calendar"></i>
                                        </button>
                                    </span>
                                </div>
                                <span class="required"> {{$errors->first('ngay_ket_thuc')}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn green">Thêm</button>
                                <a class="btn default" href="#" onclick="history.go(-1)" >Hủy</a>
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
        <script src="../assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
         <script src="../assets/global/plugins/jquery-validation/js/jquery.validate.js" type="text/javascript"></script>
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
        <script type="text/javascript">
        $(document).ready(function() {
            console.log(window.location.pathname);
            var pathname = window.location.pathname;
            $('#namepage').attr('href', pathname.substr(0,pathname.length-7));
            var create_path = pathname.substr(0,pathname.length-7);
            $('#createForm').attr('action',create_path);
        });
    </script>
@endsection
