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
                    <span class="caption-subject font-dark sbold uppercase"> Sửa đối tác</span>
                </div>
            </div>
             @if (session('message'))
                <div class="alert alert-success">
                    <button class="close" data-close="alert"></button>{{session('message')}}</div>
            @endif
            <div class="portlet-body">
                <!-- BEGIN FORM-->
                <form action="{!! url('admin/doi-tac/'.$doitac->id) !!}" id="form_sample_3" class="form-horizontal" method="POST" enctype="multipart/form-data">
                {{ method_field('PUT') }}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Đối tác
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="ten" data-required="1" class="form-control" value="{{$doitac->ten}}" /> 
                                <span class="required"> {{$errors->first('ten')}}</span>
                            </div>
                        </div>
                        <div class="form-group last">
                            <label class="control-label col-md-3">Nội dung
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-9">
                                <textarea class="ckeditor form-control" name="noi_dung" rows="6" id="editor">{{$doitac->noi_dung}}</textarea>
                                <span class="required">{{$errors->first('noi_dung')}}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile" class="col-md-3 control-label">Hình ảnh
                            </label>
                            <div class="col-md-9">
                                <img class="responsive-img " src="assets/upload/doi_tac/{{$doitac->hinh_anh}}" alt="ảnh" class="img-circle" width="150px" height="150px">
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
                                <span class="error">&nbsp;&nbsp;{{$errors->first('file-anh')}}</span>
                            </div>
                        </div>     
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn green">Thêm</button>
                                <a type="button" class="btn default" href="{!!url('doi-tac')!!}">Hủy</a>
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