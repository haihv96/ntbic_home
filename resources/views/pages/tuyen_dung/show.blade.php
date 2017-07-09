@extends('pages.layout.index')
<html ... xmlns:fb="http://ogp.me/ns/fb#">
<meta property="fb:admins" content="vanltt138"/>
@section('content')
<div class="col-md-9 col-sm-9  main-left">
	<ul class="breadcrumb">
		<li><a href="#">Trang chủ</a></li>
		<li><a href="#">Tổ chức</a></li>
		<li><a href="#">Tuyển dụng</a></li>
	</ul>
	<div class=" col-md-12 col-sm-12  detailsNew">
		<!--header details news-->
    	<div class="header-news">
    		<div class="row">
	    		<h3 >
		    		{{$tuyendung->MoTa}}
		    	</h3>
	    	</div>
	    	<div class="row">
		    	<div class="date-detail-news">
		    		<span>Ngày bắt đấu: 20/06/2017</span>
		    		<span>Ngày kết thúc: 20/06/2017<span>
		    	</div>
	    	</div>
    	</div>
    	<!--content detail news-->
    	<!--<div class="content-detail-news">-->
    	<div class="row">
    		<div class="content-detail-tuyendung">
    			{!!$tuyendung->NoiDungTuyenDung!!}
    		</div>
    	</div>
	</div>
</div>
@endsection

