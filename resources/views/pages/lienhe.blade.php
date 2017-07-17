@extends('pages.layout.index-lienhe')
@section('content')
<div class="col-md-8">
	<div class="address-company">
		<h4>Trung tâm Ươm tạo Công nghệ và Doanh nghiệp Khoa học Công nghệ</h4>
		<div class="col-md-7">
			<p><span class="glyphicon glyphicon-map-marker"></span> Địa chỉ: 25 Lê Thánh Tông, Quận Hoàn Kiếm, Hà Nội</p>
			<p><span class="glyphicon glyphicon-phone"></span> Số điện thoại: (04) 3933 6570 </p>
		</div>
		<div class="col-md-5">
			<p><span class="glyphicon glyphicon-envelope"></span> Email: info@ntbic.com</p>
            <p><i class="fa fa-fax" aria-hidden="true"> Fax: (84.4) 39330267</i></p>	
		</div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14897.289055638508!2d105.84977022071602!3d21.019787648056234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abee0f48e19b%3A0x23d765710433152b!2zVmnhu4duIOG7qG5nIEThu6VuZyBDw7RuZyBOZ2jhu4c!5e0!3m2!1svi!2sus!4v1499428438113" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
</div>
<div class="col-md-4">
	 	<div class="contact">
            <div class="content-title-1">
                <h3 class="uppercase">Gửi liên hệ</h3>
                <div class="blue"></div>
                <p class="c-font-lowercase">Gửi ý kiến, thắc mắc, góp ý đến Bộ Khoa học và Công nghệ
  				</p>
        	</div>
            <form action="#" method="POST" id="createForm" class="form-horizontal">
                <div class="form-group">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                        <button class="close" data-close="alert"></button>
                            Lỗi!
                        </div>
                    @endif
                    <div class="alert alert-success display-hide">
                        <button class="close" data-close="alert"></button> Thành công! </div>
                    <div class="form-group">
                    <input type="text" placeholder="Họ tên" name="hoten" class="form-control input-md"></div>
                    <div class="form-group">
                        <input type="text" placeholder="Email" name="email" class="form-control input-md"></div>
                    <div class="form-group">
                        <input type="text" placeholder="Số điện thoại" name="sodienthoai" class="form-control input-md">
                    </div>
                    <div class="form-group">
                        <textarea rows="8" name="message" placeholder="Góp ý ..." class="form-control input-md">
                        </textarea>
                </div>
                <button type="submit" class="btn grey">GỬI</button>
       		</form>
       	</div>
</div>
@endsection