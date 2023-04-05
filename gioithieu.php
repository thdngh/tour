<?php include("view/top.php"); ?>

<style>
* {
  box-sizing: border-box;
  font-family:"Consolas";
}

/* Header/logo Title */
.header {
  padding: 80px;
  text-align: center;
  background-image: url('images/hr.jpg');
  color: #fff;  
  font-weight:bold;
  text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;
}

/* Increase the font size of the heading */
.header h1 {
  font-size: 40px;
   font-weight:bold;
}
.header h2 {
   font-weight:bold;
}


/* Column container */
.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  -ms-flex: 33%; 
  flex: 33%;
  background-color: #EBF8FF;
  padding: 10px;
  margin-left:15px;
}

/* Main column */
.main {   
  -ms-flex: 40%; 
  flex: 40%;
  background-color: white;
  padding: 10px;
  text-align:justify;

}
.main h1{   
  margin:5px 0;
  height:45px;
  padding:5px;
  background-image:linear-gradient(to right, rgba(163,206,241,0.2), rgba(0,166,251,0.5), rgba(163,206,241,0.2) );
}
/* Fake image, just for this example */
.fakeimg {
  background-image: url('images/giaithuong1.jpg');
  background-repeat: no-repeat;
  width: 100%;
  height: 50%;
  padding: 50px;
}
.fakei {
  background-image: url('images/giaithuong2.jpg');
  background-repeat: no-repeat;
  width: 100%;
  height: 50%;
  padding: 50px;
}
.fakeim {
  background-image: url('images/giaithuong3.jpg');
  background-repeat: no-repeat;
  width: 100%;
  height: 50%;
  padding: 50px;
}
.fakeimge {
  background-image: url('images/A81.jpg');
  background-repeat: no-repeat;
  width: 100%;
  height: 50%;
  padding: 50px;
}
/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background-color: pink;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}
.col-sm-2 {
	padding:10px ;
}
.col-sm-2 img{
	height:50px;
}

.col-sm-10{
	padding:0 7px;
}
.col-sm-10 a{
	text-decoration:none;
	color:red;font-weight:bold;
}
h4{
	font-size:16px;
}
</style>
<div class="container" style="padding-left:0;">
	<div class="header">
	<img src="images/bvtv.png" width="150px" height="150px" style="margin-right:15px; ;"><h1>VIETRAVEL</h1>
	  <h2><p>Nhà tổ chức du lịch chuyên nghiệp</p><h2>
	</div>
	<div class="row">
	  <div class="side">
		<h2 style="font-weight:bold;font-size:28px;text-align:center;">VÌ SAO NÊN CHỌN <a Style="color:#0064B3; font-family:Cooper black;text-decoration:none;">VIETRAVEL</a> </h2>
		
		<div class="row" style="margin:10px 0;">
			<div class="col-sm-2">
				<img src="images/icon/5.png">
			</div>
			<div class="col-sm-10">
				<h4><a>Thương hiệu</a> uy tín</h4>
				<h4> với 27 năm phát triển bền vững</h4>
			</div>
		
		</div>
		<div class="row" style="margin:10px 0;">
			<div class="col-sm-2" >
				<img src="images/icon/1.png" >
			</div>
			<div class="col-sm-10">
				<h4><a>Quy trình chuyên môn hóa,</a> tiên phong</h4>
				<h4>  áp dụng công nghệ tiên tiến</h4>
			</div>
		</div>
		
		<div class="row" style="margin:10px 0;">
			<div class="col-sm-2" >
				<img src="images/icon/3.png" >
			</div>
			<div class="col-sm-10">
				<h4><a>Mạng lưới phân phối rộng khắp</a></h4>
				<h4> hỗ trợ nhanh chóng</h4>
			</div>
		</div>
		
		<div class="row" style="margin:10px 0;">
			<div class="col-sm-2" >
				<img src="images/icon/2.png" >
			</div>
			<div class="col-sm-10">
				<h4><a>Đội ngũ nhân sự trẻ và năng động,</a></h4>
				<h4> kinh nghiệm phục vụ thành công các chương trình lớn</h4>
			</div>
		</div>
		
		<div class="row" style="margin:10px 0;">
			<div class="col-sm-2" >
				<img src="images/icon/4.png" >
			</div>
			<div class="col-sm-10">
				<h4><a>Sản phẩm đa dạng,</a> luôn có giải pháp </h4>
				<h4>tốt nhất đáp ứng mọi nhu cầu khách hàng</h4>
			</div>
		</div>
		
		<div class="row" style="margin:10px 0;">
			<div class="col-sm-2" >
				<img src="images/icon/8.png" >
			</div>
			<div class="col-sm-10">
				<h4><a>Uy tín được khẳng định</a> bởi hơn 5000 khách</h4>
				<h4> doanh nghiệp tin tưởng sử dụng dịch vụ</h4>
			</div>
		</div>
		
		<div class="row" style="margin:10px 0;">
			<div class="col-sm-2">
				<img src="images/icon/9.png" >
			</div>
			<div class="col-sm-10">
				<h4><a>Hệ sinh thái du lịch khép kín,</a></h4>
				<h4> đảm bảo chất lượng phục vụ tốt nhất</h4>
			</div>
		</div>
		
		<div class="row" style="margin:10px 0;">
			<div class="col-sm-2" >
				<img src="images/icon/10.png" >
			</div>
			<div class="col-sm-10">
				<h4>Đội ngũ sự kiện luôn có<a> ý tưởng đột phá</a></h4>
				<h4> và cập nhật xu hướng mới</h4>
			</div>
		</div>
		
		<div class="row" style="margin:10px 0;">
			<div class="col-sm-2" >
				<img src="images/icon/11.png" >
			</div>
			<div class="col-sm-10">
				<h4><a>Cam kết chất lượng,</a> cảm xúc thăng hoa,</h4>
				<h4> gia tăng giá trị làm tiêu chí</h4>
			</div>
		</div>
		
		<h2 Style="text-shadow:2px 2px 2px silver;font-weight:bold;margin:5px 0;">DỊCH VỤ CỦA CHÚNG TÔI</h2>
		<h3 Style="color: red;margin:5px 0;">VIETRAVEL GIFT</h3>
		<h3 Style="color: blue;margin:5px 0;">Thẻ du lịch thông minh</h3>
		<h4>VIETRAVEL gift là sản phẩm nhằm đa dạng hóa sự lựa chọn của khách hàng</h4>
		<h4>VIETRAVEL gift mang đến cho khách hàng hơn cả món quà vật chất. Đó là những trãi nghiệm đọc đáo, 
			nhiều niềm vui và cảm xúc thăng hoa trong cuộc sống</h4>
		<h4>VIETRAVEL gift có thể sử dụng để đăng kí các dịch vụ của vietravel như:</h4>
		<div class="fakeim" style="height:330px; weight:850px;"></div>
		
	  </div>
	  <div class="main">
		<h2 style="font-weight:bold;">THÀNH TÍCH ĐẠT ĐƯỢC</h2>
		<h1 style="font-weight:bold;text-align:center;">GIẢI THƯỞNG QUỐC GIA</h1>
		<img src="images/gt1.jpg">
		<h1 style="font-weight:bold;text-align:center;">GIẢI THƯỞNG QUỐC TẾ</h1>
		<img src="images/gt2.jpg">
		<p style="line-height:1.25;font-size:18px;margin-top:10px;text-indent:20px;">Các giải thưởng quốc gia và quốc tế đạt được đã minh chứng cho những nổ lực không ngừng của Vietravel trong việc kiến tạo nên những giá trị mới cho khách hàng, thị trường và xã hội.
		   Đồng thời đưa ngành "Công nghiệp không khói" của Việt Nam phát triển mạnh mẽ, sánh vai cùng bạn bè quốc tế.</p>
		<h2 style="font-weight:bold;">KINH NGHIỆM VÀ THÀNH TỰU</h2>
		<p style="line-height:1.5;font-size:18px;text-indent:20px;">Là thương hiệu lữ hành uy tín, đẳng cấp khu vực, Vietravel luôn được Nhà nước, Chính phủ, 
		  các ban ngành đoàn thể lựa chọn là nhà cung cấp dịch vụ, phương tiện vận chuyển cho nhiều sự kiện mang tính quốc gia và quốc tế.
		  Ngoài ra, Vietravel còn phục vụ hơn 5.000 khách hàng doanh nghiệp với hơn 80.000 chương trình đã thực hiện,
		  mang đến cho khách hàng nhiều trải nghiệm thú vị sau mỗi chuyến đi.</p>
		<h1 style="font-weight:bold;text-align:center;">KHÁCH HÀNG THAM CHIẾU</h1>
		<img src="images/gt3.jpg" style="width:670px;">
	  </div>
	</div>
</div>


<?php include("view/bottom.php"); ?>