@extends('admin.layout.admin_layout')

@section('name_page')
<a id="namepage" href="#" class="active">Ảnh trang chủ</a>
@endsection

@section('main')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase"> Ảnh trang chủ</span>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-toolbar">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="btn-group">
                                <a id="create" class="btn sbold green btn-outline" href="#"><span class="fa fa-pencil"></span> Thêm hình ảnh</a>
                            </div>
                        </div>
                    </div>
                </div>
                @if (session('message'))
                    <div class="alert alert-success">
                    <button class="close" data-close="alert"></button>{{session('message')}}</div>
                @endif
                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                    <thead>
                        <tr>
                        	<th> ID </th>
                            <th> Link</th>
                            <th> Hình ảnh</th>
		                    <th> Sửa </th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($hinhanh as $item)
                        <tr class="odd gradeX">
                            <td>{{$item->id}}</td>
                            <td>{{$item->Link}}</td>
                            <td><img src="{{ URL::asset($item->HinhAnh) }}" height="100"></td>
                            <td class="center"><div ><a href="#" class="edit" data-id="{{$item->id}}" ><span class="fa fa-pencil-square" ></span></a></div></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {!! $hinhanh->links() !!} 
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>
@endsection
@section('js')
    <script type="text/javascript">
        $('.delete-modal').click(function() {
            var id = $(this).data("id");
            var url_delete = 'admin/anh-trang-chu/'+id;
            $('#delete').click(function() {
                $.ajax({
                    type: 'delete',
                    dataType: 'json',
                    url: url_delete,
                    data: {
                        '_token': $('input[name=_token]').val(),
                        'id': id
                    },
                    success: function() {
                        location.reload();
                    }
                });
            });
        });
    </script>

   <script src="{{ URL::asset('js/pathIndex.js') }}"></script>
   <script src="{{ URL::asset('js/ajaxRequestLocale.js') }}"></script>

   <script type="text/javascript">
      $(".sub-menu").css('display','block');
      $("#sub-menu-manager-data").addClass("active");
      $("#active-anh-trang-chu").addClass("active");
    </script>
@endsection