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
			          <li><a href="vitrichucnang">Vị trí chức năng</a></li>
			          <li><a href="sumenhtamnhin">Sứ mệnh tầm nhìn</a></li>
			          <li><a href="cocau">Cơ cấu</a></li>
			          <li><a href="doingutrungtam">Đội ngũ trung tâm</a></li>
			          <li><a href="chuyengia">Chuyên gia</a></li>
			          <li><a href="{!! url('cauhoithuonggap') !!}">Câu hỏi thường gặp</a></li>
			           <li><a href="tuyendung">Tuyển dụng</a></li>
			        </ul>
				</li>
		      	<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Tin tức <span class="caret"></span></a>
			        <ul class="dropdown-menu">
			          <li><a href="tintuc">Page 1-1</a></li>
			          <li><a href="tintuc">Page 1-2</a></li>
			          <li><a href="tintuc">Page 1-3</a></li>
			        </ul>
				</li>
		      	<li><a href="#">Sự kiện</a></li>
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
<div class="row" style="float:right; background-color:#DCDCDC">
	<div class="lang col-md-12" style="float:right; background-color:#DCDCDC; width:100%">
        <select id="locale" class="form-control select2me" name="locale" data-locale="{{$locale}}">                  	    <option id="vi" value="vi">Tiếng Việt</option>
            <option id="en" value="en">Tiếng Anh</option>
        </select>
    </div>
</div>
 <!-- flag of pages -->