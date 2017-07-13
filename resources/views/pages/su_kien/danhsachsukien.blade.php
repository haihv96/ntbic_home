@extends('pages.layout.index')

@section('content')
<div class="col-md-9 col-sm-9  main-left">
	<ul class="breadcrumb">
			<li><a href="{{route('home')}}">Trang chủ</a></li>
			<li><a href="{!!url('su-kien')!!}">Sự kiện</a></li>
	</ul>
	@foreach($sukien as $item)
	<div class=" col-md-12 col-sm-12  listnews_item">
		<div class="col-md-3 col-sm-3   img_listnews">
			<img class="img-responsive" src="{!!url('assets/upload/su_kien/'.$item->HinhAnh)!!}">
		</div>
		<div class="col-md-9 col-sm-9   ">
			<div class="listnews_item_title">
				<a href="su-kien/{{$item->slug}}">{{ $item->Ten }}</a>
			</div>
			<div class="listnews_item_description">
			{!! $item->TomTat !!}
			</div>
			<div class="listnews_item_date">

				<i class="fa fa-calendar" aria-hidden="true"> {{substr($item->created_at,0,11)}}</i> | 

				<a href="su-kien/{{$item->slug}}">Xem thêm </a>
			</div>
		</div>
	</div>	
	@endforeach


</div>
@endsection