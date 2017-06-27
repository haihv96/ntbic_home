@extends('admin.layout.admin_layout')

@section('name_page')
Tổ chức
@endsection

@section('main')
<div class="row">
    <div class="col-md-12">
        <div class="col-md-12">
            <div class="portlet light bordered">
                <div class="portlet-title tabbable-line">
                    <div class="caption caption-md">
                        <i class="icon-globe theme-font hide"></i>
                        <span class="caption-subject font-blue-madison bold uppercase">Thông tin tổ chức bộ khoa học và công nghệ</span>
                    </div>
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#tab_1_1" data-toggle="tab" aria-expanded="true">Thông tin chi tiết</a>
                        </li>
                        <li class="">
                            <a href="#tab_1_2" data-toggle="tab" aria-expanded="false">Chỉnh sửa</a>
                        </li>
                    </ul>
                </div>
                <div class="portlet-body">
                    <div class="tab-content">
                        <!-- PERSONAL INFO TAB -->
                        <div class="tab-pane active" id="tab_1_1">
                            <div class="row">
                                <div class="col-md-6">
                                   
                                </div>
                                <div class="col-md-6">
                                    <div class="btn-group pull-right">
                                        <button class="btn green  btn-outline dropdown-toggle" data-toggle="dropdown">Print
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu pull-right">
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-print"></i> Print </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                <tbody>
                                    @foreach($tochuc as $item)
                                    <tr class="odd gradeX">
                                        <td width="200px">Giới thiệu chung</td>
                                        <td colspan="3">{{$item->gioi_thieu_chung}}</td> 
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td  width="200px">Vị trí chức năng</td>
                                        <td colspan="3">{{$item->vi_tri_chuc_nang}}</td> 
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td  width="200px">Sứ mệnh tầm nhìn</td>
                                        <td colspan="3">{{$item->su_menh_tam_nhin}}</td>
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td  width="200px">Cơ cấu</td>
                                        <td colspan="3">{{$item->co_cau}}</td> 
                                    </tr>
                                    <tr class="odd gradeX">
                                        <td  width="200px">Đội ngũ trung tâm</td>
                                        <td colspan="3">{{$item->doi_ngu_trung_tam}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>

                            </table>

                        </div>
                        <!-- END PERSONAL INFO TAB -->
                        <!-- CHANGE AVATAR TAB -->
                        <div class="tab-pane" id="tab_1_2">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- BEGIN VALIDATION STATES-->
                                    <div class="portlet light portlet-fit portlet-form bordered">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="icon-settings font-dark"></i>
                                                <span class="caption-subject font-dark sbold uppercase">Chỉnh sửa Thông tin Tổ chức Bộ Khoa học và Công nghệ</span>
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <!-- BEGIN FORM-->
                                            <form action="" id="form_sample_3" class="form-horizontal" method="">
                                               <!-- {{method_field('PUT')}}-->
                                                <div class="form-body">
                                                <!--    @if(session('message'))
                                                    <div class="alert alert-success display-hide">
                                                        <button class="close" data-close="alert"></button> {{session('message')}}
                                                        </div>
                                                    @endif
                                                        {{csrf_field()}}
                                                -->       
                                                    <div class="form-group last">
                                                        <label class="control-label col-md-3">Giới thiệu chung
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-9">
                                                            <textarea class="ckeditor form-control" name="gioithieuchung" rows="6" id="editor" ></textarea>
                                                            <span class="required">{{$errors->first('gioithieuchung')}}</span>
                                                        </div>
                                                    </div>
                                                     
                                                    <div class="form-group last">
                                                        <label class="control-label col-md-3">Vị trí chức năng
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-9">
                                                            <textarea class="ckeditor form-control" name="gioithieuchung" rows="6" 
                                                            ></textarea>
                                                             <span class="required">{{$errors->first('vitrichucnang')}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group last">
                                                        <label class="control-label col-md-3">Sứ mệnh tầm nhìn
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-9">
                                                            <textarea class="ckeditor form-control" name="sumenhtamnhin" rows="6" ></textarea>
                                                             <span class="required">{{$errors->first('sumenhtamnhin')}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group last">
                                                        <label class="control-label col-md-3">Cơ cấu
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-9">
                                                            <textarea class="ckeditor form-control" name="cocau" rows="6" ></textarea>
                                                             <span class="required">{{$errors->first('cocau')}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group last">
                                                        <label class="control-label col-md-3">Đội ngũ trung tâm
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-9">
                                                            <textarea class="ckeditor form-control" name="doingutrungtam" rows="6"></textarea>
                                                             <span class="required">{{$errors->first('doingutrungtam')}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-actions">
                                                    <div class="row">
                                                        <div class="col-md-offset-3 col-md-9">
                                                            <button type="submit" class="btn green">Lưu</button>
                                                             <a type="button" class="btn default" href="{!!url('admin/to-chuc')!!}">Hủy</a>
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
                        </div>
                        <!-- END CHANGE AVATAR TAB -->
                    </div>
                </div>
            </div>
        </div>
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>
@endsection