@extends('pages.layout.index')

@section('content')
<div class="col-md-9 col-sm-9  main-left">
	<ul class="breadcrumb">
			<li><a href="{{route('home')}}">Trang chủ</a></li>
			<li><a href="">Đối tác</a></li>
			<li>{{$ldt->Ten}}</li>
	</ul>
	<div class="line col-md-12 col-sm-12 ">
	</div>
	@foreach($doitac as $item)
	<div class="col-md-3 col-sm-3">
		<div class="gallery">
		  <a target="_blank" href="doi-tac/{{$ldt->slug}}/{{$item->slug}}">
		    <img src="assets/upload/doi_tac/{{$item->HinhAnh}}" class="img-responsive" alt="" width="250" height="250">
		  </a>
		  <div class="desc">{{$item->Ten}}</div>
		</div>
	</div>
	@endforeach
</div>
@endsection