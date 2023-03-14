<?php include("view/top.php"); ?>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 40px;
  text-align: center;
  background-image: url('images/ns.jpg');
  background-repeat: no-repeat;
  background-size:cover;
  color: #69140E;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #EDADC7;
  text-align: center;
  cursor: pointer;
  width: 40%;
  margin-left:-5px;
}

.button:hover {
  background-color: #D199B6;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
.fa-snapchat-ghost {
  background: #fffc00;
  color: white;
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}
.fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}
}
.about-body{
  height:800px;
}
</style>

<div class="about-section">
  <h1>CREAM COSMETIC</h1>
  <p>CHUYÊN HÀNG AUTHENTIC</p>
  <a href="index.php" class="fa fa-home" style='font-size:35px; color:#69140E; width:10%; height:10%;'></a>
</div>
<div class="about-body">
  <div class="row">

    <div class="column">
      <div class="card">
        <img src="images/khang.jpg"alt="Khang" style=" margin-left: 10%; width:350px">
        <div class="container">
          <h2>THÁI HOÀNG KHANG</h2>
          <p class="title"><b>CEO & Founder</b></p>
          <p>zalo, call: 0369208649</p>
          <p>thaihoangkhang9572@gmail.com</p>
          <p><button class="button" ><a href="https://www.facebook.com/hoangkhang.thai.9026" target="_blank">Contact</a></button></p>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <img src="images/dnghi.jpg" alt="Mike" style="  margin-left: 17%; width:295px">
        <div class="container">
          <h2>Trịnh Hoàng Đông Nghi</h2>
          <p class="title"><b>Manager</b></p>
          <p>zalo, call: 0786156754</p>
          <p>anhgiaden910@gmail.com</p>
          <p><button class="button" ><a href="https://www.facebook.com/hnginx/" target="_blank">Contact</a></button></p>
        </div>
      </div>
    </div>
    
    <div class="column">
      <div class="card">
      <img src="images/duong.jpg" alt="Mike" style="  margin-left: 17%; width:310px">
        <div class="container">
          <h2>NGUYỄN PHAN HỒNG DƯƠNG</h2>
          <p class="title"><b>Employee</b></p>
          <p>zalo, call: 0982731502</p>
          <p>nphduong0602@gmail.com</p>
          <p><button class="button" ><a href="https://www.facebook.com/chomchom0601" target="_blank">Contact</a></button></p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include("view/bottom.php"); ?>
