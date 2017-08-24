@extends('pages.layout.index')
<html ... xmlns:fb="http://ogp.me/ns/fb#">
<meta property="fb:admins" content=""/>
@section('content')
<div class="col-md-9 col-sm-9  main-left">
	<ul class="breadcrumb">
		<li><a href="{{route('home')}}">{{trans('header.home')}}</a></li>
		<li><a href="">{{trans('header.news')}}</a></li>
		<li><a href="">{{$tenlt}}</a></li>
	</ul>
	<div class=" col-md-12 col-sm-12  detailsNew">
		<!--header details news-->
    	<div class="header-news">
    		<div class="row">
	    		<h3 class="title-detail-news col-md-12 col-sm-12">
		    		{{$tintuc->Ten}}
		    	</h3>
	    	</div>
	    	<div class="row col-md-12 col-sm-12">
		    	<div class="date-detail-news ">
		    		<i class="fa fa-calendar" aria-hidden="true"></i>
		    		<span>{{substr($tintuc->updated_at,0,11)}} | {{substr($tintuc->updated_at,11,13)}} GMT+7</span>
		    	</div>
	    	</div>
	    	<div class="row col-md-12 col-sm-12">
		    	<div  class="share-detail-news ">
			    	<ul class="list-inline" >
	  					<li id="plug">
	  						<iframe src="tin-tuc/{{$lt}}/{{$tintuc->slug}}" width="154" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
	  					</li>
					</ul>
		    	</div>
	    	</div>
    	</div>
    	<!--content detail news-->
    	<!--<div class="content-detail-news">-->
    	<div class="row col-md-12 col-sm-12">
    		<div class="content-detail-news ">
    			{!!$tintuc->NoiDung!!}
    		</div>
    	</div>
    	<!--footer news-->
    	<div class="row col-md-12 col-sm-12" >
    		<div class="footer-detail-news">
    			<div  class="share-detail-news">
			    	<ul class="list-inline" >
	  					<li id="plug">
	  						<iframe src="tin-tuc/{{$lt}}/{{$tintuc->slug}}" width="154" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
	  					</li>
	  					<i class="fa fa-pencil" aria-hidden="true"> Bộ khoa học và Công nghệ</i>
					</ul>
		    	</div>
		    	<div class="people-write">
		    	</div>	
    		</div>
    	</div>
    	<!--coment-->
    	<div class="other-news col-md-12 col-sm-12">
    		<div class=row>
	    		<h4 id="name-div-other-news">
	    			Bình luận
	    		</h4>
	    		<!--plugin comment facebook-->
	    		<div class="fb-comments" data-href="tin-tuc/{{$lt}}/{{$tintuc->slug}}" data-width="auto" data-numposts="1"></div>
    		</div>
    	</div>
    	<!--other news-->
    	<div class="other-news col-md-12 col-sm-12">
    		<div class=row>
	    		<h4 id="name-div-other-news">
	    			TIN LIÊN QUAN
	    		</h4>
    		</div>
    	</div>
    	<div class="row">
    		<div class="row list-other-news col-md-12 col-sm-12">
    			@foreach($tinlienquan as $item)    		
				<div class="col-md-3 ">
				    <div class="thumbnail" style="height: 200px">				      
				        <img src="assets/upload/tin_tuc/{{$item->HinhAnh}}" alt="Lights" style="width:100%; height: 100px;">
			        	<h3>
			        		<a href="tin-tuc/{{$lt}}/{{$item->slug}}">  <strong> {{ $item->Ten }} </strong></a>
			        	</h3>
			        	<p  class="date">
			        	</p>
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