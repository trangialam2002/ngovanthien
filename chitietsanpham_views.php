<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>frontend/chitietsanpham.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/font-awesome/css/font-awesome.min.css">
	<script src="<?php echo base_url();?>/jquery/jquery-3.6.0.js"></script>
</head>

<body>
<?php include "timkiemsanpham_views.php" ?>

	<!-- code header -->
	<div class="header">
		<div class="logo"></div>
		<div class="menu">

		<ul>
			
			<li><a href="<?php echo base_url().'index.php/sanpham'; ?>">TRANG CHỦ</a></li>
			<li><a href="<?php echo base_url(); ?>index.php/sanpham/gioithieu">GIỚI THIỆU</a></li>
			<li><a >CỬA HÀNG<span class="fa fa-chevron-down rotate"></span></a>
					
				<ul>
					<?php foreach ($tatca[2]['danhmuc'] as $value){ ?>
						
					<li><a href="<?php echo base_url().'index.php/sanpham/sanphamtheoiddanhmuc/'.$value['id'] ?>">
						<?php echo $value['categoryName']; ?>
					</a></li>	
					<?php } ?>

				</ul>
			</li>
			<li><a>SẢN PHẨM</a></li>
			<li><a href="<?php echo base_url().'index.php/sanpham/blog';?>">KIẾN THỨC</a></li>
		</ul>
		</div>
		<div class="contact">
			<ul>
				<li><a ><span class="fa fa-search"></span></a></li>
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

<!-- code chi tiết sản phẩm -->
<?php foreach ($tatca[0]['chitiet'] as $value){ ?>
	
	<div class="top">
		<div class="img">
			<img src="<?php echo base_url().'image/'.$value['img']; ?>" alt="">
		</div>
		<div class="chitiet">
			<small><?php echo $value['categoryName']; ?></small>
			<h2><?php echo $value['nameProduct']; ?></h2>
			<span><?php echo $value['price'].' VND'; ?></span>
			<p><?php echo $value['subcontent']; ?></p>
			<div class="giohang">
				
				<input type="hidden" name="idsanpham"value="<?php echo $value['idproduct'] ?>"class="idsp">
				<input type="number"step="1" min="1" max="9999"value="1"name="soluong"class="count">
                <input type="button" name="submit"value="THÊM VÀO GIỎ"class="submit">
			</div>
		</div>
	</div>
	<div class="bottom">
		<h5>MÔ TẢ</h5>
		<p><?php echo $value['content']; ?></p>
	</div>
<?php } ?>
<!-- code các sản phẩm tương tự trong cùng danh mục -->
<div class="sanphamkhac">
	<h1>SẢN PHẨM TƯƠNG TỰ</h1>
	<div class="slides">
		<?php foreach ($tatca[1]['dulieukhac'] as $value){ ?>
			
		<div class="slide">
		<a href="<?php echo base_url().'index.php/sanpham/chitietsanpham/'.$value['idproduct'] ?>"><img src="<?php echo base_url().'image/'.$value['img'] ?>" alt=""></a>
		<a href="<?php echo base_url().'index.php/sanpham/chitietsanpham/'.$value['idproduct'] ?>"><p><?php echo $value['nameProduct'] ?></p></a>
		<span><?php echo $value['price'] ?></span>
		</div>
	
		<?php } ?>
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
	<script src="<?php echo base_url().'frontend/' ?>sanpham.js"></script>

</body>
</html>