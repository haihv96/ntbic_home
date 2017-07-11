@extends('pages.layout.index')
<html ... xmlns:fb="http://ogp.me/ns/fb#">
<meta property="fb:admins" content="vanltt138"/>
@section('content')
<div class="col-md-9 col-sm-9  main-left">
	<ul class="breadcrumb">
		<li><a href="#">Trang chủ</a></li>
		<li><a href="#">Tin tức</a></li>
		<li><a href="#">{{$loaitin->Ten}}</a></li>
	</ul>
	<div class=" col-md-12 col-sm-12  detailsNew">
		<!--header details news-->
    	<div class="header-news">
    		<div class="row">
	    		<h3 class="title-detail-news">
		    		{{$tintuc->Ten}}
		    	</h3>
	    	</div>
	    	<div class="row">
		    	<div class="date-detail-news">
		    		<i class="fa fa-calendar" aria-hidden="true"></i>
		    		<span>{{substr($tintuc->updated_at,0,11)}} | {{substr($tintuc->updated_at,11,13)}} GMT+7</span>
		    	</div>
	    	</div>
	    	<div class="row">
		    	<div  class="share-detail-news">
			    	<ul class="list-inline" >
	  					<li id="plug">
	  						<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&width=154&layout=button_count&action=like&size=small&show_faces=true&share=true&height=46&appId" width="154" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
	  					</li>
					</ul>
		    	</div>
	    	</div>
    	</div>
    	<!--content detail news-->
    	<!--<div class="content-detail-news">-->
    	<div class="row">
    		<div class="content-detail-news">
    			{!!$tintuc->NoiDung!!}
    		</div>
    	</div>
    	<!--footer news-->
    	<div class="row" >
    		<div class="footer-detail-news">
    			<div  class="share-detail-news">
			    	<ul class="list-inline" >
	  					<li id="plug">
	  						<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&width=154&layout=button_count&action=like&size=small&show_faces=true&share=true&height=46&appId" width="154" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
	  					</li>
	  					<i class="fa fa-pencil" aria-hidden="true"> Bộ khoa học và Công nghệ</i>
					</ul>
		    	</div>
		    	<div class="people-write">
		    	</div>	
    		</div>
    	</div>
    	<!--coment-->
    	<div class="other-news">
    		<div class=row>
	    		<h4 id="name-div-other-news">
	    			Bình luận
	    		</h4>
	    		<!--plugin comment facebook-->
	    		<div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="auto" data-numposts="1"></div>
    		</div>
    	</div>
    	<!--other news-->
    	<div class="other-news">
    		<div class=row>
	    		<h4 id="name-div-other-news">
	    			TIN LIÊN QUAN
	    		</h4>
    		</div>
    	</div>
    	<div class="row">
    		<div class="row list-other-news">
    			@foreach($tinlienquan as $item)    		
				<div class="col-md-3 ">
				    <div class="thumbnail ">
				      <a href="#">
				        <img src="assets/upload/tin_tuc/{{$item->HinhAnh}}" alt="Lights" style="width:100%">
				        <div class="caption">
				          {{ $item->Ten }}
				        </div>
				      </a>
				    </div>
				</div>
				@endforeach
    		</div>	
    	</div>

	</div>
</div>
@endsection

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>