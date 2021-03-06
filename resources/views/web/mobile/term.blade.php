@extends('layout.mobile')
@section('title')
    <title>{{ $data['term']->term_name }} - {{ $setting->web_name }}</title>
@endsection('title')
@section('keyword')
	@include('seo.seo_term',['data'=>$data])
@endsection('keyword')
@section('css')
	<link rel="canonical" href="{{ url('/') }}" />
    <link rel="stylesheet" href="{{ asset('public/css/mobile/mobile-pagination.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/mobile/mobile-home.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/mobile/mobile-term.css') }}">
@endsection('css')
@section('content')
	<div class="container home term">
		<div class="row1">
			<div class="text-center text-uppercase line1">Hỏi bác sỹ nhanh,  chuyên gia online 24/7</div>
			<div class="dis-table width-100 table1">
				<div class="table-cell">
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Tư vấn trực tuyến">
						<img src="{{ asset('public/images/mobile/home-1.png') }}" alt="Tư vấn trực tuyến" class="img-responsive">
					</a>
				</div>
				<div class="table-cell">
					<a href="tel:18006181" title="1800 6181">
						<img src="{{ asset('public/images/mobile/home-2.png') }}" alt="1800 6181" class="img-responsive">
					</a>
				</div>
			</div>
		</div>
		<div class="row5 global1">
			<div class="dis-table width-100">
				<div class="text-uppercase table-cell">{{ $data['term']->term_name }}</div>
				<div class="table-cell">
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="text-center arrow_box dis-table" title="Tìm hiểu thêm"><span class="table-cell text-center">Tìm hiểu thêm</span></a>
				</div>
			</div>
		</div>
		<div class="row6">
			<div class="crub">
				<div class="flex">
					<div class="col1 flex justify-content-center align-items-center">
						<div class="h5"><a href="{{ url('/') }}">Trang chủ <i class="fa fa-angle-right"></i> {{ $data['term']->term_name }}</a></div>
					</div>
				</div>
			</div>
			<div class="posts">
				@php $posts = $data['term']->post()->paginate(6); @endphp
				@foreach($posts as $post)
				<div class="post">
					<h2><a href="{{ MyAPI::getUrlPostObj($post) }}"><i class="fa fa-user-md"></i> {{ $post->post_name }}</a></h2>
					<p class="text-justify">
						{{ MyAPI::getLimitWord($post->post_description,32) }} ... <a href="{{ MyAPI::getUrlPostObj($post) }}">Chi tiết</a>
					</p>
				</div>
				@endforeach
			</div>
			<div class="my_pagination">
				{!! $posts->links() !!}
			</div>
		</div>
		<div class="row7">
			<div class="dis-table width-100 table1">
				<div class="table-cell text-center">
					Hỏi đúng bệnh
				</div>
				<div class="table-cell">
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-table text-center bg1 width-100" title="Niệu đạo chảy mủ">
						<span class="table-cell">Niệu đạo chảy mủ</span>
					</a>
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-table text-center bg2 width-100" title="Lỗ niệu đạo sưng đau">
						<span class="table-cell">Lỗ niệu đạo sưng đau</span>
					</a>
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-table text-center bg3 width-100" title="Lỗ niệu đạo ngứa rát">
						<span class="table-cell">Lỗ niệu đạo ngứa rát</span>
					</a>
				</div>
				<div class="table-cell">
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-table text-center bg4 width-100" title="Bao quy sưng đỏ">
						<span class="table-cell">Bao quy sưng đỏ</span>
					</a>
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-table text-center bg5 width-100" title="Dương vật mọc mụn">
						<span class="table-cell">Dương vật mọc mụn</span>
					</a>
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-table text-center bg6 width-100" title="Những đám mụn màu hồng">
						<span class="table-cell">Những đám mụn màu hồng</span>
					</a>
				</div>
				<div class="table-cell">
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-table text-center bg7 width-100" title="Quy đầu mọc nốt nhỏ màu đỏ">
						<span class="table-cell">Quy đầu mọc nốt<br>nhỏ màu đỏ</span>
					</a>
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-table text-center bg8 width-100" title="Bao quy lở loét">
						<span class="table-cell">Bao quy lở loét</span>
					</a>
				</div>
			</div>
		</div>
		<div class="row2 global1">
			<div class="dis-table width-100">
				<div class="text-uppercase table-cell">ĐỘi ngũ chuyên gia Nam Khang</div>
				<div class="table-cell">
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="text-center arrow_box dis-table" title="Tìm hiểu thêm"><span class="table-cell text-center">Tìm hiểu thêm</span></a>
				</div>
			</div>
		</div>
		<div class="row3">
			<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
				<img src="{{ asset('public/images/mobile/home-3.png') }}" alt="ĐỘi ngũ chuyên gia Nam Khang" class="img-responsive">
			</a>
		</div>
		<div class="row4">
			<div class="dis-table">
				<a class="table-cell text-center" href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
					Tư vấn<br>đặt hẹn
				</a>
				<div class="table-cell">
					<div>
						Lựa chọn đúng bác sĩ là đã thành công một nửa. Mỗi chuyên gia Phòng khám chuyên khoa Nam Khang đều có hơn 20 năm kinh nghiệm khám và điều trị. Chẩn đoán chính xác, hiệu quả rõ rệt, chăm sóc tận tình là “thương hiệu” của họ.
					</div>
				</div>
			</div>
		</div>
		<div class="row8">
			<div class="dis-table width-100">
				<div class="table-cell cell1">
					Nam khang
				</div>
				<div class="table-cell cell2">
					Nam khoa chuyên nghiệp
				</div>
				<div class="table-cell cell3">
					<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" title="Xem thêm">>> Xem thêm</a>
				</div>
			</div>
		</div>
		<div class="row9">
			<div class="overfllow">
				<div class="slick-pk">
					<div class="col1">
						<img src="{{ asset('public/images/mobile/home-5.png') }}" alt="Hình ảnh phòng khám" class="img-responsive">
					</div>
					<div class="col1">
						<img src="{{ asset('public/images/mobile/home-6.png') }}" alt="Hình ảnh phòng khám" class="img-responsive">
					</div>
					<div class="col1">
						<img src="{{ asset('public/images/mobile/home-7.png') }}" alt="Hình ảnh phòng khám" class="img-responsive">
					</div>
					<div class="col1">
						<img src="{{ asset('public/images/mobile/home-8.png') }}" alt="Hình ảnh phòng khám" class="img-responsive">
					</div>
					<div class="col1">
						<img src="{{ asset('public/images/mobile/home-9.png') }}" alt="Hình ảnh phòng khám" class="img-responsive">
					</div>
					<div class="col1">
						<img src="{{ asset('public/images/mobile/home-10.png') }}" alt="Hình ảnh phòng khám" class="img-responsive">
					</div>
				</div>
			</div>
			<script>
				$('.slick-pk').slick({
				  	slidesToShow: 3,
				  	slidesToScroll: 1,
				  	autoplay: true,
				  	autoplaySpeed: 5000,
				});	
			</script>
		</div>
	</div>
@endsection('content')
@section('toolbar')
	<div class="container footer-toolbar">
		<div class="dis-table width-100">
			<div class="table-cell cell1">
				<div class="dis-table width-100">
					<div class="table-cell">
						<h3 class="text-center"><a href="tel:18006181"><i class="bg bg1"></i></a></h3>
					</div>
					<div class="table-cell">
						<h4 class="text-center"><a href="tel:18006181">Điện thoại tư vấn</a></h4>
					</div>
				</div>
			</div>
			<div class="table-cell cell2">
				<div class="dis-table width-100">
					<div class="table-cell">
						<h3 class="text-center"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><i class="bg bg2"></i></a></h3>
					</div>
					<div class="table-cell">
						<h4 class="text-center"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Tư vấn trực tuyến</a></h4>
					</div>
				</div>
			</div>
			<div class="table-cell cell1">
				<div class="dis-table width-100">
					<div class="table-cell">
						<h3 class="text-center"><a href="#top"><i class="bg bg3"></i></a></h3>
					</div>
					<div class="table-cell">
						<h4 class="text-center"><a href="{{ url('/') }}">Quay lại</a></h4>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection('toolbar')