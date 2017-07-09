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
	    		<h3 class="title-detail-news">
		    		{{$tuyendung-MoTa}}
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
    		<div class="content-detail-news">
    			<p>
    			Thực hiện Kế hoạch số 01-KH/TW ngày 06/5/2016 của Ban Chấp hành Trung ương Đảng về việc tổ chức các hoạt động kỷ niệm 40 năm ngày ký Hiệp ước Hữu nghị hợp tác (1977 – 2017) và 55 năm ngày thiết lập mối quan hệ ngoại giao Việt Nam – Lào (1962 – 2017), Bộ Khoa học và Công nghệ/</p>
    			<br>
    			<p>
				Trong khuôn khổ Chương trình, sẽ có một số hoạt động chính được tổ chức như: Khóa họp lần thứ 4 Ủy ban hợp tác KH&CN giữa Việt Nam và Lào; Hội thảo về tăng cường hợp tác phát triển KH&CN trong bối cảnh hội nhập quốc tế giữa Việt Nam và Lào do đoàn thanh niên hai Bộ chủ trì; Tọa đàm giữa Cục Ứng dụng và Phát triển công nghệ (Bộ KH&CN) Việt Nam và Vụ Đổi mới Công nghệ, Bộ KH&CN Lào về tiềm năng hợp tác; Giao lưu thể thao giữa hai đoàn Việt Nam và Lào và ký kết một số văn bản hợp tác giữa các đơn vị của hai Bộ.
    			</p>	
    			<br>
    			 <img class="img-responsive" src="pages/image/fjords.jpg">
    			<br>
    			<p>
    			Thực hiện Kế hoạch số 01-KH/TW ngày 06/5/2016 của Ban Chấp hành Trung ương Đảng về việc tổ chức các hoạt động kỷ niệm 40 năm ngày ký Hiệp ước Hữu nghị hợp tác (1977 – 2017) và 55 năm ngày thiết lập mối quan hệ ngoại giao Việt Nam – Lào (1962 – 2017), Bộ Khoa học và Công nghệ/</p>
    		</div>
    	</div>
	</div>
</div>
@endsection

