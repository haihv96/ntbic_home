@extends('pages.layout.index')
@section('content')
<div class="col-md-9 main-left">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Wrapper for slides -->
      	<div class="carousel-inner">
      		<?php
      		
      		?>
	        <div class="item active">
	          	<img src="pages/image/fjords.jpg">
	           	<div class="carousel-caption">
		            <h4><a href="#">Lorem ipsum dolor sit amet consetetur sadipscing</a></h4>
		            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. <a class="label label-primary" href="http://sevenx.de/demo/bootstrap-carousel/" target="_blank">Free Bootstrap Carousel Collection</a></p>
	          	</div>
	        </div><!-- End Item -->
	 
	         <div class="item">
	          	<img src="pages/image/lights.jpg">
	           	<div class="carousel-caption">
		            <h4><a href="#">consetetur sadipscing elitr, sed diam nonumy eirmod</a></h4>
		            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. <a class="label label-primary" href="http://sevenx.de/demo/bootstrap-carousel/" target="_blank">Free Bootstrap Carousel Collection</a></p>
	          	</div>
	        </div><!-- End Item -->
	        
	        <div class="item">
	          	<img src="pages/image/nature.jpg">
	           	<div class="carousel-caption">
		            <h4><a href="#">tempor invidunt ut labore et dolore</a></h4>
		            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. <a class="label label-primary" href="http://sevenx.de/demo/bootstrap-carousel/" target="_blank">Free Bootstrap Carousel Collection</a></p>
	          	</div>
	        </div><!-- End Item -->
	        
	        <div class="item">
	          	<img src="http://placehold.it/760x400/999999/cccccc">
	           	<div class="carousel-caption">
		            <h4><a href="#">magna aliquyam erat, sed diam voluptua</a></h4>
		            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. <a class="label label-primary" href="http://sevenx.de/demo/bootstrap-carousel/" target="_blank">Free Bootstrap Carousel Collection</a></p>
	          	</div>
	        </div><!-- End Item -->
	 
	        <div class="item">
	          	<img src="http://placehold.it/760x400/dddddd/333333">
	           	<div class="carousel-caption">
		            <h4><a href="#">tempor invidunt ut labore et dolore magna aliquyam erat</a></h4>
		            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. <a class="label label-primary" href="http://sevenx.de/demo/bootstrap-carousel/" target="_blank">Free Bootstrap Carousel Collection</a></p>
	          	</div>
	        </div><!-- End Item -->          
      	</div><!-- End Carousel Inner -->
	 
	    <ul class="list-group col-sm-4">
		    <li data-target="#myCarousel" data-slide-to="0" class="list-group-item active"><div>Lorem ipsum dolor sit amet consetetur sadipscing</div></li>
		    <li data-target="#myCarousel" data-slide-to="1" class="list-group-item"><div>Lorem ipsum dolor sit amet consetetur sadipscing</div></li>
		    <li data-target="#myCarousel" data-slide-to="2" class="list-group-item"><div>Lorem ipsum dolor sit amet consetetur sadipscing</div></li>
		    <li data-target="#myCarousel" data-slide-to="3" class="list-group-item"><div>Lorem ipsum dolor sit amet consetetur sadipscing</div></li>
		    <li data-target="#myCarousel" data-slide-to="4" class="list-group-item"><div>Lorem ipsum dolor sit amet consetetur sadipscing</div></li>
	    </ul>
 
      <!-- Controls -->
      	<div class="carousel-controls">
          	<a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          	</a>
          	<a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          	</a>
      	</div>
 
    </div><!-- End Carousel -->
    <div class="clearfix"></div>
    <div class="advert margintop">
    	<img src="pages/image/quangcao.gif" alt="">
    </div> <!-- advert -->
    <div class="clearfix"></div>
	<div class="margintop">
		<div class="col-md-6 news_1">
			<div class="header-blue">
				<a href="{!!url('tin-tuc/doanh-nghiep')!!}" title="" class="group_header_link">Tin doanh nghiệp</a>
				<a href="{!!url('tin-tuc/doanh-nghiep')!!}" title="" class="A_ViewMore">Xem thêm</a>
			</div>
			<div class="news_header">
				<div class="col-md-6 link_img">
					<a href="" title="">
						<img src="pages/image/fjords.jpg" alt="">
					</a>
				</div>
				<div class="col-md-6 link_title">
					<a href="" title="">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					</a>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="list_news">
				<li>
					<a href="" title="">
						<i class="fa fa-newspaper-o" aria-hidden="true"></i> <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
					</a>
				</li>
				<li>
					<a href="" title="">
						<i class="fa fa-newspaper-o" aria-hidden="true"></i> <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
					</a>
				</li>
				<li>
					<a href="" title="">
						<i class="fa fa-newspaper-o" aria-hidden="true"></i> <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
					</a>
				</li>
				<li>
					<a href="" title="">
						<i class="fa fa-newspaper-o" aria-hidden="true"></i> <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
					</a>
				</li>
			</div>
		</div>
		<div class="col-md-6 news_2">
			<div class="header-blue">
				<a href="{!!url('tin-tuc/khoi-nghiep')!!}" title="" class="group_header_link">Tin khởi nghiệp</a>
				<a href="{!!url('tin-tuc/khoi-nghiep')!!}" title="" class="A_ViewMore">Xem thêm</a>
			</div>
			<div class="news_header">
				<div class="col-md-6 link_img">
					<a href="" title="">
						<img src="pages/image/fjords.jpg" alt="">
					</a>
				</div>
				<div class="col-md-6 link_title">
					<a href="" title="">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					</a>
				</div>
				<div class="clearfix"></div>
				<div class="list_news">
				<li>
					<a href="" title="">
						<i class="fa fa-newspaper-o" aria-hidden="true"></i> <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
					</a>
				</li>
				<li>
					<a href="" title="">
						<i class="fa fa-newspaper-o" aria-hidden="true"></i> <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
					</a>
				</li>
				<li>
					<a href="" title="">
						<i class="fa fa-newspaper-o" aria-hidden="true"></i> <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
					</a>
				</li>
				<li>
					<a href="" title="">
						<i class="fa fa-newspaper-o" aria-hidden="true"></i> <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
					</a>
				</li>
				</div>
			</div>
		</div>
	</div>
    <div class="link-home margintop">
    	<div class="link-icon col-md-3 text-center">
    		<span>
    			<a href="" title="">
    				<img src="pages/image/book.png" alt="">
    			</a>
    		</span>
    		<br>
    		<span>
    			<a href="" title="">Ươm tạo</a>
    		</span>
    	</div>
    	<div class="link-icon col-md-3 text-center">
    		<span>
    			<a href="{!!url('cong-nghe')!!}" title="">
    				<img src="pages/image/hatnhan.png" alt="">
    			</a>
    		</span>
    		<br>
    		<span>
    			<a href="{!!url('cong-nghe')!!}" title="">Công nghệ</a>
    		</span>
    	</div>
    	<div class="link-icon col-md-3 text-center">
    		<span>
    			<a href="{!!url('tin-tuc/khoi-nghiep')!!}" title="">
    				<img src="pages/image/uomtao.png" alt="">
    			</a>
    		</span>
    		<br>
    		<span>
    			<a href="{!!url('tin-tuc/khoi-nghiep')!!}" title="">Khởi nghiệp</a>
    		</span>
    	</div>
    	<div class="link-icon col-md-3 text-center">
    		<span>
    			<a href="http://csdl.ntbic.com" title="">
    				<img src="pages/image/dulieu.png" alt="">
    			</a>
    		</span>
    		<br>
    		<span>
    			<a href="http://csdl.ntbic.com" title="">Cơ sở dữ liệu</a>
    		</span>
    	</div>
    </div>
    <div class="clearfix"></div>
    <!-- đối tác -->
	<div class="padding-top-20">
		<div class="doitac">
			<a href="" title="">Đối tác</a>
		</div>
		<div class="padding-top-20">
            <div id="Carousel" class="carousel slide">
             
                <ol class="carousel-indicators">
                    <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#Carousel" data-slide-to="1"></li>
                    <li data-target="#Carousel" data-slide-to="2"></li>
                </ol>
                 
                <!-- Carousel items -->
                <div class="carousel-inner padding-top-20">
                    
	                <div class="item active">
	                	<div class="row">
	                	  <div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
	                	  <div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
	                	  <div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
	                	  <div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
	                	</div><!--.row-->
	                </div><!--.item-->
	                 
	                <div class="item">
	                	<div class="row">
	                		<div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
	                		<div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
	                		<div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
	                		<div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
	                	</div><!--.row-->
	                </div><!--.item-->
	                 
	                <div class="item">
	                	<div class="row">
	                		<div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
	                		<div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
	                		<div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
	                		<div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
	                	</div><!--.row-->
	                </div><!--.item-->   
	            </div> 
	        </div>     
		</div>
	</div>
</div>
@endsection