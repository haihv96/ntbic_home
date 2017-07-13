@extends('pages.layout.index')
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@section('content')
<div class="col-md-9 col-sm-9  main-left">
	<ul class="breadcrumb">
		<li><a href="{{route('home')}}">Trang chủ</a></li>
		<li><a href="{!!url('su-kien')!!}">Sự kiện</a></li>
	</ul>
	<div class=" col-md-12 col-sm-12  detailsNew">
		<!--header details news-->
    	<h3>{{$sukien->Ten}}</h3>
    	<!--<div class="content-detail-news">-->
    	<div class="row col-md-12">
    		<div class="content-detail-news">
    			{!!$sukien->NoiDung!!}
    		</div>
    	</div>
    	<!--footer news-->
    	<div class="row col-md-12" >
    		<p>Thời gian diễn ra sự kiện: {{$sukien->NgayBatDau}} {{$sukien->NgayKetThuc}}<p>
    	</div>
    	<div class="row col-md-12">
    		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Đăng ký</button>
    		<div class="modal fade" id="myModal" role="dialog">
			    <div class="modal-dialog modal-lg">
			      	<div class="modal-content">
				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h4 class="modal-title">Đăng ký thông tin tham gia sự kiện</h4>
				        </div>
				        <div class="modal-body">
				       		 <form action="#" method="POST" id="createForm" class="form-horizontal">
			                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
			                    <div class="form-body">
			                        <div class="form-group">
			                            <label class="control-label col-md-3">Họ và tên
			                                <span class="required"> * </span>
			                            </label>
			                            <div class="col-md-9">
			                                <input type="text" name="ten" data-required="1" class="form-control" value={{old('ten')}}> 
			                                 <span class="required"> {{$errors->first('ten')}}</span>
			                            </div>
			                        </div>
			                        <div class="form-group">
			                            <label class="control-label col-md-3">Email
			                                <span class="required"> * </span>
			                            </label>
			                            <div class="col-md-9">
			                                <input type="text" name="email" data-required="1" class="form-control" value={{old('email')}}> 
			                                 <span class="required"> {{$errors->first('email')}}</span>
			                            </div>
			                        </div>
			                        <div class="form-group">
			                            <label class="control-label col-md-3">Số điện thoại
			                                <span class="required"> * </span>
			                            </label>
			                            <div class="col-md-9">
			                                <input type="text" name="email" data-required="1" class="form-control" value={{old('')}}> 
			                                 <span class="required"> {{$errors->first('email')}}</span>
			                            </div>
			                        </div>
			                         
			                    </div>
			                    <div class="form-actions">
			                        <div class="row">
			                            <div class="col-md-offset-3 col-md-9">
			                                <button type="submit" class="btn green">Đăng ký</button>
			                                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
			                            </div>
			                        </div>
			                    </div>
			                </form>
				        </div>
			       	</div>
			    </div>
			</div>
    	</div>
	</div>
</div>
@endsection
