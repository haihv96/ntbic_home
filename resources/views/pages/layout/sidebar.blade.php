<div class="col-md-3 col-xs-3 main-right">
	<div class="news_top">
		<a href="" title="">
			<img src="pages/image/budweiser.gif" alt="">
		</a>
	</div>
	<div class="img-sidebar padding-top-20">
		<a href="" title="">
			<img src="pages/image/sidebar/anh1.png" alt="">
		</a>
		<a href="" title="">
			<img src="pages/image/sidebar/anh2.png" alt="">
		</a>
		<a href="" title="">
			<img src="pages/image/sidebar/anh3.png" alt="">
		</a>
		<a href="" title="">
			<img src="pages/image/sidebar/anh4.png" alt="">
		</a>
		<a href="" title="">
			<img src="pages/image/sidebar/anh5.png" alt="">
		</a>
		<a href="" title="">
			<img src="pages/image/sidebar/anh6.png" alt="">
		</a>
		<a href="" title="">
			<img src="pages/image/sidebar/anh1.png" alt="">
		</a>
	</div>
	<div class="clearfix padding-top-20"></div>
	<div class="header-blue">
		<a href="" title="" class="group_header_link">Tin nổi bật</a>
		<a href="" title="" class="A_ViewMore">Xem thêm</a>
	</div>
	@foreach($tinnoibat as $item)
	<div class="row padding-top-10">
		<div class="col-md-5 col-xs-5 top_news">
			<a href="{!!url('tin-tuc/'.$item->slug) !!}" title="">
				<img src="{!!url('assets/upload/tin_tuc/'.$item->HinhAnh)!!}" alt="">
			</a>
		</div>
		<div class="col-md-7 col-xs-7 top_news_right"> 
			<a href="{!!url('tin-tuc/'.$item->slug) !!}" title="">
				<b>{{$item->Ten}}</b>
			</a>
		</div>
	</div>
	@endforeach
</div>