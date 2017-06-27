@extends('admin.layout.admin_layout')

@section('name_page')
<a href="#" class="active" id="namepage">Chuyên gia</a>
@endsection

@section('main')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject font-dark sbold uppercase">Sửa thông tin chuyên gia</span>
                </div>
            </div>
            <div class="portlet-body">
                <!-- BEGIN FORM-->
                <form action="#" method="POST" id="editForm" class="form-horizontal"  enctype="multipart/form-data">
                        {{ method_field('PUT') }}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                            <button class="close" data-close="alert"></button>{{session('status')}}</div>
                        @endif
                       <div class="form-group">
                            <label class="control-label col-md-3">Tên chuyên gia
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-4">
                                <span class="required"> {{$errors->first('ten')}} </span>
                                <input type="text" name="ten" data-required="1" class="form-control" / value="{{$chuyengia->ten}}"> 
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Chức vụ <span class="required"> * </span>
                            </label>
                            <div class="col-md-9">
                                <span class="required"> {{$errors->first('chuc_vu')}} </span>
                                <input type="text" name="chuc_vu" data-required="1" class="form-control" / value="{{$chuyengia->chuc_vu}}"> 
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile" class="col-md-3 control-label">Hình ảnh
                            </label>
                            <div class="col-md-9">
                                <img class="responsive-img " src="assets/upload/chuyen_gia/{{$chuyengia->hinh_anh}}" alt="ảnh" class="img-circle" width="150px" height="150px">
                                <br>
                                <ul class="nav nav-tabs">
                                    <li><a href="#home" data-toggle="tab">Thay đổi ảnh</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane" id="home"><input type="file" name="hinh_anh" multiple /></div>
                                    
                                </div>
                                <span class="error">&nbsp;&nbsp;{{$errors->first('file-anh')}}</span>
                            </div>
                        </div>    
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn green">Sửa</button>
                                <a type="button" class="btn default" href="#" onclick="history.go(-1)">Hủy</a>
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
    <script src="/js/pathEdit.js"></script>
@endsection