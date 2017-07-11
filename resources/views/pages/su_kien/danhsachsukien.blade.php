@extends('pages.layout.index')

@section('content')
<div class="col-md-9 col-sm-9  main-left">
	<ul class="breadcrumb">
			<li><a href="#">Trang chủ</a></li>
			<li><a href="#">Sự kiện</a></li>
	</ul>
	@foreach($sukien as $item)
	<div class=" col-md-12 col-sm-12  listnews_item">
		<div class="col-md-3 col-sm-3   img_listnews">
			<img class="img-responsive" src="{{$item->HinhAnh}}">
		</div>
		<div class="col-md-9 col-sm-9   ">
			<div class="listnews_item_title">
				<a href="#">{{ $item->Ten }}</a>
			</div>
			<div class="listnews_item_description">
			{!! $item->TomTat !!}{{$item->slug}}
			</div>
			<div class="listnews_item_date">
				<i class="fa fa-calendar" aria-hidden="true"> {{substr($item->updated_at,0,11)}}</i> | 
				<a href="sukien/{{$item->slug}}">Xem thêm </a>
			</div>
		</div>
	</div>	
	@endforeach


</div>
@endsection