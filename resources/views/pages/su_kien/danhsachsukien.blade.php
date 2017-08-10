@extends('pages.layout.index-sukien')

@section('content')
<div class="col-md-12 col-sm-12">
	<div class="col-md-12 col-sm-12 slideshow" >
		<!-- slide show events -->
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		    <!-- Indicators -->
		    <ol class="carousel-indicators">
		      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		      <li data-target="#myCarousel" data-slide-to="1"></li>
		      <li data-target="#myCarousel" data-slide-to="2"></li>
		      <li data-target="#myCarousel" data-slide-to="3"></li>
		    </ol>
		    <!-- Wrapper for slides -->
		    <div class="carousel-inner">
			    <div class="item active">
			        <img src="{!!url('assets/upload/su_kien/W7XS_banbe.laithithaovan.jpg')!!}" class="img-responsive" alt="Los Angeles" style="width:1147px;">
			    </div>
			    <div class="item">
			        <img src="{!!url('assets/upload/tin_tuc/AvL3_thailq1.jpg')!!}" class="img-responsive" alt="Chicago" style="width:100%;">
			    </div>
			    <div class="item">
			        <img src="{!!url('assets/upload/su_kien/BeVR_704-1906341-205660-1461741547868.jpg')!!}"  class="img-responsive" alt="New York" style="width:1147px;">
			    </div>
			    <div class="item">
			        <img src="{!!url('assets/upload/su_kien/BeVR_704-1906341-205660-1461741547868.jpg')!!}"  class="img-responsive" alt="New York" style="width:1147px;">
			    </div>
		    </div>
		    <!-- Left and right controls -->
		    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
		      <span class="glyphicon glyphicon-chevron-left"></span>
		      <span class="sr-only">Previous</span>
		    </a>
		    <a class="right carousel-control" href="#myCarousel" data-slide="next">
		      <span class="glyphicon glyphicon-chevron-right"></span>
		      <span class="sr-only">Next</span>
		    </a>
	  	</div>
	</div>
	<!-- tin tuc noi bat -->
	<div class="row">
	    <div class="col-md-3 col-sm-3">
	      <div class="thumbnail">
	        <img src="{!!url('assets/upload/su_kien/BeVR_704-1906341-205660-1461741547868.jpg')!!}"  class="img-responsive" alt="New York" style="width:100%;">
	        	<a href="#" title="angekkk">  <strong> Su kien 1 </strong></a>
	        	<br>
	        	<i class="fa fa-clock-o" aria-hidden="true"> 11/08/2017</i>
	        </div>
	    </div>
	    <div class="col-md-3 col-sm-3">
	      	<div class="thumbnail">
	        	<img src="{!!url('assets/upload/su_kien/BeVR_704-1906341-205660-1461741547868.jpg')!!}"  class="img-responsive" alt="New York" style="width:100%;">
	        	<a href="#" title="angekkk">  <strong> su kien 1 </strong></a>
	        	<br>
	        	<i class="fa fa-clock-o" aria-hidden="true"></i>
	        </div>
	    </div>
	    <div class="col-md-3 col-sm-3">
	      <div class="thumbnail">
	        <img src="{!!url('assets/upload/su_kien/BeVR_704-1906341-205660-1461741547868.jpg')!!}"  class="img-responsive" alt="New York" style="width:100%;">
	        	<a href="#" title="angekkk">  <strong> Su kien 1 </strong></a>
	        	<br>
	        	<i class="fa fa-clock-o" aria-hidden="true"> 11/08/2017</i>
	        </div>
	    </div>
	    <div class="col-md-3 col-sm-3">
	      <div class="thumbnail">
	        <img src="{!!url('assets/upload/su_kien/BeVR_704-1906341-205660-1461741547868.jpg')!!}"  class="img-responsive" alt="New York" style="width:100%;">
	        	<a href="#" title="angekkk">  <strong> Su kien 1 </strong></a>
	        	<br>
	        	<i class="fa fa-clock-o" aria-hidden="true"> 11/08/2017</i>
	        </div>
	    </div>
	</div>
	<hr>
	<!-- tong hop tat ca tin tuc -->
	<div class="col-md-12 col-sm-12 events">
		<h3>
	        <span class="fa fa-caret-down"></span> Danh sách sự kiện
	    </h3>
    	<div class="col-md-4 col-sm-4 event">
    		<div class="mota">
	        	<img src="{!!url('assets/upload/su_kien/BeVR_704-1906341-205660-1461741547868.jpg')!!}"  class="img-responsive" alt="New York" style="width:100%;">
	        	<a href="#" title="angekkk" class="name">  <strong> Su kien 1 </strong></a>
	        	<br>
	        	<i class="fa fa-clock-o" aria-hidden="true">  11/08/2017</i>
	        	<br>
		        <i class="fa fa-map-marker" aria-hidden="true"> Cung Hữu Nghị Việt Xô, , Số 91, Trần Hưng Đạo, Hoàn Kiếm, Hà Nội</i>
	        </div>
	    </div>
	</div>
</div>
@endsection