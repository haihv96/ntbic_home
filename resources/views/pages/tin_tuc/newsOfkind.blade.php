@extends('pages.layout.index')

@section('content')
<div class="col-md-9 col-sm-9  main-left">
	<ul class="breadcrumb">
			<li><a href="#">Trang chủ</a></li>
			<li><a href="#">Tin tức</a></li>
			<li>{{$lt->Ten}}</li>
	</ul>
	@foreach($tintuc as $item)
	<div class=" col-md-12 col-sm-12  listnews_item">
		<div class="col-md-3 col-sm-3   img_listnews">
			<img class="img-responsive" src="{!!url('assets/upload/tin_tuc/'.$item->HinhAnh) !!}">
		</div>
		<div class="col-md-9 col-sm-9   ">
			<div class="listnews_item_title">
				<a href="{{$lt->slug}}/{{$item->slug}}">{{ $item->Ten }}</a>
			</div>
			<div class="listnews_item_description">
			{!! $item->TomTat !!}
			</div>
			<div class="listnews_item_date">
				<i class="fa fa-calendar" aria-hidden="true"> {{$item->updated_at}}</i> | 
				<a href="{{$lt->slug}}/{{$item->slug}}">Xem thêm </a>
			</div>
		</div>
	</div>	
	@endforeach

</div>
@endsection