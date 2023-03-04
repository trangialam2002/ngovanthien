<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>frontend/blog.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>frontend/1.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
	<!-- giao diện tìm kiếm sản phẩm -->
	<?php include "timkiemsanpham_views.php" ?>
	<!-- code header -->
	<div class="header">
		<div class="logo"></div>
		<div class="menu">

		<ul>
			<li><a href="<?php echo base_url(); ?>index.php/sanpham">TRANG CHỦ</a></li>
			<li><a href="<?php echo base_url(); ?>index.php/sanpham/gioithieu">GIỚI THIỆU</a></li>
			<li><a>CỬA HÀNG<span class="fa fa-chevron-down rotate"></span></a>
				<ul>
					<?php 
					foreach ($data[0]["danhmuc"] as $key => $value) {
					 ?>
					<li><a href="<?php echo base_url(); ?>index.php/sanpham/sanphamtheoiddanhmuc/<?php echo $value["id"]; ?>">
						<?php echo $value["categoryName"]; ?>
					</a></li>	
				<?php } ?>
					
				</ul>
			</li>
			<li><a href="<?php echo base_url().'index.php/sanpham/tatcasanpham';?>">SẢN PHẨM</a></li>
			<li><a class='color1'>KIẾN THỨC</a></li>
		</ul>
		</div>
		<div class="contact">
			<ul>
				<li><a><span class="fa fa-search"></span></a></li>
				<li><a href="<?php echo base_url().'index.php/loginCustomer/hoso' ?>"><span class="fa fa-user"></span></a></li>
				<li><a href="<?php echo base_url().'index.php/sanpham/laydulieugiohang' ?>"><span class="fa fa-cart-plus"></span></a></li>
				<?php if((isset($_SESSION['taikhoankhachhang']))&&(isset($_SESSION['matkhaukhachhang']))){ ?>
				<li><a href="<?php echo base_url().'index.php/loginCustomer/logout' ?>">
					<span class="fa fa-sign-out"></span>
				</a></li>
					<?php }
					else{ ?>
					<li><a href="<?php echo base_url().'index.php/loginCustomer' ?>">
					<span class="fa fa-sign-in"></span>
					</a></li>
					<?php } ?>
			</ul>
		</div>
	</div>


		<!-- code dữ liệu blog -->
	 	<div class="color">
	 		<div class="tintuc">
	 		<div class="box_left">
				<?php foreach ($data[1]["blog"] as $value) {?>
	 		<div class="box">
	 			<a href="<?php echo base_url()."index.php/sanpham/chitietblog/".$value["idblog"] ?>">
					 <img src="<?php echo base_url();?>image/<?php echo $value["img"]; ?>" alt=""></a>
	 			<div class="n001">
	 			 <p><?php echo $value["title"] ?></p>
	 			 <span>Ngày đăng:<?php echo $value["datecreate"] ?></span>
	 			 <small><?php echo $value["subcontent"] ?></small>
	 			 <a href="<?php echo base_url()."index.php/sanpham/chitietblog/".$value["idblog"] ?>">
					  Xem thêm <span class="fa fa-long-arrow-right"></span></a>
	 			</div>
	 		</div>
				<?php } ?>
	 		
	 	</div>

	 	<div class="box_right">
	 		<h3>DANH MỤC BLOG</h3>

	 		<div class="khoi10">
	 		<h5>BÀI VIẾT MỚI NHẤT</h5>
				 <?php foreach ($data[1]["blog"] as $value) {?>
	 		<div class="layout">
	 			<a href="<?php echo base_url()."index.php/sanpham/chitietblog/".$value["idblog"] ?>">
					 <img src="<?php echo base_url();?>image/<?php echo $value["img"]; ?>" alt=""></a>
	 			<div class="noidung1">
	 				<p><?php echo $value["title"] ?></p>
	 				<span><span class="fa fa-clock-o"></span><?php echo $value["datecreate"] ?></span>
	 			</div>
	 		</div>
					<?php } ?>
	 		
	 		</div>
	 	</div>
	 	</div>
	 	</div>

	<!-- code footer -->
	<div class="footer">
		<div class="box1">
			<img src="http://mauweb.monamedia.net/happytrade/wp-content/uploads/2019/05/mona.png" alt="">
			<span>319 C16 Lý Thường Kiệt, Phường 15, Quận 11, Tp.HCM</span>
			<span>demonhunterg@gmail.com</span>
		</div>
		<div class="box2">
			<h3>MENU</h3>
			<ul>
				<li><a href="">Trang chủ</a></li>
				<li><a href="">Giới thiệu</a></li>
				<li><a href="">Cửa hàng</a></li>
				<li><a href="">Kiến thức</a></li>
			</ul>

		</div>
		<div class="box3">
			<h3>SẢN PHẨM</h3>
			<ul>
				<li><a href="">Rau củ</a></li>
				<li><a href="">Trái cây</a></li>
				<li><a href="">Đồ uống</a></li>
				<li><a href="">Đồ khô</a></li>
			</ul>

		</div>
	</div>
	<div class="menu_footer">
		<div class="copyright-footer">
        © Bản quyền thuộc về. Thiết kế website <img src="https://mona-media.com/logo.png" style="width:20px;vertical-align:sub;"></div>
	</div>
	<script src="<?php echo base_url(); ?>frontend/1.js"></script>
	
</body>
</html>