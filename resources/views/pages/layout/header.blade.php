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
	     	 <a class="home-icon" href="trangchu">
	     	 	<img src="pages/image/home.png" alt="">
	     	 </a>
	    </div>
	    <div class="collapse navbar-collapse"  id="myNavbar">
		    <ul class="nav navbar-nav">
		      	<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Tổ chức<span class="caret"></span></a>
			        <ul class="dropdown-menu">
			          <li><a href="{!! url('gioithieuchung') !!}">Giới thiệu chung</a></li>
			          <li><a href="{!! url('vitrichucnang') !!}">Vị trí chức năng</a></li>
			          <li><a href="{!! url('sumenhtamnhin') !!}">Sứ mệnh tầm nhìn</a></li>
			          <li><a href="{!! url('cocau') !!}">Cơ cấu</a></li>
			          <li><a href="{!! url('doingutrungtam') !!}">Đội ngũ trung tâm</a></li>
			          <li><a href="{!! url('chuyengia') !!}">Chuyên gia</a></li>
			          <li><a href="{!! url('cauhoithuonggap') !!}">Câu hỏi thường gặp</a></li>
			           <li><a href="{!! url('tuyendung') !!}">Tuyển dụng</a></li>
			        </ul>
				</li>
		      	<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="{!! url('tintuc') !!}">Tin tức <span class="caret"></span></a>
			        <ul class="dropdown-menu">
			          <li><a href="{!! url('tintuc/cong-nghe') !!}">Công nghệ</a></li>
			          <li><a href="{!! url('tintuc/khoi-nghiep') !!}">Khởi nghiệp</a></li>
			          <li><a href="{!! url('tintuc/doanh-nghiep') !!}">Doah nghiệp</a></li>
			        </ul>
				</li>
		      	<li><a href="{!! url('sukien') !!}">Sự kiện</a></li>
		      	<li><a href="#">Đối tác</a></li>
		      	<li><a href="#">Dữ liệu</a></li>
		      	<li><a href="#">Ươm tạo</a></li>
		      	<li><a href="#">Công nghệ</a></li>
		      	<li><a href="{!! url('lienhe') !!}">Liên hệ</a></li>
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
