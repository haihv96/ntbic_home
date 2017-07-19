@extends('admin.layout.admin_layout')

@section('name_page')
<a id="namepage" href="#" class="active">Tin tức</a>
@endsection

@section('main')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase"> Bảng tin tức</span>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-toolbar">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="btn-group">
                                <a id="create" class="btn sbold green btn-outline" href="#"><span class="fa fa-pencil"></span> Thêm tin tức</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="btn-group pull-right">
                                <select id="locale" class="form-control select2me btn green  btn-outline dropdown-toggle" name="locale" data-locale="{{$locale}}">Print
                                    <option id='vi' value="vi">Tiếng Việt</option>
                                    <option id='en' value="en">Tiếng Anh</option>
                                </select>
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
                            <th> Tin tức</th>
                            <th> Tóm tắt </th>
                            <th> Hình ảnh </th>
                            <th> Loại tin</th>
                            <th> Nổi bật </th>
                            <th> Xem </th>
                            <th> Sửa </th>
                            <th> Xóa </th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($tintuc as $item)
                        <tr class="odd gradeX">
                            <td>{{$item->id}}</td>
                            <td>{{$item->Ten}}</td>
                            <td>{!! $item->TomTat !!}</td>
                            <td><img src="{!!url('assets/upload/tin_tuc/'.$item->HinhAnh) !!}" height="100"></td>
                            <td>{{\App\LoaiTin::find($item->loai_tin_id)->Ten}}</td>
                            @if($item->status == 1)
                                <td> Có </td>
                            @else
                                <td> Không </td>
                            @endif
                            <td class="center"><a target="_blank" href="#"><span class="fa fa-eye"></span></a></td>
                            <td class="center"><div ><a class='edit' href="#" data-id="{{$item->id}}"><span class="fa fa-pencil-square"></span></a></div></td>
                            <td class="center"><a class="delete-modal" data-toggle="modal" href="#small" data-id="{{$item->id}}"><span class="fa fa-trash-o"></span></a></div></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {!! $tintuc->links() !!}
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
                    Bạn chắc chắn muốn xóa tin tức? 
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
            var pathname = window.location.pathname+'/';
            var url_delete = pathname+id;
            $('#delete').click(function() {
                $.ajax({
                    type: 'delete',
                    dataType: 'json',
                    url: url_delete,
                    data:{
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
      $(".sub-menu").css('display','block');
      $("#sub-menu-manager-data").addClass("active");
      $("#active-tin-tuc").addClass("active");
    </script>

    <script src="{{ URL::asset('js/pathIndex.js') }}"></script>
    <script src="{{ URL::asset('js/ajaxRequestLocale.js') }}"></script>
@endsection