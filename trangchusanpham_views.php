<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>frontend/1.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>font-awesome/css/font-awesome.min.css">
	<script src="<?php echo base_url();?>/jquery/jquery-3.6.0.js"></script>
</head>
<body>
	
	<?php include "timkiemsanpham_views.php" ?>
	<!-- code header -->
	<div class="header">
		<div class="logo"></div>
		<div class="menu">

		<ul>
			<li><a class='color1'>TRANG CHỦ</a></li>
			<li><a href="<?php echo base_url(); ?>index.php/sanpham/gioithieu">GIỚI THIỆU</a></li>
			<li><a>CỬA HÀNG<span class="fa fa-chevron-down rotate"></span></a>
				<ul>
					<?php foreach ($dulieu[1]['danhmuc'] as $value){
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

	<!-- code slide  -->
	<div class="slides">
		<?php foreach ($dulieu[4]['slide'] as $value){ ?>
			
		<div class="slide"style="background-image: url('<?php echo base_url().'image/'.$value['backgroundimg'] ?>');">
			<h4><?php echo $value['h4'] ?></h4>
			<h2><?php echo $value['h2'] ?></h2>
			<p><?php echo $value['p'] ?></p>
			<a href="<?php echo base_url().'index.php/sanpham/tatcasanpham';?>">
            <span>mua ngay</span>
            </a>
		</div>
		<?php } ?>
		
		<div class="fa fa-angle-left"></div>
        <div class="fa fa-angle-right"></div>
	</div>
<!-- code 4 khối -->
<div class="group">
	<div class="item">
		<img src="http://mauweb.monamedia.net/vuonrau/wp-content/uploads/2019/05/banner-img2.png">
	</div>
	<div class="item">
		<img src="http://mauweb.monamedia.net/vuonrau/wp-content/uploads/2019/05/banner-img1.png">
	</div>
	<div class="item">
		<img src="http://mauweb.monamedia.net/happytrade/wp-content/uploads/2019/05/index_news_3.jpg">
	</div>
	<div class="item">
		<img src="http://mauweb.monamedia.net/happytrade/wp-content/uploads/2019/05/index_news_4.jpg">
	</div>
	
</div>

<!-- code sản phẩm mới nhất -->
<h1>Sản phẩm nổi bật</h1>
<div class="product moinhat">
	<ul>
		<li><a class="color">Mới nhất</a></li>
	</ul>
	<div class="listProduct">
		<?php foreach ($dulieu[0]['moinhat'] as $value){ ?>
			
		<div class="itemProduct">
			<a href="<?php echo base_url().'index.php/sanpham/chitietsanpham/'.$value['idproduct'] ?>"><img src="<?php echo base_url().'image/'.$value['img']; ?>" alt=""></a>
			<a href="<?php echo base_url().'index.php/sanpham/chitietsanpham/'.$value['idproduct'] ?>" class="nameProduct"><?php echo $value['nameProduct']; ?></a>
			<span><?php echo $value['price']; ?> VND</span>
		</div>
		<?php } ?>
	</div>
</div>

<div class="product moinhat">
	<ul>
		<li><a class="color">Giảm giá</a></li>
	</ul>
	<div class="listProduct">
		<?php foreach ($dulieu[2]['giamgia'] as $value){ ?>
			
		<div class="itemProduct">
			<a href="<?php echo base_url().'index.php/sanpham/chitietsanpham/'.$value['idproduct'] ?>"><img src="<?php echo base_url().'image/'.$value['img']; ?>" alt=""></a>
			<a href="<?php echo base_url().'index.php/sanpham/chitietsanpham/'.$value['idproduct'] ?>" class="nameProduct"><?php echo $value['nameProduct']; ?></a>
			<span><?php echo $value['price']; ?> VND</span>
		</div>
		<?php } ?>
	</div>
</div>

<div class="product moinhat">
	<ul>
		<li><a class="color">Bán chạy</a></li>
	</ul>
	<div class="listProduct">
		<?php foreach ($dulieu[3]['banchay'] as $value){ ?>
			
		<div class="itemProduct">
			<a href="<?php echo base_url().'index.php/sanpham/chitietsanpham/'.$value['idproduct'] ?>"><img src="<?php echo base_url().'image/'.$value['img']; ?>" alt=""></a>
			<a href="<?php echo base_url().'index.php/sanpham/chitietsanpham/'.$value['idproduct'] ?>" class="nameProduct"><?php echo $value['nameProduct']; ?></a>
			<span><?php echo $value['price']; ?> VND</span>
		</div>
		<?php } ?>
	</div>
</div>



<!-- code khuyến mãi -->
<div class="n1">
	<h1>Khuyến Mãi Trong Tuần</h1>
	<p>Cơ hội để gia đình bạn sở hữu những sản phẩm ưu đãi</p>
	<div class="n2">
	<span>0<strong>giờ</strong></span>
	<span>0<strong>phút</strong></span>
	<span>0<strong>giây</strong></span>
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
	<script>
		$(".slides .slide:first-of-type").addClass("action");
	</script>
</body>
</html>