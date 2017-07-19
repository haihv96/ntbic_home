@extends('admin.layout.admin_layout')

@section('name_page')
<a id="namepage" href="#" class="active">Loại tin</a>
@endsection

@section('main')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject font-dark sbold uppercase">Thêm câu hỏi</span>
                </div>
            </div>
            <div class="portlet-body">
                <!-- BEGIN FORM-->
                <form action="#" method="POST" id="createForm" class="form-horizontal">
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
                            <label class="control-label col-md-3">Language
                            </label>
                            <div class="col-md-4">
                                <select id="locale" class="form-control select2me" name="locale" data-locale="{{$locale}}">                                   
                                    <option id="vi" value="vi">Tiếng Việt</option>
                                    <option id="en" value="en">Tiếng Anh</option>
                                </select>
                            </div>
                        </div>
                       <div class="form-group">
                            <label class="control-label col-md-3">Câu hỏi
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-9">
                                <input type="text" name="CauHoi" data-required="1" class="form-control" value={{old('CauHoi')}}> 
                                 <span class="required"> {{$errors->first('CauHoi')}}</span>
                            </div>
                        </div>
                         <div class="form-group last">
                            <label class="control-label col-md-3">Câu trả lời
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-9">
                                <textarea class="ckeditor form-control" name="CauTraLoi" rows="6" id="editor">{{old('CauTraLoi')}}</textarea>
                                <span class="required">{{$errors->first('CauTraLoi')}}</span>
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
      $("#active-cau-hoi-thuong-gap").addClass("active");
    </script>
@endsection

