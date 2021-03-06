@extends('admin.layout.admin_layout')

@section('name_page')
<a id="namepage" href="#" class="active">Logo đối tác</a>
@endsection

@section('main')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject font-dark sbold uppercase">Thêm logo đối tác</span>
                </div>
            </div>
            <div class="portlet-body">
                <!-- BEGIN FORM-->
                <form action="#" method="POST" id="createForm" class="form-horizontal" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-body">
                        @if(count($errors) > 0)
                            <div class="alert alert-danger">
                            <button class="close" data-close="alert"></button>
                                    @foreach($errors->all() as $err)
                                        {{$err}}<br>
                                    @endforeach
                            </div>
                        @endif
                        <div class="alert alert-success display-hide">
                            <button class="close" data-close="alert"></button> Thành công! </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Link
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="link" data-required="1" class="form-control" /> </div>
                        </div>
                         <div class="form-group">
                                <label for="exampleInputFile" class="col-md-3 control-label">Hình ảnh
                                </label>
                                <div class="col-md-9">
                                    <input type="file" name="hinh_anh" class="form-control" multiple>
                                    <span class="required"> {{$errors->first('hinh_anh')}}</span>
                                </div>
                        </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn green">Thêm</button>
                                <a class="btn default" href="#" onclick="history.go(-1)">Hủy</a>
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
    <script src="{{ URL::asset('js/path.js') }}"></script>
    <script src="{{ URL::asset('js/ajaxRequestLocale.js') }}"></script>

    <script type="text/javascript">
      $(".sub-menu").css('display','block');
      $("#sub-menu-manager-data").addClass("active");
      $("#active-loai-tin").addClass("active");
    </script>
@endsection

