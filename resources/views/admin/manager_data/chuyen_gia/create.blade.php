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
                    <span class="caption-subject font-dark sbold uppercase">Thêm chuyên gia</span>
                </div>
            </div>
            <div class="portlet-body">
                <!-- BEGIN FORM-->
                <form action="#" id="createForm" method="POST" id="form_sample_3" class="form-horizontal"  enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Tên chuyên gia
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-4">
                                <span class="required"> {{$errors->first('ten')}} </span>
                                <input type="text" name="ten" data-required="1" class="form-control" value="{{ old('ten') }}"/> </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Chức vụ <span class="required"> * </span>
                            </label>
                            <div class="col-md-4">
                                <span class="required"> {{$errors->first('chuc_vu')}} </span>
                                <input type="text" name="chuc_vu" data-required="1" class="form-control" value="{{ old('chuc_vu') }}" />
                            </div>
                        </div>
                       <div class="form-group">
                                <label for="exampleInputFile" class="col-md-3 control-label">Hình ảnh
                                </label>
                                <div class="col-md-4">
                                    <span class="required"> {{$errors->first('hinh_anh')}}</span>
                                    <input type="file" name="hinh_anh" class="form-control" value="{{ old('hinh_anh') }}" id="profile-img">
                                    <img src="" id="profile-img-tag" width="150px" />
                                </div>
                        </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn green">Thêm</button>
                                <a class="btn default" href="{!!url('admin/chuyen-gia')!!}">Hủy</a>
                            </div>
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
    <script src="/js/path.js"></script>
    
    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                
                reader.onload = function (e) {
                    $('#profile-img-tag').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#profile-img").change(function(){
            readURL(this);
        });
    </script>
@endsection