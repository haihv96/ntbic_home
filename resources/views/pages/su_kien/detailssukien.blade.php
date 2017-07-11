@extends('pages.layout.index')
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@section('content')
<div class="col-md-9 col-sm-9  main-left">
	<ul class="breadcrumb">
		<li><a href="#">Trang chủ</a></li>
		<li><a href="#">Sự kiện</a></li>
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
				         	<form action="#">
				                <div class="form-group">
				                    <input type="text" placeholder="Họ tên" class="form-control input-md">
				                </div>
				                <div class="form-group">
				                    <input type="text" placeholder="Email" class="form-control input-md">
				                </div>
				                <div class="form-group">
				                    <input type="text" placeholder="Số điện thoại" class="form-control input-md">
				                </div>

				                <button type="submit" class="btn btn-primary">Đăng ký</button>
				                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
				       		</form>
				        </div>
			       	</div>
			    </div>
			</div>
    	</div>
	</div>
</div>
@endsection
