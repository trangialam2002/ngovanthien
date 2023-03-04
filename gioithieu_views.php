<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>frontend/gioithieu.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>font-awesome/css/font-awesome.min.css">
	<script src="<?php echo base_url();?>/jquery/jquery-3.6.0.js"></script>
</head>
<style type="text/css">
	.back {
    width: 100%;
    height: calc(100% - 330px);
    background-image: url(../../image/gioithieu.png);
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
}
.back1 {
    width: 100%;
    height: 70%;
    background: #d9c5c5c2;
    position: absolute;
    left: 0;
    bottom: 0;
    z-index: 1;
}
.k1 {
    width: 330px;
    height: 235px;
    font-size: 20px;
    font-family: segoe ui light;
    font-weight: bold;
    background: #ececec;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    border-radius: 30px;
    position: absolute;
    top: 20px;
    left: 70px;
    padding: 0px 10px;
}
.back1 .k1 b {
    color: #25691A;
}
.k1>p {
    font-size: 15px;
}
.k2 {
    width: 200px;
    height: 200px;
    background-image: url(../../image/back3.png);
    position: absolute;
    z-index: 2;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    background-size: cover;
}
.k3 {
    width: 130px;
    height: 130px;
    background-image: url(../../image/logo1.png);
    background-size: cover;
    position: absolute;
    right: 245px;
    top: -40px;
}
.k4 {
    width: 160px;
    height: 170px;
    background-image: url(../../image/bangkhen.png);
    position: absolute;
    right: 110px;
    bottom: 10px;
    background-size: contain;
    background-repeat: no-repeat;
}
.k5 {
    width: 285px;
    height: 2px;
    background: #25A910;
    position: absolute;
    left: 57%;
    top: 26%;
    transform: rotate(343deg);
}
</style>
<body>
	
	<?php include "timkiemsanpham_views.php" ?>
	<!-- code header -->
	<div class="header">
	<div class="logo"></div>
		<div class="menu">

		<ul>
			<li><a href="<?php echo base_url().'index.php/sanpham';?>">TRANG CHỦ</a></li>
			<li><a class='color1'>GIỚI THIỆU</a></li>
			<li><a>CỬA HÀNG<span class="fa fa-chevron-down rotate"></span></a>	
				<ul>
					<?php foreach ($danhmuc as $value){
						?>
					<li><a href="<?php echo base_url().'index.php/sanpham/sanphamtheoiddanhmuc/'.$value['id'] ?>">
						<?php echo $value['categoryName']; ?>
					</a></li>
					<?php } ?>
				</ul>
			</li>
			<li><a href="<?php echo base_url().'index.php/sanpham/tatcasanpham';?>">SẢN PHẨM</a></li>
			<li><a href="<?php echo base_url().'index.php/sanpham/blog';?>">KIẾN THỨC</a></li>
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

<!-- code nội dung -->
<div class="back">
	<div class="back1">
		<div class="k1">
				<b>ĐÔI NÉT VỀ CÔNG TY</b>
				<p>Trải qua hơn 10 năm hình thành và phát triển Công ty TNHH Thực Phẩm Sạch Thương Mại T&P (Fresh Foods) đã có những bước phát triển không ngừng trong việc cung cấp các sản phẩm thực phẩm sạch nhập khẩu đến tận tay người tiêu dùng với các nhóm sản phẩm chính:- Thịt bò Úc, Mỹ- Thịt cừu Úc- Cá hồi Nauy- Gia vị Hàn Quốc, Nhật Bản - Trái cây nhập khẩu</p>
		</div>
		<div class="k2">
			
		</div>
		<div class="k3">
			
		</div>
		<div class="k4">
			
		</div>
		<div class="k5"></div>
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
	<script src="<?php echo base_url();?>frontend/1.js"></script>
	
</body>
</html>