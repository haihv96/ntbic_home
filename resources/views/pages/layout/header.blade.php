<header id="header" class="header">
</header><!-- /header -->

<nav class="navbar navbar-default bg-navbar">
  	<div class="container-fluid">
  		<div class="navbar-header">
	      	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>                        
	     	 </button>
	     	 <a class="home-icon" href="/">
	     	 	<img src="pages/image/home.png" alt="">
	     	 </a>
	    </div>
	    <div class="collapse navbar-collapse"  id="myNavbar">
		    <ul class="nav navbar-nav">
		      	<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Tổ chức<span class="caret"></span></a>
			        <ul class="dropdown-menu sub-menu">
			          <li><a href="{!! url('gioi-thieu-chung') !!}">Giới thiệu chung</a></li>
			          <li><a href="{!! url('vi-tri-chuc-nang') !!}">Vị trí chức năng</a></li>
			          <li><a href="{!! url('su-menh-tam-nhin') !!}">Sứ mệnh tầm nhìn</a></li>
			          <li><a href="{!! url('co-cau') !!}">Cơ cấu</a></li>
			          <li><a href="{!! url('doi-ngu-trung-tam') !!}">Đội ngũ trung tâm</a></li>
			          <li><a href="{!! url('chuyen-gia') !!}">Chuyên gia</a></li>
			          <li><a href="{!! url('cau-hoi-thuong-gap') !!}">Câu hỏi thường gặp</a></li>
			           <li><a href="{!! url('tuyen-dung') !!}">Tuyển dụng</a></li>
			        </ul>
				</li>
		      	<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="{!! url('tin-tuc') !!}">Tin tức <span class="caret"></span></a>
			        <ul class="dropdown-menu sub-menu">
			          <li><a href="{!! url('tin-tuc/cong-nghe') !!}">Công nghệ</a></li>
			          <li><a href="{!! url('tin-tuc/khoi-nghiep') !!}">Khởi nghiệp</a></li>
			          <li><a href="{!! url('tin-tuc/doanh-nghiep') !!}">Doah nghiệp</a></li>
			        </ul>
				</li>
		      	<li><a href="{!! url('su-kien') !!}">Sự kiện</a></li>
		      	<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="{!! url('doi-tac') !!}">Đối tác <span class="caret"></span></a>
			        <ul class="dropdown-menu sub-menu">
			          <li><a href="{!! url('doi-tac/doi-tac-to-chuc') !!}">Đối tác tổ chức</a></li>
			          <li><a href="{!! url('doi-tac/doi-tac-doanh-nghiep') !!}">Đối tác doanh nghiệp</a></li>
			          <li><a href="{!! url('doi-tac/doi-tac-ca-nhan') !!}">Đối tác cá nhân</a></li>
			        </ul>
				</li>
		      	<li><a href="{!! url('http://csdl.ntbic.com/') !!}">Dữ liệu</a></li>
		      	<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="{!! url('uom-tao') !!}">Ươm tạo <span class="caret"></span></a>
			        <ul class="dropdown-menu sub-menu">
			          <li><a href="{!! url('uom-tao/uom-tao-truc-tiep') !!}">Ươm tạo trực tiếp</a></li>
			          <li><a href="{!! url('uom-tao/uom-tao-ao') !!}">Ươm tạo ảo</a></li>
			          <li><a href="{!! url('uom-tao/thu-tuc-uom-tao') !!}">Thủ tục ươm tạo</a></li>
			        </ul>
				</li>
		      	<li><a href="cong-nghe">Công nghệ</a></li>
		      	<li><a href="{!! url('lien-he') !!}">Liên hệ</a></li>
		    </ul>
		    <form class="navbar-form navbar-left">
		      <div class="input-group">
		        <input type="text" class="form-control" placeholder="Search">
		        <div class="input-group-btn">
		          	<button class="btn btn-default" type="submit">
		            	<i class="glyphicon glyphicon-search"></i>
		          	</button>
		        </div>
		      </div>
		    </form>
	    </div>
  	</div>
</nav> <!-- navigation -->
<div class="">
	<div class="BG_Menu">
	    <div class="UL_Menu_Date">
	        Thứ bảy, 08/07/2017
	    </div>
	    <div class="Menu_Mini">
	        <ul class="UL_Menu_Mini" style="display: block;">
				<li class="LI_Menu_Mini">|</li>
				<li class="LI_Menu_Mini">
					<img src="pages/image/icon/hoidap.gif" /><a href="#"> Hỏi đáp</a>
				</li>

				<li class="LI_Menu_Mini">|</li>
				<li class="LI_Menu_Mini">
					@if (!Auth::check())
						<img src="pages/image/icon/poll.gif" /><a href="{{route('login')}}"> Đăng nhập</a>
					@else
						<img src="pages/image/icon/poll.gif" /><a href="{{route('logout')}}"> Logout </a>
					@endif
				</li>

				<li class="LI_Menu_Mini">|</li>
				<li class="LI_Menu_Mini" >
					@if ($locale == 'en')
 						<img src="pages/image/icon/tiengviet.gif" /><a id="locale" href="#" data-locale="vi"> Tiếng việt </a>
 					@else
 						<img src="pages/image/icon/tienganh.gif" /><a id="locale" href="#" data-locale="en"> English </a>
 					@endif
  				</li>
 				<li class="LI_Menu_Mini">|</li>
			</ul>
	    </div>
	</div>
</div>
