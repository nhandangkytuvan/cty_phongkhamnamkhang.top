@extends('layout.mobile')
@section('title')
	<title>Về chúng tôi - {{ $setting->web_name }}</title>
@endsection('title')
@section('keyword')
	@include('seo.seo_home')
@endsection('keyword')
@section('css')
<link rel="canonical" href="{{ url('ve-chung-toi') }}" />
<link rel="stylesheet" href="{{ asset('public/css/mobile/mobile-home.css') }}">
<link rel="stylesheet" href="{{ asset('public/css/mobile/mobile-term.css') }}">
<link rel="stylesheet" href="{{ asset('public/css/mobile/mobile-about.css') }}">
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
		<div class="row15">
			<div class="post">
				<div class="post-name">
					<h1>Phòng khám Chuyên Khoa Nam Khang</h1>
				</div>
				<div class="post-description">
					<p>
						Phòng khám Chuyên Khoa Nam Khang là mô hình khám và điều trị các bệnh nam khoa chuyên nghiệp cho nam giới được sở y tế phê duyệt thành lập. Là cơ sở khám chữa bệnh nam khoa chất lượng cao, phục vụ tốt cho sức khỏe của nam giới.
					</p>
				</div>
				<div class="post-detail">
					<p>
						<img src="{{ asset('public/images/mobile2/about-1.png') }}" class="center-block">
					</p>
					<h4>1：Phòng khám Chuyên Khoa Nam Khang  chuyên nam khoa, thành tựu của nam giới</h4>
					<p>
						Phòng khám sử dụng mô hình quản lí và phương châm kinh doanh của bệnh viện, tại đây có những trang thiết bị y tế hiện đại và đông đảo đội ngũ bác sỹ với nhiều năm kinh nghiệm, luôn mang thái độ học hỏi và thành tín để làm tôn chỉ hành y, toàn tâm toàn lực cống hiến cho nghiên cứu lâm sang các bệnh nam khoa.
					</p>
					<div class="text-center">
						<p>
							<img src="{{ asset('public/images/mobile2/about-2.png') }}" class="center-block img-responsive">
						</p>
						<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="text-center">
							<i></i>
							Vì sức khỏe của bạn, có vấn đề thắc mắc hãy click tư vấn trực tuyến
						</a>
					</div>
					<h4>2：[Đầy đủ các khoa] 6 hạng mục lớn thăm khám điều trị nam khoa</h4>
					<div>
						<ul>
							<li>
								<h5>1：Chuyên khoa tuyến tiền liệt: </h5>
								<p>
									Viêm tuyến tiền liệt, tăng sinh tuyến tiền liệt, phì đại tuyến tiền liệt, u nang tuyến tiền liệt…
								</p>
							</li>
							<li>
								<h5>2：Chuyên khoa rối loạn chức năng sinh dục: </h5>
								<p>
									Liệt dương, xuất tinh sớm, rối loạn cương dương, giảm ham muốn tình dục, rối loạn xuất tinh…
								</p>
							</li>
							<li>
								<h5>3：Chuyên khoa viêm nhiễm cơ qian sinh dục tiết niệu: </h5>
								<p>
									Viêm niệu đạo, viêm túi tinh, viêm bao quy đầu, viêm mào tinh hoàn…
								</p>
							</li>
							<li>
								<h5>4：Chuyên khoa chỉnh hình cơ quan sinh dục tiết niệu: </h5>
								<p>
									Hẹp bao quy đầu, dài bao quy đầu, giãn tĩnh mạch thừng tinh…
								</p>
							</li>
							<li>
								<h5>5：Chuyên khoa vô sinh nam: </h5>
								<p>
									Chứng vô tinh, chứng ít tinh trùng, chứng chết tinh trùng, tỷ lệ tinh trùng sống thấp....
								</p>
							</li>
							<li>
								<h5>6：Chuyên khoa bệnh xã hội nam khoa: </h5>
								<p>
									Sùi mào gà, giang mai, bệnh lậu, mụn rộp sinh dục…
								</p>
							</li>
						</ul>
						<div class="text-center">
							<p>
								<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><img src="{{ asset('public/images/mobile2/about-3.png') }}" class="center-block img-responsive"></a>
							</p>
							<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="text-center">
								<i></i>
								Đọc 10 phút không bằng tư vấn trực tiếp, bấm để tư vấn với bác sĩ
							</a>
						</div>
					</div>
					<h4>3：Vì chuyên tâm nên chuyên nghiệp</h4>
					<p>
						Nam khoa học là một trong những môn học độc lập mới thịnh hành trong mấy năm gần đây, trong tình trang đất nước phát triển còn tương đối chậm, nhưng vấn đề nam khoa lại không thể xem nhẹ, Phòng khám chuyên khoa nam khang là phòng khám nam khoa chuyên nghiệp hiện đại hóa được ra đời trong bối cảnh bệnh viện nam khoa chuyên nghiệp còn thiếu thốn, mà nhu cầu của gia đình và xã hội lại bức thiết, phòng khám chuyên bảo vệ sức khỏe hạnh phúc của nam giới, mở ra một trang mới cho việc khám chữa bệnh nam khoa ở Việt Nam
					</p>
					<div class="text-center">
						<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">
							<i></i>
							Click tìm hiểu phòng khám Nam Khang
						</a>
					</div>
					<h4>4：Vì dùng tâm nên an tâm</h4>
					<div>
						<ul>
							<li>
								<h5>Chúng tôi luôn đặt chất lượng dịch vụ lên hàng đầu</h5>
								<ul>
									<li>* Thực hiện “phòng khám không ngày nghỉ”, xây dựng “phòng truyền không khói thuốc”</li>
									<li>* Thực hiện “một bác sĩ một bệnh nhân” tôn trọng quyền riêng tư của bệnh nhân</li>
									<li>* Có y tá hướng dẫn, luôn niềm nở phục vụ trong cả quá trình khám</li>
									<li>* Để tiện cho bệnh nhân khám sau khi tan làm, mở dịch phục “khám ngoài giờ”</li>
								</ul>
							</li>
							<li>
								<h5>Chúng tôi luôn đặt chữ tín lên hàng đầu</h5>
								<ul>
									<li>* Chi phí niêm yết theo quy định, thu phí hợp lý rõ ràng, bệnh nhân yên tâm khám bệnh</li>
									<li>* Hoàn thiện hệ thống quản lý phòng khám, tránh tình trạng ăn bớt tiền thuốc, nhận phong bì</li>
								</ul>
							</li>
							<li>
								<h5>Chúng tôi luôn đặt an toàn lên hàng đầu</h5>
								<ul>
									<li>* Nghiêm túc thực hiện quy định nội bộ và quy trình khám chữa bệnh của phòng khám</li>
									<li>* Không ngừng nhập các kĩ thuật khám và điều trị, xây dựng phòng khám an toàn thân thiện toàn diện</li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="post-footer">
						<div><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><img src="{{ asset('public/images/mobile2/about-4.png') }}" class="center-block img-responsive"></a></div>
						<p>
							<span>Nhắc nhở: </span>
							Nếu muốn chữa khỏi bệnh, đầu tiên bệnh nhân cần xây dựng lòng tin có thể hồi phục, sau đó tích cực phối hợp với bác sĩ điều trị, nghiêm ngặt tuân theo yêu cầu của bác sĩ, có như vậy mới có thể hồi phục càng nhanh, bệnh nhân nếu như có gì bất thường thì cần phải đến bệnh viện kiểm tra thăm khám, vì bệnh tật sẽ không tự khỏi khi bạn kéo dài thời gian, nhưng chắc chắn do điều trị không kịp thời mà bệnh càng nặng lên, vì thế kịp thời đi khám, kiểm tra sớm, điều trị sớm mới là tốt.
						</p>
						<h4>Số điện thoại tư vấn : <a href="tel:18006181">1800-6181</a> - <a href="tel:043-9656999">043-9656999</a></h4>
					</div>
				</div>
			</div>
		</div>
		<div class="row11">
			<div class="dis-table width-100">
				<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="table-cell text-center">
					Bạn không tìm thấy đáp án?
				</a>
				<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="table-cell text-center">
					Chuyên gia tư vấn
				</a>
			</div>
		</div>
		<div class="row12">
			<div class="line1 flex align-items-center">Trang trước : <a href="{{ url('/dia-chi-phong-kham') }}">Địa chỉ phòng khám</a></div>
		</div>
		<div class="row13">
			<div class="comments">
				<div class="dis-table">
					<div class="table-cell">
						<h5>Bình luận của bệnh nhân</h5>
					</div>
					<div class="table-cell">
						<h5>/</h5>
					</div>
					<div class="table-cell">
						<h5>Comments</h5>
					</div>
				</div>
				<div class="dis-table table2">
					<div class="table-cell">
						<h5>Tổng điểm đánh giá : 5</h5>
					</div>
					<div class="table-cell">
						<h5>Dịch vụ : 5</h5>
					</div>
					<div class="table-cell">
						<h5>Môi trường : 5</h5>
					</div>
					<div class="table-cell">
						<h5>Hiệu quả : 5</h5>
					</div>
					<div class="table-cell">
						<h5><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Tôi muốn bình luận</a></h5>
					</div>
				</div>
				<div class="list-comments">
					<div class="comment">
						<h5><span>Người dùng tại Hà Nội</span>  <span>Điểm đánh giá 5 điểm</span></h5>
						<p class="text-justify">
							Cắt bao quy đầu mất khoảng hơn 10 phút, nhẹ nhàng đơn giản, cắt xong có thể về nhà, lễ tân của phòng khám rất tuyệt, luôn hướng dẫn tận nơi.
						</p>
					</div>
					<div class="comment">
						<h5><span>Người dùng tại Nghệ An</span>  <span>Điểm đánh giá 4 điểm</span></h5>
						<p class="text-justify">
							Bác sĩ rất chuyên nghiệp, dịch vụ cũng tương đối chu đáo, chi phí hợp lý, khám bệnh ở phòng khám này tôi rất yên tâm!
						</p>
					</div>
					<div class="comment">
						<h5><span>Người dùng tại Bắc Ninh</span>  <span>Điểm đánh giá 5 điểm</span></h5>
						<p class="text-justify">
							Cắt bao quy đầu ở Nam Khang rất tốt, cảm giác như việc cắt bao quy đầu rất đơn giản, cũng không mất nhiều tiền.
						</p>
					</div>
					<div class="comment">
						<h5><span>Người dùng tại Đà Nẵng</span>  <span>Điểm đánh giá 4 điểm</span></h5>
						<p class="text-justify">
							Thời gian gần đây tôi thường bị tiểu nhiều, tiểu rắt, tiểu buốt, tiểu đêm nhiều lần, sau khi đi tiểu hoặc đại tiện niệu đạo có chảy ra dịch màu trắng sữa. Tôi đã đi đến nhiều bệnh viện phòng khám mà không có khỏi, bạn bè khuyên tôi đến phòng khám Nam Khang Hà Nội xem thế nào. Sau khi tôi đặt mã số khám trên mạng, bác sĩ điều trị chính là bác sĩ Nguyễn, ông đã hỏi tường tận bệnh tình của tôi, sau khi làm xong kiểm tra đã giới thiệu tôi dùng kĩ thuật làm tan can thiệp tuyến tiền liệt, điều trị nhanh khỏi bệnh. Tôi nghĩ chỉ cần có thể chữa khỏi là được rồi, không ngờ hiệu quả điều trị lại tốt như thế.
						</p>
					</div>
					<div class="comment">
						<h5><span>Người dùng tại Hà Nội</span>  <span>Điểm đánh giá 5 điểm</span></h5>
						<p class="text-justify">
							Tôi bị đau tuyến tiền liệt nên đến Nam Khang khám, thái độ y tá bác sĩ của phòng khám rất tốt, có nhiều khác biệt so với phòng khám khác, rất chính quy.
						</p>
					</div>
					<div class="comment">
						<h5><span>Người dùng tại Hà Nội</span>  <span>Điểm đánh giá 5 điểm</span></h5>
						<p class="text-justify">
							Vì bị dài bao quy đầu nên mỗi lần sinh hoạt vợ chồng đều không hòa hợp, nên tôi quyết định đi cắt. Nhưng đến phòng khám Nam Khang, bác sĩ sau khi khám xong cho tôi có nói tình hình như này nếu muốn hoàn hảo hơn thì có thể lựa chọn kĩ thuật cắt vòng bao quy đầu xâm lấn tối thiểu Hàn Quốc. Bác sĩ đã trực tiếp làm thủ thuật cho tôi, sau thủ thuật bác sĩ Vương còn đặc biệt dặn dò tôi chăm sóc, kiêng kị những gì sau thủ thuật, rất tỉ mỉ. Hiện tại hết bao quy đầu rồi, sinh hoạt tình dục cũng vui vẻ hơn nhiều, tôi và bạn gái cảm thấy rất thỏa mãn.
						</p>
					</div>
					<div class="comment">
						<h5><span>Người dùng tại Hà Nội</span>  <span>Điểm đánh giá 5 điểm</span></h5>
						<p class="text-justify">
							Dương vật của tôi bị ngắn và nhỏ, nên sinh hoạt tình dục chịu nhiều ảnh hưởng, thời gian trước bạn bè đã giới thiệu tôi đến đây tiến hành thủ thuật, ban đầu tôi rất do dự, nghĩ rằng làm gì có khả năng đó? Sau đó thông qua tư vấn trực tuyến mới biết thủ thuật này hoàn toàn có thể thực hiện được, Nam Khang đã dùng kĩ thuật kéo dài dương vật định vị CF, có thể kéo dài hiệu quả dương vật 3-7cm, hơn nữa thông qua thủ thuật tinh tế của bác sĩ và sự chăm sóc tận tình của điều dưỡng, sau thủ thuật không có phản ứng phụ, thời gian hồi phục nhanh.
						</p>
					</div>
					<div class="comment">
						<h5><span>Người dùng tại Bắc Ninh</span>  <span>Điểm đánh giá 5 điểm</span></h5>
						<p class="text-justify">
							Điều trị ở phòng khám Nam Khang cuối cùng vợ tôi cũng có thai, điều này khiến gia đình tôi như được cứu vớt, cuối cùng cũng có thể cười vui vẻ. Vì tôi có chứng nhược tinh, vì thế vợ khó có thai, phòng khám đã sắp xếp điều trị cho tôi, thời gian đầu tôi cũng không có lòng tin, vì cũng không có triệu chứng nào rõ rệt, nhưng sau một khoảng thời gian, bác sĩ sau khi kiểm tra thông báo khả năng di chuyển của tinh trùng bình thường, có thể hi vọng có thai, tôi và vợ đã cố gắng trong thời gian dài, cuối cùng cũng có thai, thật vô cùng cảm ơn!
						</p>
					</div>
					<div class="comment">
						<h5><span>Người dùng tại Nha Trang</span>  <span>Điểm đánh giá 5 điểm</span></h5>
						<p class="text-justify">
							Tôi là bệnh nhân vô sinh đến từ Nha Trang, đã kết hôn nhiều năm, vợ không có thai được. Tôi đã đến phòng khám Nam Khang, sau khi điều trị 1 tuần và điều chỉnh sau điều trị, bệnh của tôi đã được chữa khỏi, bây giờ vợ tôi cũng đã có thai. Tôi viết thư cảm ơn này, cảm ơn các bác sĩ y tá phòng khám Nam Khang đã tận tình điều trị. Đặc biệt là bác sĩ điều trị chính của tôi rất kiên nhẫn, các y tá rất ân cần chăm sóc tôi. Không thể không nói rằng Phòng khám Nam Khang Hà Nội thực sự tốt, môi trường khám chữa bệnh, thái độ phục vụ, dịch vụ thu phí đều rất tốt.
						</p>
					</div>
					<div class="comment">
						<h5><span>Người dùng tại Lào Cai</span>  <span>Điểm đánh giá 5 điểm</span></h5>
						<p class="text-justify">
							Tôi là bệnh nhân bị viêm tuyến tiền liệt nặng, liên tục bị tiểu nhiều tiểu rắt tiểu buốt và không đi tiểu được. Điều trị tại phòng khám Nam Khang Hà Nội khiến tôi vô cùng thỏa mãn, đã qua mấy tháng rồi, bệnh viêm tuyến tiền liệt của tôi đã được chữa khỏi triệt để, đi tiểu được, các triệu chứng tiểu nhiều tiểu rắt cũng hết, gia đình rất vui mừng. Tôi đặc biệt cảm ơn quý bệnh viện đã điều trị cho tôi, cảm ơn bác sĩ làm thủ thuật cho tôi, nếu như không gặp các bác sĩ có thể tôi vẫn phải đang chịu đựng căn bệnh viêm tuyến tiền liệt. Ngoài ra các y tá điều dưỡng của phòng khám chăm sóc tôi rất tận tình, vô cùng cảm ơn!
						</p>
					</div>
					<div class="comment">
						<h5><span>Người dùng tại Thái Bình</span>  <span>Điểm đánh giá 4 điểm</span></h5>
						<p class="text-justify">
							Tôi bị bao quy đầu bao phủ hết đầu dương vật, nhìn bên ngoài rất xấu, hơn nữa sẽ thấy dương vật rất bé, khi đi tắm sauna với bạn bè thường bị mọi người trêu chọc, nên muốn đến bệnh viện cắt đi. Mất không đến 15 phút tại Phòng khám Nam Khang Hà Nội thủ thuật đã xong, nhẹ nhàng hơn tôi nghĩ, bây giờ đang trong thời gian hồi phục, nhưng nhìn bên ngoài đã thấy đẹp hơn nhiều, nhìn có vẻ to hơn trước.
						</p>
					</div>
					<div class="comment">
						<h5><span>Người dùng tại Thái Nguyên</span>  <span>Điểm đánh giá 5 điểm</span></h5>
						<p class="text-justify">
							Tuy có bị dài bao quy đầu nhưng sợ thủ thuật, vì thế nên tôi luôn chú ý vệ sinh, nhưng thời gian trước đột nhiên dương vật và quy đầu bị ngứa. Nhìn là biết bị mắc bệnh nên tôi đến phòng khám kiểm tra thì quả nhiên tôi mắc viêm quy đầu và bao quy đầu, tuy thường xuyên vệ sinh sạch sẽ nhưng vẫn bị mắc. Bác sĩ khuyên tôi nên cắt bao quy đầu, có như vậy mới điều trị khỏi viêm quy đầu và bao quy đầu đồng thời cũng có thể phòng bệnh, nhưng tôi phải cắt bao quy đầu trước mới có thể tiến hành điều trị chứng viêm. Bây giờ cơ bản tôi đã khỏi bệnh, sau khi cắt bao quy đầu không ngờ dương vật cũng nhìn đẹp hơn.
						</p>
					</div>
					<div class="comment">
						<h5><span>Người dùng tại Vĩnh Phúc</span>  <span>Điểm đánh giá 4 điểm</span></h5>
						<p class="text-justify">
							Trước khi đến phòng khám tôi luôn lo sẽ bị lừa, đến phòng khám tìm hiểu mới biết chi phí ở đây rất rõ ràng. Nửa tiếng làm thủ thuật và truyền dịch đã giải quyết được dài bao quy đầu, thật tài tình.
						</p>
					</div>
					<div class="comment">
						<h5><span>Người dùng tại Hà Nội</span>  <span>Điểm đánh giá 4 điểm</span></h5>
						<p class="text-justify">
							Không cẩn thận tôi đã mắc mụn rộp, đúng là tự làm tự chịu, đến Nam Khang bác sĩ không hỏi đến chuyện riêng tư mà kiểm tra kĩ càng tình trạng bệnh của tôi, sắp xếp cho tôi điều trị, nói rằng có phương pháp điều trị khoa học nhất hiện nay. Thực ra tôi cũng không hiểu nhưng với thái độ chuyên nghiệp cẩn thận của bác sĩ nên tôi rất yên tâm, bây giờ mụn rộp đã được chữa khỏi.
						</p>
					</div>
					<div class="comment">
						<h5><span>Người dùng tại Hà Nội</span>  <span>Điểm đánh giá 4 điểm</span></h5>
						<p class="text-justify">
							Thời gian trước dương vật của tôi không cương cứng được, sinh hoạt tình dục luôn không thỏa mãn. Nghe bạn bè giới thiệu nói bác sĩ phòng khám Nam Khang có cách chữa liệt dương rất hiệu quả, tôi nghĩ thử xem thế nào nên đã đặt mã số khám qua mạng. Bác sĩ đã khám cho tôi, sau 3 ngày nhập viện bác sĩ đã sắp xếp cho tôi làm thủ thuật, thủ thuật vô cùng thành công, hồi phục nhanh, hiệu quả rõ ràng, dương vật có thể cương cứng rõ rệt. Bây giờ sinh hoạt tình dục rất hòa hợp, gia đình càng hạnh phúc.
						</p>
					</div>
					<div class="comment">
						<h5><span>Người dùng tại Hà Nội</span>  <span>Điểm đánh giá 4 điểm</span></h5>
						<p class="text-justify">
							Cạnh cơ quan sinh dục của tôi có xuất hiện nốt ban đỏ làm tôi sợ hãi, cũng không dám sinh hoạt tình dục với vợ, một mặt sợ cô ấy nhìn thấy, một mặt sợ bệnh này sẽ lây truyền sang cho cô ấy. Sau khi một mình đến bệnh viện, bác sĩ đã tiến hành thăm khám bí mật cho tôi, nói chung là cũng đỡ ngại, sau đó tôi điều trị rất thuận lợi. Sau một tháng đã hồi phục bình thường, lần trước có gọi điện thoại hỏi bác sĩ bây giờ tôi có thể quan hệ với vợ không, bác sĩ đã cho tôi câu trả lời dứt khoát là có thể được. Bây giờ tôi mới cảm thấy không có bệnh thật tốt.
						</p>
					</div>
					<div class="comment">
						<h5><span>Người dùng tại Hà Nội</span>  <span>Điểm đánh giá 4 điểm</span></h5>
						<p class="text-justify">
							Tuy có thể quan hệ, nhưng khi cương cứng lại không đủ độ, sợ tiếp tục như thế sẽ bị liệt dương nên tôi đã đến Nam Khang để điều trị. Bác sĩ Nguyễn đã khám bệnh cho tôi, bác sĩ rất tốt, không kiêu ngạo như các bác sĩ khác, hơn nữa bác sĩ đã giúp tôi điều trị khỏi căn bệnh cương dương không đủ cương cứng.
						</p>
					</div>
					<div class="comment">
						<h5><span>Người dùng tại Thái Bình</span>  <span>Điểm đánh giá 5 điểm</span></h5>
						<p class="text-justify">
							Tôi chữa xuất tinh sớm ở Nam Khang, kinh nghiệm của bác sĩ phong phú, khi điều trị tôi cảm thấy vô cùng chuyên nghiệp, thật may là điều trị 1 bác sĩ 1 bệnh nhân, nếu không thì thật là ngại. Bây giờ xuất tinh sớm đã chữa khỏi, bác sĩ còn gọi điện thoại đến hỏi thăm, thật vô cùng trách nhiệm, nên tôi mới vào đây viết bình luận, thật vô cùng cảm ơn.
						</p>
					</div>
					<div class="comment">
						<h5><span>Người dùng tại Thái Bình</span>  <span>Điểm đánh giá 5 điểm</span></h5>
						<p class="text-justify">
							Tôi đến Nam Khang điều trị liệt dương, cũng may là khám riêng tư, thái độ của bác sĩ rất chuyên nghiệp, vì thế nên không cảm thấy xấu hổ, bác sĩ rất tận tụy, dù là chữa bệnh nhưng rất tôn trọng bệnh nhân, thật là tốt.
						</p>
					</div>
					<div class="comment">
						<h5><span>Người dùng tại TP.HCM</span>  <span>Điểm đánh giá 5 điểm</span></h5>
						<p class="text-justify">
							Tôi đặt hẹn bác sĩ Nguyễn trên mạng, sau khi đến phòng khám, bác sĩ đã giải thích cho tôi các vấn đề về xuất tinh sớm với thái độ rất ân cần giúp tôi loại bỏ tâm lý e ngại khi đến thăm khám, sau đó tôi đã làm thủ thuật. Sau thủ thuật bác sĩ Nguyễn đã nhẫn nại dặn dò tôi những điều cần chú ý sau thủ thuật. Hiện tại tôi đã khỏi hoàn toàn bệnh, sinh hoạt tình dục rất vui vẻ, sau đó bác sĩ còn gọi điện hỏi thăm tôi tình hình sau thủ thuật, tôi thấy bác sĩ là người rất có trách nhiệm, là một bác sĩ tốt.
						</p>
					</div>
					<div class="comment">
						<h5><span>Người dùng tại Hà Nội</span>  <span>Điểm đánh giá 5 điểm</span></h5>
						<p class="text-justify">
							Tôi là một bệnh nhân bị rối loạn chức năng sinh dục, mỗi lần quan hệ tình dục đều không hòa hợp, tôi đã đi nhiều bệnh viện chữa trị nhưng không có hiệu quả, cho đến khi tôi đến Phòng khám Nam Khang Hà Nội mới triệt để kết thúc những dày vò của bệnh tật. Thật sự cảm ơn phòng khám chuyên khoa Nam Khang Hà Nội đã chữa tận gốc bệnh rối loạn chức năng sinh dục của tôi, giúp tôi có được cuộc sống mới, khiến tôi tràn đầy hi vọng xây dựng cuộc sống mới.
						</p>
					</div>
					<div class="comment">
						<h5><span>Người dùng tại Hà Nội</span>  <span>Điểm đánh giá 5 điểm</span></h5>
						<p class="text-justify">
							Điều trị ở Nam Khang rất tiện, sau khi hẹn lịch trên mạng, đến phòng khám thì có người hướng dẫn khám bệnh, thái độ của bác sĩ y tá rất tốt, gần gũi. Tuy phòng khám hơi khó tìm nhưng chữa khỏi bệnh thì cũng không thành vấn đề.
						</p>
					</div>
					<div class="comment">
						<h5><span>Người dùng tại Thái Bình</span>  <span>Điểm đánh giá 5 điểm</span></h5>
						<p class="text-justify">
							Kinh nghiệm của bác sĩ rất phong phú. Rất tốt. Bác sĩ còn tỉ mỉ giải thích cho tôi rất nhiều.
						</p>
					</div>
					<div class="comment">
						<h5><span>Người dùng tại Hải Phòng</span>  <span>Điểm đánh giá 5 điểm</span></h5>
						<p class="text-justify">
							Vốn rất ngại đi khám những căn bệnh khó nói, sau khi đến phòng khám từ đầu đến cuối được khám riêng với bác sĩ, bác sĩ vô cùng gần gũi, tôn trọng riêng tư của người bệnh.
						</p>
					</div>
					<div class="comment">
						<h5><span>Người dùng tại Hải Phòng</span>  <span>Điểm đánh giá 5 điểm</span></h5>
						<p class="text-justify">
							Điều dưỡng rất nhiệt tình, chuyên nghiệp, nên tâm trạng lo lắng trước khi khám đã giảm bớt rất nhiều, bác sĩ cũng tương đối trách nhiệm, chi phí cũng không nhiều.
						</p>
					</div>
					<div class="comment">
						<h5><span>Người dùng tại Hà Nội</span>  <span>Điểm đánh giá 5 điểm</span></h5>
						<p class="text-justify">
							Môi trường ở đây rất tốt, cũng rất sạch sẽ, thái độ phục vụ cũng tốt, người đến khám tương đối đông, cũng may là tôi đã đặt lịch hẹn trước trên mạng.
						</p>
					</div>
					<div class="comment">
						<h5><span>Người dùng tại Hải Phòng</span>  <span>Điểm đánh giá 5 điểm</span></h5>
						<p class="text-justify">
							Bác sĩ phòng khám thấy rất tốt, bác sĩ ở đây không tùy tiện kê thuốc, bác sĩ hỏi ở nhà có những loại thuốc nào rồi mới kê thuốc, rất tốt.
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row14">
			<!-- <a href="tel:18006181"><img src="{{ asset('public/images/mobile/post-1.png') }}" alt="18006181" class="img-responsive"></a> -->
			<div class="panel">
				<div class="panel-heading text-center text-uppercase flex align-items-center justify-content-center">
					Một cuộc điện thoại, là có thể hỏi bệnh tình, hẹn khám mọi lúc mọi nơi
				</div>
				<div class="panel-body">
					<a href="tel:18006181" class="flex flex1 align-items-center justify-content-around">
						<div class="flex1col2 flex align-items-center justify-content-center">
							<img src="{{ asset('public/images/mobile/post-3.png') }}" alt="" class="img-responsive center-block">
							<span>1800 6181</span>
						</div>
						<div class="flex1col3 text-center flex justify-content-center align-items-center">
							Click gọi <i class="bg2"></i>
						</div>
					</a>
					<div class="flex flex2 align-items-center justify-content-center text-center text-uppercase">
						Mời các chuyên gia giỏi đến thăm khám
					</div>
				</div>
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