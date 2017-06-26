@extends('admin.layout.admin_layout')

@section('name_page')
<a href="{!!url('admin/cau-hoi-thuong-gap')!!}" class="active">Câu hỏi thường gặp</a>
@endsection

@section('main')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject font-dark sbold uppercase"> Sửa câu hỏi</span>
                </div>
            </div>
             @if (session('message'))
                <div class="alert alert-success">
                    <button class="close" data-close="alert"></button>{{session('message')}}</div>
            @endif
            <div class="portlet-body">
                <!-- BEGIN FORM-->
                <form action="{!! url('admin/cau-hoi-thuong-gap/'.$cauhoithuonggap->id) !!}" id="form_sample_3" class="form-horizontal" method="POST" enctype="multipart/form-data">
                {{ method_field('PUT') }}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Câu hỏi
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="cau_hoi" data-required="1" class="form-control" value="{{$cauhoithuonggap->cau_hoi}}" /> 
                                <span class="required"> {{$errors->first('cau_hoi')}}</span>
                            </div>
                        </div>
                        <div class="form-group last">
                            <label class="control-label col-md-3">Câu trả lời
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-9">
                                <textarea class="ckeditor form-control" name="cau_tra_loi" rows="6" id="editor">{{$cauhoithuonggap->cau_tra_loi}}</textarea>
                                <span class="required"> {{$errors->first('cau_tra_loi')}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn green">Thêm</button>
                                <a type="button" class="btn default" href="{!!url('admin/cau-hoi-thuong-gap')!!}">Hủy</a>
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