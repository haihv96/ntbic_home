@extends('admin.layout.admin_layout')

@section('name_page')
<a id="namepage" href="#" class="active">Chuyên gia</a>
@endsection

@section('main')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject font-dark sbold uppercase"> Sửa chuyên gia</span>
                </div>
            </div>
             @if (session('message'))
                <div class="alert alert-success">
                    <button class="close" data-close="alert"></button>{{session('message')}}</div>
            @endif
            <div class="portlet-body">
                <!-- BEGIN FORM-->
                <form action="#" id="editForm" class="form-horizontal" method="POST" enctype="multipart/form-data">
                {{ method_field('PUT') }}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Language
                            </label>
                            <div class="col-md-4">
                                <select id="locale" class="form-control select" name="locale" data-locale="{{$locale}}">
                                    <option id="vi" value="vi">Tiếng Việt</option>
                                    <option id="en" value="en">Tiếng Anh</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Họ và tên
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="ten" data-required="1" class="form-control" value="{{$chuyengia->Ten}}" /> 
                                <span class="required"> {{$errors->first('ten')}}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Chức vụ
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="chuc_vu" data-required="1" class="form-control" value="{{$chuyengia->ChucVu}}" /> 
                                <span class="required"> {{$errors->first('chuc_vu')}}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile" class="col-md-3 control-label">Hình ảnh
                            </label>
                            <div class="col-md-9">
                                <img class="responsive-img " src="{{ URL::asset($chuyengia->HinhAnh) }}" alt="ảnh" class="img-circle" width="150px" height="150px">
                                <br>
                                <ul class="nav nav-tabs">
                                    <li><a href="#home" data-toggle="tab">Thay đổi ảnh</a></li>
                                    <li><a href="#info" data-toggle="tab">Xóa ảnh</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane" id="home"><input type="file" name="hinh_anh" multiple /></div>
                                    <div class="tab-pane" id="info">
                                        <button type="button" class="btn btn-danger btn-cons" id="delete_logo">Xóa ảnh</button>
                                    </div>
                                </div>
                                <span class="error">&nbsp;&nbsp;{{$errors->first('hinh_anh')}}</span>
                            </div>
                        </div>     
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn green">Lưu</button>
                                <a class="btn default cancel" href="#">Hủy</a>
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
        <script src="{{ URL::asset('assets/global/plugins/select2/js/select2.full.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('assets/global/plugins/jquery-validation/js/jquery.validate.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('assets/global/plugins/jquery-validation/js/additional-methods.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('assets/global/plugins/ckeditor/ckeditor.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('assets/global/plugins/bootstrap-markdown/lib/markdown.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js') }}" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="{{ URL::asset('assets/global/scripts/app.min.js') }}" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="{{ URL::asset('assets/pages/scripts/form-validation.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('assets/pages/scripts/form-validation.js') }}" type="text/javascript"></script>
        <script type="text/javascript">
            $(".sub-menu").css('display','block');
            $("#sub_menu_quan_ly_database").addClass("active");
            $("#active_chuyen_gia").addClass("active");
            $(document).ready(function(){
                $("#delete_logo").click(function(){
                    var d1 = document.getElementById('info');
                    d1.insertAdjacentHTML('afterend', '<div class="alert alert-warning auto_disable"> <h3>Nhấn Lưu để xóa ảnh</h3> <input type="hidden" name="delete_logo" value="delete"> </div>');
                    $("#delete_logo").remove();
                });
            });
        </script>
      <script src="{{ URL::asset('js/pathEdit.js') }}"></script>
    <script src="{{ URL::asset('js/ajaxRequestLocale.js') }}"></script>
    <script type="text/javascript">
      $(".sub-menu").css('display','block');
      $("#sub-menu-manager-data").addClass("active");
      $("#active-chuyen-gia").addClass("active");
    </script>
        <!-- END PAGE LEVEL SCRIPTS -->
@endsection
