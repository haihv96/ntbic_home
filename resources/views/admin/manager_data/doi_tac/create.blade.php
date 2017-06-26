@extends('admin.layout.admin_layout')

@section('name_page')
<a href="{!!url('admin/doi-tac')!!}" class="active">Đối tác</a>
@endsection

@section('main')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject font-dark sbold uppercase"> Thêm đối tác</span>
                </div>
            </div>
            <div class="portlet-body">
                <!-- BEGIN FORM-->
                <form action="admin/doi-tac" id="form_sample_3" class="form-horizontal" method="POST" enctype="multipart/form-data">
                    <div class="form-body">
                        <div class="alert alert-danger display-hide">
                            <button class="close" data-close="alert"></button>Lỗi !!!</div>
                        <div class="alert alert-success display-hide">
                            <button class="close" data-close="alert"></button> Thành công! </div>
                            {{csrf_field()}}
                        <div class="form-group">
                            <label class="control-label col-md-3">Đối tác
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
                        <div class="form-group">
                                <label for="exampleInputFile" class="col-md-3 control-label">Hình ảnh</label>
                                <div class="col-md-9">
                                    <input type="file" name="hinh_anh" class="form-control" value="{{old('hinh_anh')}}">
                                    <span class="required"> {{$errors->first('hinh_anh')}}</span>
                                </div>
                        </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn green">Thêm</button>
                                <a type="button" class="btn default" href="{!!url('admin/doi-tac')!!}">Hủy</a>
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