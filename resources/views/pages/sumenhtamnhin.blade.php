@extends('pages.layout.index')

@section('content')
<div class="col-md-9 col-sm-9  main-left">
	<ul class="breadcrumb">
			<li><a href="trangchu">Trang chủ</a></li>
			<li><a href="tochuc">Tổ chức</a></li>
			<li>Sứ mệnh tầm nhìn</li>
	</ul>
	<div class=" col-md-12 col-sm-12  introduced">
		
		{!!$tochuc->SuMenhTamNhin!!}
	
	</div>
</div>
@endsection