@extends('pages.layout.index-lienhe')
@section('content')
<div class="col-md-12">
    <ul class="breadcrumb">
        <li><a href="#">Trang chủ</a></li>
        <li><a href="#">Tổ chức</a></li>
        <li>Câu hỏi thường gặp</li>
    </ul>
	<h3 style="color:#337ab7">Câu hỏi thường gặp</h3>
    @foreach( $cauhoi as $item)
    @if(!empty($item))
    <button class="accordion">{{$item->CauHoi}}</button>
    <div class="panel">
      <p style="padding-top:10px;">{!!$item->CauTraLoi!!}</p>
    </div>
    @endif
    @endforeach
</div>
@endsection