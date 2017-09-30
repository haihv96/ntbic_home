@extends('admin.layout.admin_layout')

@section('name_page')
<a id="namepage" href="admin/permissions" class="active">Permissions</a>
@endsection

@section('main')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase">Permissions</span>
                </div>
            </div>
            <div class="portlet-body">
                <!-- <div class="table-toolbar">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="btn-group">
                                <a id="create" class="btn sbold green btn-outline" href="#"><span class="fa fa-pencil"></span> Thêm tin tức</a>
                            </div>
                        </div>
                    </div>
                </div> -->
                @if (session('message'))
                    <div class="alert alert-success">
                    <button class="close" data-close="alert"></button>{{session('message')}}</div>
                @endif
                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                    <thead>
                        <tr>
                            <th> STT </th>
                            <th> Permissions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($permissions as $item)
                        <tr class="odd gradeX">
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {!! $permissions->links() !!}
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>
@endsection
@section('js')
    <script type="text/javascript">
      $(".sub-menu").css('display','block');
      $("#active-permission").addClass("active");
    </script>
@endsection