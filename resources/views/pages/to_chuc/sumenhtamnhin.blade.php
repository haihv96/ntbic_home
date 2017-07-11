@extends('pages.layout.index')

@section('content')
<div class="col-md-9 col-sm-9  main-left">
	<ul class="breadcrumb">
			<li><a href="trangchu">Trang chủ</a></li>
			<li><a href="tochuc">Tổ chức</a></li>
			<li>Sứ mệnh tầm nhìn</li>
	</ul>
	<h3 style="color:#337ab7">Sứ mệnh tầm nhìn</h3>
	<div class=" col-md-12 col-sm-12  introduced">
		@if(count($tochuc) > 0)
			{!!$tochuc->SuMenhTamNhin!!}
		@endif
	</div>
</div>
@endsection