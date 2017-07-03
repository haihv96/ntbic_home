@extends('pages.layout.index-lienhe')
@section('content')
<div class="col-md-8">
	<div class="address-company">
		<h4>BỘ KHOA HỌC VÀ CÔNG NGHỆ (MOST)</h4>
		<div class="col-md-7">
			<p><span class="glyphicon glyphicon-map-marker"></span>113 Trần Duy Hưng, Phường Trung Hòa, Quận Cầu Giấy, Hà Nội</p>
				<p><span class="glyphicon glyphicon-phone"></span>(04) 3555 3845 </p>
				<p><span class="glyphicon glyphicon-envelope"></span>Email: bbt@most.gov.vn</p>
		</div>
		<div class="col-md-5">
			<br>
			<p><span class="glyphicon glyphicon-phone"></span>Bộ phận văn thư: (04) 3943 7056</p>
				<p><span class="glyphicon glyphicon-phone"></span>Phòng Tổng hợp: (04) 3943 8970</p>
				<p><span class="glyphicon glyphicon-phone"></span>Lễ tân: (04) 3556 0696 </p>
				
		</div>
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d29796.599161076145!2d105.799311!3d21.009671!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9bd740285bcf16e3!2zQuG7mSBLaG9hIGjhu41jIHbDoCBDw7RuZyBuZ2jhu4c!5e0!3m2!1svi!2sus!4v1498059607427" width="100%" height="360" frameborder="0" style="border:0" allowfullscreen></iframe>
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
            <form action="#">
                <div class="form-group">
                    <input type="text" placeholder="Họ tên" class="form-control input-md"></div>
                    <div class="form-group">
                        <input type="text" placeholder="Email" class="form-control input-md"></div>
                    <div class="form-group">
                        <input type="text" placeholder="Số điện thoại" class="form-control input-md">
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