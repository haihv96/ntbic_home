@extends('admin.layout.admin_layout')

@section('name_page')
<a id="namepage" href="#" class="active">Profile</a>
@endsection

@section('main')
<div class="row">
    <div class="col-md-12">
        <div class="profile-sidebar">
            <!-- PORTLET MAIN -->
            <div class="portlet light profile-sidebar-portlet ">
                <!-- SIDEBAR USERPIC -->
                <div class="profile-userpic">
                    <img src="{!! url('assets/upload/users/'.$user->hinh_anh) !!}" class="img-responsive" alt=""> </div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name"> {{$user->name}} </div>
                    <div class="profile-usertitle-job"> {{$user->email}} </div>
                </div>
                <!-- END SIDEBAR USER TITLE -->
            </div>
            <!-- END PORTLET MAIN -->
        </div>
    
        <div class="profile-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet light ">
                        <div class="portlet-title tabbable-line">
                            <div class="caption caption-md">
                                <i class="icon-globe theme-font hide"></i>
                                <span class="caption-subject font-blue-madison bold uppercase">Profile Account</span>
                            </div>
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#tab_info" data-toggle="tab">Personal Info</a>
                            </li>
                            <li>
                                <a href="#tab_avatar" data-toggle="tab">Change Avatar</a>
                            </li>
                            <li>
                                <a href="#tab_password" data-toggle="tab">Change Password</a>
                            </li>
                        </ul>
                    </div>
                    <div class="portlet-body">
                        <div class="tab-content">
                            <!-- PERSONAL INFO TAB -->
                            <div class="tab-pane active" id="tab_info">
                                @if(count($errors) > 0)
                                    <div class="alert alert-danger">
                                    <button class="close" data-close="alert"></button>
                                        @foreach($errors->all() as $err)
                                                {{$err}}<br>
                                        @endforeach
                                    </div>
                                @endif
                                <form role="form" method="post" action="#" id="account_form">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="form-group">
                                        <label class="control-label">Full Name</label>
                                        <input type="text" name="name" placeholder="Full name" class="form-control" value="{{$user->name}}" require/> </div>                           
                                    <div class="form-group">
                                        <label class="control-label">Email</label>
                                        <input type="text" name="email" placeholder="Email" class="form-control" value="{{$user->email}}" require/> </div>
                                    <div class="margiv-top-10">
                                        <button class="btn green" type="submit"> Save Changes </button>
                                        <a href="javascript:;" class="btn default cancel"> Cancel </a>
                                    </div>
                                    </form>
                                </div>
                                <!-- END PERSONAL INFO TAB -->
                                <!-- CHANGE AVATAR TAB -->
                                <div class="tab-pane" id="tab_avatar">
                                    <p>Upload new avatar</p>
                                    <form action="#" method="post" role="form" id="avatar_form"enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="form-group">
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                    <img src="{!! url('assets/upload/users/'.$user->hinh_anh) !!}" alt="" /> </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                <div>
                                                    <span class="btn default btn-file">
                                                        <span class="fileinput-new"> Select image </span>
                                                        <span class="fileinput-exists"> Change </span>
                                                        <input type="file" name="hinh_anh" multiple> </span>
                                                    <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="margin-top-10">
                                            <button type="submit" class="btn green"> Submit </button>
                                            <a href="javascript:;" class="btn default cancel"> Cancel </a>
                                        </div>
                                    </form>
                                </div>
                                <!-- END CHANGE AVATAR TAB -->
                                <!-- CHANGE PASSWORD TAB -->
                                <div class="tab-pane" id="tab_password">
                                    <form action="#" id="pass_form" method="post">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="form-group">
                                            <label class="control-label">Current Password</label>
                                            <input type="password" class="form-control" name="current_pass" /> </div>
                                        <div class="form-group">
                                            <label class="control-label">New Password</label>
                                            <input type="password" class="form-control" name="new_pass"/> </div>
                                        <div class="form-group">
                                            <label class="control-label">Re-type New Password</label>
                                            <input type="password" class="form-control" name="retype_pass"/> </div>
                                        <div class="margin-top-10">
                                            <button type="submit" class="btn green"> Change Password </button>
                                            <a href="javascript:;" class="btn default cancel"> Cancel </a>
                                        </div>
                                    </form>
                                </div>
                                <!-- END CHANGE PASSWORD TAB -->                          
                            </div>            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
$(document).ready(function() {
    console.log(window.location.pathname);
    var pathname = window.location.pathname;
    $('#account_form').attr("action",pathname + '-account');
    $('#avatar_form').attr('action',pathname + '-avatar');
    $('#pass_form').attr('action',pathname + '-password');

    $('.cancel').click(function() {
        location.reload();
    });
});
</script>
@endsection

