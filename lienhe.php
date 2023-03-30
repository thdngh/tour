<?php include("view/top.php"); ?>

<style>
* {
  box-sizing: border-box;
}

/* Header/logo Title */
.header {
  padding: 80px;
  text-align: center;
  background-image: url('images/hr.jpg');
  color: Blue;
}

/* Increase the font size of the heading */
.header h1 {
  font-size: 40px;
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
  -ms-flex: 31%; /* IE10 */
  flex: 31%;
  background-color: #f1f1f1;
  padding: 20px;
}

/* Main column */
.main {   
  -ms-flex: 40%; /* IE10 */
  flex: 40%;
  background-color: white;
  padding: 20px;
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
</style>
<div class="container">
	<div class="header">
	<img src="images/vtv.png" width="150px" height="150px" style="border-radius:50%;"><h1>VIETRAVEL</h1>
	  <h2><p>Nhà tổ chức du lịch chuyên nghiệp</p><h2>
	</div>
	<div class="row">
	  <div class="side">
		<h4>VÌ SAO PHẢI CHỌN</h4>
		<h2 Style="color: blue;">VIETRAVEL:</h2>
		<div class="fakei" style="height:700px; weight:850px;"></div>
		<h3>DỊCH VỤ CỦA CHÚNG TÔI</h3>
		<h3 Style="color: red;">VIETRAVEL GIFT</h3>
		<h4 Style="color: blue;">Thẻ du lịch thông</h4>
		<h5>VIETRAVEL gift là sản phẩm nhằm đa dạng hóa sự lựa chọn của khách hàng</h5>
		<h5>VIETRAVEL gift mang đến cho khách hàng hơn cả món quà vật chất. Đó là những trãi nghiệm đọc đáo, 
			nhiều niềm vui và cảm xúc thăng hoa trong cuộc sống</h5>
		<h5>VIETRAVEL gift có thể sử dụng để đăng kí các dịch vụ của vietravel như:</h5>
		<div class="fakeim" style="height:700px; weight:850px;"></div>
		
	  </div>
	  <div class="main">
		<h2>THÀNH TÍCH ĐẠT ĐƯỢC</h2>
		<div class="fakeimg" style="height:650px; weight:350px;"></div>
		<p>Các giải thưởng quốc gia và quốc tế đạt được đã minh chứng cho những nổ lực không ngừng của Vietravel trong việc kiến tạo nên những giá trị mới cho khách hàng, thị trường và xã hội.
		   Đông thời đưa ngành "Công nghiệp không khói" của Việt Nam phát triển mạnh mẽ, sánh vai cùng bạn bè quốc tế.</p>
		<br>
		<h2>KINH NGHIỆM VÀ THÀNH TỰU</h2>
		<h5>Là thương hiệu lữ hành uy tín, đẳng cấp khu vực, Vietravel luôn được Nhà nước, Chính phủ, 
		  các ban ngành đoàn thể lựa chọn là nhà cung cấp dịch vụ, phương tiện vận chuyển cho nhiều sự kiện mang tính quốc gia và quốc tế.
		  Ngoài ra, Vietravel còn phục vụ hơn 5.000 khách hàng doanh nghiệp với hơn 80.000 chương trình đã thực hiện,
		  mang dến cho khách hàng nhiều trải nghiệm thú vị sau mỗi chuyến đi.</h5>
		<div class="fakeimge" style="height:650px; weight:400px;"></div>
	  </div>
	</div>
</div>


<?php include("view/bottom.php"); ?>