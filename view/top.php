<?php 
require_once("model/database.php");
require_once("model/danhmuc.php");
require_once("model/tour.php");
require_once("model/giohang.php");


$dm = new DANHMUC();
$tt = new TOUR();
$tournoibat= $tt->laytournoibat();
$danhmuc = $dm->laydanhmuc(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>VIETRAVEL - Nhà tổ chức du lịch chuyên nghiệp</title>
  <link rel="icon" type="images/jpg" href="images/vtv.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
html{
	font-family:Consolas;
}
  h3{
    text-shadow: 2px 2px 2px silver;
	font-weight:bold;
	font-size:30px;
  }
  
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  footer {
      background-color: #000000;
      color: #f5f5f5;
      padding: 32px;
  }
  footer a:hover {
      color: #777;
      text-decoration: none;
  }  
  
  .navbar-inverse {
    background-color:#E3F2FD;
    margin-bottom:20px;
    height: 60px;
	font-size:15px;
	border:none;
	box-shadow: 0 0 8px 0 rgba(0,0,0,0.3);
}
.navbar-inverse .navbar-brand{
    color: #17255a;
	font-weight:bold;
	font-family:"Cooper Black";
}
.navbar-inverse .navbar-brand:hover{
	color:#EE1537;
}
.navbar-inverse .navbar-nav>li>a.nav-link {


}
.navbar-inverse .navbar-nav>li>a {
    color: #17255a;
	font-weight:bold;
    padding: 15px;
}
.navbar-inverse .navbar-nav>li>a:focus, .navbar-inverse .navbar-nav>li>a:hover {
	color: #D8315B;
	
}
.navbar-inverse .navbar-nav>.open>a, .navbar-inverse .navbar-nav>.open>a:focus, .navbar-inverse .navbar-nav>.open>a:hover{
	background-color:#A3CEF1;
	color:#fff;
	border-radius:5px 5px 0 0;
	transition: .3s ease;
}
.dropdown-menu>li>a{
	font-weight:bold;
	background-color:none;
	color:#14281D;
}
.dropdown-menu>li>a:hover{
	background-color:#A3CEF1;
	color:#17255a;
}


.btn-sub{
	padding-top:3px;
	height:25px;
	width:25px;
	font-size:12px; 
	border:solid 1px #6BA4FF;
	border-radius:3px;
	background-color:#6BA4FF; 
}
#srch{
	width:150px;
	height:25px;
	border-radius:3px;
}
  </style>
</head>

<body id="abc" data-spy="scroll" data-target=".navbar" data-offset="50" style="background-color: white;">



<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container" style="width:1500px; margin-left:15px; margin-right:200px;">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php" style="padding:10px;"><span><img src="images/vtv.png" width="40px" height="40px" style="border-radius:50%; "></span>VIETRAVEL</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar" >
      <ul class="nav navbar-nav">
         
        <li class="nav-item dropdown" >
          <a class="nav-link"  href="#" data-toggle="dropdown"><span><img src="images/dlich.png" width="28px" height="28px"></span>
            Du Lịch
          </a>
		 
          
          <ul class="dropdown-menu">
            <?php            
            foreach($danhmuc as $dm):
            ?>
            <li><a href="?action=xemnhom&madm=<?php echo $dm["id"]; ?>"><?php echo $dm["tendanhmuc"]; ?></a></li>
            <?php endforeach; ?>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" data-toggle="dropdown"><img src="images/tm.png" width="25px" height="25px">
            Tin Tức
          </a>
          
          <ul class="dropdown-menu">
            <?php            
            foreach($danhmuc as $dm):
            ?>
            <li><a href="?action=xemnhom&madm=<?php echo $dm["id"]; ?>"><?php echo $dm["tendanhmuc"]; ?></a></li>
            <?php endforeach; ?>
          </ul>
        </li>
    

        <li class="nav-item dropdown">
          <a class="nav-link"  href="#" data-toggle="dropdown"><span><img src="images/km.png" width="25px" height="25px"></span>
            Khuyến Mãi
          </a>
          
          <ul class="dropdown-menu">
            <?php            
            foreach($danhmuc as $dm):
            ?>
            <li><a href="?action=xemnhom&madm=<?php echo $dm["id"]; ?>"><?php echo $dm["tendanhmuc"]; ?></a></li>
            <?php endforeach; ?>
          </ul>
        </li>
        <li><a class="nav-link" href="?action=lienhe"><span class="glyphicon glyphicon-phone-alt"></span> Liên hệ</a></li>
		
      <ul class="nav navbar-nav navbar-right">
    <?php 
		if(!isset($_SESSION["khachhang"])){
		?>
		<li class="dropdown" style="width:158px;">
			 <a class="dropdown-toggle" data-toggle="dropdown" href="#">
				<span class="glyphicon glyphicon-user"></span> Tài khoản <span class="caret"></span>
			  </a>
			  <ul class="dropdown-menu dropdown-menu-right">
				<li><a class="dropdown-toggle" href="signup.php"><span class="glyphicon glyphicon-user"></span> Đăng ký</a></li>
				<li><a class="dropdown-toggle" href="?action=dangnhap"><span class="glyphicon glyphicon-user"></span> Đăng nhập</a></li>
			  </ul>	
		</li>
		<?php  
		}
		else{
		?>
			<li><a href="?action=xemthongtin&email=<?php echo  $_SESSION["khachhang"]["email"]?>">Chào <?php echo $_SESSION["khachhang"]["hoten"]; ?></a></li>
			<li><a href="?action=dangxuat">Thoát</a></li>
		<?php		
		}
		?>


        <li style="margin-top:13px;">
          <form class="d-flex" style="margin-left:10px;">
            <input type="hidden" name="action" value="timkiem"> 
            <input  id="srch" name="search" type="search" list="browsers" placeholder=" Tìm kiếm..." aria-label="Search" style="">
            <button class="btn-sub" type="submit" style=""><i class="fa fa-search" style="color:white;"></i></button>
            <datalist id="browsers">
              <option value=""></option>
              <?php 
              require_once("model/tour.php"); 
              $tts = new TOUR();
              $tours = $tts->laytttour();
              foreach($tours as $rows):
              ?>
              <option value="<?php echo $rows['tentour'] ?>"></option>
              <?php endforeach; ?>
              </datalist>
        
          </form>
        </li>       
      </ul>
      </ul>
    </div>
  </div>
</nav>

  <!-- Hộp tìm kiếm -->
    

<br>
