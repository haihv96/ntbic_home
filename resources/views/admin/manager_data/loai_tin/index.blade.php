@extends('admin.layout.admin_layout')

@section('name_page')
<a id="namepage" href="#" class="active">Loại tin</a>
@endsection

@section('main')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase"> Bảng loại tin</span>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-toolbar">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="btn-group">
                                <a id="create" class="btn sbold green btn-outline" href="#"><span class="fa fa-pencil"></span> Thêm loại tin</a>
                            </div>
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
                </div>
                @if (session('message'))
                    <div class="alert alert-success">
                    <button class="close" data-close="alert"></button>{{session('message')}}</div>
                @endif
                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                    <thead>
                        <tr>
                        	<th> STT </th>
                            <th> Loại tin</th>
		                    <th> Sửa </th>
		                    <th> Xóa </th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($loaitin as $item)
                        <tr class="odd gradeX">
                            <td>{{$item->id}}</td>
                            <td>{{$item->ten}}</td>
                            <td class="center"><div ><a href="#" class="edit" data-id="{{$item->id}}" ><span class="fa fa-pencil-square" ></span></a></div></td>
                            <td class="center"><a class="delete-modal" data-toggle="modal" href="#small" data-id="{{$item->id}}"><span class="fa fa-trash-o"></span></a></div></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {!! $loaitin->links() !!}
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>
<div class="modal fade bs-modal-sm" id="small" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Xóa loại tin</h4>
            </div>
            <div class="modal-body"> 
                <form>
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    Bạn chắc chắn muốn xóa loại tin? 
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                <button type="button" id="delete" class="btn red">Delete</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@endsection
@section('js')
    <script type="text/javascript">
        $('.delete-modal').click(function() {
            var id = $(this).data("id");
            var url_delete = 'admin/loai-tin/'+id;
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

    <script type="text/javascript">
        $(document).ready(function() {
            console.log(window.location.pathname);
            var pathname = window.location.pathname;
            $('#namepage').attr('href',pathname);
            var create_path = pathname+'/create';
            $('#create').attr('href',create_path);
        });

        $(document).ready(function() {
            $('.edit').click(function() {
                var pathname = window.location.pathname + '/';
                var id = $(this).data("id");
                $(this).attr('href',pathname+id+'/edit');
            });
         });
    </script>
@endsection