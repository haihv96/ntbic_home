@extends('admin.layout.admin_layout')

@section('name_page')
<a href="{!!url('admin/tuyen-dung')!!}" class="active">Tuyển dụng</a>
@endsection

@section('main')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject font-dark sbold uppercase"> Sửa tin tuyển dụng</span>
                </div>
            </div>
             @if (session('message'))
                <div class="alert alert-success">
                    <button class="close" data-close="alert"></button>{{session('message')}}</div>
            @endif
            <div class="portlet-body">
                <!-- BEGIN FORM-->
                <form action="{!! url('admin/tuyen-dung/'.$tuyendung->id) !!}" id="form_sample_3" class="form-horizontal" method="POST" enctype="multipart/form-data">
                {{ method_field('PUT') }}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Mô tả
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="mo_ta" data-required="1" class="form-control" value="{{$tuyendung->mo_ta}}" /> 
                                <span class="required"> {{$errors->first('mo_ta')}}</span>
                            </div>
                        </div>
                        <div class="form-group last">
                            <label class="control-label col-md-3">Nội dung tuyển dụng
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-9">
                                <textarea class="ckeditor form-control" name="noi_dung_tuyen_dung" rows="6" id="editor">{{$tuyendung->noi_dung_tuyen_dung}}</textarea>
                                <span class="required"> {{$errors->first('noi_dung_tuyen_dung')}}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Ngày bắt đầu tuyển dụng
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-4">
                                <div class="input-group date date-picker" data-date-format="dd-mm-yyyy">
                                    <input type="text" class="form-control" readonly name="ngay_bat_dau" value="{{$tuyendung->ngay_bat_dau}}">
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
                            <label class="control-label col-md-3">Ngày kết thúc tuyển dụng
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-4">
                                <div class="input-group date date-picker" data-date-format="dd-mm-yyyy">
                                    <input type="text" class="form-control" readonly name="ngay_ket_thuc" value="{{$tuyendung->ngay_ket_thuc}}">
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
                                <button type="submit" class="btn green">Sửa</button>
                                <a type="button" class="btn default" href="{!!url('admin/tuyen-dung')!!}">Hủy</a>
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
@endsection