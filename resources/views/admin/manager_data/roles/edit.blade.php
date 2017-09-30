@extends('admin.layout.admin_layout')

@section('name_page')
<a id="namepage" href="{{url('admin/roles')}}" class="active">Roles</a>
@endsection

@section('main')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject font-dark sbold uppercase">Edit Role</span>
                </div>
            </div>
            <div class="portlet-body">
                <!-- BEGIN FORM-->
                <form action="{{url('admin/roles/'.$role->id)}}" method="POST" id="editForm" class="form-horizontal">
                    {{ method_field('PUT') }}
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
                            <label class="control-label col-md-3">Name
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-8">
                                <input type="text" name="name" data-required="1" class="form-control" value="{{$role->name}}"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Permissions
                                <span class="required"> * </span>
                            </label>
                            <div class="input-group col-md-8" style="border: 1px solid #c2cad8;padding: 6px 12px;margin-left:15px;">
                            <div class="scroller" style="height:300px" data-always-visible="1" data-rail-visible="1" data-rail-color="white" data-handle-color="gray">
                                <div class="icheck-list">
                                    @foreach($permissions as $item)
                                        @if($role->hasPermissionTo($item->name))
                                            <label class="col-md-6">
                                                <input type="checkbox" class="icheck" name="permissions[]" value="{{$item->name}}" checked> {{$item->name}}
                                            </label>
                                        @else
                                            <label class="col-md-6">
                                                <input type="checkbox" class="icheck" name="permissions[]" value="{{$item->name}}"> {{$item->name}}
                                            </label>
                                        @endif
                                    @endforeach
                                </div>
                            </div></div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn green">Submit</button>
                                <a class="btn default" href="{{url('admin/roles')}}" onclick="history.go(-1)">Cancel</a>
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
    <script type="text/javascript">
      $("#active-role").addClass("active");
    </script>
@endsection

