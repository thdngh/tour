<?php 
require_once("model/database.php");
require_once("model/danhmuc.php");
require_once("model/mathang.php");
require_once("model/giohang.php");


$dm = new DANHMUC();
$mh = new TTTOUR();
$danhmuc = $dm->laydanhmuc(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>VIETRAVEL - Nhà tổ chức du lịch chuyên nghi</title>
  <link rel="icon" type="images/jpg" href="images/vtv.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  h3{
    text-shadow: 2px 2px 2px silver;
  }
  .carousel-inner img {  
      width: 100%; /* Set width to 100% */
      margin: auto;
  }
  .carousel-caption h3 {
      color: #fff !important;
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
  .panel{
	  min-height:400px;
  }
  .panel-body{
	min-height:300px;

  }
  .navbar-inverse {
    background-color:#6699FF;
    margin-bottom:20px;
    height: 60px;

}
.navbar-inverse .navbar-brand{
    color: #f5e2c8;
}
.navbar-inverse .navbar-nav>li>a {
    color: #f5e2c8;
    padding: 22px
}
.navbar-inverse .navbar-nav>li>a:focus, .navbar-inverse .navbar-nav>li>a:hover {
	color: #fff;
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
      <a class="navbar-brand" href="index.php"><span><img src="images/vtv.png" width="40px" height="40px" style="border-radius:50%;"></span>VIETRAVEL</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar" >
      <ul class="nav navbar-nav">
         
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" data-toggle="dropdown"><span><img src="images/dlich.png" width="28px" height="28px"></span>
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
          <a class="nav-link" href="#" data-toggle="dropdown"><span><img src="images/mb.png" width="25px" height="25px"> </span>Vận Chuyển</a>
          
          <ul class="dropdown-menu">
            <?php            
            foreach($danhmuc as $dm):
            ?>
            <li><a href="?action=xemnhom&madm=<?php echo $dm["id"]; ?>"><?php echo $dm["tendanhmuc"]; ?></a></li>
            <?php endforeach; ?>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" data-toggle="dropdown"><img src="images/tm.png" width="25px" height="25px"></span>
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
          <a class="nav-link" href="#" data-toggle="dropdown"><span><img src="images/km.png" width="25px" height="25px"></span>
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
        <li><a href="lienhe.php"><span class="glyphicon glyphicon-phone-alt"></span> Liên hệ</a></li>
      <ul class="nav navbar-nav navbar-right">
    <?php 
		if(!isset($_SESSION["khachhang"])){
		?>
		<li><a href="?action=dangnhap"><span class="glyphicon glyphicon-lock"></span> Đăng nhập</a></li>
    <li><a href="admin/ktnguoidung/signin.php"><span class="	glyphicon glyphicon-edit"></span> Đăng Kí</a></li>
    <li><a href="admin/ktnguoidung/loginad.php"><span class="glyphicon glyphicon-eye-open"></span> Admin</a></li>
		<?php  
		}
		else{
		?>
			<li><a href="?action=xemthongtin&email=<?php echo  $_SESSION["khachhang"]["email"]?>">Chào <?php echo $_SESSION["khachhang"]["hoten"]; ?></a></li>
			<li><a href="?action=dangxuat">Thoát</a></li>
		<?php		
		}
		?>


        <li style="margin-top:18px;">
          <form class="d-flex" style="margin-left:10px;">
            <input type="hidden" name="action" value="timkiem"> 
            <input  name="search" type="search" list="browsers" placeholder="Tìm kiếm..." aria-label="Search" style="width:150px;">
            <button class="btn btn-outline-light btn-sm" type="submit" style="font-size:10px; border-radius:3px; "><i class="fa fa-search"></i></button>
            <datalist id="browsers">
              <option value=""></option>
              <?php 
              require_once("model/mathang.php"); 
              $mhs = new TTTOUR();
              $tttours = $mhs->laytttour();
              foreach($tttours as $rows):
              ?>
              <option value="<?php echo $rows['tentour'] ?>"></option>
              <?php endforeach; ?>
              </datalist>
        
          </form>
        </li>       
      </ul>
    </div>
  </div>
</nav>

  <!-- Hộp tìm kiếm -->
    

<br>
